<?php
require_once("../includes/init.php");
//$user=Adminpro::find_by_id($_SESSION['admin_id']);
//var_dump($user);
if (isset($_POST["save"])) {
    $fullname = $_POST["fullname"];
    $occupation = $_POST["occupation"];
    $gender = $_POST["gender"];
    $mobile_no = $_POST["contact"];
    $nationality = $_POST["nationality"];
    $address = $_POST["address"];
    $bio = $_POST["bio"];
    if ($_POST["password"]!=="") {
        $password = $_POST["password"];
        $user->admin_password = $password;
    }
    $user->fullname = $fullname;
    $user->occupation = $occupation;
    $user->gender = $gender;
    $user->mobileno = $mobile_no;
    $user->nationality = $nationality;
    $user->address = $address;
    $user->bio = $bio;
    //echo $_FILES['image'];
    $image = Adminpro::get_image($_FILES['image']);

    if (empty($image)) {
        $the_user = Adminpro::find_by_id($id);
        $image = $the_user->admin_image;
    } else {
        $image = Adminpro::set_pimage($_FILES['image']);

        //print_r($image);
    }
    $user->admin_image=$image;



    //print_r($user);
    if ($user->save()) {
        $msg="Profile Update Successful!";
       echo "<sctipt> window.alert('".$msg."'); </sctipt>";
        header("location:profile.php?source=view_profile&id=$id");

    }   else {
        $msg="Profile Update Failed!";
       echo "<sctipt> window.alert('".$msg."'); </sctipt>";

        }
}
else {
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
