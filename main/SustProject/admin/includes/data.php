<?php
//ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
} else {
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
    } else {
        $session->logout();
        redirect("location:login.php");
    }
}

?>

<?php
require_once('../../includes/init.php');
echo $places = Place::find_places($_GET['term']);
?>