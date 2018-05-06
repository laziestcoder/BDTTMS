<?php
if (isset($_POST['submit'])) {
    /*$register = new Register();
    $register->admin_name = $_POST['username'];
    $register->admin_email = $_POST['email'];
    $register->admin_password = $_POST['password'];

    if ($register->save()) {
        $message = "save successfully";
    } else {
        $message = "save failed";
    }*/
    echo $_POST['username'];
}