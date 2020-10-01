<?php
require dirname(__DIR__).'/vendor/autoload.php';
require dirname(__DIR__).'/lib/Smtpapi.php';
require dirname(__DIR__).'/lib/Smtpapi/Header.php';

$header = new Smtpapi\Header();

# [To](https://sendgrid.com/docs/API_Reference/SMTP_API/building_an_smtp_email.html)
$header->addTo('test1@example.com');
$header->addTo('test2@example.com');
#$header->setTos(array('you@youremail.com', 'other@otheremail.com'));

# [Substitutions](http://sendgrid.com/docs/API_Reference/SMTP_API/substitution_tags.html)
$header->addSubstitution('keep', array('secret')); // sub = {keep: ['secret']}
$header->addSubstitution('other', array('one', 'two')); // sub = {keep: ['secret'], other: ['one', 'two']}
#$header->setSubstitutions(array('keep' => array('secret'))); // sub = {keep: ['secret']}

# [Unique Arguments](http://sendgrid.com/docs/API_Reference/SMTP_API/unique_arguments.html)
#$header->addUniqueArg('cat', 'dogs');
$header->setUniqueArgs(array('cow' => 'chicken'));
$header->setUniqueArgs(array('dad' => 'proud'));

# [Categories](http://sendgrid.com/docs/API_Reference/SMTP_API/categories.html)
$header->addCategory('tactics'); // category = ['tactics']
$header->addCategory('advanced'); // category = ['tactics', 'advanced']
#$header->setCategories(array('tactics', 'advanced')); // category = ['tactics', 'advanced']

# [Sections](http://sendgrid.com/docs/API_Reference/SMTP_API/section_tags.html)
$header->addSection('-charge-', 'This ship is useless.');
$header->addSection('-bomber-', 'Only for sad vikings.');
#$header->setSections(array('-charge-' => 'This ship is useless.'));

# [Filters](http://sendgrid.com/docs/API_Reference/SMTP_API/apps.html)
#$header->addFilter('footer', 'enable', 1);
#$header->addFilter('footer', 'text/html', '<strong>boo</strong>');
$filter = array(
  'footer' => array(
    'setting' => array(
      'enable' => 1,
      'text/plain' => 'You can haz footers!'
    )
  )
);
$header->setFilters($filter);

# [ASM Group ID](https://sendgrid.com/docs/User_Guide/Suppressions/advanced_suppression_manager.html)
$header->setASMGroupID(42);

# [IP Pools](https://sendgrid.com/docs/API_Reference/Web_API_v3/IP_Management/ip_pools.html)
$header->setIpPool('pool_name');

# [Scheduling Parameters](https://sendgrid.com/docs/API_Reference/SMTP_API/scheduling_parameters.html)
#$header->setSendEachAt(array(1409348513, 1409348514, 1409348515));
#$header->addSendEachAt(1409348513);
#$header->addSendEachAt(1409348514);
$header->setSendAt(1409348513); # must be a unix timestamp

# This gives you back the stringified json formatted X-SMTPAPI header. Use this with your [smtp client](https://github.com/andris9/simplesmtp) of choice.
print_r $header->jsonString();
# If you don't want to unicode escape, you can set options parameter for jsonString() (PHP 5.4 or later).
#$header->jsonString(JSON_UNESCAPED_UNICODE);
?>
