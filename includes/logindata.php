<?php require_once ("session.php"); ?>
<?php require_once ("init.php");?>

<?php
if(isset($_COOKIE['username'])){ //and isset($_COOKIE['pass'])){
    $email = $_COOKIE['username'];
    //$pass= $_COOKIE['pass'];
    echo " <script>
              document.getElementById('email').value='$email';
              
              </script>";
//document.getElementById('pass').value='$pass';
}
?>

<?php

if (($session->is_signed_in())) {
    $the_message="Login First!";
}

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $usercls = new User();
    //method to check database user

    $user_found = $usercls->verify_user($username, $password);
    //var_dump($user_found);

    if ($user_found) {
        //echo "found";
        $active = $usercls->user_active($username, $password);
        //var_dump( $active);
        if ($active) {
            $session->login($user_found);
            //$the_message = "Successfully Logged In! Congratulations! ";
            header('location:index.php');
            // print_r($session->login($user_found));
        }
        else {
            $the_message="Active Your Account First!";

        }
    }
    else{
        $the_message = "Your username or password are incorrect";
    }

    if(isset($_POST['remember']))
    {
        setcookie('username', $username, time()+60*60*7);
        //setcookie('pass', $password, time()+60*60*7);

    }
}
else {
    $username = "";
    $password = "";
    $the_message = "";
}

?>
