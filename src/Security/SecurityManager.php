<?php

namespace ApiClient\Security;

use ApiClient\Security\JWTService\Jwt;
use Jose\Component\KeyManagement\JWKFactory;

class SecurityManager
{
    private Jwt $jwtService;

    public function __construct()
    {
        $this->jwtService = new Jwt();
    }

    /**
     * @param $projectId
     * @param $secret
     * @return string
     */
    public function getJwtToken($projectId, $secret): string
    {
        $this->jwtService = new Jwt();
        $jws = $this->jwtService->getJwsBuilder()->create()
            ->withPayload(
                json_encode(
                    [
                        'iat' => time(),
                        'exp' => time() + 3600, // 1 hour
                        "projectId" => $projectId,
                    ]
                ),
            )
            ->addSignature(
                JWKFactory::createFromSecret(
                    $secret,
                    [
                        'alg' => 'HS256',
                        'use' => 'sig',
                    ]
                ),
                ['alg' => 'HS256']
            )->build();

        return $this->jwtService->getSerializerManager()->serialize("jws_compact", $jws);
    }
}