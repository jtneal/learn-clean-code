<?php

namespace LearnCleanCode\DesignPatterns\Proxy;

/**
 * Class RealEmployee
 * @package LearnCleanCode\DesignPatterns\Proxy
 */
class RealEmployee implements EmployeeInterface
{
    /**
     * @param int $id
     * @return int
     */
    public function calculatePaycheck(int $id): int
    {
        if ($id > 0) {
            return 777;
        } else {
            return 0;
        }
    }

    /**
     * @param string $dataPacked
     * @return int
     */
    public function dataUnpacker(string $dataPacked): int
    {
        $dataUnpacked = json_decode($dataPacked, true);

        return $this->calculatePaycheck($dataUnpacked['id']);
    }
}
