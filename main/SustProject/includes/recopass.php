<?php
require_once("../SustProject/mailinfo.php");
?>


<?php
//if(isset($_REQUEST['recoemail'])&&isset($_REQUEST['recopass']))
if (isset($the_pass) && isset($the_mail)) {

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

    $mail->addAddress($the_mail, $the_mail);
    //Set the subject line
    $mail->Subject = "Recovery Password of BDTTM ";
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
    //Replace the plain text body with one created manually
    $mail->AltBody = 'The Message is a information with your password!';


    ////$mail->msgHTML
    /// (file_get_contents('contents.html'), dirname(__FILE__));
    $name = "IIUC BEES";
    $userMail = "iiucbees@gmail.com";
    $userMessage = $the_pass;
    $mailBody = <<<BEES
<h3 style="color: #ac2925">You Have a mail with Your Password</h3><br>
<span >Sender Name:</span> $name <br>
Sender Email: $userMail <br>
Authority Message: <br> <p style = "font-size:16px; color: #228B22" >Your Password is "<b> $userMessage </b>" . </p> <br>
BEES;
    $mail->Body = $mailBody;


//send the message, check for errors
    if (!$mail->send()) {
        echo "<script>window.alert('Mailer Error: " . $mail->ErrorInfo . "'); </script>";
    } else {
        echo "<script>window.alert('Check Your Mail!'); </script>";
    }

}


?>
