<?php require_once("../includes/init.php");
require_once("../includes/session.php"); ?>
<?php
//ob_start();
//ekhan theke
if (!$session->is_hotel_admin_signed_in()) {
    header("location:../index.php");
} else {
    if ($_SESSION["hotel_admin_id"]) {
        $id = $_SESSION["hotel_admin_id"];
        //print_r($id);
        // var_dump($id);die();
        $user = RegisterHotel::find_by_id($id);
        $name = $user->hotel_admin_name;
        // header("location:index.php");
    } else {
        $session->logout();
        $session->admin_logout();
        header("location:../index.php");
    }
}
?>
<?php require_once("includes/header.php"); ?>
<?php require_once("includes/top_nav.php"); ?>
<?php require_once("includes/side_nav.php"); ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <?php

            if (isset($_GET['source'])) {
                $source = $_GET['source'];
            } else {
                $source = '';
            }

            switch ($source) {
                case 'pending_clients':
                    require_once("includes/pending_clients.php");
                    break;
                case 'edit_client':
                    require_once("includes/edit_client.php");
                    break;
                default:
                    require_once("confirmed_clients.php");
                    break;
            }

            ?>
        </div>
    </div>
</div>

<?php require_once("includes/footer.php"); ?>
