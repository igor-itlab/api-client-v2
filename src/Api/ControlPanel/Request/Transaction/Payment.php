<?php

namespace ApiClient\Api\ControlPanel\Request\Transaction;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Currency
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Transaction\Payment")
 */
class Payment extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/payments");

        if ($criteria) {
            $rb
                ->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id)
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/payments/$id");

        return $this->send();
    }

    /**
     * @param string $returnUrl
     * @param string $paymentSystem
     * @param string $amount
     * @param string $currency
     * @param string $referenceId
     * @param string $callBackUrl
     * @param string $connection
     * @param array $attributes
     * @return mixed
     */
    public function create(string $returnUrl, string $paymentSystem, string $amount, string $currency, string $referenceId, string $callBackUrl, string $connection, array $attributes = [])
    {
        $body = [
            "returnUrl" => $returnUrl,
            "paymentSystem" => $paymentSystem,
            "amount" => $amount,
            "currency" => $currency,
            "referenceId" => $referenceId,
            "callBackUrl" => $callBackUrl,
            "connection" => $connection
        ];

        if(!empty($attributes)) {
            $body['attributes'] =  $attributes;
        }

        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/payouts")
            ->setBody($body)
            ->addHeader('Signature', hash_hmac('sha256', base64_encode(json_encode($body)), $this->resource->getSecret()));

        return $this->send();
    }
}