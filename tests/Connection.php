<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Connection
 * @package ApiClient\Tests
 */
class Connection extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->connection()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->connection()->getById('dc61e552-019e-11ec-af72-0242ac160008');
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            'service' => '4d2de4e2-6641-4146-bd62-b1f1a1b475eb',
            'project' => '20268202-aa27-45d7-9dac-e15aaa6871fe',
            "connectionFields" => [
                "string",
            ],
        ];

        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->connection()->create($body);
        dd($data);
    }
}