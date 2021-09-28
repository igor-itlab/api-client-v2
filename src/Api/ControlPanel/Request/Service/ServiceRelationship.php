<?php

namespace ApiClient\Api\ControlPanel\Request\Service;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class ServiceRelationship
 * @package ApiClient\Api\ControlPanel\Request\Service
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Service\ServiceRelationship")
 */
class ServiceRelationship extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/service_relationships");

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
            ->setPath("api/service_relationships/$id");

        return $this->send();
    }
}