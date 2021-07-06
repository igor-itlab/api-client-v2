<?php


namespace ApiClient\Api\ControlPanel;


use ApiClient\ApiResource;
use ApiClient\Request;
use ApiClient\Services\HttpClientRequestBuilder;

class ControlPanelRequest extends Request
{
    public function __construct(ApiResource $resource)
    {
        parent::__construct($resource);
        $this->setRequestBuilder(new HttpClientRequestBuilder());
    }

}
