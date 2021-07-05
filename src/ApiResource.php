<?php


namespace ApiClient;


abstract class ApiResource
{
    protected ApiClient $apiClient;

    protected RequestBuilder $requestBuilder;

    /**
     * ApiResource constructor.
     * @param RequestBuilder $requestBuilder
     */
    public function __construct(RequestBuilder $requestBuilder)
    {
        $this->requestBuilder = $requestBuilder;
    }

    /**
     * @param ApiClient $apiClient
     */
    public function setApiClient(ApiClient $apiClient): void
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @return ApiClient
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * @return RequestBuilder
     */
    public function getRequestBuilder(): RequestBuilder
    {
        return $this->requestBuilder;
    }

    /**
     * @return mixed
     */
    final public function send()
    {
        return $this->apiClient->send();
    }
}
