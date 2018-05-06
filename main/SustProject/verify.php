<?php require_once("includes/init.php"); ?>
<?php require_once("includes/verificationmsg.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Verify You</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body style="background-color: #E1E1E1;">
<!--Navbar start-->
<?php require_once("includes/navigation.php"); ?>
<!-- /.navbar -->

<div class="container">
    <div class=" col-sm-8 col-sm-offset-2" style="background-color: white; height: 400px;">
        <div class="text-center"
             style="background-color: #358CCE; color: white;margin-top: -20px ;margin-left: -15px; height: 70px; margin-right: -15px">
            <h1 style="padding-top:15px; ">Email Verification</h1>
        </div>
        <br>
        <br>
        <!--Congrats Message-->
        <?php if ($active == 1) {
            echo "
        <div  class='text-center'>
            <h2 style='color: green;'><strong>
                    Congratulations!  <i class='fa fa-smile-o' aria-hidden='true'></i></strong>
            </h2>
            <h4 style='color:darkgreen'>Your mail is verified and your account has been activated. You can login now.</h4>
        </div>
        ";
        } ?>
        <!--Warning Message 1-->
        <?php if ($deactive == 1) {
            echo "
        <div  class='text-center'>
            <h2 style='color: red;'><strong>
                    Warning!  <i class='fa fa-frown-o' aria-hidden='true'></i></strong>
            </h2>
            <h4 style='color: darkred;'>The URL is either invalid or you already have activated your account.  </h4>
        </div>
          ";
        } ?>
        <!--Warning Message 2-->
        <?php if ($invalid == 1) {
            echo "
        <div  class='text-center'>
            <h2 style='color: red;'><strong>
                    Warning <i class='fa fa-exclamation-circle' aria-hidden='true'></i></strong>
            </h2>
            <h4 style='color: darkred;'>Invalid approach! Please use the link that has been sent to your email account.  </h4>
        </div>
        ";
        } ?>

        <div>
            <!--<button  class="btn btn-primary col-sm-2 col-sm-offset-5" style="height: 40px; font-size: 20px; margin-top: 100px;"><a href="index.php">OK </a></button>-->
            <a class="btn btn-primary col-sm-2 col-sm-offset-5"
               style="height: 40px; font-size: 20px; margin-top: 100px;" href="index.php">OK</a>
        </div>


    </div>
</div>
<br>

<?php require_once("includes/footer.php") ?>
