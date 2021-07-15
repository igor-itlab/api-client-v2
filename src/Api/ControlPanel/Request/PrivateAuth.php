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
                "JWS-AUTH-TOKEN eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwicHJvamVjdElkIjoiYTIyYTVlMDYtMTdhYi00ZDViLTlhZmItNWVlNzk1OWQ4ZThiIiwiaWF0IjoxNTE2MjM5MDIyfQ.YAU69gqJFVLUtLnrANRU-qQX-YD7NLTuxOvS9Ya86Ds"
            );
    }
}
