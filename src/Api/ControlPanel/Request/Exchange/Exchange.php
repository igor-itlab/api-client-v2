<?php

namespace ApiClient\Api\ControlPanel\Request\Exchange;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Exchange
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Exchange\Exchange")
 */
class Exchange extends ControlPanelRequest
{

    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $requestBuilder = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/exchanges");

        if ($criteria) {
            $requestBuilder
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
            ->setPath("api/exchanges/$id");

        return $this->send();
    }

    /**
     * @param string $connection
     * @param string $inAmount
     * @param string $inCurrency
     * @param string $outCurrency
     * @param string $inService
     * @param string $outService
     * @param string|null $callBackUrl
     * @return mixed
     */
    public function create(
        string $connection,
        string $inAmount,
        string $inCurrency,
        string $outCurrency,
        string $inService,
        string $outService,
        string $callBackUrl
    )
    {
        $body = [
            'connection'  => $connection,
            'callBackUrl' => $callBackUrl,
            'inAmount'    => $inAmount,
            'inCurrency'  => $inCurrency,
            'outCurrency' => $outCurrency,
            'inService'   => $inService,
            'outService'  => $outService
        ];

        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/exchanges")
            ->setBody($body);

        return $this->send();
    }

}