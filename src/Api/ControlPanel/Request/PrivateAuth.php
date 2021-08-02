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
                "JWS-AUTH-TOKEN eyJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2Mjc4OTQ4OTQsImV4cCI6MTYyNzg5ODQ5NCwidXNlcklkIjoiZGFlYjNmMzAtZWY4YS0xMWViLWIxN2ItMDI0MmFjMTYwMDA4Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9DTElFTlQiLCJST0xFX1BST0pFQ1QiXX0.mlUq2zVoRSCW-0JaQ5AGxdnv9qgpnMe57hwejeaqGlx8lCrbuId773ozAqIw77L3MCruhSCV4EeDqoyEc9ozRYeqP9ybQ5q6WH6yCMmk1LYShhYauZ5zGRWFdog3IZiJWuq_3xE2eFbbYAoJKZZyalXAvnzNq5NWT8C1D8c8zd9HTXw-S4aSM0qF8CJoUH2NsRKBFmXoyXt2XQrpJoZ-i9-06xxFuZjZMESFSS3jiD_9E2OUgUPF5VklI_mwhqqNuhllKq4BVsAuaUzMW9hC6yHpB3Gqwl0DZHHx9zWwE6tLt37kAhM1nQfVavFxi6FAErjDmZEbmWXcBX9Yb8JjkA4XuACpkIa1fYVVlFSxLzg7LrDHJXBMhw4YcvEIx2UDTiP5dSOX-pVu4mcp23ivyVzP514iuZqLOeM9OF6rwFL3e_BYBYBHTrLUVLFlJjcSPM0j8-XmBVZNt632HfIjRiNZOaw_ds05ciNtPLUOA3PvnJ-bWPDQEx1wT9NlkqNoTx7ac1bIhNn1Ffjp9z7K-gltz3OVKgi8z5OLD-1-4OeggNrQ0ta6PbWNXNn88BXI57buszvlnMaGeZaLvgM2-p6KBito2v5DRIt67DTNwt2bi8e6bcHJtnmQetYET_VP96UBMwcRfxg6xyRqVka1q3Bob4hQ8sNjiWLk4svDo3M"
            );
    }
}
