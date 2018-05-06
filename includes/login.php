<?php require_once ("logindata.php");?>
<li><a href="#" data-toggle="modal" data-target="#myLogin">Login</a></li>
<div class="modal fade" id="myLogin" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="bg-danger">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Page</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="" >
                    <div class="form-group">
                        <input type="text" id="email" name="username" placeholder="Username or Email" class="form-control" value="" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="pass" name="password" placeholder="Password" class="form-control" value="" required>
                    </div>
                    <div  class="form-group">
                        <input type="checkbox" name="remember" value="1"> Remember Me<br></input>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="modal-footer ">
                <button id="register_lost_btn" type="button" class="btn btn-link" onclick = "stopmodal_1();"  data-toggle="modal" data-target="#myLostPass">Lost Password?
                </button>
                <button id="register_login_btn" type="button" class="btn btn-link" onclick = "stopmodal_1();" data-toggle="modal" data-target="#myReg">Register
                </button>
            </div>
        </div>
    </div>
</div>
</div>

<?php
if($the_message){ ?>

<script>
    window.alert("Login Failed! Your Password or Username is invalid.");
</script>

    <?php
} ?>



<!-- Modal -->
<?php require_once("registration.php"); ?>

<?php  require_once("lostpass.php"); ?>
    <script>
        function loginFail() {
            //document.getElementById('myLoginError').style.visibility = "visible";
        }
    </script>

<!--    <div id="register_login_btn" type="button" onmouseover="loginFail();" class="btn btn-link" data-toggle="modal" data-target="#myLoginError">-->
<!--</div>-->
<!--    <div class="modal fade" id="myLoginError" role="dialog" >-->
<!--        <div class="modal-dialog modal-sm">-->
            <!-- Modal content-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-header">-->
<!--                    <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                    <h3 class="modal-title">Login Error</h3>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!--                    <h4 class="bg-danger">-->
<!--                        Your username or password is incorrect!-->
<!--                    </h4>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->