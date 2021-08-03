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
                "Bearer eyJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2Mjc5NzEwMDQsImV4cCI6MTYyNzk3NDYwNCwidXNlcklkIjoiZGFlYjNmMzAtZWY4YS0xMWViLWIxN2ItMDI0MmFjMTYwMDA4Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9DTElFTlQiLCJST0xFX1BST0pFQ1QiLCJST0xFX0FETUlOIl19.aOBgahbm94bcpWYopUgKXALZ86IpATISo2ACEiC3mDJPvjKyCKYyCrF6qRXPhIntsiRuKTrXFGfFaI-X3Wk6NVax5VS6m-wppm834gQIhSO5Of1m6MO1al5qH0VEYc6vuCwon59lzlpBaRPd4wFbCxp3Syni1OE5WjNiO5eizVyIQOKsDjZ6sX7XuCC_R1jcqFnarjPw-oFgmp7XTPpULeuR_tgKKJtbkVvqMu7Qh-KMEZouN43hVYfiEoS2wmPgMyLPqJE34t2cezlkWr358fQ11YDJHbhwCfuVPP3wESDVsBaWChxxnlidbriNF767TldkqY6tyRDMMzLars52oA_ukMa8--FlVKALa2jDuKHw1cOFn_O3B8QeWLvtUqQ1_veF52QQ6rfcogK9eQSqeb8GL4CClu8FzFTrttkN-RUIU0F5XhlSKOquINh8RinAO1n2nxtmhs1T5FplmCP33WRfroQsY9r58e9kSKwJZcULGNvqAuQ_A0ZZgwRyrQa6Fe0YY5h6JkmrSPDDNE67G5SA5RV8yFU9tOSikZzhU6TftB-hkHCWjjLPRTglDzkrNPrOyn9b94DSoZqzcapD7kOvdtCFKvIOA9MBMx2HcrN_J0WwlxO6m__lcWIururwD5b-yNufifDYvfQBP31YZD1i58HwVwUdxhqLx-LmpPw"
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
