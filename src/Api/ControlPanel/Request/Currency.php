<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Currency
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Currency")
 */
class Currency extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/currencies");

        if ($criteria) {
            $rb
                ->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $asset
     * @return mixed
     */
    public function getByAsset(string $asset)
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/currencies")
            ->addQueryParam("asset", $asset);

        return $this->send();
    }

    /**
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/currencies")
            ->setBody($body);

        return $this->send();
    }
}