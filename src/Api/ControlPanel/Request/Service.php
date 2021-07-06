<?php


namespace ApiClient\Api\ControlPanel\Request;


use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\Request;
use ApiClient\Services\Method;

class Service extends ControlPanelRequest
{
    public function getAll(string $name = null)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/public/services");
        if ($name) {
            $this->getRequestBuilder()
                ->addQueryParam("name", $name);
        }

        return $this->send();
    }

}
