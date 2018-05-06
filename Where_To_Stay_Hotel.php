<?php
require_once("includes/init.php");
require_once ("includes/session.php");

$hotels = RegisterHotel::get_registered_hotel();

if(isset($_SESSION["book"]))
{
    echo "<script>window.alert('Please Login Firsr!')</script>";
    unset($_SESSION["book"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Hotel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>
    <!--Google fronts-->
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Francois+One" rel="stylesheet">


    <!--Google fronts End-->
    <!--Date picker Start-->
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css"/>
    <!--Date picker End-->


    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.shuffle-images.js"></script>

</head>
<body>


<!--Navbar start-->

<?php require_once("includes/navigation.php"); ?>

<!-- /.navbar -->
<!--Slider Start-->
<div class=" bg-overlay">
    <div class="row text-center">
        <h1><?php echo $_SESSION['stay']; ?> Day(s) In <?php echo $_SESSION['destination_city']; ?> City </h1>
        <h4><?php echo $_SESSION['from_date']; ?>
            - <?php echo $_SESSION['to_date']; ?></h4>
        <br><br>
    </div>
</div>
<!--Slider End-->
<!--Manu tabs start-->
<div class="container" style="margin-top: 30px;">
    <ul class="nav nav-tabs" style="font-size: 25px;">
        <li class="  divider "><a style="color: black" href="direction.php">Destination Place</a></li>
        <li class="divider active-border"><a href="Where_To_Stay_Hotel.php">Where to Stay</a></li>
        <li><a style="color: black;" href="How_To_Travel.php">Your Vehicle</a></li>

    </ul>

</div>
<br><br>
<!--Manu tabs end-->
<!--Hotel start-->


<section class="wrapper">
    <div class="container-big">
        <div>
            <img src="" class="big-logo"/>
            <h1 class="heading">
                Hotel in <?php echo $_SESSION['destination_city']; ?> City
            </h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($hotels)) { ?>
                        <div class="col-xs-12 col-sm-3">
                            <div class="carbox">
                                <a class="img-carbox" href="#">
                                    <img src="images/<?php echo $row['hotel_image']; ?>"/>
                                </a>
                                <div class="carbox-content">
                                    <h4 class="carbox-title">
                                        <a href="#"><?php echo $row['hotel_name']; ?>
                                        </a>
                                    </h4>
                                    <p class="">
                                        <?php echo $row['hotel_location']; ?>
                                    </p>

                                </div>

                                <div class="carbox-read-more">
                                    <a class="btn btn-link btn-block" target="_blank"
                                       href="book.php?hotel_id=<?php echo $row['id']; ?>">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Hotel End-->
<!--Footer Start-->

<?php require_once("includes/footer.php"); ?>

<!--Footer End-->
