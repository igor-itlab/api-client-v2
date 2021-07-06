<?php


namespace ApiClient\Api\ControlPanel;


use ApiClient\Api\ControlPanel\Request\Service;
use ApiClient\ApiResource;

/**
 * Class ControlPanelResource
 * @package ApiClient\Api\ControlPanel
 */
class ControlPanelResource extends ApiResource
{
    public function service(): Service
    {
        return new Service($this);
    }
}
