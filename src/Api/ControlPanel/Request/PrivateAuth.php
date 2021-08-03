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
                "Bearer eyJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2Mjc5OTQ0MjksImV4cCI6MTYyNzk5ODAyOSwidXNlcklkIjoiZGFlYjNmMzAtZWY4YS0xMWViLWIxN2ItMDI0MmFjMTYwMDA4Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9DTElFTlQiLCJST0xFX1BST0pFQ1QiLCJST0xFX0FETUlOIl19.mZ6OJuI6-XMlyINyUDNawpJcNhAwyH0TBxhjj3nc9OR4TF8dyhEXjA9cJMZgCTdc66Llaz1m0yxGKbFrnA7d6fIf9P0itHpGjPdRLVN46ajktjzCuwZ0ust0FTJMhzkpQnnbTkkywGXGA0STKy8sk5FqaTfOkiC8A6dEOcJyYIjuNmzq0XKnJ6fWj3cfZVZr6ymq0FK4_0PBFxuRugeCOiJA9mdLPY12P57XAaJf7FZBuw8IW-CyvPIIMQESK0QUBNnkB9W4MRY99RYF4vcC_djUbVTd4ZQFwPzLWi8GHCgldGfpW5zZVLiBk7z1wVqnoGjry8HDSpObuRKI4_PKJUl1GdhNeJfOPV69xV2lxr29MyxzZZab4-_ev1Q7xAlSy65KuwGKwALu4W2JuYLUqMso52Bp-DoSlU2v0c039sfhxNxkNppox65yUUls4YBrtWNMbWrCRcEv9-ElUYuP4OsuYyENmtKpChGoajKH1uQ7h2oY1luRtbLzP-wqWtJzXkrYygK_zOj58OcOQrnW41qWRcDJJrbd_wVJspP-L2SJVTtxjIhBGCfG_GTZFezBh4342aHPk92_gLgS-iYKJTQjZ7PrJvY_dsZpbx-NSnaZhr-3wvP6S8ynvnYixLCDuLAhXM6shiWa1CnzUu5Dxpl4foG201eoEG-luaR1X4U"
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
