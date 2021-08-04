<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class BaseFee
 * @package ApiClient\Tests
 */
class Fee extends TestCase
{
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

    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->fee()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var \ApiClient\Api\ControlPanel\Response\Fee\Fee $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->fee()->getById('4d2de4e1-6641-4146-bd62-b1f1a1b475eb')->first();
        dd($data);
    }
}