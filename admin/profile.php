<?php require_once("../includes/init.php"); ?>
<?php require_once ("../includes/session.php");?>
<?php
ob_start();


//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: index.php");
    //var_dump($session->is_admin_signed_in());die();
}
else{
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
    } else {
        $session->logout();
        redirect("location:index.php");
        //var_dump($session->is_admin_signed_in());die();
    }
}
 //var_dump($session->is_admin_signed_in());die();

?>

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
                case 'edit_profile':
                    require_once("edit_admin_profile.php");
                    break;
                case 'view_profile':
                    require_once("view_admin_profile.php");
                    break;
            }

            ?>
        </div>
    </div>
</div>