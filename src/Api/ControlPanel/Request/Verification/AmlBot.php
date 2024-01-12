<?php

namespace ApiClient\Api\ControlPanel\Request\Verification;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class AmlBot
 * @package ApiClient\Api\ControlPanel\Request\Verification
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Verification\AmlBot")
 */
class AmlBot extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/aml-bots");

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
            ->setPath("api/aml-bots/$id");

        return $this->send();
    }

    /**
     * @param string $schemaSubName
     * @param array $attributes
     * @param string $connection
     * @param string $returnUrl
     * @param string|null $callBackUrl
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
            'callBackUrl' => $callBackUrl,
            'returnUrl'   => $returnUrl,
            'lang'        => $lang
        ];

        $this->getRequestBuilder()
            ->setMethod(Method::POST())
            ->setPath("api/aml-bots")
            ->setBody($body);

        return $this->send();
    }
}