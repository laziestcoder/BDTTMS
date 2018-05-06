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
$plans = Plan::find_all();
?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    All Plans
                    <small>Subheading</small>
                </h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>From City</th>
                        <th>Destination City</th>
                        <th>First Place</th>
                        <th>Second Place</th>
                        <th>Day</th>
                        <th>Plan Description</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($plans as $plan): ?>
                        <tr>
                            <td><?php echo $plan->id; ?></td>
                            <td><?php echo $plan->from_city; ?></td>
                            <td><?php echo $plan->destination_city; ?></td>
                            <td><?php echo $plan->first_place; ?></td>
                            <td><?php echo $plan->second_place; ?></td>
                            <td><?php echo $plan->days; ?></td>
                            <td><?php echo $plan->plan_description; ?></td>
                            <td><?php echo $plan->stay; ?></td>
                            <td>
                                <a href="plans.php?source=edit_plan&plan_id=<?php echo $plan->id; ?>"
                                   class="btn btn-success" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="" class="btn btn-danger" title="Delete">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
