<?php
ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    // var_dump($session->is_admin_signed_in());
    header("Location: index.php");
} else {
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
$id = $_GET["id"];
//echo $id;
//echo "Page Loaded";
$user = Adminpro::find_by_id($id);

?>
<?php
$img = $user->image_path();

$covimg = $user->covimage_path();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <!-- <link rel="stylesheet" href="css/style.css" >
     <script src="js/jquery.js"></script>-->

    <script src="js/bootstrap.js"></script>
    <style type="text/css">

        .input-button[type="file"] {
            display: none;

        }

        .custom-file-upload {
            border: 1px solid;
           /* display: inline-block;*/
            padding: 6px 12px;
            cursor: pointer;

            width: 120px;

        }

        .cover {

            height: 300px;

        }

    </style>
</head>
<body style="background-color: #E1E1E1;">
<!--Navbar start-->

<?php
require_once("includes/header.php");
require_once("includes/top_nav.php");
require_once("includes/side_nav.php");


?><!-- /.navbar -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="container-fluid" style="height: 1000px; ">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8 col-md-offset-1" style="background-color: white; box-shadow: 2px 2px 10px gray;">
                    <div class="col-md-10">
                        <h2><strong>Edit Admin Profile</strong></h2>
                        <hr>
                        <div class="col-md-12">
                            <div class="col-md-5 col-md-offset-4">
                                <div class="text-center col-md-offset-1" style="margin-top: 10px; ">
                                    <div class="text-center">
                                        <img src="<?php echo $img; ?>" class="avatar img-circle img-thumbnail"
                                             alt="admin_image"
                                             style="
                                             height: 160px ; width: 200px;">
                                        <h6>Change Your Profile Photo</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label class="custom-file-upload btn btn-primary col-md-offset-8 ">
                                    <input class="input-button" type="file" name="image"><i
                                            class="glyphicon glyphicon-picture"></i>
                                    Upload
                                </label>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Full Name:</strong></h4>

                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="fullname" value="<?php echo $user->fullname; ?>"
                                       type="text"
                                       placeholder="Type your first name">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Occupation:</strong></h4>

                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="occupation" value="<?php echo $user->occupation; ?>"
                                       type="text" placeholder="Type your occupation">

                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Gender:</strong></h4>

                            </div>
                            <div class="col-md-6">
                                <select name="gender" class="form-control gender">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>

                                </select>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Email:</strong></h4>

                            </div>
                            <div class="col-md-6">
                                <input class="form-control" value="<?php echo $user->admin_email; ?>" type="text"
                                       disabled>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Username:</strong></h4>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" value="<?php echo $user->admin_name; ?>" type="text"
                                       disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Phone number:</strong></h4>

                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="contact" value="<?php echo $user->mobileno; ?>"
                                       type="text"
                                       placeholder="Type phone number">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Nationality:</strong></h4>

                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="nationality" value="<?php echo $user->nationality; ?>"
                                       type="text" placeholder="Type country name">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Address:</strong></h4>

                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="address" value="<?php echo $user->address; ?>"
                                       type="text"
                                       placeholder="Type your city name">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Bio:</strong></h4>

                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="bio" rows="3"><?php echo $user->bio; ?></textarea>
                                <br>
                                <br>

                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Password:</strong></h4>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" name="password" id="password"
                                       value="<?php echo $user->admin_password; ?>" type="password"
                                       placeholder="Type password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h4><strong>Confirm password:</strong></h4>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" id="confirm_password"
                                       value="<?php echo $user->admin_password; ?>" type="password"
                                       placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <br>
                                <br>
                                <input class="btn btn-primary" name="save" value="Save Changes" type="submit">
                                <span></span>
                                <input class="btn btn-default" name="cancel" value="Cancel" type="submit"><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<br><br>
<!--Footer Start--><?php require_once("includes/footer.php"); ?>
<!--Footer End--><?php require_once("updateProfile.php"); ?>

</body>
</html>