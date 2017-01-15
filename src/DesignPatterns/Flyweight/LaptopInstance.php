<?php

namespace LearnCleanCode\DesignPatterns\Flyweight;

/**
 * Class LaptopInstance
 * @package LearnCleanCode\DesignPatterns\Flyweight
 */
class LaptopInstance
{
    /**
     * @var Laptop
     */
    private $laptop;

    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var \DateTime
     */
    private $manufactureDate;

    /**
     * LaptopInstance constructor.
     * @param Laptop $laptop
     * @param string $serialNumber
     * @param \DateTime $manufactureDate
     */
    public function __construct(Laptop $laptop, string $serialNumber, \DateTime $manufactureDate)
    {
        $this->laptop = $laptop;
        $this->serialNumber = $serialNumber;
        $this->manufactureDate = $manufactureDate;
    }

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->laptop->getMake();
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->laptop->getModel();
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->laptop->getYear();
    }

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return LaptopInstance
     */
    public function setSerialNumber(string $serialNumber): LaptopInstance
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getManufactureDate(): \DateTime
    {
        return $this->manufactureDate;
    }

    /**
     * @param \DateTime $manufactureDate
     * @return LaptopInstance
     */
    public function setManufactureDate(\DateTime $manufactureDate): LaptopInstance
    {
        $this->manufactureDate = $manufactureDate;

        return $this;
    }
}
