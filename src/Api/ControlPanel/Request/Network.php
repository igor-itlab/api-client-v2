<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Network
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Network")
 */
class Network extends ControlPanelRequest
{
    /**
     * @return mixed
     */
    public function getAll(string $language = "ru")
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/network?language=" . $language);

        return $this->send();
    }
}