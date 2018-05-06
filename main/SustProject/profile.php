<?php require_once("includes/init.php"); ?>
<?php require_once ("includes/session.php");?>
<?php
ob_start();


//ekhan theke
if (!$session->is_signed_in()) {
    header("Location: index.php");
}
else{
    if ($_SESSION["user_id"]) {
        $id = $_SESSION["user_id"];
    } else {
        $session->admin_logout();
        redirect("location:index.php");
    }
}

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
                    require_once("edit_profile.php");
                    break;
                case 'view_profile':
                    require_once("view_profile.php");
                    break;
            }

            ?>
        </div>
    </div>
</div>