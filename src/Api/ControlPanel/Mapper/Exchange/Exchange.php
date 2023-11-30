<?php

namespace ApiClient\Api\ControlPanel\Mapper\Exchange;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class Exchange
 * @package ApiClient\Api\ControlPanel\Mapper\Exchange;
 */
class Exchange extends Mapper
{

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Exchange\Exchange")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Exchange\Exchange")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Exchange\Exchange")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }

}