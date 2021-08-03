<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Balance
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Balance")
 */
class Balance extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $this->setGetAllSettings($criteria);
        $this->getRequestBuilder()
            ->setPath("api/balances");

        return $this->send();
    }

    public function getById(string $id)
    {
        $this->setGetByIdSettings($id);
        $this->getRequestBuilder()
            ->setPath("api/balances");

        return $this->send();
    }
}