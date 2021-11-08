<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Project
 * @package ApiClient\Tests
 */
class Project extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->project()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->project()->getById('20268202-aa27-45d7-9999-e15aaa6aaafe');
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            'name' => uniqid('test proj '),
            'user' => '3fc4262b-636c-4725-8569-9699999999a7',
        ];

        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->project()->create($body);
        dd($data);
    }
}