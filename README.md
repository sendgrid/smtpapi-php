# smtpapi-php

This php library allows you to quickly and more easily generate SendGrid X-SMTPAPI headers.

[![BuildStatus](https://travis-ci.org/sendgrid/smtpapi.png?branch=master)](https://travis-ci.org/sendgrid/smtpapi)
[![Latest Stable Version](https://poser.pugx.org/sendgrid/smtpapi/version.png)](https://packagist.org/packages/sendgrid/smtpapi)

## Installation

The following recommended installation requires [http://getcomposer.org](composer).

Add the following to your `composer.json` file.

```json
{  
  "minimum-stability" : "dev",
  "require": {
    "sendgrid/smtpapi": "0.0.1"
  }
}
``` 

Then at the top of your script require the autoloader:                 
 
```bash 
require 'vendor/autoload.php';                                         
``` 

## Usage

### Initializing

```php
$header    = Smtpapi\Header();
```

### toJsonString

This gives you back the stringified json formatted X-SMTPAPI header. Use this with your [smtp client](https://github.com/andris9/simplesmtp) of choice.

```php
$header    = Smtpapi\Header();
$header.toJsonString();
```

## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Added some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

## Running Tests

The existing tests in the `test` directory can be run using [PHPUnit](https://github.com/sebastianbergmann/phpunit/) with the following command:

````bash
composer update --dev
cd test
../vendor/bin/phpunit
```

or if you already have PHPUnit installed globally.

```bash
cd test
phpunit
```
