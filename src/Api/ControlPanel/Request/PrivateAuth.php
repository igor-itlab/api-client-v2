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
                "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2MjU2NDcxNjIsImV4cCI6MTYyNTY1MDc2Miwicm9sZXMiOlsiUk9MRV9BRE1JTiJdLCJ1c2VybmFtZSI6InJza3J5ZGdlQGl0bGFiLXN0dWRpby5jb20iLCJpZCI6ImQyN2UxYjdiLWVmYzAtNGI3My1hNmU3LTczMzJlOTE1NGNlOCJ9.ToFzHcZFJI1ifwRfl_A43IMFCcBD9J-zMWALooW3O77qxiEoQT17nsYsCDPNmaxpbWob60HTUbOuMWlH-6g5pVfsmSbUr1xgCqQAj7fVwwq-pCpKInuAPohRIj2OTviRWnkqrA5UmZepFc6HArxQAScxCpQeyJfent-tF_AOmgx6RpHWuCRvA2RJqXNQr3Q6y4Rp66EIipviUASr0bptRwvdHYlTlclNM5X5qCFXzrHL0DQbKuxo6ZAlOGoUnl0p5i2PpzddQyzMlaHbTGOmDPgbGgnAQ2xkN9PYx2R1OKhcC-ym9fj7iNTKFdTodFPKLZJdsAOTsxoZRfYVmyzPuHzejlFWKERdYyg5F2rhf0W-NbOBJrCurRDurfRVQMHz7FKp_PW_TCOxPrU0zt_VlN15EY0mdscL-6ZsvUEN5lYebO-OhhGgoNHk5M9QaTrmiMCy6Aaefgc8OXRVxVa-onkacqpcAISx3zGMp1Z1iBcmtblmUOL_dlJmteTUpMvtIIzMrfV-O9vVFYHtrkfXHXMaUKtieGs5nuTrncSmTIHrZAHXWdxfMlYlZE6ie1CRHLNgehX-kI4_4ALexrJAKXIlVfQF7jSZw4jATL24wnrb8RS-QqWp9aMjWKlWXqZKi_3qeQ3t3BbwBDxbKeRNvnRGAoIaN5xiE6Jl4Ba2-cE"
            );
    }
}
