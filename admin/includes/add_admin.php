<?php
 //require_once ("../../includes/init.php");
//ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
}
else{
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
    } else {
        $session->logout();
        redirect("location:login.php");
    }
}

?><?php
//ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
}
else{
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
    } else {
        $session->logout();
        redirect("location:login.php");
    }
}

?>
  <!--  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="sumit kumar">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/admin_plugin.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.js" ></script>
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>-->


<div class="container">
    <div class="row">
        <div class="col-md-6 " style="margin-left: 5%;">
            <div><h2 class="text-center">Welcome to Admin Addition Panel</h2></div>
            <form action="" method="post" class="">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control">

                </div>
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">

                </div>
                <div class="form-group">
                    <input type="phone" name="phoneNumber" placeholder="Phone number" class="form-control">

                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control">

                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">

                </div>
                <div class="form-group">
                    <input type="password" id="confirm_password" name="repassword" placeholder="Retype Password " class="form-control">

                </div>
                <div class="form-group">
                    <input type="submit" name="add_admin" value="Add Admin" class="btn btn-primary col-md-offset-3" style="width: 220px; font-size: 15px;">
                </div>
            </form>

        </div>
    </div>
</div>


</body>
</html>

  <script>
      var password = document.getElementById("password")
          , confirm_password = document.getElementById("confirm_password");

      function validatePassword(){
          if(password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Passwords Didn't Match");
          } else {
              confirm_password.setCustomValidity('');
          }
      }

      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
  </script>
<?php
if(isset($_POST["add_admin"])){
    $admin=new Admin();
    $admin->admin_email=$_POST["email"];
    $admin->admin_name=$_POST["username"];
    $admin->admin_password=$_POST["password"];
    $admin->mobileno=$_POST["phoneNumber"];
    $admin->fullname=$_POST["name"];
    $admin->hash=md5(rand(0,10));
    $admin->save();

}
?>