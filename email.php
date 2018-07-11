
<?php
$data = $_POST['data'];
$name       = $data['name'];
$from       = $data['email'];
$subject    = $data['subject'];
$subject2   = $name . " - " . $subject;
$message    = $data['message'];
$message2   = "Name: " . $name . "\nFrom: " . $from . "\nSubject: " . $subject . "\nMessage: " . $message;
$to         = 'info@shreeauto.in';
$headers = "MIME-Version: 1.0";
$headers .= "Content-type: text/plain; charset=iso-8859-1";
$headers .= "From: {$name} <{$from}>";
$headers .= "Reply-To: <{$from}>";
$headers .= "Subject: {$subject}";
$headers .= "X-Mailer: PHP/".phpversion();

if(mail($to, $subject2, $message2, $headers)){
    echo 1;
}
else{
    echo 0;
}