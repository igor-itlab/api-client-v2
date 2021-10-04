<?php

namespace ApiClient\Api\ControlPanel\Request\Verification;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class VerificationSchema
 * @package ApiClient\Api\ControlPanel\Request
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\Verification\VerificationSchema")
 */
class VerificationSchema extends ControlPanelRequest
{
    /**
     * @param array|null $criteria
     * @return mixed
     */
    public function getAll(array $criteria = null)
    {
        $rb = $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/verification-schemas");

        if ($criteria) {
            $rb
                ->setQueryParams($criteria);
        }

        return $this->send();
    }

    /**
     * @param string $subName
     * @return mixed
     */
    public function getBySubName(string $subName)
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/verification-schemas/$subName");

        return $this->send();
    }
}