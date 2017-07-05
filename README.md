[![BuildStatus](https://api.travis-ci.org/sendgrid/smtpapi-php.png?branch=master)](https://travis-ci.org/sendgrid/smtpapi-php)
[![Latest Stable Version](https://poser.pugx.org/sendgrid/smtpapi/version.png)](https://packagist.org/packages/sendgrid/smtpapi)

**This module helps build SendGrid's SMTP API headers.**

Learn more about the SMTP API at [SendGrid's documentation](https://sendgrid.com/docs/API_Reference/SMTP_API/index.html).

# Announcements

All updates to this module is documented in our [CHANGELOG](https://github.com/sendgrid/smtpapi-php/blob/master/CHANGELOG.md).

# Installation

## Prerequisites

- PHP version 5.6 or 7.0
- The SendGrid service, starting at the [free level](https://sendgrid.com/free?source=smtpapi-php)

## Install with Composer

The following recommended installation requires [http://getcomposer.org](composer).

Add the following to your `composer.json` file.

```json
{
    "require": {
        "sendgrid/smtpapi": "~0.6@dev"
    }
}
```

Then at the top of your script require the autoloader:

```bash
require 'vendor/autoload.php';
```

## Alternative: Install from zip

If you are not using Composer, simply download and install the **[latest packaged release of the library as a zip](https://sendgrid-open-source.s3.amazonaws.com/smtpapi-php/smtpapi-php.zip)**.

Then require the library from package:

```php
require('path/to/smtpapi-php/smtpapi-php.php');
```

Previous versions of the library can be found in the [version index](https://sendgrid-open-source.s3.amazonaws.com/index.html).

# Quick Start

```php
$header = new Smtpapi\Header();
$header->addTo('test1@example.com');
$header->addTo('test2@example.com');
print $header->jsonString();
```

# Usage

- [SendGrid Docs](https://sendgrid.com/docs/API_Reference/SMTP_API/index.html)
- [Example Code](https://github.com/sendgrid/smtpapi-php/tree/master/examples)

## Roadmap

If you are intersted in the future direction of this project, please take a look at our [milestones](https://github.com/sendgrid/smtpapi-php/milestones). We would love to hear your feedback.

## How to Contribute

We encourage contribution to our projects, please see our [CONTRIBUTING](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md) guide for details.

Quick links:

- [Feature Request](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#feature_request)
- [Bug Reports](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#submit_a_bug_report)
- [Sign the CLA to Create a Pull Request](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#cla)
- [Improvements to the Codebase](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#improvements_to_the_codebase)

# About

smtpapi-php is guided and supported by the SendGrid [Developer Experience Team](mailto:dx@sendgrid.com).

smtpapi-php is maintained and funded by SendGrid, Inc. The names and logos for smtpapi-php are trademarks of SendGrid, Inc.

![SendGrid Logo]
(https://uiux.s3.amazonaws.com/2016-logos/email-logo%402x.png)
