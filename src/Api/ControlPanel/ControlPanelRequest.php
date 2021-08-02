<?php


namespace ApiClient\Api\ControlPanel;

use ApiClient\Request;
use ApiClient\RequestBuilder;

/**
 * Class ControlPanelRequest
 * @package ApiClient\Api\ControlPanel
 */
class ControlPanelRequest extends Request
{
    public function createRequestBuilder(): RequestBuilder
    {
        return parent::createRequestBuilder()->setDomain("https://control-panel.dev.com");
    }

}
