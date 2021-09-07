<?php

namespace ApiClient\Api\ControlPanel\Mapper\Fee;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class DefaultFee
 * @package ApiClient\Api\ControlPanel\Mapper\Fee
 */
class DefaultFee extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Fee\DefaultFee")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Fee\DefaultFee")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}