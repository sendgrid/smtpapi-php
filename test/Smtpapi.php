<?php
class SmtpapiTest_Smtpapi extends \PHPUnit_Framework_TestCase
{
    public function testVersion()
    {
        $this->assertEquals(Smtpapi::VERSION, '0.5.0');
        $this->assertEquals(
            json_decode(file_get_contents('../composer.json'))->version,
            Smtpapi::VERSION
        );
    }
}
