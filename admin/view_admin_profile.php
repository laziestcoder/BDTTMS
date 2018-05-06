<?php
ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    // var_dump($session->is_admin_signed_in());
    header("Location: index.php");
}
else{
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
    } else {
        $session->logout();
        header("location:index.php");
        //var_dump($session->is_admin_signed_in());
    }
    //var_dump($session->is_admin_signed_in());

}
?>


<?php
//$id='1';
$id=$_GET["id"];
//echo $id;
//echo "Page Loaded";
$user =Adminpro::find_by_id($id);

?>
<?php
$img = $user->image_path();

$covimg = $user->covimage_path();
?>






<!DOCTYPE html>
<html>
<head>
    <title>My Admin Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
   <!-- <link rel="stylesheet" href="css/style.css" >
    <script src="js/jquery.js"></script>-->

    <script src="js/bootstrap.js" ></script>
    <style type="text/css">

        .cover{



            height: 300px;

        }

    </style>
</head>
<body style="background-color: #E1E1E1;">
<!--Navbar start-->

<?php
require_once ("includes/header.php");
require_once ("includes/top_nav.php");
require_once ("includes/side_nav.php");


?><!-- /.navbar -->

<div class="container-fluid" style="height: 700px;">
    <div class="row">
        <div class="col-md-12">
        <div class="col-md-7 col-md-offset-1" style="background-color: white; box-shadow: 2px 2px 10px gray;">
            <div class="col-md-7">
                <h2><strong>Admin Profile</strong></h2>
                <hr>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>Name:</strong></h4>

                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $user->fullname; ?></h4>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>Occupation:</strong></h4>

                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $user->occupation; ?></h4>

                    </div>
                </div>


                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>Gender:</strong></h4>

                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $user->gender; ?></h4>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>Email:</strong></h4>

                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $user->admin_email; ?></h4>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>Phone number:</strong></h4>

                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $user->mobileno; ?></h4>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>Nationality:</strong></h4>

                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $user->nationality; ?></h4>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>Address:</strong></h4>

                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $user->address; ?></h4>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>Bio:</strong></h4>

                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $user->bio; ?></h4>
                        <br>
                        <br>

                    </div>

                </div>

            </div>
            <div class="col-md-5">
                <div class="text-center col-md-offset-2" style="margin-top: 80px;">
                    <img src="<?php echo $img; ?>" class="avatar img-circle img-thumbnail" alt="avatar"  style="height: 180px; width: 200px;">
                    <h3><?php echo $user->admin_name; ?></h3>

                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<br><br>
<!--Footer Start--><?php require_once ("includes/footer.php");?>
<!--Footer End-->

</body>
</html>