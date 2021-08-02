<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Service
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
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/projects");
        if ($criteria) {
            foreach ($criteria as $key => $value) {
                $this->getRequestBuilder()
                    ->addQueryParam($key, $value);
            }
        }

        return $this->send();
    }

    public function getById(string $id)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/projects")
            ->addQueryParam("id", $id);

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