<?php

namespace ApiClient\Api\ControlPanel\Mapper\Transaction;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class Payment
 * @package ApiClient\Api\ControlPanel\Mapper\Transaction;
 */
class Payment extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Transaction\Transaction")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Transaction\Transaction")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Transaction\Transaction")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}