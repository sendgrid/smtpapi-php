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

<a name="categories">Categories</a>
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