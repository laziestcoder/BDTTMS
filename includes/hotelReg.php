<?php require_once("init.php"); ?>
<?php
$cities = City::find_all();
$message = '';
if (isset($_POST['submit'])) {
    $registerHotel = new RegisterHotel();
    $registerHotel->hotel_name = $_POST['hotel_name'];
    $registerHotel->hotel_admin_name = $_POST['admin_name'];
    $registerHotel->phone_number = $_POST['phone_number'];
    $registerHotel->hotel_email = $_POST['email'];
    $registerHotel->password = $_POST['password'];
    $registerHotel->city_id = $_POST['city_id'];
    $registerHotel->hotel_location = $_POST['location'];
    $registerHotel->hotel_description = $_POST['description'];
    $registerHotel->hotel_image = RegisterHotel::set_image($_FILES['file']);
    $registerHotel->pending_info = '0';

    //print_r($registerHotel);

    if ($registerHotel->save()) {
        $message = "Data recorded successfully";
    } else {
        $message = "Data record failed";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="sumit kumar">

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../css/admin_plugin.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 " style="margin-top: 1%; margin-left: 25%;">
            <p id="show"></p>
            <?php //echo $message; ?>
            <div><h2 class="text-center">Welcome to Hotel Registration</h2></div>
            <form action="" class="" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
                <div class=" form-group">
                    <input type="text" name="hotel_name" id="hotel_name" placeholder="Hotel name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="admin_name" id="admin_name" placeholder="Name of hotel admin "
                           class="form-control">
                </div>
                <div class="form-group">
                    <input type="phone" name="phone_number" id="phone_number" placeholder="Phone number"
                           class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="confirm_password"
                           id="confirm_password" placeholder="Retype password "
                           class="form-control">
                </div>
                <div class="form-group">
                    <select class="form-control" name="city_id" id="city_id">
                        <option value="">--Select--</option>
                        <?php foreach ($cities as $city): ?>
                            <option value="<?php echo $city->id; ?>">
                                <?php echo $city->city_name; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="location" class="form-control" id="location" rows="4"
                              placeholder="Location of the hotel"></textarea>
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" id="description" rows="4"
                              placeholder="Description of the hotel"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="file" class="form-control" id="file">
                </div>
                <div class="form-group">
                    <input type="submit" value="Registration" name="submit"
                           class="btn btn-primary col-md-offset-3"
                           style="width: 220px; font-size: 15px;">
                </div>
            </form>

        </div>
    </div>
</div>
<script>
    function validateForm() {
        var x = document.getElementById("password").value;
        var y = document.getElementById("confirm_password").value;
        if (x == y) {
            return true;
        } else {
            confirm_password.setCustomValidity("Passwords Didn't Match!");
            return false;
        }
    }
</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
</body>
</html>