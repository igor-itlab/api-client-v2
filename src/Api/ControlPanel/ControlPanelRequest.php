<?php


namespace ApiClient\Api\ControlPanel;


use ApiClient\ApiResource;
use ApiClient\Request;
use ApiClient\Services\HttpClientRequestBuilder;

/**
 * Class ControlPanelRequest
 * @package ApiClient\Api\ControlPanel
 */
class ControlPanelRequest extends Request
{
    /**
     * ControlPanelRequest constructor.
     * @param ApiResource $resource
     */
    public function __construct(ApiResource $resource)
    {
        parent::__construct($resource);
        $this->setRequestBuilder((new HttpClientRequestBuilder())->setResource($resource));
    }

}
