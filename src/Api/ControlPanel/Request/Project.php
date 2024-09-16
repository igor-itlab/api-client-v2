<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Project
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Project")
 */
class Project extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/projects");

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
            ->setPath("api/projects/$id");

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
            ->setPath("api/projects")
            ->setBody($body);

        return $this->send();
    }

    /**
     * @return mixed
     */
    public function report(array $criteria = null)
    {
        $requestBuilder = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/project-report");

        if ($criteria) {
            $requestBuilder
                ->setQueryParams($criteria);
        }

        return $this->send();
    }

}