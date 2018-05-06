<?php
require_once("mailinfo.php");
?>
    <!-- doctype html -->
    <div lang="en">

            <title>Contact Us</title>


<?php
require_once("includes/header.php");
require_once ("includes/navigation.php"); ?>

    <!--Contact Us   start-->
    <div class="jumbotron jumbotron-sm" style="background-color: #00B0FF; color: white; margin-top: -20px;" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h1 text-center">
                        Contact Us
                        <small style="color: white;">Feel free to contact us</small>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input  type="text" name="name" placeholder="Your Name" class="form-control" required="required"/>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span></span>
                                        <input type="email" name="email2" placeholder="Enter Your Email Id" class="form-control" required="required"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <select id="subject" type="text" name="subject" placeholder="enter name" class="form-control" required="required">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="service">General Customer Service</option>
                                        <option value="suggestions">Suggestions</option>
                                        <option value="product">Product Support</option>
                                        <option value="Other">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label><br>
                                    <textarea name="body" rows="9" cols="25" placeholder="write your message here" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="send message" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <!-- <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>-->
                    <address>
                        <strong>IIUC BEES LTD.</strong><br>
                        <br>
                        Anderkilaa, Chittagong, Bangladesh<br>
                        <abbr title="Phone">
                            Phone</abbr>
                        +8801521487682
                    </address>
                    <address>
                        <strong></strong><br>
                        <a href="mailto:#">iiucbees@gmail.com</a>
                    </address>
                </form>
            </div>
        </div>
    </div>
    <!--Contact Us   end-->

    <!--Footer Start-->
<?php require_once("includes/footer.php"); ?>

    <!--Footer End-->





<?php
$_REQUEST['email'] = "iiucbees@gmail.com" ;
if(isset($_REQUEST['email'])&&isset($_REQUEST['subject'])) {

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

    $mail->addAddress($_REQUEST['email'], $_REQUEST['name']);
//Set the subject line
    $mail->Subject = $_REQUEST['subject'];
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';


////$mail->msgHTML
/// (file_get_contents('contents.html'), dirname(__FILE__));
    $name = $_REQUEST['name'];
    $userMail = $_REQUEST['email2'];
    $userMessage = $_REQUEST['body'];
    $mailBody = <<<BEES
<h3 style="color: #ac2925">You Have a mail from Your Website</h3><br>
<span >Sender Name:</span> $name <br>
Sender Email: $userMail <br>
User Message: <br> 
<p style = "font-size:16px" > $userMessage </p> <br>
BEES;
    $mail->Body = $mailBody;


//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else {
        echo "<script>window.alert('Message sent!'); </script>";
    }

}


?>