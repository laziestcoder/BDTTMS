<?php
require_once("../includes/session.php"); ?>

<?php
//require_once ("../../includes/init.php");
//ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
} else {
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
    } else {
        $session->logout();
        header("location:login.php");
    }
}
?>
<?php require_once("../includes/init.php"); ?>
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
               // print_r($source);
            } else {
                $source = '';
            }

            switch ($source) {
                case 'view_unregistered_hotel':
                    require_once("includes/view_unregistered_hotel.php");
                    break;
                case 'edit_hotel_info':
                    require_once("includes/edit_hotel_info.php");
                    break;
                default:
                    require_once("view_registered_hotel.php");
                    break;
            }

            ?>
        </div>
    </div>
</div>
</div>
</div>

<?php require_once("includes/footer.php"); ?>

