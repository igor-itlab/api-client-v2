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
                "Bearer eyJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2Mjc5Nzk3MDgsImV4cCI6MTYyNzk4MzMwOCwidXNlcklkIjoiZGFlYjNmMzAtZWY4YS0xMWViLWIxN2ItMDI0MmFjMTYwMDA4Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9DTElFTlQiLCJST0xFX1BST0pFQ1QiLCJST0xFX0FETUlOIl19.gSNxQcrQovUQfSG7ef6UjZy0UFcySlFCFeeIfC1czHBzweFfA0Lh9qvpmB_L8-23UAM9bOtFYU2abf6PdvhsUVOqsTdnrk2Qpn5Pprwck-0_4oqhwCBFmBogAxKzWwGy-HLCA28w6Zssqq8aMeDUn2vBETkc1sgNWLgfEcRf7n_IFmJDk4odP8Qtve7MO0AFBTgOm2GXjoQe965YbvkBMCML3x0gWl_lhIg_0NEP9YlkILM7go1gz0s_COS4HG18ekm_JEZCoxp3rJjBulOkv64SdCmBEpVazTPz49BUy3cqnPT8sKzRpkauOA0ZydkR6QHHLzdtsrZnDUtJgRLS3WUGDJUDOlFV3am6XZ_3hkqxqP0sYW6z2pDt_080b-NS6-qRuAg5emvwSG8cAiX8vhVzORTHOkzecAU-lm_ZrscxotIwQypQBG7zJ6hJyt_P3KMUisB8TYWnkFnBve-Bv8uvvQVhm9uxW9ngv5n7AOycRyRWI6OdsLcOYltWzgeQZgxBRHhjpMX_vxw8E1ga8pUaMkD0sg03pE2xLRlt_VVHpAsMi3kDJwIybMf7AcM-XjqUA9eX9Sfhc0tzkdct8PqMeoKjhIY4uiIm5ZflDnmuu9-zIsRzLRxZAnL5nNyJ9FPuJ8zZbKkqD_BxqTFi8IATP_aq-qiEGituD3xhvRc"
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
