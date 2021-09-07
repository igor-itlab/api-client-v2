<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\Api\ControlPanel\Response\Transaction\Transaction;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Payout
 * @package ApiClient\Tests
 */
class Payout extends TestCase
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
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->payout()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource('qCCikc-9e-satjfSR3Yxl_96IGzxTTVvdEkzc8KzVoM',
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->payout()->getById('b7cbcbc6-55af-43cc-a243-40a119f61467');
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            "returnUrl" => "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "paymentSystem" => "VISA",
            "amount" => "20",
            "currency" => "UAH",
            "referenceId" => "test api client 6",
            "callBackUrl" => "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "connection" => "1df629f8-1684-4ab6-ac9a-bd41e2fc3656",
            "attributes" => [
                [
                    "attribute" => 2,
                    "value" => "test",
                ],
            ],
        ];

        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource('qCCikc-9e-satjfSR3Yxl_96IGzxTTVvdEkzc8KzVoM',
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->payout()->create(
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