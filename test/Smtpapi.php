<?php

class SmtpapiTest_Smtpapi extends PHPUnit_Framework_TestCase {

  public function testVersion() {
    $this->assertEquals(Smtpapi::VERSION, "0.0.1");
  }
}
