<?php


namespace ApiClient\Api\ControlPanel;

use ApiClient\ApiResource;
use ApiClient\Request;
use ApiClient\RequestBuilder;
use ApiClient\Security\SecurityManager;
use ApiClient\Services\Method;

/**
 * Class ControlPanelRequest
 * @package ApiClient\Api\ControlPanel
 */
class ControlPanelRequest extends Request
{
    /**
     * @var SecurityManager
     */
    protected SecurityManager $securityManager;

    /**
     * @param ApiResource $resource
     */
    public function __construct(ApiResource $resource)
    {
        $this->securityManager = new SecurityManager();
        parent::__construct($resource);
    }

    /**
     * @return RequestBuilder
     */
    public function createRequestBuilder(): RequestBuilder
    {

        return parent::createRequestBuilder()
            ->setDomain("https://cp.exsoft.io")
            ->addHeader(
                "Accept",
                "application/json"
            )
            ->addHeader(
                "Content-Type",
                "application/json"
            )
            ->addHeader(
                "Authorization",
                'JWS-AUTH-TOKEN '.$this->securityManager->getJwtToken($this->resource->getProjectId(),
                    $this->resource->getSecret())
            );
    }
}
