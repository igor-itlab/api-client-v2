<?php


namespace ApiClient;

/**
 * Class ApiResource
 * @package ApiClient
 */
abstract class ApiResource
{
    /**
     * @var ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * @var RequestBuilder
     */
    protected RequestBuilder $requestBuilder;

    /**
     * @var Request
     */
    protected Request $currentRequest;

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
    public function attachedRequestBuilder(RequestBuilder $requestBuilder): void
    {
        $this->requestBuilder = $requestBuilder;
        $requestBuilder->setResource($this);
    }

    public function attachedRequest(Request $request): void
    {
        $this->currentRequest = $request;
    }

    /**
     * @return Request
     */
    public function getCurrentRequest(): Request
    {
        return $this->currentRequest;
    }

    /**
     * @return mixed
     */
    public function send()
    {
        return $this->apiClient->send($this->getRequestBuilder());
    }
}
