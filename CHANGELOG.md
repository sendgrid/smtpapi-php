# Change Log
All the notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](http://semver.org/).

[2020-10-14] Version 0.6.7
--------------------------
**Library - Chore**
- [PR #90](https://github.com/sendgrid/smtpapi-php/pull/90): add style standards check. Thanks to [@pangaunn](https://github.com/pangaunn)!


[2020-08-19] Version 0.6.6
--------------------------
**Library - Docs**
- [PR #89](https://github.com/sendgrid/smtpapi-php/pull/89): Update *.md docs using Grammar.ly. Thanks to [@vinayak42](https://github.com/vinayak42)!

**Library - Chore**
- [PR #114](https://github.com/sendgrid/smtpapi-php/pull/114): update GitHub branch references to use HEAD. Thanks to [@thinkingserious](https://github.com/thinkingserious)!


[2020-03-04] Version 0.6.5
--------------------------
**Library - Chore**
- [PR #113](https://github.com/sendgrid/smtpapi-php/pull/113): add PHP 7.4 to Travis and test with lowest dependencies. Thanks to [@childish-sambino](https://github.com/childish-sambino)!


[2020-02-19] Version 0.6.4
--------------------------
**Library - Chore**
- [PR #112](https://github.com/sendgrid/smtpapi-php/pull/112): add Twilio branding. Thanks to [@thinkingserious](https://github.com/thinkingserious)!


[2020-01-22] Version 0.6.3
--------------------------
**Library - Docs**
- [PR #111](https://github.com/sendgrid/smtpapi-php/pull/111): baseline all the templated markdown docs. Thanks to [@childish-sambino](https://github.com/childish-sambino)!


[2020-01-10] Version 0.6.2
--------------------------
**Library - Fix**
- [PR #94](https://github.com/sendgrid/smtpapi-php/pull/94): Adding Quotes around "To" Name. Thanks to [@jmauerhan](https://github.com/jmauerhan)!
- [PR #60](https://github.com/sendgrid/smtpapi-php/pull/60): remove composer.lock from .gitignore. Thanks to [@fishnux](https://github.com/fishnux)!

**Library - Docs**
- [PR #106](https://github.com/sendgrid/smtpapi-php/pull/106): Added Announcement. Thanks to [@krischoi07](https://github.com/krischoi07)!
- [PR #84](https://github.com/sendgrid/smtpapi-php/pull/84): update old URL's with the latest ones. Thanks to [@ssiddhantsharma](https://github.com/ssiddhantsharma)!
- [PR #77](https://github.com/sendgrid/smtpapi-php/pull/77): makes Environmental Variables a sub topic in CONTRIBUTING.md. Thanks to [@thepriefy](https://github.com/thepriefy)!
- [PR #109](https://github.com/sendgrid/smtpapi-php/pull/109): Add use cases directory. Thanks to [@mtroiani](https://github.com/mtroiani)!
- [PR #82](https://github.com/sendgrid/smtpapi-php/pull/82): Add Code Reviews Section to README. Thanks to [@primis](https://github.com/primis)!
- [PR #73](https://github.com/sendgrid/smtpapi-php/pull/73): Added license badge. Thanks to [@yashasingh](https://github.com/yashasingh)!
- [PR #68](https://github.com/sendgrid/smtpapi-php/pull/68): Add missing '>' in SetTos usage example. Thanks to [@tariq1890](https://github.com/tariq1890)!
- [PR #70](https://github.com/sendgrid/smtpapi-php/pull/70): Create .codeclimate.yml. Thanks to [@jefersondaniel](https://github.com/jefersondaniel)!
- [PR #54](https://github.com/sendgrid/smtpapi-php/pull/54): add missing back-ticks to CONTRIBUTING.md. Thanks to [@pushkyn](https://github.com/pushkyn)!
- [PR #53](https://github.com/sendgrid/smtpapi-php/pull/53): add github PR template. Thanks to [@pushkyn](https://github.com/pushkyn)!
- [PR #49](https://github.com/sendgrid/smtpapi-php/pull/49): Add a USAGE.md file. Thanks to [@pxgamer](https://github.com/pxgamer)!
- [PR #51](https://github.com/sendgrid/smtpapi-php/pull/51): fix typo in contributing.md. Thanks to [@pushkyn](https://github.com/pushkyn)!
- [PR #46](https://github.com/sendgrid/smtpapi-php/pull/46): add ISSUE_TEMPLATE. Thanks to [@eddytan](https://github.com/eddytan)!
- [PR #47](https://github.com/sendgrid/smtpapi-php/pull/47): Add Packagist to README.md. Thanks to [@eddytan](https://github.com/eddytan)!
- [PR #43](https://github.com/sendgrid/smtpapi-php/pull/43): Add table of contents to README. Thanks to [@sierzput](https://github.com/sierzput)!
- [PR #38](https://github.com/sendgrid/smtpapi-php/pull/38): More seo friendly links in README. Thanks to [@ladhadha](https://github.com/ladhadha)!
- [PR #39](https://github.com/sendgrid/smtpapi-php/pull/39): Update the badge. Thanks to [@ladhadha](https://github.com/ladhadha)!

**Library - Chore**
- [PR #76](https://github.com/sendgrid/smtpapi-php/pull/76): Add CodeCov support to .travis.yml. Thanks to [@mptap](https://github.com/mptap)!
- [PR #110](https://github.com/sendgrid/smtpapi-php/pull/110): prep the repo for automated releasing. Thanks to [@childish-sambino](https://github.com/childish-sambino)!
- [PR #62](https://github.com/sendgrid/smtpapi-php/pull/62): First composer.lock commit. Thanks to [@fishnux](https://github.com/fishnux)!

**Library - Test**
- [PR #71](https://github.com/sendgrid/smtpapi-php/pull/71): Add license date range test. Thanks to [@nocategory](https://github.com/nocategory)!


[2017-07-05] Version 0.6.1
---------------------------

### Fixed
- #27 Remove Swift Mailer as a dependency
- Thanks to [Nikolas](https://github.com/nikoskip) for the PR!

## [v0.6.0] - (2017-07-05) ##
### Added
- #26 batch_id header added
- Thanks to [Nikolas](https://github.com/nikoskip) for the PR!

## [v0.5.0] - (2015-04-13) ##
### Added
- Add getFilters function

## [v0.4.0] - (2015-03-27) ##
### Added
- Add setCategory function

## [v0.3.0] - (2015-03-26) ##
### Added
- Add IP Pool support
- Normalize project file using PHP-FIG convention

## [v0.2.0] - (2014-01-23) ##
### Added
- Add setASMGroupID function
- Add CHANGELOG.md







