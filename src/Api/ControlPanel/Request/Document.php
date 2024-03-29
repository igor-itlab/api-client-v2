<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
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
     * @param string $returnUrl
     * @param string $callBackUrl
     * @param string $lang
     * @return mixed
     */
    public function create(
        string $schemaSubName,
        array  $attributes,
        string $connection,
        string $returnUrl = 'https://test.com',
        string $callBackUrl = 'https://test.com',
        string $lang = 'en'
    )
    {
        $body = [
            'schema'      => $schemaSubName,
            'attributes'  => $attributes,
            'connection'  => $connection,
            'returnUrl'   => $returnUrl,
            'callBackUrl' => $callBackUrl,
            'lang'        => $lang
        ];

        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/documents")
            ->setBody($body);

        return $this->send();
    }

    /**
     * @param string $clientEmail
     * @param string $connection
     * @param string $schemaSubName
     * @param string|null $resettingVerificationStep
     * @param string|null $callBackUrl
     * @return mixed
     */
    public function reset(
        string $clientEmail,
        string $connection,
        string $schemaSubName,
        string $resettingVerificationStep = null,
        string $callBackUrl = 'https://test.com'
    )
    {
        $body = [
            'schema'                    => $schemaSubName,
            'connection'                => $connection,
            'callBackUrl'               => $callBackUrl,
            'clientEmail'               => $clientEmail,
            'resettingVerificationStep' => $resettingVerificationStep
        ];

        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/reset-documents")
            ->setBody($body);

        return $this->send();
    }

}