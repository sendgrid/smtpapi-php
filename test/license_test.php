<?php
class SmtpapiTest_Smtpapi extends \PHPUnit_Framework_TestCase
{
    public function testVersion()
    {
        $f=fopen("./../LICENSE.txt",'r');
        $line = fgets($f);
        $this->assertEquals($line,"Copyright (c) 2013-2017 SendGrid, Inc.","It is 2017, so this should be:\nCopyright (c) 2013-2017 SendGrid, Inc.");
        fclose($f);
    }
}
