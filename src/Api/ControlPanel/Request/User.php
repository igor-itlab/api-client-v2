<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;
/**
 * Class User
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\User")
 */
class User extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $this->setGetAllSettings($criteria);
        $this->getRequestBuilder()
            ->setPath("api/users");

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id)
    {
        $this->setGetByIdSettings($id);
        $this->getRequestBuilder()
            ->setPath("api/users/$id");

        return $this->send();
    }

    /**
     * @param string $id
     * @param array $body
     * @return mixed
     */
    public function update(string $id, array $body)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::PUT())
            ->setPath("api/users/$id")
            ->setBody($body);

        return $this->send();
    }

    /**
     * @param array $body
     * @return mixed
     */
    public function create(array $body)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/users")
            ->setBody($body);

        return $this->send();
    }
}