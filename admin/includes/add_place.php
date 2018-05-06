<?php
//ob_start();
//ekhan theke
//require_once ("../../includes/init.php");
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

$cities = City::find_all();

?>

<?php

$message = '';
if (isset($_POST['submit'])) {
    $place = new Place();
    $place->place_name = $_POST['place_name'];
    $place->place_description = $_POST['place_description'];
    $place->city_id = $_POST['city_id'];
    $place->place_image = Place::set_image($_FILES['place_image']);

    if ($place->save()) {
        $message = "Data recorded successfully";
    } else {
        $message = "Data record failed";
    }
}

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add Place
                    <small>Subheading</small>
                </h1>
                <?php echo $message; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Place Name</label>
                        <input type="text" class="form-control" name="place_name">
                    </div>
                    <div class="form-group">
                        <label for="author">Description</label>
                        <textarea class="form-control" name="place_description" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Select City</label>
                        <select name="city_id" id="">
                            <option value="">--Select--</option>
                            <?php foreach ($cities as $city): ?>
                                <option value="<?php echo $city->id; ?>">
                                    <?php echo $city->city_name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="post_status">Image</label>
                        <input type="file" class="form-control" name="place_image">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Place">
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
