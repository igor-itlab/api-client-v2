<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\Api\ControlPanel\Response\Verification\VerificationSchema;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class Document
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Document")
 */
class Document extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/documents");

        if ($criteria) {
            $rb
                ->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function getById(string $id)
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/documents/$id");

        return $this->send();
    }

    /**
     * @param string $schemaSubName
     * @param array $attributes
     * @param string $connection
     * @param string|null $callBackUrl
     * @param string $lang
     * @return mixed
     */
    public function create(
        string $schemaSubName,
        array  $attributes,
        string $connection,
        string $callBackUrl = 'https://test.com',
        string $lang = 'en'
    )
    {
        $body = [
            'schema'     => $schemaSubName,
            'attributes' => $attributes,
            'connection' => $connection,
        ];

        if ($callBackUrl) {
            $body['callBackUrl'] = $callBackUrl;
        }

        if ($lang) {
            $body['lang'] = $lang;
        }

        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/documents")
            ->setBody($body);

        return $this->send();
    }
}