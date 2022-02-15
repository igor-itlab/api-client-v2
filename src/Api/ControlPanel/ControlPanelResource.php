<?php


namespace ApiClient\Api\ControlPanel;


use ApiClient\Api\ControlPanel\Request\Balance;
use ApiClient\Api\ControlPanel\Request\Connection;
use ApiClient\Api\ControlPanel\Request\Document;
use ApiClient\Api\ControlPanel\Request\Fee\BaseFee;
use ApiClient\Api\ControlPanel\Request\Fee\DefaultFee;
use ApiClient\Api\ControlPanel\Request\Fee\Fee;
use ApiClient\Api\ControlPanel\Request\Fee\RangeFee;
use ApiClient\Api\ControlPanel\Request\Network;
use ApiClient\Api\ControlPanel\Request\PaymentSystem;
use ApiClient\Api\ControlPanel\Request\Project;
use ApiClient\Api\ControlPanel\Request\Rate;
use ApiClient\Api\ControlPanel\Request\RateHistory;
use ApiClient\Api\ControlPanel\Request\Service\Service;
use ApiClient\Api\ControlPanel\Request\Service\ServiceRelationship;
use ApiClient\Api\ControlPanel\Request\Transaction\Payment;
use ApiClient\Api\ControlPanel\Request\Transaction\Payout;
use ApiClient\Api\ControlPanel\Request\Transaction\TransactionAttribute;
use ApiClient\Api\ControlPanel\Request\User;
use ApiClient\Api\ControlPanel\Request\Currency;
use ApiClient\Api\ControlPanel\Request\Verification\VerificationAttribute;
use ApiClient\Api\ControlPanel\Request\Verification\VerificationSchema;
use ApiClient\ApiResource;

/**
 * Class ControlPanelResource
 * @package ApiClient\Api\ControlPanel
 */
class ControlPanelResource extends ApiResource
{
    protected string $secret;

    protected string $projectId;

    /**
     * @param string|null $secret
     * @param string|null $projectId
     */
    public function __construct(string $secret = null, string $projectId = null)
    {
        $this->secret = $secret;
        $this->projectId = $projectId;
    }

    /**
     * @return string|null
     */
    public function getSecret(): ?string
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     * @return $this
     */
    public function setSecret(string $secret): ControlPanelResource
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * @param mixed|string|null $projectId
     */
    public function setProjectId($projectId): void
    {
        $this->projectId = $projectId;
    }

    /**
     * @return Service
     */
    public function service(): Service
    {
        return new Service($this);
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return new User($this);
    }

    /**
     * @return Project
     */
    public function project(): Project
    {
        return new Project($this);
    }

    /**
     * @return Connection
     */
    public function connection(): Connection
    {
        return new Connection($this);
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return new Currency($this);
    }

    /**
     * @return PaymentSystem
     */
    public function paymentSystem(): PaymentSystem
    {
        return new PaymentSystem($this);
    }

    /**
     * @return Balance
     */
    public function balance(): Balance
    {
        return new Balance($this);
    }

    /**
     * @return BaseFee
     */
    public function baseFee(): BaseFee
    {
        return new BaseFee($this);
    }

    /**
     * @return DefaultFee
     */
    public function defaultFee(): DefaultFee
    {
        return new DefaultFee($this);
    }

    /**
     * @return Fee
     */
    public function fee(): Fee
    {
        return new Fee($this);
    }

    /**
     * @return RangeFee
     */
    public function rangeFee(): RangeFee
    {
        return new RangeFee($this);
    }

    /**
     * @return Payout
     */
    public function payout(): Payout
    {
        return new Payout($this);
    }

    /**
     * @return Payment
     */
    public function payment(): Payment
    {
        return new Payment($this);
    }

    /**
     * @return Rate
     */
    public function rate(): Rate
    {
        return new Rate($this);
    }

    /**
     * @return TransactionAttribute
     */
    public function transactionAttribute(): TransactionAttribute
    {
        return new TransactionAttribute($this);
    }

    /**
     * @return VerificationAttribute
     */
    public function verificationAttribute(): VerificationAttribute
    {
        return new VerificationAttribute($this);
    }

    /**
     * @return VerificationSchema
     */
    public function verificationSchema(): VerificationSchema
    {
        return new VerificationSchema($this);
    }

    /**
     * @return ServiceRelationship
     */
    public function serviceRelationship(): ServiceRelationship
    {
        return new ServiceRelationship($this);
    }

    /**
     * @return Document
     */
    public function document(): Document
    {
        return new Document($this);
    }

    /**
     * @return Network
     */
    public function network(): Network
    {
        return new Network($this);
    }

    /**
     * @return RateHistory
     */
    public function rateHistory(): RateHistory
    {
        return new RateHistory($this);
    }
}
