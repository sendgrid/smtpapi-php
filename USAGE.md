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
- [IP Pools](#ip-pools)
- [Retrieving Data](#retrieving-data)

<a name="recipients"></a>
## Recipients

#### Adding a single recipient

The `Header::addTo()` method allows you to add a new recipient to the `$to` array.

To do this, you can use the function with an email address, and optionally include the recipient's name as a second parameter.

```php
$header->setTo('example@example.com'); // An email address with no name provided
$header->setTo('example@example.com', 'An Example User');  // An email address with a name provided as the second parameter
```

#### Setting multiple recipients

The `Header::setTos()` method allows you to set multiple recipients by providing an array of email addresses.

This will set the `$to` array to the array you provide. This will need to either be an array of emails or if names are provided, they need to be formatted as `{{ name }} <{{ email }}>`.

```php
$header->setTos([
    'example@example.com', // An email address with no name
    'An Example User <example@example.com>', // An email with a name field
]);
```

<a name="categories"></a>
## Categories

Categories are a useful way to organize your email analytics by tagging your emails with a specific type or topic.

There are multiple methods available for setting your categories when sending emails.

#### Adding a single category

The `Header::addCategory()` method can be used to add a category to your list.

```php
$header->addCategory('marketing'); // Add a new category of 'marketing' to the array of categories
```

#### Setting multiple categories

The `Header::setCategories()` method can be used to set your categories list to an array of strings.

This is useful when there are a set amount of categories required for the email you are sending.

This method will remove any categories that have been previously set.

```php
$header->setCategories([
    'marketing',
    'sales',
); // Sets the current categories to be 'marketing' and 'sales'
```

#### Setting a single category

The `Header::setCategory()` method can be used to set a single specific category.

It is useful for removing previously set categories and will create a new array with the string you provide.

This method will remove any categories that have been previously set.

```php
$header->setCategory('marketing'); // Reset the categories to be 'marketing' only
```

<a name="substitution"></a>
## Substitution

Substitutions are a great way of writing short dynamic email content easily.

#### Adding a single substitution string

The `Header::addSubstitution()` method can be used to replace content for recipients.

```php
$header->addSubstitution('-name-', ['John', 'Jane']); // Replace the -name- variable with either John or Jane based on the recipient
```

#### Setting substitution strings

The `Header::setSubstitutions()` method can be used to replace content for any number of strings.

This method will reset any key pairs that have previously been set.

```php
$header->setSubstitutions([
    '-name-' => ['John', 'Jane'], // Replace the -name- variable to John or Jane
    '-number-' => ['555.555.5555', '777.777.7777'], // Replace the -number- variable with the provided numbers
);
```

<a name="sections"></a>
## Sections

Sections are similar to substitutions but are specific to the actual message rather than the recipient.

This is useful when you are sending multiple emails with the same style, but different content.

Note: Substitution variables can also be included within a section, but section variables cannot.

#### Adding a section

The `Header::addSection()` method can be used to add a new section to the sections array. This is useful for building up a list of sections dynamically, perhaps based on a user's actions.

```php
$header->addSection('-event_details-', 'The event will be held tomorrow.'); // Replaces -event_details- with the event's string
```

#### Setting multiple sections

The `Header::setSections()` allows you to set multiple sections in a single array.

This is useful when sending out multiple emails where no dynamic variation is required.

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
$header->setASMGroupID(42); // Sets the ASM ID to 42
```

<a name="send-at"></a>
## Send At

Scheduling the time of your email campaign can be done using a collection of quick and easy methods.

#### Adding a single 'send at' date

The `Header::addSendEachAt()` method is a good way to add the time to send at.

This method requires a Unix timestamp as the input.

```php
$header->addSendEachAt(1508694645);
```

#### Setting multiple 'send at' date

The `Header::setSendEachAt()` method is useful for setting an array of times that recipients have their emails sent.

This method requires an array of Unix timestamps as the input.

```php
$header->addSendEachAt([
    1508694645,
    1508694835,
);
```

#### Setting a single date to send all emails

The `Header::setSendAt()` method is useful for setting a single time that all emails in the collection will be sent.

This method requires a unix timestamp as the input.

```php
$header->setSendAt(1508694645);
```

<a name="batches"></a>
## Batches

Batches are a great way to group a collection of scheduled items for sending. It allows you to cancel scheduled emails and provides more control over the emails.

The batch ID can be set using the `Header::addBatchId()` method. You must have generated the batch ID first through the API.

```php
$header->addBatchId('HkJ5yLYULb7Rj8GKSx7u025ouWVlMgAi'); // Adds a previously generated batch ID to the emails
```

<a name="ip-pools"></a>
## IP Pools

IP Pools allow you to group Twilio SendGrid IP addresses. For example, if you have a set of marketing IPs, you can assign them a pool ID of `marketing`.

The IP Pool name can be set using the `Header::setIpPool()` method. You must have generated the IP Pool first through the API.

```php
$header->setIpPool('marketing'); // Sets the IP Pool to be the marketing collection of IPs
```


<a name="retrieving-data"></a>
## Retrieving Data

The `Header` class provides a couple of methods for retrieving the stored data.

#### Retrieving data as an array

The `Header::toArray()` method allows the easy exporting of data from the header instance as an array.

The output will be dynamically generated from the properties that have been set.

```php
$headerArray = $header->toArray(); // Returns the data as an array

print_r($headerArray);

// [
//     'to' => 'example@example.com',
//     'category' => [
//          'marketing',
//          'sales',
//     ],
//     'send_at' => 1508694645,
//     'batch_id' => 'HkJ5yLYULb7Rj8GKSx7u025ouWVlMgAi',
//     'asm_group_id' => 42,
//     'ip_pool' => 'marketing',
// ]
```

#### Retrieving data as a JSON string

The `Header::jsonString()` method allows the data from the header instance to be exported as a JSON string.

It has an optional variable that can be set to any flags that are available for [`json_encode()`](https://php.net/manual/function.json-encode.php#options).

```php
$headerString = $header->jsonString();
$headerStringPretty = $header->jsonString(JSON_PRETTY_PRINT);

echo $headerString;
echo $headerStringPretty;

// {"to":"example@example.com","category":["marketing","sales"],"send_at":1508694645,"batch_id":"HkJ5yLYULb7Rj8GKSx7u025ouWVlMgAi","asm_group_id":"42","ip_pool":"marketing"}

// {
//   "to": "example@example.com",
//   "category": [
//     "marketing",
//     "sales"
//   ],
//   "send_at": 1508694645,
//   "batch_id": "HkJ5yLYULb7Rj8GKSx7u025ouWVlMgAi",
//   "asm_group_id": "42",
//   "ip_pool": "marketing"
// }
```
