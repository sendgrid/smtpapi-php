<?php

namespace Smtpapi;

class Header {
  public $to           = array();
  public $category     = array();
  public $sub          = array();
  public $section      = array();
  public $unique_args  = array();
  public $filters      = array();
  public $headers      = array();

  public function __construct() {}

  public function addTo($email, $name=null) {
    $this->to[] = ($name ? $name . " <" . $email . ">" : $email);
    return $this;
  }

  public function setTo($email) {
    $this->to = array($email);
    return $this;
  }

  public function setTos(array $emails) { 
    $this->to = $emails;
    return $this;
  }

  public function removeTo($search_term) {
    $this->to = array_values(array_filter($this->to, function($item) use($search_term) {
      return !preg_match("/" . $search_term . "/", $item);
    }));
    return $this;
  }

  public function addCategory($category) {
    $this->category[] = $category;
    return $this;
  }

  public function setCategory($category) {
    $this->category = array($category);
    return $this;
  }

  public function setCategories($categories) {
    $this->category = $categories;
    return $this;
  }

  public function removeCategory($category) {
    $this->_removeFromList($this->category, $category);
    return $this;
  }

  public function setSubstitutions($key_value_pairs) {
    $this->sub = $key_value_pairs;
    return $this;
  }

  public function addSubstitution($from_value, array $to_values) {
    $this->sub[$from_value] = $to_values;
    return $this;
  }

  public function setSection(array $key_value_pairs) {
    $this->section = $key_value_pairs;
    return $this;
  }
  
  public function addSection($from_value, $to_value) {
    $this->section[$from_value] = $to_value;
    return $this;
  }

  public function setUniqueArgs(array $key_value_pairs) {
    $this->unique_args = $key_value_pairs;
    return $this;
  }
    
  public function addUniqueArgs($key, $value) {
    $this->unique_args[$key] = $value;
    return $this;
  }

  public function setFilterSetting($filter_setting) {
    $this->filters = $filter_setting;
    return $this;
  }
  
  public function addFilterSetting($filter_name, $parameter_name, $parameter_value) {
    $this->filters[$filter_name]['settings'][$parameter_name] = $parameter_value;
    return $this;
  }  
  
  public function setHeaders($key_value_pairs) {
    $this->headers = $key_value_pairs;
    return $this;
  }  
  
  public function addHeader($key, $value) {
    $this->headers[$key] = $value;
    return $this;
  }

  public function removeHeader($key) {
    unset($this->headers[$key]);
    return $this;
  }

  private function _getHeaders() {
    $this->headers;

    if ($this->to) {
      $this->headers["to"] = $this->to;
    }
    if ($this->category) {
      $this->headers["category"] = $this->category;
    }
    if ($this->sub) {
      $this->headers["sub"] = $this->sub;
    }
    if ($this->section) {
      $this->headers["section"] = $this->section;
    }
    if ($this->unique_args) {
      $this->headers["unique_args"] = $this->unique_args;
    }
    if ($this->filters) {
      $this->headers["filters"] = $this->filters;
    }
  
    return $this->headers;
  }

  private function _removeFromList(&$list, $item, $key_field = null) {
    foreach ($list as $key => $val) {
      if($key_field) {
        if($val[$key_field] == $item) {
          unset($list[$key]);
        }
      } else {
        if ($val == $item) {
          unset($list[$key]);
        } 
      }
    }
    //repack the indices
    $list = array_values($list);
  }

  public function toJsonString() {
    if (count($this->_getHeaders()) <= 0) {
      return "{}";
    }

    $json_string = json_encode($this->_getHeaders(), JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_SLASHES);
    
    // unescape 5.3 PHP's escaping of forward slashes
    return str_replace('\\/', '/', $json_string);
  }
}
