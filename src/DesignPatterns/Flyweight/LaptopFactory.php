<?php

namespace LearnCleanCode\DesignPatterns\Flyweight;

/**
 * Class LaptopFactory
 * @package LearnCleanCode\DesignPatterns\Flyweight
 */
class LaptopFactory
{
    /**
     * @var Laptop[]
     */
    private $laptops = [];

    /**
     * @param int $id
     * @return Laptop
     * @throws \InvalidArgumentException
     */
    public function getLaptop(int $id): Laptop
    {
        if (!isset($this->laptops[$id])) {
            $this->laptops[$id] = $this->makeLaptop($id);
        }

        return $this->laptops[$id];
    }

    /**
     * @param int $id
     * @return Laptop
     * @throws \InvalidArgumentException
     */
    public function makeLaptop(int $id): Laptop
    {
        // This would probably come from a database normally
        switch ($id) {
            case 1:
                return new Laptop('Dell', 'XPS 13', 2017);
            case 2:
                return new Laptop('Asus', 'ZenBook UX305', 2017);
            case 3:
                return new Laptop('HP', 'Chromebook 13', 2017);
            default:
                throw new \InvalidArgumentException('Invalid Laptop ID');
        }
    }
}
