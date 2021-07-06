<?php


namespace ApiClient;

/**
 * Class Auth
 * @package ApiClient
 */
abstract class Auth
{
    /**
     * @param RequestBuilder $requestBuilder
     */
    abstract public static function doAuth(RequestBuilder $requestBuilder): void;
}
