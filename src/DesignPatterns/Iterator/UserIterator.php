<?php

namespace LearnCleanCode\DesignPatterns\Iterator;

/**
 * Class UserIterator
 * @package LearnCleanCode\DesignPatterns\Iterator
 */
class UserIterator implements \Iterator
{
    /**
     * @var int
     */
    private $position = 0;

    /**
     * @var UserCollection
     */
    private $userCollection;

    /**
     * UserIterator constructor.
     * @param UserCollection $userCollection
     */
    public function __construct(UserCollection $userCollection)
    {
        $this->userCollection = $userCollection;
    }

    /**
     * @return UserInterface
     */
    public function current(): UserInterface
    {
        return $this->userCollection->getUser($this->position);
    }

    /**
     * Move forward to next element
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return !($this->current() instanceof NullUser);
    }

    /**
     * Rewind the Iterator to the first element
     */
    public function rewind()
    {
        $this->position = 0;
    }
}
