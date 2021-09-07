<?php

namespace ApiClient\Api\ControlPanel\Mapper\Fee;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class BaseFee
 * @package ApiClient\Api\ControlPanel\Mapper\Fee
 */
class BaseFee extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Fee\BaseFee")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Fee\BaseFee")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Fee\BaseFee")
     */
    public function update(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}