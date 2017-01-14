<?php

namespace LearnCleanCode\DesignPatterns\Proxy;

/**
 * Class EmployeeProxy
 * @package LearnCleanCode\DesignPatterns\Proxy
 */
class EmployeeProxy implements EmployeeInterface
{
    /**
     * @param int $id
     * @return int
     */
    public function calculatePaycheck(int $id): int
    {
        return (new RealEmployee())->dataUnpacker($this->dataPacker($id));
    }

    /**
     * @param int $id
     * @return string
     */
    public function dataPacker(int $id): string
    {
        return json_encode(['id' => $id]);
    }
}
