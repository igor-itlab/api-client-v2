<?php

namespace ApiClient\Api\ControlPanel\Mapper\Verification;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

class VerificationSchema extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Verification\VerificationSchema")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Verification\VerificationSchema")
     */
    public function getBySubName(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}