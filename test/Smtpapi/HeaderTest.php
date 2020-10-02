<?php

use PHPUnit\Framework\TestCase;

class SmtpapiTest_Header extends TestCase
{
    protected $t;

    protected function setUp()
    {
        $file = __DIR__ . '/../smtpapi_test_strings.json';
        $json = json_decode(file_get_contents($file), true);
        $this->t = $json;
    }

    public function testConstructionHeader()
    {
        $header = new Smtpapi\Header();

        $this->assertEquals(get_class($header), 'Smtpapi\Header');
    }

    public function testHasAToJsonStringMethod()
    {
        $header = new Smtpapi\Header();

        $this->assertEquals($this->t['json_string'], $header->jsonString());
    }

    public function testAddTo()
    {
        $header = new Smtpapi\Header();

        $header->addTo('foo@example.com');
        $header->addTo('bar@example.com');
        $this->assertEquals($this->t['add_to'], $header->jsonString());
    }

    public function testAddToWithName()
    {
        $header = new Smtpapi\Header();

        $header->addTo('foo@example.com', 'Mike Bar');
        $this->assertEquals($this->t['add_to_name'], $header->jsonString());
    }

    public function testAddToNameWithComma()
    {
        $header = new Smtpapi\Header();
        $header->addTo('foo@example.com', 'Mike, John and Jane Bar');
        $this->assertEquals(
            $this->t['add_to_name_with_comma'],
            $header->jsonString()
        );
    }

    public function testSetTos()
    {
        $header = new Smtpapi\Header();

        $header->setTos(array('setTos@mailinator.com'));
        $this->assertEquals($this->t['set_tos'], $header->jsonString());
    }

    public function testAddSubstitution()
    {
        $header = new Smtpapi\Header();

        $header->addSubstitution('sub', array('val'));
        $this->assertEquals($this->t['add_substitution'], $header->jsonString());
    }

    public function testSetSubstitutions()
    {
        $header = new Smtpapi\Header();

        $header->setSubstitutions(array('sub' => array('val')));
        $this->assertEquals($this->t['set_substitutions'], $header->jsonString());
    }

    public function testAddUniqueArg()
    {
        $header = new Smtpapi\Header();

        $header->addUniqueArg('add_unique_argument_key', 'add_unique_argument_value');
        $header->addUniqueArg('add_unique_argument_key_2', 'add_unique_argument_value_2');
        $this->assertEquals($this->t['add_unique_arg'], $header->jsonString());
    }

    public function testSetUniqueArgs()
    {
        $header = new Smtpapi\Header();

        $header->setUniqueArgs(array('set_unique_argument_key' => 'set_unique_argument_value'));
        $this->assertEquals($this->t['set_unique_args'], $header->jsonString());
    }

    public function testAddCategory()
    {
        $header = new Smtpapi\Header();

        $header->addCategory('addCategory');
        $header->addCategory('addCategory2');
        $this->assertEquals($this->t['add_category'], $header->jsonString());
    }

    public function testAddCategoryUnicode()
    {
        $header = new Smtpapi\Header();

        $header->addCategory('天破活殺');
        $header->addCategory('天翔十字鳳');
        $this->assertEquals($this->t['add_category_unicode'], $header->jsonString());
    }

    public function testAddCategoryUnicodeUnescape()
    {
        $header = new Smtpapi\Header();

        $header->addCategory('天破活殺');
        $header->addCategory('天翔十字鳳');
        $options = JSON_UNESCAPED_UNICODE;
        $this->assertEquals($this->t['add_category_unicode_unescape'], $header->jsonString($options));
    }

    public function testSetCategories()
    {
        $header = new Smtpapi\Header();

        $header->setCategories(array('setCategories'));
        $this->assertEquals($this->t['set_categories'], $header->jsonString());
    }

    public function testSetCategory()
    {
        $header = new Smtpapi\Header();

        $header->setCategory('setCategory');
        $this->assertEquals($this->t['set_category'], $header->jsonString());
    }

    public function testAddSection()
    {
        $header = new Smtpapi\Header();

        $header->addSection('set_section_key', 'set_section_value');
        $header->addSection('set_section_key_2', 'set_section_value_2');
        $this->assertEquals($this->t['add_section'], $header->jsonString());
    }

    public function testAddSendAt()
    {
        $header = new Smtpapi\Header();

        $header->setSendEachAt(array(1409348513, 1409348514));
        $header->setSendAt(1409348513);
        $this->assertEquals($this->t['set_send_at'], $header->jsonString());
    }

    public function testSendEachAt()
    {
        $header = new Smtpapi\Header();

        $header->setSendAt(1409348513);
        $header->setSendEachAt(array(1409348513, 1409348514, 1409348515));
        $this->assertEquals($this->t['set_send_each_at'], $header->jsonString());
    }

    public function testAddSendEachAt()
    {
        $header = new Smtpapi\Header();

        $header->setSendAt(1409348513);
        $header->addSendEachAt(1409348513);
        $header->addSendEachAt(1409348514);
        $header->addSendEachAt(1409348515);
        $this->assertEquals($this->t['add_send_each_at'], $header->jsonString());
    }

    public function testSetSendEachAtAndAddSendEachAt()
    {
        $header = new Smtpapi\Header();

        $header->setSendAt(1409348513);
        $header->setSendEachAt(array(1409348513));
        $header->addSendEachAt(1409348514);
        $header->addSendEachAt(1409348515);
        $this->assertEquals($this->t['set_send_each_at'], $header->jsonString());
    }

    public function testSetASMGroupID()
    {
        $header = new Smtpapi\Header();

        $header->setASMGroupID(2);
        $this->assertEquals($this->t['set_asm_group_id'], $header->jsonString());
    }

    public function testSetSections()
    {
        $header = new Smtpapi\Header();

        $header->setSections(array('set_section_key' => 'set_section_value'));
        $this->assertEquals($this->t['set_sections'], $header->jsonString());
    }

    public function testAddFilter()
    {
        $header = new Smtpapi\Header();

        $header->addFilter('footer', 'text/html', '<strong>boo</strong>');
        $this->assertEquals($this->t['add_filter'], $header->jsonString());
    }

    public function testSetFilters()
    {
        $header = new Smtpapi\Header();

        $filter = array(
            'footer' => array(
                'setting' => array(
                    'enable' => 1,
                    'text/plain' => 'You can haz footers!'
                )
            )
        );

        $header->setFilters($filter);
        $this->assertEquals($this->t['set_filters'], $header->jsonString());
    }

    public function testGetFilters()
    {
        $header = new Smtpapi\Header();
        $header->addFilter('footer', 'text/html', '<strong>boo</strong>');
        $filter = array('footer' => array('settings' => array('text/html' => '<strong>boo</strong>')));
        $this->assertEquals($filter, $header->getFilters());
    }

    public function testSetIpPool()
    {
        $header = new Smtpapi\Header();

        $header->setIpPool('foo');
        $this->assertEquals($this->t['set_ip_pool'], $header->jsonString());
    }

    public function testLicenseDateRange()
    {
        $license_file = file_get_contents("LICENSE.md");
        $current_year = date("Y");
        $this->assertInternalType("int", strpos($license_file, "Copyright (C) " . $current_year . ", Twilio SendGrid, Inc."));
    }
}
