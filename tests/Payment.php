<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\Api\ControlPanel\Response\Transaction\Transaction;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Payment
 * @package ApiClient\Tests
 */
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
        $data = $this->apiClient->attachedResource(new ControlPanelResource('qCCikc-9e-satjfSR3Yxl_96IGzxTTVvdEkzc8KzVoM',
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->payment()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource('qCCikc-9e-satjfSR3Yxl_96IGzxTTVvdEkzc8KzVoM',
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->payment()->getById('455c5dcf-2888-48c7-bb06-7b0c89b47fb1');
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            "returnUrl" => "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "paymentSystem" => "VISA",
            "amount" => "20",
            "currency" => "UAH",
            "referenceId" => "test api client 3",
            "callBackUrl" => "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "connection" => "1df629f8-1684-4ab6-ac9a-bd41e2fc3656",
            "signature" => "string",
        ];

        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource('qCCikc-9e-satjfSR3Yxl_96IGzxTTVvdEkzc8KzVoM',
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->payment()->create(
            "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "VISA",
            "20",
            "UAH",
            "test api client 66",
            "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "1df629f8-1684-4ab6-ac9a-bd41e2fc3656",
            [
                [
                    "attribute" => 2,
                    "value" => "test",
                ],
            ]
        );
        dd($data);
    }
}