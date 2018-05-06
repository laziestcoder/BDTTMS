<?php /*require_once("init.php"); */?><!--
<?php /*//require_once("header.php"); */?>
<?php /*//require_once("navigation.php"); */?>
<?php /*require_once("../bdttms/mailinfo.php");*/?>

<?php
/*$cities = City::find_all();
$message = '';
$registered=0;
if (isset($_POST['submit'])) {
    $registerHotel = new RegisterHotel();
    $registerHotel->hotel_name = $_POST['hotel_name'];
    $registerHotel->hotel_admin_name = $_POST['admin_name'];
    $registerHotel->phone_number = $_POST['phone_number'];
    $registerHotel->hotel_email = $_POST['email'];
    $registerHotel->password = $_POST['password'];
    $registerHotel->city_id = $_POST['city_id'];
    $registerHotel->hotel_location = $_POST['location'];
    $registerHotel->hotel_description = $_POST['description'];
    $registerHotel->hotel_image = RegisterHotel::set_image($_FILES['file']);
    $registerHotel->pending_info = '0';

    //print_r($registerHotel);

    if ($registerHotel->save()) {
        $message = "Data recorded successfully";
        $registered=1;
        echo "<script> window.alert('".$message."');</script>";
    } else {
        $message = "Data record failed";
        $registered=0;
        echo "<script> window.alert('".$message."');</script>";
    }
}
*/?>

    <div id="hotelReg" class="modal fade" >
        <div class="modal-dialog modal-sm  ">

            <!-- Modal content-->
            <!--<div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick = "stopmodal_21()" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Welcome to Hotel Registration Form</h4>
                </div>
                <div class="modal-body">

                    <form id="registerForm"  action="" class="" method="post" enctype="multipart/form-data">
                        <div class=" form-group">
                            <input type="text" name="hotel_name" id="hotel_name" placeholder="Hotel name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="admin_name" id="admin_name" placeholder="Name of hotel admin "
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="phone" name="phone_number" id="phone_number" placeholder="Phone number"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password"  onkeyup="return validateForm();" name="confirm_password" id="confirm_password" placeholder="Retype password "
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="city_id" id="city_id">
                                <option value="">--Select--</option>
                                <?php /*foreach ($cities as $city): */?>
                                    <option value="<?php /*/*echo $city->id; */?>">
                                        <?php /*/*echo $city->city_name; */?>
                                    </option>
                                <?php /*/*endforeach; */?>
                            </select>
                        </div>
                        <div class="form-group">
                    <textarea name="location" class="form-control" id="location" rows="4"
                              placeholder="Location of the hotel"></textarea>
                        </div>
                        <div class="form-group">
                    <textarea name="description" class="form-control" id="description" rows="4"
                              placeholder="Description of the hotel"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" class="form-control" id="file">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Registration" name="submit"
                                   class="btn btn-primary col-md-offset-3"
                                   style="width: 220px; font-size: 15px;">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>-->
    <script>
      /*  var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Didn't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;*/
    </script>

--><?php
/*if($registered==1)
{
    $msg = 'Your account has been made! Please verify it by clicking the activation link that has been send to your email.';
    require_once("regimail.php");
    echo "<script> window.alert('".$msg."') </script>";
}
*/?>