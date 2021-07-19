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
     * @var RequestBuilderInterface
     */
    protected RequestBuilderInterface $requestBuilder;

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
     * @return RequestBuilderInterface
     */
    public function getRequestBuilder(): RequestBuilderInterface
    {
        return $this->requestBuilder;
    }

    /**
     * @param RequestBuilderInterface $requestBuilder
     */
    public function attachedRequestBuilder(RequestBuilderInterface $requestBuilder): void
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
