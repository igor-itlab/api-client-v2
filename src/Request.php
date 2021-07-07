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
     * @return RequestBuilder
     */
    public function getRequestBuilder(): RequestBuilder
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
     * @return RequestBuilder
     */
    public function createRequestBuilder(): RequestBuilder
    {
        return new HttpClientRequestBuilder();
    }
}
