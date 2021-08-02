<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class User
 * @package ApiClient\Tests
 */
class User extends TestCase
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
         * @var User $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->user()->getAll(['createDate[lte]' => 1595585684])->first();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var User $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->user()->getById('d037c71d-941b-4c78-8fd9-ffe46354fce7')->first();
        dd($data);
    }

    public function testUpdate()
    {
        $body = [
            'firstname' => uniqid()
        ];

        $data = $this->apiClient->attachedResource(new ControlPanelResource())->user()->update('daeb3f30-ef8a-11eb-b17b-0242ac160008', $body)->first();
        dd($data);
    }

    public function testCreate()
    {
        $email = uniqid()."@example.com";
        $body = [
            "email" => $email,
            "password" => "string",
            "firstname" => "string",
            "lastname" => "string",
        ];

        /**
         * @var User $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->user()->create($body)->first();
        dd($data);
    }
}