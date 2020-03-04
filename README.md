![Twilio SendGrid Logo](https://github.com/sendgrid/sendgrid-python/raw/master/twilio_sendgrid_logo.png)

[![BuildStatus](https://api.travis-ci.org/sendgrid/smtpapi-php.png?branch=master)](https://travis-ci.org/sendgrid/smtpapi-php)
[![Latest Stable Version](https://poser.pugx.org/sendgrid/smtpapi/version.png)](https://packagist.org/packages/sendgrid/smtpapi)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/sendgrid/smtpapi.svg?style=flat-square)](https://packagist.org/packages/sendgrid/smtpapi )
[![Email Notifications Badge](https://dx.sendgrid.com/badge/php)](https://dx.sendgrid.com/newsletter/php)
[![Twitter Follow](https://img.shields.io/twitter/follow/sendgrid.svg?style=social&label=Follow)](https://twitter.com/sendgrid)
[![GitHub contributors](https://img.shields.io/github/contributors/sendgrid/smtpapi-php.svg)](https://github.com/sendgrid/smtpapi-php/graphs/contributors)
[![MIT licensed](https://img.shields.io/badge/license-MIT-blue.svg)](./LICENSE.md)

**This module helps build Twilio SendGrid's SMTP API headers.**

Learn more about the SMTP API at [Twilio SendGrid's documentation](https://sendgrid.com/docs/API_Reference/SMTP_API/index.html).

<a name="announcements"></a>
# Announcements

All updates to this module is documented in our [CHANGELOG](https://github.com/sendgrid/smtpapi-php/blob/master/CHANGELOG.md).

# Table of Contents

* [Installation](#installation)
* [Quick Start](#quick-start)
* [Usage](#usage)
* [Announcements](#announcements)
* [Roadmap](#roadmap)
* [How to Contribute](#how-to-contribute)
* [About](#about)
* [License](#license)

<a name="installation"></a>
# Installation

## Prerequisites

- PHP version 5.6, 7.0, 7.1, 7.2, 7.3, or 7.4
- The Twilio SendGrid service, starting at the [free level](https://sendgrid.com/free?source=smtpapi-php)

## Install with Composer

The following recommended installation requires [composer](http://getcomposer.org).

Add the following to your `composer.json` file.

```json
{
    "require": {
        "sendgrid/smtpapi": "^0.6.5"
    }
}
```

Then at the top of your script require the autoloader:

```bash
require 'vendor/autoload.php';
```

#### Alternative: Install package from zip

If you are not using Composer, simply download and install the **[latest packaged release of the library as a zip](https://github.com/sendgrid/smtpapi-php/releases/download/0.6.5/smtpapi-php.zip)**.

[**⬇︎ Download Packaged Library ⬇︎**](https://github.com/sendgrid/smtpapi-php/releases/download/0.6.5/smtpapi-php.zip)

Then require the library from package:

```php
require('path/to/smtpapi-php/smtpapi-php.php');
```

Previous versions of the library can be downloaded directly from [GitHub](https://github.com/sendgrid/smtpapi-php/releases).

## Setup Environment Variables

### Environment Variable

Update the development environment with your [SENDGRID_API_KEY](https://app.sendgrid.com/settings/api_keys), for example:

```bash
echo "export SENDGRID_API_KEY='YOUR_API_KEY'" > sendgrid.env
echo "sendgrid.env" >> .gitignore
source ./sendgrid.env
```

<a name="quick-start"></a>
# Quick Start

```php
$header = new Smtpapi\Header();
$header->addTo('test1@example.com');
$header->addTo('test2@example.com');
print $header->jsonString();
```

<a name="usage"></a>
# Usage

- [Twilio SendGrid Docs](https://sendgrid.com/docs/API_Reference/SMTP_API/index.html)
- [Example Code](https://github.com/sendgrid/smtpapi-php/tree/master/examples)

<a name="roadmap"></a>
## Roadmap

If you are interested in the future direction of this project, please take a look at our [milestones](https://github.com/sendgrid/smtpapi-php/milestones). We would love to hear your feedback.

<a name="how-to-contribute"></a>
## How to Contribute

We encourage contribution to our projects, please see our [CONTRIBUTING](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md) guide for details.

Quick links:

- [Feature Request](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#feature_request)
- [Bug Reports](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#submit_a_bug_report)
- [Sign the CLA to Create a Pull Request](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#cla)
- [Improvements to the Codebase](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#improvements_to_the_codebase)
- [Review Pull Requests](https://github.com/sendgrid/smtpapi-php/blob/master/CONTRIBUTING.md#code-reviews)

<a name="about"></a>
# About

smtpapi-php is guided and supported by the Twilio [Developer Experience Team](mailto:dx@sendgrid.com).

smtpapi-php is maintained and funded by Twilio SendGrid, Inc. The names and logos for smtpapi-php are trademarks of Twilio SendGrid, Inc.

<a name="license"></a>
# License
[The MIT License (MIT)](LICENSE.md)
