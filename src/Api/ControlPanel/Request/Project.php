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
        $this->setGetAllSettings($criteria);
        $this->getRequestBuilder()
            ->setPath("api/projects");

        return $this->send();
    }

    public function getById(string $id)
    {
        $this->setGetByIdSettings($id);
        $this->getRequestBuilder()
            ->setPath("api/projects");

        return $this->send();
    }

    public function create(array $body)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/projects")
            ->setBody($body);

        return $this->send();
    }
}