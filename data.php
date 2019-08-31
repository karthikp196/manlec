<?php

$message = array();

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) )
{

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	require_once "sendmail.php";
	contact_form($name,$email,$subject,$message);
}












?>