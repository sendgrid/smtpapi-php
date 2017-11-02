<?php
class SmtpapiTest_Smtpapi extends \PHPUnit_Framework_TestCase
{
    public function testVersion()
    {
        $ff = explode("\n", file_get_contents('../LICENSE.txt'));
        $line = '';
        foreach ($ff as $tp){
            if (strpos($tp, 'Copyright') === 0){
                $line = $tp;
                break;
            }
        }
        $copyright = "Copyright (c) 2013-2017 SendGrid, Inc.";
        $this->assertEquals($line,$copyright,"It is 2017, so this should be:\nCopyright (c) 2013-2017 SendGrid, Inc.");
    }
}
