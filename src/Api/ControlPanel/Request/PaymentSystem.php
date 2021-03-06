<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Currency
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\PaymentSystem")
 */
class PaymentSystem extends ControlPanelRequest
{
    /**
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/payment-systems");

        if ($criteria) {
            $rb
                ->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $subName
     * @return mixed
     */
    public function getBySubName(string $subName)
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/payment-systems/$subName")
        ;

        return $this->send();
    }
}