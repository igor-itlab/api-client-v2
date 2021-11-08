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
class BaseFee extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->baseFee()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->baseFee()->getById('4d2de4e4-6645-4146-bd62-b1f1a1b475eb');
        dd($data);
    }

    public function testUpdate()
    {
        $body = [
            'min' => '5',
        ];

        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->baseFee()->update('4d2de4e1-6641-4146-bd62-b1f1a1b475eb', $body);
        dd($data);
    }
}