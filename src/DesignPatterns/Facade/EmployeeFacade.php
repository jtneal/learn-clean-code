<?php

namespace LearnCleanCode\DesignPatterns\Facade;

/**
 * Class EmployeeFacade
 * @package LearnCleanCode\DesignPatterns\Facade
 */
class EmployeeFacade
{
    /**
     * @var EmployeePolicy
     */
    private $employeePolicy;

    /**
     * @var EmployeeGateway
     */
    private $employeeGateway;

    /**
     * @var EmployeeReports
     */
    private $employeeReports;

    /**
     * EmployeeFacade constructor.
     * @param EmployeePolicy $employeePolicy
     * @param EmployeeGateway $employeeGateway
     * @param EmployeeReports $employeeReports
     */
    public function __construct(
        EmployeePolicy $employeePolicy,
        EmployeeGateway $employeeGateway,
        EmployeeReports $employeeReports
    ) {
        $this->employeePolicy = $employeePolicy;
        $this->employeeGateway = $employeeGateway;
        $this->employeeReports = $employeeReports;
    }

    /**
     * @return int
     */
    public function calculatePay(): int
    {
        return $this->employeePolicy->calculatePay();
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        return $this->employeeGateway->save();
    }

    /**
     * @return string
     */
    public function describeEmployee(): string
    {
        return $this->employeeReports->describeEmployee();
    }
}
