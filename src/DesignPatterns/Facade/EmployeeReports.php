<?php

namespace LearnCleanCode\DesignPatterns\Facade;

/**
 * Class EmployeeReports
 * @package LearnCleanCode\DesignPatterns\Facade
 */
class EmployeeReports
{
    /**
     * @return string
     */
    public function describeEmployee(): string
    {
        return 'Software Engineer on the Backend Engineering Team.';
    }
}
