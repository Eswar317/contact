<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "eswarravi317@gmail.com";
$subject = "Mail from Website";
$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" . "CC: somebodyelse@example.com";

if ($email != NULL) {
	mail($to, $subject, $message);
}
header("Location:thankyou.html");
?>