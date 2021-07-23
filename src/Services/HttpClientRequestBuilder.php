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
        $response = $this->requestClient->request(
            $this->getMethod()->getValue(),
            $this->getUrl(),
            [
                $this->makeHeaders() => $this->getHeaders(),
                $this->makeBody() => $this->getBody()
            ]
        );

        return new Response($response->getStatusCode(), $response->toArray(false), $this->resource);
    }

    /**
     * @return string
     */
    public function makeBody(): string
    {
        return 'body';
    }

    /**
     * @return string
     */
    public function makeHeaders(): string
    {
        return 'headers';
    }

}
