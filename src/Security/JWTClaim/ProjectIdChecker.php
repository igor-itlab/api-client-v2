<?php

namespace ApiClient\Security\JWTClaim;

use Jose\Component\Checker\ClaimChecker;
use Jose\Component\Checker\InvalidClaimException;
use Ramsey\Uuid\Uuid;

/**
 * Class ProjectIdChecker
 * @package App\Security\JWTClaim
 */
class ProjectIdChecker implements ClaimChecker
{
    private const NAME = 'projectId';

    /**
     * @param mixed $value
     * @throws InvalidClaimException
     */
    public function checkClaim($value): void
    {
        if (!Uuid::isValid($value)) {
            throw new InvalidClaimException('The claim ' . self::NAME . ' must be a uuid.', self::NAME, $value);
        }
    }

    /**
     * @return string
     */
    public function supportedClaim(): string
    {
        return self::NAME;
    }
}