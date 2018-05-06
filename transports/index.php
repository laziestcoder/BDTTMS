<?php //ob_start();
require_once("../includes/init.php"); ?>
<?php require_once("../includes/session.php"); ?>

<?php
/*//ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
}
else{
    if ($_SESSION["admin_id"]) {
         $id = $_SESSION["admin_id"];
        //print_r($id);
       // var_dump($id);die();
        $user = Adminpro::find_by_id($id);
        $name= $user->admin_name;
    } else {
        $session->logout();
        redirect("location:login.php");
    }
}*/
/*print_r($id);
var_dump($id);die();
print_r($user);
var_dump($user);die();*/
?>

<?php
require_once("includes/header.php"); ?>

<!-- Navigation -->
<?php include("includes/top_nav.php"); ?>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php require_once("includes/side_nav.php"); ?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Blank Page
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php require_once("includes/footer.php"); ?>

