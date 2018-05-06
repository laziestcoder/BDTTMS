<?php
//ob_start();
//ekhan theke
require_once ("../../includes/init.php");
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

?>


<?php
$divisions = Division::find_all();
if (isset($_GET['city_id'])) {
    $city = City::find_by_id($_GET['city_id']);
    $id = $city->id;
}
$message = '';
if (isset($_POST['submit'])) {
    $city->city_name = $_POST['city_name'];
    $city->city_description = $_POST['city_description'];
    $city->div_id = $_POST['div_id'];
    $image = City::get_image($_FILES['city_image']);

    if (empty($image)) {
        $the_city = City::find_by_id($id);
        $image = $the_city->city_image;
    } else {
        $image = City::set_image($_FILES['city_image']);
    }

    $city->city_image = $image;

    var_dump($city->city_image);

    if ($city->save()) {
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
                    Edit City
                    <small>Subheading</small>
                </h1>
                <?php echo $message; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">City Name</label>
                        <input type="text" class="form-control" name="city_name"
                               value="<?php echo $city->city_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="author">Description</label>
                        <textarea class="form-control" name="city_description" id="" cols="30"
                                  rows="10"><?php echo $city->city_description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Select Division</label>
                        <select name="div_id" id="">
                            <option value="">--Select--</option>
                            <?php foreach ($divisions as $division): ?>
                                <option value="<?php echo $division->id; ?>">
                                    <?php echo $division->div_name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post_status">Image</label>
                        <img src="<?php echo $city->image_path(); ?>" width="100">
                        <input type="file" class="form-control" name="city_image">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Edit City">
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