<?php

namespace LearnCleanCode\DesignPatterns\ChainOfResponsibility;

class PurchaseRequest
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $purpose;

    /**
     * PurchaseRequest constructor.
     * @param float $amount
     * @param string $purpose
     */
    public function __construct(float $amount, string $purpose)
    {
        $this->setAmount($amount);
        $this->setPurpose($purpose);
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }

    /**
     * @param string $purpose
     */
    public function setPurpose(string $purpose)
    {
        $this->purpose = $purpose;
    }
}
