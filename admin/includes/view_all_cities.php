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

$cities = City::all_cities();

if (isset($_GET['delete_city_id'])) {
    $id = $_GET['delete_city_id'];
    $city_id = Division::find_by_id($id);

    if ($city_id->delete()) {
        header('Location: cities.php');
    }
}

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    All Cities
                    <small>Subheading</small>
                </h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>City Name</th>
                        <th>Description</th>
                        <th>Division</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_assoc($cities)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['city_name']; ?></td>
                            <td><?php echo $row['city_description']; ?></td>
                            <td><?php echo $row['div_name']; ?></td>

                            <td><img src="../images/<?php echo $row['city_image']; ?>" alt="" width="50px"
                                     height="50px">
                            </td>
                            <td>
                                <a href="cities.php?source=edit_city&city_id=<?php echo $row['id']; ?>"
                                   class="btn btn-success" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="cities.php?delete_city_id=<?php echo $row['id']; ?>" class="btn btn-danger"
                                   title="Delete" onclick="return confirm('Are you sure want to delete!!')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                    <?php }; ?>
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
