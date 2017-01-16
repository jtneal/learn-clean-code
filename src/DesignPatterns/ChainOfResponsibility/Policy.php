<?php

namespace LearnCleanCode\DesignPatterns\ChainOfResponsibility;

/**
 * Class Policy
 * @package LearnCleanCode\DesignPatterns\ChainOfResponsibility
 */
class Policy
{
    /**
     * @var PurchasePower
     */
    private $start;

    /**
     * Policy constructor.
     */
    public function __construct()
    {
        $manager = new ManagerPurchasePower();
        $director = new DirectorPurchasePower();
        $vicePresident = new VicePresidentPurchasePower();
        $president = new PresidentPurchasePower();

        $manager->setSuccessor($director);
        $director->setSuccessor($vicePresident);
        $vicePresident->setSuccessor($president);

        $this->start = $manager;
    }

    /**
     * @param float $amount
     * @param string $purpose
     * @return string
     */
    public function getApprover(float $amount, string $purpose): string
    {
        return $this->start->processRequest(new PurchaseRequest($amount, $purpose));
    }
}
