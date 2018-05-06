<?php require_once("header.php"); ?>
<?php require_once("navigation.php"); ?>
<?php require_once ("session.php"); ?>
<?php require_once ("init.php");?>

<?php
$session->logout();
header("location:../index.php");

?>
