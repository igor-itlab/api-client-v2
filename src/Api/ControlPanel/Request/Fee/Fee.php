<?php

namespace ApiClient\Api\ControlPanel\Request\Fee;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;

/**
 * Class Fee
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Fee\Fee")
 */
class Fee extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $this->setGetAllSettings($criteria);
        $this->getRequestBuilder()
            ->setPath("api/fees");

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
            ->setPath("api/fees");

        return $this->send();
    }
}