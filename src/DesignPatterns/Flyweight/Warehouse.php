<?php

namespace LearnCleanCode\DesignPatterns\Flyweight;

/**
 * Class Warehouse
 * @package LearnCleanCode\DesignPatterns\Flyweight
 */
class Warehouse
{
    /**
     * @var LaptopInstance[]
     */
    private $laptops;

    /**
     * @param Laptop $laptop
     * @param string $serialNumber
     * @param \DateTime $manufactureDate
     */
    public function addLaptop(Laptop $laptop, string $serialNumber, \DateTime $manufactureDate)
    {
        $this->laptops[] = new LaptopInstance($laptop, $serialNumber, $manufactureDate);
    }

    /**
     * @return string
     */
    public function exportLaptops()
    {
        $view = [];

        foreach ($this->laptops as $laptop) {
            $view[] = implode("\t", [
                $laptop->getMake(),
                $laptop->getModel(),
                $laptop->getYear(),
                $laptop->getSerialNumber(),
                $laptop->getManufactureDate()->format('Y-m-d')
            ]);
        }

        return implode("\n", $view);
    }
}
