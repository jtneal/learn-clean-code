<?php

namespace LearnCleanCode\DesignPatterns\Iterator;

/**
 * Interface UserInterface
 * @package LearnCleanCode\DesignPatterns\Iterator
 */
interface UserInterface
{
    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName);

    /**
     * @return string
     */
    public function getMiddleName(): string;

    /**
     * @param string $middleName
     */
    public function setMiddleName(string $middleName);

    /**
     * @return string
     */
    public function getLastName(): string;

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName);
}
