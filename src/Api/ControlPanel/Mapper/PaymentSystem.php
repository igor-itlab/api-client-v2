<?php

namespace ApiClient\Api\ControlPanel\Mapper;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class PaymentSystem
 * @package ApiClient\Api\ControlPanel\Mapper;
 */
class PaymentSystem extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\PaymentSystem\PaymentSystem")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\PaymentSystem\PaymentSystem")
     */
    public function getBySubName(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}