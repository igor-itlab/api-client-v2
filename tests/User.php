<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class User
 * @package ApiClient\Tests
 */
class User extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->user()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->user()->getById('daeb3f30-ef8a-11eb-b17b-0242ac160008');
        dd($data);
    }

    public function testUpdate()
    {
        $body = [
            'firstname' => uniqid(),
        ];

        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->user()->update('3fc4262b-636c-4725-8569-9699bf1f23a7', $body);
        dd($data);
    }

    public function testCreate()
    {
        $email = uniqid() . "@example.com";
        $body = [
            "email"     => $email,
            "password"  => "string",
            "firstname" => "string",
            "lastname"  => "string",
        ];

        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->user()->create($body);
        dd($data);
    }
}