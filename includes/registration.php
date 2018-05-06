<?php require_once("init.php"); ?>
<?php require_once ("session.php"); ?>



<?php
$message = '';
if (isset($_POST['reg_submit'])) {
    $register = new Register();
    $adminName = $register->username = $_POST['username'];
    $email = $register->email = $_POST['email'];
    $password = $register->password = $_POST['password'];
    $hash = $register->hash = md5(rand(0, 10));
    $active = $register->active = 0;
    //print_r($register);
    $register->save();
    $registered = 1;
} else {
    $registered = 0;
}

?>

    <div id="myReg" class="modal fade">
        <div class="modal-dialog modal-sm  ">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick="stopmodal_2()" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registration Page</h4>
                </div>
                <div class="modal-body">

                    <form id="registerForm" method="post" action="">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="Username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" id="confirm_password" name="confirmPassword"
                                   placeholder="Confirm Password" class="form-control">
                        </div>
                        <!--<p id="warning"></p>-->
                        <div class="form-group">
                            <input type="submit" name="reg_submit" value="Registration"
                                   class="form-control btn btn-primary">
                        </div>


                    </form>
                </div>

            </div>

        </div>
    </div>
    </div>
    </div>

    <script>
        var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Didn't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

<?php
if ($registered == 1) {
    $msg = 'Your account has been made! Please verify it by clicking the activation link that has been send to your email.';
    require_once("regimail.php");
    echo "<script> window.alert('" . $msg . "') </script>";
}
?>
