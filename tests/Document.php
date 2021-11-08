<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Document
 * @package ApiClient\Tests
 */
class Document extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->document()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->document()->getById('4d2de4e4-6741-4146-bd62-b1f1a1b476eb');
        dd($data);
    }

    public function testCreate()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->document()->create('KYC(Card)', [['attribute' => 4, 'value' => 'test']], 'c5c6c068-ff55-11eb-a37a-0242ac160008', 'https://control-panel.dev.com/api/docs');
        dd($data);
    }
}