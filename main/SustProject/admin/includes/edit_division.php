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
        redirect("location:login.php");
    }
}

?><?php
$message = '';
if (isset($_GET['div_id'])) {
    $div_id = $_GET['div_id'];

    $division = Division::find_by_id($div_id);
}

if (isset($_POST['submit'])) {
    $division->div_name = $_POST['div_name'];
    $division->div_description = $_POST['div_description'];
    $image = Division::get_image($_FILES['div_image']);

    if (empty($image)) {
        $the_division = Division::find_by_id($div_id);
        $image = $the_division->div_image;
    } else {
        $image = Division::set_image($_FILES['div_image']);
    }

    $division->div_image = $image;

    if ($division->save()) {
        $message = "Record Updated successfully";
    } else {
        $message = "Record update failed";
    }
}

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Edit Division
                    <small>Subheading</small>
                </h1>
                <?php echo $message; ?>
                <?php ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Division Name</label>
                        <input type="text" class="form-control" name="div_name"
                               value="<?php echo $division->div_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="author">Description</label>
                        <textarea class="form-control" name="div_description" id="" cols="30"
                                  rows="10"><?php echo $division->div_description; ?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="post_status">Image</label>
                        <img src="<?php echo $division->image_path(); ?>" width="100">
                        <input type="file" class="form-control" name="div_image">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Update Division">
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
