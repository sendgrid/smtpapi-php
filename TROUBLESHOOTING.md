If you can't find a solution below, please open an [issue](https://github.com/sendgrid/smtpapi-php/issues).

## Table of Contents

* [Viewing the Request Body](#request-body)

<a name="request-body"></a>
## Viewing the Request Body

When debugging or testing, it may be useful to examine the raw request body to compare against the [documented format](https://sendgrid.com/docs/API_Reference/SMTP_API/index.html).

In the `examples/example.php` file, after you've added all custom header data, you can do the following two things:

- Run `var_dump($header);` - Dump out the `Smtpapi\Header` object
- Run `print $header->jsonString();` to print out a stringified json formatted X-SMTPAPI header
