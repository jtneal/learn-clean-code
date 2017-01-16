<?php

namespace LearnCleanCode\DesignPatterns\Iterator;

/**
 * Class UserCollection
 * @package LearnCleanCode\DesignPatterns\Iterator
 */
class UserCollection implements \IteratorAggregate
{
    /**
     * @var array
     */
    private $users = [];

    /**
     * @return UserIterator
     */
    public function getIterator(): UserIterator
    {
        return new UserIterator($this);
    }

    /**
     * @param int $position
     * @return UserInterface
     */
    public function getUser(int $position): UserInterface
    {
        return $this->users[$position] ?? new NullUser();
    }

    /**
     * @param UserInterface $user
     */
    public function addUser(UserInterface $user)
    {
        $this->users[] = $user;
    }
}
