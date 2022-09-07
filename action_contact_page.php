<?php

error_reporting(E_ALL);
ini_set( 'display_errors', 1 );

$name = $_POST['nom']; 
$email_address = $_POST['email']; 
$message = $_POST['message'];
$email_body = "Nouveau message.  Voici les détails:\nNom: $name \nEmail: $email_address\nMessage: \n$message";

$to   = 'info@lamainalaplume.be';

$headers = "From: $email_address\r\n";
$headers .= "Reply-To: $email_address\r\n";
$headers .= "Return-Path: $email_address\r\n";
$headers .= "Content-Type: text/plain; charset=\"utf8\"\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";

if ( mail( $to, "Formulaire de contact: $name", $email_body, $headers) ) {
	header('Location:message_sent.html');
} else {
	header('Location:message_not_sent.html');
}

?>