<?php

// Include the SwiftMailer autoloader
require_once '/path/to/swiftmailer/autoload.php';
"C:\xampp\phpMyAdmin\vendor\autoload.php"

// Connect to the database
//database connection configuration
require 'config.php';
$conn = db_config();

// SMTP server settings
$smtpHost     = 'smtp.gmail.com';
$smtpPort     = 587;
$smtpUsername = 'georgewise1010@gmail.com';
$smtpPassword = 'gfw%%880560';

// query the database for a list of email addresses
$sql    = "SELECT address FROM email_address ";
$result = mysqli_query($conn, $sql);

// create an array to hold the email addresses
$to = array();

// loop through the result set and add each email address to the array
while ($row = mysqli_fetch_assoc($result)) {
 $to[] = $row['address'];
}

// close the database connection
mysqli_close($conn);

// email subject and message
$subject = 'Test Email';
$message = 'This is a test email sent from PHP.';

// email headers
$headers = 'From: georgewise1010@gmail.com' . "\r\n" .
'Reply-To: georgewise1010@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

// SMTP authentication
$smtpAuth = [
 'auth'     => true,
 'username' => $smtpUsername,
 'password' => $smtpPassword,
];

// create SMTP object
$smtp = (new Swift_SmtpTransport($smtpHost, $smtpPort))
 ->setAuthMode('login')
 ->setUsername($smtpUsername)
 ->setPassword($smtpPassword);

// create Mailer object
$mailer = new Swift_Mailer($smtp);

// loop through the email addresses and send an email to each recipient
foreach ($to as $recipient) {
 // create email message
 $email = (new Swift_Message($subject))
  ->setFrom(['georgewise1010@gmail.com' => 'Sender Name'])
  ->setTo([$recipient])
  ->setBody($message)
  ->setContentType('text/plain');

 // send the email
 if ($mailer->send($email)) {
  echo 'Email sent to ' . $recipient . ' successfully.';
 } else {
  echo 'Email sending to ' . $recipient . ' failed.';
 }
}


?>


<body>
    
<form action="index.php" method="post">
<label for="title">title</label>
<input type="text">


<label for="to">to</label>
<input type="text" name="to">


<label for="message">message</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<button type="submit">send</button>
</form>
</body>

<style>
body{
    display:grid;
    place-items:center
}
form{
    border:solid 1px ;
    padding:2em
}

input,label,button{
    display: block;
    width:100%
}

label{
    text-transform:capitalize;
    font-size:2em
}
button{
width:100%;
padding:10px;
background:green;
color:white;
margin-top:1em
}
</style>
