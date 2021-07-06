<?php


namespace ApiClient;


use ApiClient\Api\ControlPanel\ControlPanelResource;

/**
 * Class ApiClient
 * @package ApiClient
 */
class ApiClient
{
    /**
     * @var ApiResource
     */
    protected ApiResource $resource;

    /**
     * @var bool
     */
    protected bool $throwExceptions = true;

    /**
     * @param ApiResource $apiResource
     * @return ApiResource|ControlPanelResource
     */
    public function attachedResource(ApiResource $apiResource): ApiResource
    {
        $this->resource = $apiResource;
        $apiResource->setApiClient($this);

        return $this->resource;
    }

    /**
     * @param RequestBuilder $requestBuilder
     * @param bool $throw
     * @return mixed
     */
    public function send(RequestBuilder $requestBuilder, bool $throw = true)
    {
        $this->throwExceptions = $throw;

        $response = $requestBuilder->build()->send();

        return $response;
    }

    /**
     * @return bool
     */
    public function isThrowExceptions(): bool
    {
        return $this->throwExceptions;
    }
}
