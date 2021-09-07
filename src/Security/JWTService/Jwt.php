<?php

namespace ApiClient\Security\JWTService;

use ApiClient\Security\JWTClaim\ProjectIdChecker;
use Jose\Component\Checker\ClaimCheckerManager;
use Jose\Component\Checker\ExpirationTimeChecker;
use Jose\Component\Checker\IssuedAtChecker;
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Signature\Algorithm\HS256;
use Jose\Component\Signature\Algorithm\RS256;
use Jose\Component\Signature\JWSBuilder;
use Jose\Component\Signature\JWSVerifier;
use Jose\Component\Signature\Serializer\CompactSerializer;
use Jose\Component\Signature\Serializer\JWSSerializerManager;

/**
 * Class Jwt
 * @package App\Security\JWTService
 */
class Jwt
{
    /**
     * @var JWSSerializerManager
     */
    private JWSSerializerManager $serializerManager;
    /**
     * @var JWSVerifier
     */
    private JWSVerifier $jwsVerifier;
    /**
     * @var ClaimCheckerManager
     */
    private ClaimCheckerManager $claimCheckerManager;
    /**
     * @var JWSBuilder
     */
    private JWSBuilder $jwsBuilder;

    /**
     * Jwt constructor.
     */
    public function __construct()
    {
        $this->serializerManager = new JWSSerializerManager(
            [
                new CompactSerializer(),
            ]
        );

        $algorithmManager = new AlgorithmManager(
            [
                new RS256(),
                new HS256()
            ]
        );

        $this->jwsVerifier = new JWSVerifier($algorithmManager);
        $this->jwsBuilder = new JWSBuilder($algorithmManager);

        $allowedTimeDrift = 3600; // 1 hour in timestamp;
        $this->claimCheckerManager = new ClaimCheckerManager(
            [
                new IssuedAtChecker($allowedTimeDrift),
                new ExpirationTimeChecker($allowedTimeDrift),
                new ProjectIdChecker()
            ]
        );
    }

    /**
     * @return JWSSerializerManager
     */
    public function getSerializerManager(): JWSSerializerManager
    {
        return $this->serializerManager;
    }

    /**
     * @return JWSVerifier
     */
    public function getJwsVerifier(): JWSVerifier
    {
        return $this->jwsVerifier;
    }

    /**
     * @return ClaimCheckerManager
     */
    public function getClaimCheckerManager(): ClaimCheckerManager
    {
        return $this->claimCheckerManager;
    }

    /**
     * @return JWSBuilder
     */
    public function getJwsBuilder(): JWSBuilder
    {
        return $this->jwsBuilder;
    }
}