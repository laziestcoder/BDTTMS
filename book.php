<?php
require_once("includes/init.php");
?>
<?php require_once("includes/session.php"); ?>
<?php
//ob_start();


//ekhan theke
if (!$session->is_signed_in()) {
    $_SESSION["book"] = "Please Login First.";
    header("location:Where_To_Stay_Hotel.php");

} else {
    if ($_SESSION["user_id"]) {
        $id = $_SESSION["user_id"];
    } else {

        redirect("location:index.php");
    }
}

?>

<?php

$message = '';
$saved = 0;
if (isset($_POST['submit'])) {
    $booking = new Booking();
    $booking->user_email = $_POST['email'];
    $booking->room_type = $_POST['room_type'];
    $booking->number_of_room = $_POST['room_number'];
    $booking->number_of_persons = $_POST['person_number'];
    $code = $booking->code = Booking::get_unique_number();
    $booking->hotel_id = $_GET['hotel_id'];
    $booking->pending_info = '0';
    $booking->confirm_booking = '0';

    // print_r($booking);

    if ($booking->save()) {
        $message = "Data recorded successfully";
        $saved = 1;
    } else {
        $message = "Data record failed";
        $saved = 0;
    }
}

?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.css">

        <title>Document</title>
    </head>
    <body>
    <!--Navbar start-->

    <?php require_once("includes/navigation.php"); ?>

    <!-- /.navbar -->
    <div class="container">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 100px;">
            <form class="text-center" action="" method="post">
                <div class="from-group">
                    <label>Your email</label>
                    <input type="email" name="email" class="form-control"
                           placeholder="your email id">
                </div>
                <div class="form-group">
                    <label>Room/Suite Type</label>
                    <select class="form-control" name="room_type"
                            id="room_type">
                        <option value="standard"> Standard</option>
                        <option value="delux"> Deluxe</option>
                        <option value="superior"> Superior Deluxe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Number of room/suite</label>
                    <select class="form-control" name="room_number"
                            id="room_number">
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Number of persons</label>
                    <select class="form-control" name="person_number"
                            id="person_number">
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>
                        <option value="6"> 6</option>
                        <option value="7"> 7</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="hotel_id"
                           value="<?php echo $row['id']; ?> ">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit"
                           class="btn btn-primary form-control "
                           value="Book Hotel ">
                </div>
            </form>
        </div>

    </div>

    </body>
    </html>
<?php
if ($saved == 1) {
    require_once("bookmail.php");
}
?>