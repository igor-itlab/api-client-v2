<?php


namespace ApiClient;


abstract class Auth
{
    abstract public static function doAuth(RequestBuilder $requestBuilder): void;
}
