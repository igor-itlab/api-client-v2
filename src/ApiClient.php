<?php


namespace ApiClient;


class ApiClient
{
    protected ApiResource $resource;

    protected bool $throwExceptions = true;

    public function attachedResource(ApiResource $apiResource): ApiResource
    {
        $this->resource = $apiResource;
        $apiResource->setApiClient($this);

        return $this->resource;
    }

    /**
     * @param bool $throw
     * @return mixed
     */
    public function send(bool $throw = true)
    {
        $this->throwExceptions = $throw;

        $response = $this->resource->getRequestBuilder()->build()->send();

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
