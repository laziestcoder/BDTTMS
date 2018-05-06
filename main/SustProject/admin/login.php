<?php ob_start();
require_once('../includes/init.php'); ?>
<?php require_once("../includes/session.php"); ?>
<?php
if ($session->is_admin_signed_in()) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $email = trim($_POST['username']);
    $password = trim($_POST['password']);

    //method to check database user

    $admin_found = Admin::verify_admin($email, $password);
    //var_dump($user_found);

    if ($admin_found) {
        //echo "found";
        $session->admin_login($admin_found);
        header("Location: index.php");
    } else {
        $the_message = "Your username or password are incorrect";
    }
} else {
    $email = "";
    $password = "";
    $the_message = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="sumit kumar">
    <title>admin-template</title>
    <link href="../admin/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/admin_plugin.css" rel="stylesheet" type="text/css">
    <script src="../admin/js/jquery.js"></script>
    <script src="../admin/js/bootstrap.js"></script>
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 " style="margin-top: 18%; margin-left: 32%;">
            <h4 class="bg-danger"><?php echo $the_message; ?></h4>
            <div><h2 class="text-center">Welcome to Admin Login</h2></div>


            <form action="" class="" method="post">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username or Email" class="form-control">

                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" class="form-control">

                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Login" class="btn btn-primary col-md-offset-5">
                </div>
            </form>


        </div>
    </div>
</div>


</body>
</html>