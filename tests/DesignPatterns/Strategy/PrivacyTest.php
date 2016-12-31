<?php

namespace LearnCleanCode\DesignPatterns\Strategy;

/**
 * Class PrivacyTest
 * @package LearnCleanCode\DesignPatterns\Strategy
 */
class PrivacyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test MD5
     */
    public function testMD5()
    {
        $data = 'password';
        $encryption = new MD5Encryption();
        $privacy = new Privacy($encryption);
        $hash = $privacy->encrypt($data);

        $this->assertEquals(md5($data), $hash);
    }

    /**
     * Test SHA1
     */
    public function testSHA1()
    {
        $data = 'password';
        $encryption = new SHA1Encryption();
        $privacy = new Privacy($encryption);
        $hash = $privacy->encrypt($data);

        $this->assertEquals(sha1($data), $hash);
    }

    /**
     * Test SHA256
     */
    public function testSHA256()
    {
        $data = 'password';
        $encryption = new SHA256Encryption();
        $privacy = new Privacy($encryption);
        $hash = $privacy->encrypt($data);

        $this->assertEquals(hash('sha256', $data), $hash);
    }
}
