<?php
//ob_start();
//ekhan theke
//require_once ("../../includes/init.php");
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
$message = "";
if (isset($_POST['submit'])) {
    $division = new Division();
    $division->div_name = $_POST['div_name'];
    $division->div_description = $_POST['div_description'];
    $division->div_image = Division::set_image($_FILES['div_image']);

    if ($division->save()) {
        $message = "Data Saved Successfully";
    } else {
        $message = "Data Saved Failed";
    }
}

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Division
                    <small>Subheading</small>
                </h1>
                <?php echo $message; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Division Name</label>
                        <input type="text" class="form-control" name="div_name">
                    </div>
                    <div class="form-group">
                        <label for="author">Description</label>
                        <textarea class="form-control" name="div_description" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="post_status">Image</label>
                        <input type="file" class="form-control" name="div_image">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Division">
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>

