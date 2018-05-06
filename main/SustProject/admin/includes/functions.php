<?php
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

spl_autoload_register(function ($class) {
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";
    if (file_exists($the_path)) {
        require_once($the_path);
    } else {
        die("This file named {$class}.php was not found");
    }
});

function redirect($location){
    header("Location: {$location}");
}

?>