<?php


namespace ApiClient\Api\ControlPanel\Request;


use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Service
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Service")
 */
class Service extends ControlPanelRequest
{
    /**
     * @param string|null $name
     * @return mixed
     */
    public function getAll(string $name = null)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/private/services");
        if ($name) {
            $this->getRequestBuilder()
                ->addQueryParam("name", $name);
        }

        return $this->send();
    }

}
