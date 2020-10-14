![Twilio SendGrid Logo](twilio_sendgrid_logo.png)

[![BuildStatus](https://api.travis-ci.org/sendgrid/smtpapi-php.png?branch=main)](https://travis-ci.org/sendgrid/smtpapi-php)
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
**The default branch name for this repository has been changed to `main` as of 07/27/2020.**

All the updates to this module are documented in our [CHANGELOG](CHANGELOG.md).

# Table of Contents

* [Installation](#installation)
* [Quick Start](#quick-start)
* [Usage](#usage)
* [Announcements](#announcements)
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
        "sendgrid/smtpapi": "^0.6.7"
    }
}
```

Then at the top of your script require the autoloader:

```bash
require 'vendor/autoload.php';
```

#### Alternative: Install package from zip

If you are not using Composer, simply download and install the **[latest packaged release of the library as a zip](https://github.com/sendgrid/smtpapi-php/releases/download/0.6.7/smtpapi-php.zip)**.

[**⬇︎ Download Packaged Library ⬇︎**](https://github.com/sendgrid/smtpapi-php/releases/download/0.6.7/smtpapi-php.zip)

Then require the library from package:

```php
require('path/to/smtpapi-php/smtpapi-php.php');
```

The previous versions of the library can be downloaded directly from [GitHub](https://github.com/sendgrid/smtpapi-php/releases).

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
- [Example Code](examples)

<a name="how-to-contribute"></a>
## How to Contribute

We encourage contributions to our projects; please see our [CONTRIBUTING](CONTRIBUTING.md) guide for details.

Quick links:

- [Feature Request](CONTRIBUTING.md#feature_request)
- [Bug Reports](CONTRIBUTING.md#submit_a_bug_report)
- [Improvements to the Codebase](CONTRIBUTING.md#improvements_to_the_codebase)
- [Review Pull Requests](CONTRIBUTING.md#code-reviews)

<a name="about"></a>
# About

smtpapi-php is maintained and funded by Twilio SendGrid, Inc. The names and logos for smtpapi-php are trademarks of Twilio SendGrid, Inc.

If you need help installing or using the library, please check the [Twilio SendGrid Support Help Center](https://support.sendgrid.com).

If you've instead found a bug in the library or would like new features added, go ahead and open issues or pull requests against this repo!

<a name="license"></a>
# License
[The MIT License (MIT)](LICENSE.md)
