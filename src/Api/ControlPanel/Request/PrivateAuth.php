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
                "Bearer eyJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2Mjc5MTYzOTcsImV4cCI6MTYyNzkxOTk5NywidXNlcklkIjoiZGFlYjNmMzAtZWY4YS0xMWViLWIxN2ItMDI0MmFjMTYwMDA4Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9DTElFTlQiLCJST0xFX1BST0pFQ1QiLCJST0xFX0FETUlOIl19.Sr0PS9laeM3NJjGn5TDWATyVwJBqTWJWVTIpafaLTB_GGEiOKZexcyXvflIOIFF_9p3ycUxsLOw-YimdVwMHWqoT6-M7O1iR1QiJMmfvM1oGHxLthqxDDOD4DzE-6Xk0UARASbJl1KB_oH7_-kjgLO_ebu9lcUi8hc1Zjwo3yT48Xli5LGNPfj0TsyJF28V9SAwilvr2p-PLuybXPbEiq7DYwsp5x0SdEp8kh0lL1QyrVfBltNyjMLP2CrF1FaS6qCieKegVCH1LR40eV-Z1ddBxNP4281JLaCXe-vYEEQpVCW2s1OCze2nwWGiWKsc5B4IGVplK8meFt2RPfYKIkSB000DoluyUmPxLvE1scLFhd0tF_qlLN6bb7jJxkUNeAYpJp1UQLTLrPbFO7h9QXiJvjWGqIIUyfAgjVNuTdxeG6oKOSSq9Ft_tdIe5MQfia-m0CMTxHnDwNLTutT5mBtSmQbTmeAJ408-eRi8l0P1iZhe7EJ3hPL8tMkoRh5xqcEDJ87MBhi4FY1GTUQd85_GVl0um1Cs-hU0HviHIn2wCj8k5FDcjzDIF7-u1I5UGz-MDjH5HoFbUN4pOk7Afqqf3XspdgoEl-6fbNtiyalWrp4J5p6PUAgfIossHsgSiwm3o6BtMWjiCq2mvkvw7gYqSzGqlMCL3cRSabsb3Bhc"
            )
            ->addHeader(
                "Accept",
                "application/json"
            )
            ->addHeader(
                "Content-Type",
                "application/json");
    }
}
