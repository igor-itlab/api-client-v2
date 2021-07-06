<?php


namespace ApiClient\Api\ControlPanel\Request;


use ApiClient\ApiResource;
use ApiClient\Auth;
use ApiClient\Request;
use ApiClient\RequestBuilder;

class PrivateAuth extends Auth
{
    public static function doAuth(RequestBuilder $requestBuilder): void
    {
        $requestBuilder
            ->setDomain("https://cp.crpt.trading")
            ->addHeader(
                "Bearer",
                "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2MjU1NjM0MTgsImV4cCI6MTYyNTU2NzAxOCwicm9sZXMiOlsiUk9MRV9DTElFTlQiXSwidXNlcm5hbWUiOiJhZDFAY3JwdC50cmFkaW5nIiwiaWQiOiJkNzM3NmZkZS1hN2JlLTRiN2UtYWE3ZS0wYmE0ZTQ3M2VkMGEifQ.DiRa87TnQYhowHd4976FgsKSNcgVuONvh4snu2YTC-CCe3Iwf7FonoJDw4pqGIS4YiZS1EEi0JZ5z-8ijKtrSeAjT_YVwRP9vPSFFi3Uffd4uG-w_G7HHAs21gC9cltqeHz3AeFleImpoyyfXAwA9GfyhaY6CfVRTvCSFlebe6rzbsNAm-BW6h2gKBIxVqxajT9_OJX747aQYRjjuQZMZUrLUXdxiU1Y4qKjaQohDoXNwdU84dha423viXo_VGPCVjbUheN7S6m01Xta1gw7mJVBa0masIl-G9V5jY2ptwH6rJFXMqtBwhUZ19Jy7ZjRaAOSl0ujP_K1yF-ptHMPzNN7sZ8I_XiM9TW7COwVZpHOKSPkejgmUOPK58P4gJEICoXVECJ8GXn7mgqChrJU1MOyWjhZ8WrpPms73y1zzCJjM_EMkQwk4hF30P_Q0hJDcDa2x6hASkp7uXkht2QTBmgZLAO9XcvYQQtS6jmQPPFLKYfkET6GX8v3jC8Sfl7IyDBCncn7yEKJgFSex43R_YgdPvForXbqe1sKXzkaVrY4TK_qfPCmSDmoex5qwwwXNgZntZMXxJsX2bnf-K3FxzvyrPwPSR1DPBZTl02jLe9gL-blpqDFLd7xjXDiHmjnMoC5cl4kEskjxsPod-ZY2CH6tZIjOwR1_cddkscCuLU"
            );
    }
}
