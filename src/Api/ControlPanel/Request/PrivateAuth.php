<?php

namespace ApiClient\Api\ControlPanel\Request;

use ApiClient\Auth;
use ApiClient\RequestBuilder;

/**
 * Class PrivateAuth
 * @package ApiClient\Api\ControlPanel\Request
 */
class PrivateAuth extends Auth
{
    /**
     * @param RequestBuilder $requestBuilder
     */
    public static function doAuth(RequestBuilder $requestBuilder): void
    {
        $requestBuilder
            ->addHeader(
                "Authorization",
                "Bearer eyJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2Mjc5ODU0MDMsImV4cCI6MTYyNzk4OTAwMywidXNlcklkIjoiZGFlYjNmMzAtZWY4YS0xMWViLWIxN2ItMDI0MmFjMTYwMDA4Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9DTElFTlQiLCJST0xFX1BST0pFQ1QiLCJST0xFX0FETUlOIl19.qql3V0ia1QAJiyHKqIqRW9Znkcbx3WpDKFaJeyZzqCVRbCp8gCOwjPasFRBCZ-qysNW89GHuNt3pffBatJ5QxqfDCq_mrIsR1bSVnmWdUgE9ikqZ-hofBkm12sKkT9BNo5zJ9IaKIdEDANsuYoiuMapzzh5GxRLlQYav2sRIMKpN0giLiwGExcOJFt9k2e6D1CVTUDJZ35L-Z3Y80iBtF5xFf4bJiIihaAfqYq4uxr48zJT5GKvwOkqqv1DiLdLCWVaJubc4Vt57gMOkSdHAyQUbhLuBOcZui5n3Wfz-XTeP8fRbmbDmSAH0WgiUsvOTGYpP2xiMUXs9OLrs72RxviLGqGyf55bd46zRMIe0qXLUGvH96JCS33LBojOw2i-wFOPTdob8U9sbskxV68vwETjJkJ22LNw2cqgkc5aIIyK1Olf6c6S8JqGLDEmv2pEp5_kufm0yBa2oFIADPK6kfMxIPjv_ZCkLFZ4IFV0kUfIO_uTMpN4iRclMwvdddZHF9w2n1O9qjAROREYmX85gjUAP6uu7Aoe8L-0pip9tMXo5gYxdawo4ZAbZFJgyRxkE6bs8aDZcInoTw4I4zq5lAr3Z_tpadwiSi65jKGy9s4D2ed2Y805cKAv6yVG_CgDgD-Yjfpz_1Cd4eQk14kPkU--R21vAXNobeE5os1drsuw"
            )
            ->addHeader(
                "Accept",
                "application/json"
            )
            ->addHeader(
                "Content-Type",
                "application/json"
            );
    }
}
