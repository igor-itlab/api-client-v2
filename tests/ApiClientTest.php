<?php

namespace ApiClient\Tests;

use ApiClient\ApiClient;
use PHPUnit\Framework\TestCase;

class ApiClientTest extends TestCase
{
    /*
     * Change this fields to test
     */
    const SECRET = 'Project secret key';
    const PROJECT_ID = 'Project ID';

    /**
     * @var object|null
     */
    protected ?object $apiClient;

    /**
     * @param string|null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $test = new ApiClientKernel('test', true);

        $test->boot();
        $container = $test->getContainer();
        $this->apiClient = $container->get('api_client.client');

        $this->assertInstanceOf(ApiClient::class, $this->apiClient);
    }
}