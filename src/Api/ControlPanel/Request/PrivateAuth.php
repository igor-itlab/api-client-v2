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
                "Bearer eyJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2MjgwNzI3NTAsImV4cCI6MTYyODA3NjM1MCwidXNlcklkIjoiZGFlYjNmMzAtZWY4YS0xMWViLWIxN2ItMDI0MmFjMTYwMDA4Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9DTElFTlQiLCJST0xFX1BST0pFQ1QiLCJST0xFX0FETUlOIl19.JQoFZeYzA7Tc2XPeAye5yofhpZ6bSMsDWmk-I_wQv_51lNHh1-aKsDfPDtaXBSklYaett5GmdLY-CNgxE87jPxels2VlgTt23wJs-xvR0vZMdrHg41H22Iomi_xT72hfYUFAf9A8ymGVLNZt7ElTHu8uto21YZpKCkOfPA0wiaKq3gOJ2OHVxdu15P6hsNv7PKDnWt_mdFLzx0IMf0cxeUIxHNrtMmnUfQy8bmK7wyNicbKO3Gnvtboom68_SCjTRon4h4ZMdt4jQN9pz96ZbRajWxBsETwU3lemgwNPsNk57t7rdrrOOz8ChAN86mUY8Kuv_Ls5_SWhlAV0zFqBYrNR_FJuU9KcUcwa484lSLXcGihS7FtQTMxR5L9ejZJzlqOtNGfVIAAKgVSGHWVlSDsxiYRuFKwz0OAkWdxGHELBleeq4YzSWVRTJJ2jGsaEU9gFgakZMj6d-mfpcbCtsPgrmrqJ_m_mWO9_AowwlTBVr3uVzF6GtTWK9Udelhw_V1YJGLN6di-BC7F4P2Edhy5iiji3RZzbzO_WopBvJ-ptR4HCvLJKCvhs6yxAU7CMZoSGwrssNiuev_0okzxkA0lcGF1Kr1ZgzQq4iDxaBWhXhnYxSpWE6VBU3kQa2kEq3uEyBO0A2AqC2I5TpzKOuIHwZxJJvgcAZGSJGixQV4I"
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
