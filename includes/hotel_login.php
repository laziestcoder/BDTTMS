<?php require_once("hotel_login_data.php"); ?>
<?php ob_start(); ?>


<li><a href="#" data-toggle="modal" data-target="#hotelLogin">Hotel</a></li>
<div class="modal fade" id="hotelLogin" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="bg-danger"><?php echo $the_message; ?></h4>
                <h4 class="modal-title">Hotel Admin Login Page</h4>
            </div>

            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <input type="text" id="email" name="username" placeholder="Username or Email"
                               class="form-control" value="" required>
                    </div>

                    <div class="form-group">
                        <input type="password" id="pass" name="password" placeholder="Password" class="form-control"
                               value="" required>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="remember" value="1"> Remember Me<br>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="form-control btn btn-primary">
                    </div>
                </form>

            </div>
            <div class="modal-footer ">
                <div>
                    <a class="btn btn-link" onclick="stopmodal_21();" href="includes/hotelReg.php">Register</a>
                </div>
            </div>

        </div>



    <!-- Modal -->
    <?php //require_once("hotel_registration.php"); ?>

    <?php require_once("hotel_lostpass.php"); ?>
    </div>

</div>

<script type="text/javascript">
    function stopmodal_11() {


        document.getElementById('hotelLogin').style.visibility = "hidden";

    }

    function stopmodal_21() {

        //location.reload();
        document.getElementById('hotelLogin').style.visibility = "visible";


    }


</script>
