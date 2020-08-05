<?php

$to      = 'mahesh@mathematicsforall.org';
$t=time();
$subject = '[Contact Us: Mathematicsforall.org] | Query ID-'. $t .'|from:'.$_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$name = ($_POST['name'])?$_POST['name']:$_POST['name-FirstName']." ".$_POST['name-LastName'];


$headers = 'From: mahesh@mathematicsforall.org' . "\r\n" .
    'Reply-To: ' . $email;

$message =  "Name: $name \r\nPhone: $phone \r\nEmail: $email \r\n\r\nMessage: $message"; 

if(mail($to, $subject, $message,$headers))
	header("Location: ".$_POST['returnUrl'] . "#webcom-component-form-44659677234125378?Ok");
else
	header("Location: ".$_POST['returnUrl'] . "#webcom-component-form-44659677234125378?Err");
?>