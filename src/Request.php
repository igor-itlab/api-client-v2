<?php


namespace ApiClient;

use ApiClient\Services\HttpClientRequestBuilder;

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
        $this->resource->attachedRequestBuilder($this->createRequestBuilder());
        $this->resource->attachedRequest($this);
    }

    /**
     * @return RequestBuilderInterface
     */
    public function getRequestBuilder(): RequestBuilderInterface
    {
        return $this->resource->getRequestBuilder();
    }

    /**
     * @return mixed
     */
    public function send()
    {
        return $this->resource->send();
    }

    /**
     * @return RequestBuilderInterface
     */
    public function createRequestBuilder(): RequestBuilderInterface
    {
        return new HttpClientRequestBuilder();
    }
}
