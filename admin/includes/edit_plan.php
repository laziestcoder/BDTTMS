<?php
//ob_start();
//ekhan theke
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
$message = '';
$cities = City::find_all();
if (isset($_GET['plan_id'])) {
    $id = $_GET['plan_id'];
}
$plan = Plan::find_by_id($id);
if (isset($_POST['submit'])) {
    $plan->from_city = $_POST['from_city_id'];
    $plan->destination_city = $_POST['destination_city_id'];
    $plan->first_place = $_POST['first_place'];
    $plan->second_place = $_POST['to_place'];
    $plan->days = $_POST['days'];
    $plan->plan_description = $_POST['plan_description'];
    $plan->stay = $_POST['stay'];

    if ($plan->save()) {
        $message = "Record updated successfully";
    } else {
        $message = "Record update failed";
    }
}

?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header">
                    Edit Plan
                    <small>Subheading</small>
                </h1>
                <?php echo $message; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="author">From City</label>
                        <select class="form-control" name="from_city_id" id="">
                            <option value="">--Select--</option>
                            <?php foreach ($cities as $city): ?>
                                <option value="<?php echo $city->city_name; ?>">
                                    <?php echo $city->city_name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="author">Destination City</label>
                        <select class="form-control" name="destination_city_id" id="">
                            <option value="">--Select--</option>
                            <?php foreach ($cities as $city): ?>
                                <option value="<?php echo $city->city_name; ?>">
                                    <?php echo $city->city_name; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">First Place</label>
                        <input type="text" id="from_place" class="form-control" name="first_place"
                               value="<?php echo $plan->first_place; ?>">
                    </div>
                    <div class="form-group">
                        <label for="title">Second Place</label>
                        <input type="text" class="form-control" name="to_place" id="to_place"
                               value="<?php echo $plan->second_place; ?>">
                    </div>
                    <div class="form-group">
                        <label for="title">Day</label>
                        <input type="text" value="<?php echo $plan->days; ?>" class="form-control" name="days">
                    </div>
                    <div class="form-group">
                        <label for="author">Plan Description</label>
                        <textarea class="form-control" name="plan_description" id="" cols="30"
                                  rows="10"><?php echo $plan->plan_description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="title">Stay</label>
                        <input type="number" class="form-control" name="stay" value="<?php echo $plan->stay; ?>">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="submit" value="Update Plan">
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
