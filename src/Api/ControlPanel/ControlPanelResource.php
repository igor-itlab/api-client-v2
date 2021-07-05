<?php


namespace ApiClient\Api\ControlPanel;


use ApiClient\ApiResource;
use ApiClient\RequestBuilder;
use ApiClient\Services\HttpClientRequestBuilder;

class ControlPanelResource extends ApiResource
{
    /**
     * ControlPanelResource constructor.
     */
    public function __construct()
    {
        parent::__construct(new HttpClientRequestBuilder());
    }

}
