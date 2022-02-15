<?php

namespace ApiClient\Api\ControlPanel\Request\Fee;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class RangeFee
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Fee\RangeFee")
 */
class RangeFee extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/range-fees");

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
            ->setPath("api/range-fees/$id");

        return $this->send();
    }
}