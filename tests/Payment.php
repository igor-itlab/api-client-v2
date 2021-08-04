<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\Api\ControlPanel\Response\Transaction\Transaction;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

class Payment extends TestCase
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
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->payment()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var Transaction $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->payment()->getById('a71d2167-8057-47ee-a0ff-82e769e6608d')->first();
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            "returnUrl" => "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "paymentSystem" => "VISA",
            "amount" => "20",
            "currency" => "UAH",
            "referenceId" => "fv8n9gk7j9ygdh89h57k8=ght6hhm;f33",
            "callBackUrl" => "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "connection" => "1df629f8-1684-4ab6-ac9a-bd41e2fc3656",
            "attributes" => [],
            "signature" => "string",
        ];

        /**
         * @var Transaction $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->payment()->create($body)->first();
        dd($data);
    }
}