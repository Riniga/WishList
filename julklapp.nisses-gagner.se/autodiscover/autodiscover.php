<?php
/** Surftown Autoconfiguration script for Outlook */

// First, make sure only POST requests are allowed
if($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Status: 405 Method not allowed');
	die(); }

// Extract email address from the post request
$post = file_get_contents('php://input');
preg_match('/\<EMailAddress\>(.*?)\<\/EMailAddress\>/', $post, $email);

// Set content type to application/xml
header('Content-Type: application/xml');

// Echo the header, as <?xml will interfere with PHP
echo('<?xml version="1.0" encoding="utf-8" ?>'); ?>
<Autodiscover xmlns="http://schemas.microsoft.com/exchange/autodiscover/responseschema/2006">
<Response xmlns="http://schemas.microsoft.com/exchange/autodiscover/outlook/responseschema/2006a">
<Account>
<AccountType>email</AccountType>
<Action>settings</Action>
<Protocol>
<Type>IMAP</Type>
<Server>mail.surftown.com</Server>
<Port>143</Port>
<SPA>off</SPA>
<Encryption>TLS</Encryption>
<AuthRequired>on</AuthRequired>
<LoginName><?=$email[1]?></LoginName>
</Protocol>
<Protocol>
<Type>SMTP</Type>
<Server>mail.surftown.com</Server>
<Port>587</Port>
<SPA>off</SPA>
<Encryption>TLS</Encryption>
<AuthRequired>on</AuthRequired>
<LoginName><?=$email[1]?></LoginName>
</Protocol>
<Protocol>
<Type>IMAP</Type>
<Server>mail.surftown.com</Server>
<Port>143</Port>
<SPA>off</SPA>
<SSL>off</SSL>
<AuthRequired>on</AuthRequired>
<LoginName><?=$email[1]?></LoginName>
</Protocol>
<Protocol>
<Type>SMTP</Type>
<Server>mail.surftown.com</Server>
<Port>587</Port>
<SPA>off</SPA>
<SSL>off</SSL>
<AuthRequired>on</AuthRequired>
<LoginName><?=$email[1]?></LoginName>
</Protocol>
</Account>
</Response>
</Autodiscover>