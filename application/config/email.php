<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'email-smtp.ap-south-1.amazonaws.com';  // SMTP server for Hostinger
$config['smtp_port'] = 587;  // SMTP port (587 for TLS, 465 for SSL)
$config['smtp_user'] = 'support@btcapitals.live';  // Your email address (webmail)
$config['smtp_pass'] = 'A?yFR9n[';  // Your email password
$config['smtp_crypto'] = 'tls';  // Use 'tls' for encryption (change to 'ssl' if using SSL)
$config['mailtype'] = 'html';  // Use 'text' for plain text emails or 'html' for HTML emails
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";  // Important for proper email formatting
