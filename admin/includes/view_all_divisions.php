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
        header("location:login.php");
    }
}

?>

<?php

$divisions = Division::find_all();

if (isset($_GET['delete_div_id'])) {
    $id = $_GET['delete_div_id'];
    $division_id = Division::find_by_id($id);

    if ($division_id->delete()) {
        header('Location: divisions.php');
    }
}

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    All Divisions
                    <small>Subheading</small>
                </h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Division Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($divisions as $division): ?>
                        <tr>
                            <td><?php echo $division->id; ?></td>
                            <td><?php echo $division->div_name; ?></td>
                            <td><?php echo $division->div_description; ?></td>
                            <td><img src="<?php echo $division->image_path(); ?>" alt="" width="50px" height="50px">
                            </td>
                            <td>
                                <a href="divisions.php?source=edit_division&div_id=<?php echo $division->id; ?>"
                                   class="btn btn-success" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="divisions.php?delete_div_id=<?php echo $division->id; ?>"
                                   class="btn btn-danger" onclick="return confirm('Are you sure want to delete!!')"
                                   title="Delete">
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

