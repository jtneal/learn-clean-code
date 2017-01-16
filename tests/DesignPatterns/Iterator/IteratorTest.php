<?php

namespace LearnCleanCode\DesignPatterns\Iterator;

/**
 * Class IteratorTest
 * @package LearnCleanCode\DesignPatterns\Iterator
 */
class IteratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Iterator
     */
    public function testIterator()
    {
        $user1 = new User();
        $user1->setFirstName('First1');
        $user1->setMiddleName('Middle1');
        $user1->setMiddleName('Last1');

        $user2 = new User();
        $user2->setFirstName('First2');
        $user2->setMiddleName('Middle2');
        $user2->setMiddleName('Last2');

        $user3 = new User();
        $user3->setFirstName('First3');
        $user3->setMiddleName('Middle3');
        $user3->setMiddleName('Last3');

        $users = new UserCollection();
        $users->addUser($user1);
        $users->addUser($user2);
        $users->addUser($user3);

        $iterator = $users->getIterator();

        $this->assertEquals($user1, $iterator->current());
        $this->assertEquals(0, $iterator->key());
        $this->assertTrue($iterator->valid());

        $iterator->next();

        $this->assertEquals($user2, $iterator->current());
        $this->assertEquals(1, $iterator->key());
        $this->assertTrue($iterator->valid());

        $iterator->next();

        $this->assertEquals($user3, $iterator->current());
        $this->assertEquals(2, $iterator->key());
        $this->assertTrue($iterator->valid());

        $iterator->next();

        $this->assertEquals(new NullUser(), $iterator->current());
        $this->assertEquals(3, $iterator->key());
        $this->assertFalse($iterator->valid());

        $iterator->rewind();

        $this->assertEquals($user1, $iterator->current());
        $this->assertEquals(0, $iterator->key());
        $this->assertTrue($iterator->valid());
    }

    /**
     * Test User
     */
    public function testUser()
    {
        $user = new User();
        $user->setFirstName('First');
        $user->setMiddleName('Middle');
        $user->setLastName('Last');

        $this->assertEquals('First', $user->getFirstName());
        $this->assertEquals('Middle', $user->getMiddleName());
        $this->assertEquals('Last', $user->getLastName());
    }

    /**
     * Test NullUser
     */
    public function testNullUser()
    {
        $user = new NullUser();
        $user->setFirstName('First');
        $user->setMiddleName('Middle');
        $user->setLastName('Last');

        $this->assertEquals('', $user->getFirstName());
        $this->assertEquals('', $user->getMiddleName());
        $this->assertEquals('', $user->getLastName());
    }
}
