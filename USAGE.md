# Usage

## Initialisation

```php
// If you are using Composer
require 'vendor/autoload.php';

$header = new Smtpapi\Header();
```

## Table of Contents

- [Recipients](#recipients)
- [Categories](#categories)
- [Substitution](#substitution)
- [Sections](#sections)
- [Filters](#filters)
- [Send At](#send-at)
- [Batches](#batches)
- [Groups](#groups)
- [IPs](#ips)

<a name="recipients">Recipients</a>
## Recipients

#### Adding a single recipient

The `Header::addTo()` method allows you to add a new recipient to the `$to` array.

To do this, you can use the function with an email address, and optionally include the recipient's name.

```php
$header->setTo('example@example.com');
$header->setTo('example@example.com', 'An Example User');
```

#### Setting multiple recipients

The `Header::setTos()` method allows you to set multiple recipients by providing an array of email addresses.

This will set the `$to` array to the array you provide. This will need to either be an array of emails, or if names are provided, they need to be formatted as `{{ name }} <{{ email }}>`.

```php
$header->setTos([
    'example@example.com',
    'An Example User <example@example.com',
]);
```
