<?php


namespace ApiClient\Services;


use ApiClient\RequestBuilder;
use ApiClient\Response;
use Symfony\Component\HttpClient\NativeHttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Throwable;

/**
 * Class HttpClientRequestBuilder
 * @package ApiClient\Services
 */
class HttpClientRequestBuilder extends RequestBuilder
{
    /**
     * HttpClientRequestBuilder constructor.
     */
    public function __construct()
    {
        $this->requestClient = new NativeHttpClient();
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function send(): Response
    {
        $this->prepareRequest();

        $options = [
            $this->makeHeaders() => $this->getHeaders(),
            "verify_peer" => false,
            "verify_host" => false
        ];

        if (count($this->getBody())) {
            $options += [$this->makeBody() => $this->getBody()];
        }

        $response = $this->requestClient->request(
            $this->getMethod()->getValue(),
            $this->getUrl(),
            $options
        );

        $responseRawData = $response->getContent(false);

        try {
            $responseData = $response->toArray(false);
        } catch (Throwable $exception) {

            $responseData = [];

            $content = $response->getContent(false);

            if ($this->isHTML($content)) {
                $responseData = $this->conevertHTMLToObject($content);
                return new Response($response->getStatusCode(), $responseData, $this->resource, $responseRawData);
            }

            parse_str(str_replace("\n", "", $content), $parsedContent);

            if (is_array($parsedContent)) {
                $responseData = $parsedContent;
            }

        }

        return new Response($response->getStatusCode(), $responseData, $this->resource, $responseRawData);
    }

    /**
     * @return string
     */
    public function makeBody(): string
    {
        return 'json';
    }


    /**
     * @return string
     */
    public function makeHeaders(): string
    {
        return 'headers';
    }


    /**
     * @param $string
     * @return bool
     */
    public function isHTML($string): bool
    {
        return $string != strip_tags($string) ? true : false;
    }

    /**
     * @param string $html
     * @return array
     */
    public function conevertHTMLToObject(string $html)
    {
        try {
            $dom = new \DOMDocument();
            $dom->loadHTML($html);

            return $this->convertElementToObject($dom->documentElement);
        } catch (Throwable $exception) {
            return [$html];
        }
    }

    /**
     * @param $element
     * @return array
     */
    public function convertElementToObject($element)
    {
        $obj = ["tag" => "body"];

        foreach ($element->attributes as $attribute) {
            $obj[$attribute->name] = $attribute->value;
        }

        foreach ($element->childNodes as $subElement) {
            if ($subElement->nodeType == XML_TEXT_NODE) {
                $obj["html"] = $subElement->wholeText;
            } else {
                $obj["children"][] = $this->convertElementToObject($subElement);
            }
        }

        return $obj;
    }
}
