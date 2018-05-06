<?php
require_once("includes/init.php");
$profile = Profile::find_by_id($_SESSION['user_id']);
//var_dump($profile);
if (isset($_POST["save"])) {
    $fullname = $_POST["fullname"];
    $occupation = $_POST["occupation"];
    $gender = $_POST["gender"];
    $mobile_no = $_POST["contact"];
    $nationality = $_POST["nationality"];
    $address = $_POST["address"];
    $bio = $_POST["bio"];
    $user_image;
    $cov_image;
    if ($_POST["password"] !== "") {
        $password = $_POST["password"];
        $profile->password = $password;
    }
    $profile->fullname = $fullname;
    $profile->occupation = $occupation;
    $profile->gender = $gender;
    $profile->mobile_no = $mobile_no;
    $profile->nationality = $nationality;
    $profile->address = $address;
    $profile->bio = $bio;
    echo $_FILES['cover_image'];
    $image = Profile::get_image($_FILES['image']);

    if (empty($image)) {
        $the_user = Profile::find_by_id($id);
        $image = $the_user->user_image;
    } else {
        $image = Profile::set_pimage($_FILES['image']);
    }
    $profile->user_image = $image;

    $image = Profile::get_image($_FILES['cover_image']);

    if (empty($image)) {
        $the_user = Profile::find_by_id($id);
        $image = $the_user->cov_image;
    } else {
        $image = Profile::set_covimage($_FILES['cover_image']);
    }
    $profile->cov_image = $image;


    //print_r($profile);
    if ($profile->save()) {
        $msg = "Profile Update Successful!";
        //echo "<sctipt> window.alert('".$msg."'); </sctipt>";
        header("location:profile.php?source=view_profile&id=$id");

    } else {
        $msg = "Profile Update Failed!";
        //echo "<sctipt> window.alert('".$msg."'); </sctipt>";

    }
} else {
    //echo "cncel";
    /* header("location:profile.php?source=view_profile&id= <?php echo $id;?>");*/
}
?>
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
