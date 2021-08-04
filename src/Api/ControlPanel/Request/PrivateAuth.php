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
                "Bearer eyJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2MjgwNTM3OTMsImV4cCI6MTYyODA1NzM5MywidXNlcklkIjoiZGFlYjNmMzAtZWY4YS0xMWViLWIxN2ItMDI0MmFjMTYwMDA4Iiwicm9sZXMiOlsiUk9MRV9VU0VSIiwiUk9MRV9DTElFTlQiLCJST0xFX1BST0pFQ1QiLCJST0xFX0FETUlOIl19.hkMg0LlGwTddKfd4Ff7x5zAmvFB_b5ee6W_EuZyEvdY7ecmhG63fLP6dLKhVBNfON95HPDEE_gOSh8fqvz4mRn_EE7IZaDAl6ATXfT5wIy1Fsvs1vgT2iGzz9MCQ6pZgNMSD-bBc1bKaeEd_V1bN45xPfYaITenqM8gqTFQsOY38jFLu9TdGSRpUWGoQpNn3lMQ2c7Qa9VrJe3mST8P0kD-GTpO-YtqYtZ0Z3WJDxL2L9Qix-btobYggdyJvk69oaNOvTsVSLl2tWhfcq-w9hFF2ALFVO1-vrLsjGJprYxxKn2yysYgtl0KZZbFr1HB9I2Xp3yxEhp9V46azQOpV5n8e9J_uMqq_KhFt8fJM-hPO11WIWSRUhVeKoT2Wn_4Ai4RQkZsEoHAybQD6pOGQWd_iUGoIMNrectdKKZ4n02R87s6oSih0qULmWn-d5Aq8ln_jt7rGHRNGHLKcbbQruKV72lemT3rpE5HZZ5EhtFquMYHnGrAAgO41H7k48jmiEGrd5O5b78sUki7qwqTsqiIsexu_WL5OPSxo6ASvi9cgmFu16iySTiFdsF7CY0rsBH9K9K6RTjKWg-3wzRF8-t7bEKBUX68Bs1GEjnVlj_SMP1YqTOnAk-IP-lYQ2z9wNrsxz-pY1OS6z2o0ZJ3yRZ30vLpaQm2vLskTi4d-qRQ"
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
