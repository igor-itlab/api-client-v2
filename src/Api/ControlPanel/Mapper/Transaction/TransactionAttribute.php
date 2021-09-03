<?php

namespace ApiClient\Api\ControlPanel\Mapper\Transaction;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

class TransactionAttribute extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Transaction\TransactionAttribute")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Transaction\TransactionAttribute")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}