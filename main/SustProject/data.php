<?php require_once("includes/init.php"); ?>
<?php
//echo $_POST['hotel_name'];
/*$hotel = new RegisterHotel();
$hotel->hotel_name = $_POST['hotel_name'];
$hotel->hotel_admin_name = $_POST['admin_name'];
$hotel->phone_number = $_POST['phone_number'];
$hotel->hotel_email = $_POST['email'];
$hotel->password = $_POST['password'];
$hotel->city_id = $_POST['city_id'];
$hotel->hotel_location = $_POST['location'];
$hotel->hotel_description = $_POST['description'];
$hotel->hotel_image = RegisterHotel::set_image($_FILES['image']);
$hotel->pending_info = '0';

print_r($hotel);
/*echo "<br>";*/

/*if ($hotel->save()) {
echo "Data recorded successfully";
} else {
    echo "Data record failed";
}*/
print_r($_POST);
?>