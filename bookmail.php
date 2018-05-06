<?php require_once ("mailinfo.php"); ?>
<?php

$to      = $email =$_POST['email']; // Send email to our user
$subject = 'Unique Code For Using Booked Hotel!'; // Give the email a subject
$message = '

Thanks for signing up!
Your account has been created, you can login with the following credentials
after you have activated your account by pressing the url below.<br>
<br>
------------------------<br>
Booking Code: '.$code.'<br>
------------------------<br>
<br>
<br>
'; // Our message above including the link

$headers = 'From:noreply@iiucbees.com' . "\r\n"; // Set from headers

//mail($to, $subject, $message, $headers); // Send our email

?>




<?php
//$_REQUEST['email'] = "iiucbees@gmail.com" ;
//if(isset($_REQUEST['email'])&&isset($_REQUEST['subject'])) {

date_default_timezone_set('Etc/UTC');

//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587; //587
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls'; //tls
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $yourGmailAddress;
//Password to use for SMTP authentication
$mail->Password = $yourGmailPassword;
//Set who the message is to be sent from
$mail->setFrom($yourGmailAddress, 'IIUC BeeS');
//Set an alternative reply-to address
$mail->addReplyTo($yourGmailAddress, 'IIUC BeeS');
//Set who the message is to be sent to

//echo $_REQUEST['email']; die();

$mail->addAddress($to, "");
//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';


////$mail->msgHTML
/// (file_get_contents('contents.html'), dirname(__FILE__));
//$name = $_REQUEST['name'];
//$userMail = $_REQUEST['email2'];
$userMessage = $message;
$mailBody = <<<BEES
<h3 style="color: #ac2925">Congratulations!</h3><br>

<p style = "font-size:16px" > $userMessage </p> <br>
BEES;
$mail->Body = $mailBody;


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else {
    echo "<script>window.alert('Unique Code Sent! Check Your Mail!'); </script>";
 }


//}

?>
