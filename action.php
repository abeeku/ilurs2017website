<?php
$apiKey = 'c3e066790cce9bca55beefb162446c4e-us16'
$listID = '4888fb9948'
require('mailchimp/Mailchimp.php')

$Mailchimp = newMailchimp($apiKey);
$MailchimpList = new Mailchimp_Lists($Mailchimp);

try
{
  $subscriber = $Mailchimp_Lists->subscribe(
    $listID,
    array('email' =>$_POST['email']),
    array('FNAME'=>$_POST['fname'], 'LNAME'=>$_POST['lname']),
    'text',
    FALSE,
    TRUE
  );
}
catch (Exception $e)
{
  echo "Caught exception: " . $e;
}

if (!empty($subscriber['leid'] ))
{
  echo 'Added Suscriber'
}
else
{
  echo 'Failed to add subscriber'
}

?>
