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
- [Advanced Suppression Manager (ASM)](#asm)
- [Send At](#send-at)
- [Batches](#batches)
- [Groups](#groups)
- [IPs](#ips)

<a name="recipients"></a>
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

<a name="categories"></a>
## Categories

Categories are a useful way to organise your email analytics by tagging your emails with a specific type or topic.

There are multiple methods available for setting your categories when sending emails.

#### Adding a single category

The `Header::addCategory()` method can be used to add a category to your list.

```php
$header->addCategory('marketing');
```

#### Setting multiple categories

The `Header::setCategories()` method can be used to set your categories list to an array of strings.

This is useful when there are a set amount of categories required for the email you are sending.

This method will remove any categories that have been previously set.

```php
$header->setCategories([
    'marketing',
    'sales',
);
```

#### Setting a single category

The `Header::setCategory()` method can be used to set a single specific category.

It is useful for removing previously set categories. And will create a new array with the string you provide.

This method will remove any categories that have been previously set.

```php
$header->setCategory('marketing');
```

<a name="substitution"></a>
## Substitution

Substitutions are a great way of writing short dynamic email content easily, 

#### Adding a single substitution string

The `Header::addSubstitution()` method can be used to replace content for recipients.

```php
$header->addSubstitution('-name-', ['John', 'Jane']);
```

#### Setting substitution strings

The `Header::setSubstitutions()` method can be used to replace content for any number of strings.

This method will reset any key pairs that have previously been set.

```php
$header->setSubstitutions([
    '-name-' => ['John', 'Jane'],
    '-number-' => ['555.555.5555', '777.777.7777'],
);
```

<a name="sections"></a>
## Sections

Sections are similar to substitutions, but are specific to the actual message rather than the recipient.

This is useful when you are sending multiple emails with the same style, but different content.

#### Adding a section

The `Header::addSection()` method can be used to add a new section to the sections array. This is useful for building up a list of sections dynamically, perhaps based on a user's actions.

```php
$header->addSection('-event_details-', 'The event will be held tomorrow.');
```

#### Setting multiple sections

The `Header::setSections()` allows you to set multiple sections in a single array.

This is good when sending out multiple emails where no dynamic variation is required.

This will reset any section key-pairs that have previously been set.

```php
$header->setSections([
    '-event_details-' => 'The event will be held tomorrow.',
    '-event_open_time-' => 'It will be open from 1am to 9pm.',
]);
```

<a name="filters"></a>
## Filters

Filters allow you to dynamically toggle features such as click tracking, blind copying and DKIM domain validation.

#### Adding a single filter

Adding a filter is easy with the `Header::addFilter()` method.

This method requires 3 values:
- The filter's name
- The parameter's name
- The value

```php
$header->addFilter('dkim', 'use_from', true);
$header->addFilter('dkim', 'domain', 'example.com');
```

#### Setting multiple filters

Filters can also be added as an array of multiple filters using the `Header::setFilters()` method.

```php
$header->setFilters([
    'bcc' => [
        'settings' => [
            'enable' => true,
            'email' => 'you@example.com',
        ],
    ],
    'dkim' => [
        'settings' => [
            'use_from' => true,
            'domain' => 'example.com',
        ],
    ],
]);
```

<a name="asm"></a>
## Advanced Suppression Management (ASM)

Advanced Suppression Management (or Unsubscribe Groups) are a good way of allowing recipients to unsubscribe from a specific set of emails.

You can 

#### Setting the ASM group ID

The `Header::setASMGroupID()` method is a quick way to set the type of email that you are sending.

All it requires is the ID of the ASM group, which can be found using the API.

```php
$header->setASMGroupID(42);
```
