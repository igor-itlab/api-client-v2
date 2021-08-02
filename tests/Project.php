<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use PHPUnit\Framework\TestCase;

class Project extends TestCase
{
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
         * @var Service $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->getAll()->first();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var Service $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->getById('19b0c556-c4d8-42a1-bfe8-e7fe55032655')->first();
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            'name' => 'test project',
            'user' => [
                'id' => 'daeb3f30-ef8a-11eb-b17b-0242ac160008',
            ],
        ];
        /**
         * @var Service $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->create($body)->first();
        dd($data);
    }
}