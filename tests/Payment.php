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
class Payment extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->payment()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->payment()->getById('455c5dcf-2888-48c7-bb06-7b0c89b47fb1');
        dd($data);
    }

    public function testCreate()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->payment()->create(
            "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "VISA",
            "20",
            "UAH",
            uniqid('test api client '),
            "https://api-platform.com/docs/core/content-negotiation/#configuring-formats-globally",
            "1df629f8-1684-4ab6-ac9a-bd41e2fc3656",
            [
                [
                    "attribute" => 2,
                    "value"     => "test",
                ],
            ]
        );
        dd($data);
    }
}