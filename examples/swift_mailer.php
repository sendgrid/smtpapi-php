<?php
# The following example builds the X-SMTPAPI headers and adds them to swiftmailer. [Swiftmailer](http://swiftmailer.org/) then sends the email through SendGrid. You can use this same code in your application or optionally you can use [sendgrid-php](http://github.com/sendgrid/sendgrid-php).

require dirname(__DIR__).'/vendor/autoload.php';
require dirname(__DIR__).'/lib/Smtpapi.php';
require dirname(__DIR__).'/lib/Smtpapi/Header.php';
use Smtpapi\Header;

$transport = \Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);

$sendgrid_username = getenv('SENDGRID_USERNAME');
$sendgrid_password = getenv('SENDGRID_PASSWORD');


$transport->setUsername($sendgrid_username);
$transport->setPassword($sendgrid_password);

$mailer = \Swift_Mailer::newInstance($transport);

$message = new \Swift_Message();
$message->setTo(array('test1@example.com'));
$message->setFrom('test2@example.com');
$message->setSubject('Hello');
$message->setBody('%how% are you doing?');

$header = new Header();
$header->addSubstitution('%how%', array('Owl'));

$message_headers = $message->getHeaders();
$message_headers->addTextHeader(HEADER::NAME, $header->jsonString());

try {
    $response = $mailer->send($message);
    print_r($response);
} catch(\Swift_TransportException $e) {
    print_r('Bad username / password');
}
?>