<?php 


class SmtpapiTest_Header extends PHPUnit_Framework_TestCase {
  
  protected $t;

  protected function setUp() {
    $string   = file_get_contents(dirname(__FILE__) . "/../smtpapi_test_strings.json");
    $json     = json_decode($string, true);
    $this->t  = $json;
  }

  public function testConstructionHeader() {
    $header = new Smtpapi\Header();

    $this->assertEquals(get_class($header), "Smtpapi\Header");
  }

  public function testHasAToJsonStringMethod() {
    $header = new Smtpapi\Header();

    $this->assertEquals($this->t['to_json_string'], $header->toJsonString());
  }

  public function testAddTo() {
    $header = new Smtpapi\Header();

    $header->addTo('addTo@mailinator.com');
    $this->assertEquals($this->t['add_to'], $header->toJsonString());
  }

  public function testSetTos() {
    $header = new Smtpapi\Header();

    $header->setTos(array('addTo@mailinator.com'));
    $this->assertEquals($this->t['set_tos'], $header->toJsonString());
  }

  public function testAddSubstitution() {
    $header = new Smtpapi\Header();

    $header->addSubstitution('sub', array('val'));
    $this->assertEquals($this->t['add_substitution'], $header->toJsonString());
  }

  public function testSetSubstitutions() {
    $header = new Smtpapi\Header();

    $header->setSubstitutions(array('sub' => array('val')));
    $this->assertEquals($this->t['set_substitutions'], $header->toJsonString());
  }

  public function testAddUniqueArg() {
    $header = new Smtpapi\Header();

    $header->addUniqueArg('add_unique_argument_key', 'add_unique_argument_value');
    $header->addUniqueArg('add_unique_argument_key_2', 'add_unique_argument_value_2');
    $this->assertEquals($this->t['add_unique_arg'], $header->toJsonString());
  }

  public function testSetUniqueArgs() {
    $header = new Smtpapi\Header();

    $header->setUniqueArgs(array('set_unique_argument_key' => 'set_unique_argument_value'));
    $this->assertEquals($this->t['set_unique_args'], $header->toJsonString());
  }

  public function testAddCategory() {
    $header = new Smtpapi\Header();

    $header->addCategory('addCategory');
    $header->addCategory('addCategory2');
    $this->assertEquals($this->t['add_category'], $header->toJsonString());
  }

  public function testSetCategories() {
    $header = new Smtpapi\Header();

    $header->setCategories(array('setCategories'));
    $this->assertEquals($this->t['set_categories'], $header->toJsonString());
  }

  public function testAddSection() {
    $header = new Smtpapi\Header();

    $header->addSection('set_section_key', 'set_section_value');
    $header->addSection('set_section_key_2', 'set_section_value_2');
    $this->assertEquals($this->t['add_section'], $header->toJsonString());
  }

  public function testSetSections() {
    $header = new Smtpapi\Header();

    $header->setSections(array('set_section_key' => 'set_section_value'));
    $this->assertEquals($this->t['set_sections'], $header->toJsonString());
  }

  public function testAddFilter() {
    $header = new Smtpapi\Header();

    $header->addFilter('footer', 'text/html', '<strong>boo</strong>');
    $this->assertEquals($this->t['add_filter'], $header->toJsonString());
  }


  public function testSetFilters() {
    $header = new Smtpapi\Header();

    $filter = array( 
      'footer' => array( 
        'setting' => array( 
          'enable' => 1,
          "text/plain" => 'You can haz footers!'
        )
      )
    ); 

    $header->setFilters($filter);
    $this->assertEquals($this->t['set_filters'], $header->toJsonString());
  }

}
