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
class Payout extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->payout()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->payout()->getById('b7cbcbc6-55af-43cc-a243-40a119f61467');
        dd($data);
    }

    public function testCreate()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->payout()->create(
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