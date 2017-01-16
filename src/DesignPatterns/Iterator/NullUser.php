<?php

namespace LearnCleanCode\DesignPatterns\Iterator;

/**
 * Class NullUser
 * @package LearnCleanCode\DesignPatterns\Iterator
 */
class NullUser implements UserInterface
{
    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return '';
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return '';
    }

    /**
     * @param string $middleName
     */
    public function setMiddleName(string $middleName)
    {
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return '';
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
    }
}
