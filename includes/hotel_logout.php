<?php //require_once("header.php"); ?>
<?php //require_once("navigation.php"); ?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/init.php");?>

<?php
$session->hotel_admin_logout();
header("location:../index.php");

?>
