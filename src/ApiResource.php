<?php


namespace ApiClient;


abstract class ApiResource
{
    protected ApiClient $apiClient;

    protected RequestBuilder $requestBuilder;

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
     * @param RequestBuilder $requestBuilder
     */
    public function setRequestBuilder(RequestBuilder $requestBuilder): void
    {
        $this->requestBuilder = $requestBuilder;
    }

    /**
     * @return mixed
     */
    public function send()
    {
        return $this->apiClient->send($this->getRequestBuilder());
    }
}
