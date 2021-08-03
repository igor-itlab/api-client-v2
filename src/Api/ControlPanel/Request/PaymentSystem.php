<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Service
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\PaymentSystem")
 */
class PaymentSystem extends ControlPanelRequest
{
    /**
     * @param int|null $page
     * @return mixed
     */
    public function getAll(int $page = null)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/payment_systems");
        if ($page) {
            $this->getRequestBuilder()
                ->addQueryParam("page", $page);
        }

        return $this->send();
    }

    /**
     * @param string $subName
     * @return mixed
     */
    public function getBySubName(string $subName)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/payment_systems/$subName")
        ;

        return $this->send();
    }
}