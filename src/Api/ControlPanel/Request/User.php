<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;
/**
 * Class Service
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
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/users");
        if ($criteria) {
            foreach ($criteria as $key => $value)
            $this->getRequestBuilder()
                ->addQueryParam($key, $value);
        }

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id)
    {
        PrivateAuth::doAuth($this->getRequestBuilder());
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/users")
            ->addQueryParam("id", $id);

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
            ->setPath("api/users/" . $id)
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