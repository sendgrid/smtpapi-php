<?php

require dirname(dirname(__FILE__)) . '/lib/Smtpapi.php';
Smtpapi::register_autoloader();
// @codingStandardsIgnoreStart
function autoload_tests($class)
{
// @codingStandardsIgnoreEnd
    if (strpos($class, 'SmtpapiTest_') !== 0) {
        return;
    }

    $class = substr($class, 13);
    $file = str_replace('_', '/', $class);

    if (file_exists(dirname(__FILE__) . '/' . $file . '.php')) {
        include_once dirname(__FILE__) . '/' . $file . '.php';
    }
}

spl_autoload_register('autoload_tests');
