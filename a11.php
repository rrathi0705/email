<?php
$message = $_POST['message'];
if(isset($_POST['to'])){
	$to = $_POST['to'];
}
$bcc = $_POST['bcc'];
$cc = $_POST['cc'];
$bccArray= explode(" ", $bcc);
$ccArray= explode(" ", $cc);
$subject = $_POST['subject'];
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";                                      // Set mailer to use SMTP
    //$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'rishabhrathi75@gmail.com';                 // SMTP username
    $mail->Password = 'xxxxxxxxxx';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('rishabhrathi75@gmail.com');
    if($to!=null)
    	$mail->addAddress($to);
    //$mail->addAddress('joe@example.net');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    if($bcc!=null){
	    for ($i=0; $i < sizeof($bccArray); $i++) { 
	    	$mail->addBCC($bccArray[$i]);
	    }
	}
	if($cc!=null){
    for ($i=0; $i < sizeof($ccArray); $i++) { 
    	$mail->addCC($ccArray[$i]);
    }}
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
