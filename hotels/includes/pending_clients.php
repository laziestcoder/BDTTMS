<?php
//ob_start();
//ekhan theke
if (!$session->is_hotel_admin_signed_in()) {
    header("location:../index.php");
} else {
    if ($_SESSION["hotel_admin_id"]) {
        $id = $_SESSION["hotel_admin_id"];
        //print_r($id);
        // var_dump($id);die();
        $user = RegisterHotel::find_by_id($id);
        $name = $user->hotel_admin_name;
        // header("location:index.php");
    } else {
        $session->logout();
        $session->admin_logout();
        header("location:../index.php");
    }
}

?>

<?php

$clients = Booking::get_clients();
/*if (isset($_GET['delete_div_id'])) {
    $id = $_GET['delete_div_id'];
    $division_id = Division::find_by_id($id);

    if ($division_id->delete()) {
        header('Location: divisions.php');
    }
}*/

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
                <table id="myTable" class="table tab-content table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Email</th>
                        <th>Room Type</th>
                        <th>Number Of Room</th>
                        <th>Number Of Person</th>
                        <th>Hotel Name</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = mysqli_fetch_assoc($clients)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['user_email'] ?></td>
                            <td><?php echo $row['room_type']; ?></td>
                            <td><?php echo $row['number_of_room']; ?></td>
                            <td><?php echo $row['number_of_persons']; ?></td>
                            <td><?php echo $row['hotel_name']; ?></td>
                            <td><?php echo $row['code']; ?></td>
                            <td>
                                <a href="clients.php?source=edit_client&c_id=<?php echo $row['id']; ?>"
                                   class="btn btn-success " style="width: 100px">Confirm</a>
                                <a href="" class="btn btn-danger "
                                   style="width: 100px; margin-top: 10px;">Reject</a>
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

