<?php

namespace ApiClient\Api\ControlPanel\Request\MsBank2;

use ApiClient\Api\ControlPanel\ControlPanelRequest;
use ApiClient\MappedBy;
use ApiClient\Services\Method;

/**
 * Class ClientLimit
 *
 * @package ApiClient\Api\ControlPanel\Request\MsBank2
 * @MappedBy(value="ApiClient\Api\ControlPanel\Mapper\MsBank2\ClientLimit")
 */
class ClientLimit extends ControlPanelRequest
{

    /**
     * @param string $applicantId
     * @param string $amount
     * @param string $currency
     * @param string $direction
     *
     * @return mixed
     */
    public function getClientLimit(
        string $applicantId,
        string $amount,
        string $currency,
        string $direction
    )
    {
        $this->getRequestBuilder()
            ->setMethod(Method::GET())
            ->setPath("api/client-limits")
            ->setQueryParams([
                'applicantId' => $applicantId,
                'amount'      => $amount,
                'currency'    => $currency,
                'direction'   => $direction,
            ]);

        return $this->send();
    }

}