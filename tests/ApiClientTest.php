<?php


namespace ApiClient\Tests;


use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use PHPUnit\Framework\TestCase;

/**
 * Class ApiClientTest
 * @package ApiClient\Tests
 */
class ApiClientTest extends TestCase
{

    public function testApiClientCall()
    {
        $apiClient = new ApiClient();
        $date = $apiClient->attachedResource(new ControlPanelResource())->service()->getAll();
    }
}
