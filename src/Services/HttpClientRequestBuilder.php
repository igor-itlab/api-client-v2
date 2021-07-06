<?php


namespace ApiClient\Services;


use ApiClient\RequestBuilder;
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
    public function send(): array
    {
        $response = $this->requestClient->request(
            $this->getMethod()->getValue(),
            $this->getUrl(),
            [
                'headers' => $this->getHeaders(),
                'body' => $this->getBody()
            ]
        );

        return $response->toArray($this->getResource()->getApiClient()->isThrowExceptions());

    }
}
