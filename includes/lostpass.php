<?php require_once ("session.php"); ?>
<?php require_once ("init.php");?>


<?php
if (isset($_POST['passRecovery'])) {
    $found=0;
    $username = trim($_POST['email']);
    $usercls = new User();

    $user_found = $usercls->find_user($username);
    //var_dump($user_found);

    if ($user_found) {
        //echo "found";
        $found=0;
        global $database;
        $pass = $usercls->recover_pass($username);
        while(($pass2 = mysqli_fetch_assoc($pass)) && $pass) {
            $the_pass = $pass2['admin_password'];
            $the_mail = $pass2['admin_email'];
            $found=1;
        }
    }

    else{
        $the_message = "Your username or email are incorrect!!";
        $found=0;
    }
}
else {
    $username = "";
    $the_message = "";
    $pass="";
    $found=0;
}

?>
<?php //echo $the_pass;?>
<?php //echo $the_mail;?>

<div class="modal fade" id="myLostPass" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo $the_message;?> </h4>
                <button type="button" class="close" onclick = "stopmodal_2()" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Password Recovery</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="" onclick=" ">
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Username or Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="passRecovery"  value="submit" class="form-control btn btn-primary">
                    </div>

                </form>
            </div>

        </div>

    </div>
</div>
<?php
if (isset($_POST['passRecovery'])) {
    if($found==1)
    {
        require_once ("recopass.php");

    }
    else{
        echo "<script>window.alert('User Undefined!'); </script>";
    }
}

?>

<script type="text/javascript">
    function stopmodal_1() {
        document.getElementById('myLogin').style.visibility = "hidden";
    }

    function stopmodal_2() {

        //location.reload();
        document.getElementById('myLogin').style.visibility = "visible";


    }

</script>
