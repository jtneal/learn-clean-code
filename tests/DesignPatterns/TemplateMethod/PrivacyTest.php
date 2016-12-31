<?php

namespace LearnCleanCode\DesignPatterns\TemplateMethod;

/**
 * Class PrivacyTest
 * @package LearnCleanCode\DesignPatterns\TemplateMethod
 */
class PrivacyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test MD5
     */
    public function testMD5()
    {
        $data = 'password';
        $privacy = new MD5Encryption();
        $hash = $privacy->encrypt($data);

        $this->assertEquals(md5($data), $hash);
    }

    /**
     * Test SHA1
     */
    public function testSHA1()
    {
        $data = 'password';
        $privacy = new SHA1Encryption();
        $hash = $privacy->encrypt($data);

        $this->assertEquals(sha1($data), $hash);
    }

    /**
     * Test SHA256
     */
    public function testSHA256()
    {
        $data = 'password';
        $privacy = new SHA256Encryption();
        $hash = $privacy->encrypt($data);

        $this->assertEquals(hash('sha256', $data), $hash);
    }
}
