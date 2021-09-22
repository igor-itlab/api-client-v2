<?php

namespace ApiClient\Api\ControlPanel\Request\Service;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Service
 * @package ApiClient\Api\ControlPanel\Request\Service
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Service\Service")
 */
class Service extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/services");

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
            ->setPath("api/services/$id");

        return $this->send();
    }
}
