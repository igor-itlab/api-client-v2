<?php


namespace ApiClient;

/**
 * Class Request
 * @package ApiClient
 */
abstract class Request
{
    /**
     * @var ApiResource
     */
    protected ApiResource $resource;

    /**
     * Request constructor.
     * @param ApiResource $resource
     */
    public function __construct(ApiResource $resource)
    {
        $this->resource = $resource;
    }

    /**
     * @return RequestBuilder
     */
    public function getRequestBuilder(): RequestBuilder
    {
        return $this->resource->getRequestBuilder();
    }

    /**
     * @param RequestBuilder $requestBuilder
     */
    public function setRequestBuilder(RequestBuilder $requestBuilder): void
    {
        $this->resource->setRequestBuilder($requestBuilder);
    }

    /**
     * @return mixed
     */
    public function send()
    {
        return $this->resource->send();
    }
}
