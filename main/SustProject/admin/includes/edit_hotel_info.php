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
ob_start();
$hotel = RegisterHotel::find_by_id($_GET['h_id']);
$hotel->pending_info = 1;

if ($hotel->save()) {
    header('Location: view_registered_hotel.php');
}
?>