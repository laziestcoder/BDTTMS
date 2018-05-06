<?php require_once("../includes/init.php");
require_once ("../includes/session.php"); ?>
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
        header("location:login.php");
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
                case 'add_plan':
                    require_once("includes/add_plan.php");
                    break;
                case 'edit_plan':
                    require_once("includes/edit_plan.php");
                    break;
                default:
                    require_once("includes/view_all_plans.php");
                    break;
            }

            ?>
        </div>
    </div>
</div>

<?php require_once("includes/footer.php"); ?>
