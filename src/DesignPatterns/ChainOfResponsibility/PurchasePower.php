<?php

namespace LearnCleanCode\DesignPatterns\ChainOfResponsibility;

/**
 * Class PurchasePower
 * @package LearnCleanCode\DesignPatterns\ChainOfResponsibility
 */
abstract class PurchasePower
{
    /**
     * Base
     */
    const BASE = 500;

    /**
     * @var PurchasePower
     */
    protected $successor;

    /**
     * @return float
     */
    abstract protected function getAllowable(): float;

    /**
     * @return string
     */
    abstract protected function getRole(): string;

    /**
     * @param PurchasePower $successor
     */
    public function setSuccessor(PurchasePower $successor)
    {
        $this->successor = $successor;
    }

    /**
     * @param PurchaseRequest $request
     * @return string
     */
    public function processRequest(PurchaseRequest $request): string
    {
        $amount = $request->getAmount();
        $purpose = $request->getPurpose();
        $approval = ' approve $' . $amount . ' for ' . $purpose;

        if ($amount <= $this->getAllowable()) {
            return $this->getRole() . ' will' . $approval;
        } elseif ($this->successor !== null) {
            return $this->successor->processRequest($request);
        } else {
            return 'No one can' . $approval;
        }
    }
}
