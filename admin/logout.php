<?php require_once ("../includes/session.php"); ?>
<?php
$session->admin_logout();
header("location:login.php");

?>
