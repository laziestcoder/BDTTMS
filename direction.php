<?php
require_once("includes/init.php");

//print_r($_POST);
if (isset($_POST['submit'])) {
    $from_city = $_POST['fromCity'];
    $destination_city = $_POST['toCity'];
    $_SESSION['destination_city'] = $destination_city;
    $from_date = $_POST['startDate'];
    $to_date = $_POST['endDate'];
    $member = $_POST['member'];

    $city = City::get_city_info($destination_city);
    $_SESSION['city_image'] = $city->city_image;
    $_SESSION['city_description'] = $city->city_description;

    $datetime1 = new DateTime($from_date);
    $datetime2 = new DateTime($to_date);

    $_SESSION['from_date'] = $datetime1->format('F j');
    $_SESSION['to_date'] = $datetime2->format('F j,Y');
// $datetime1->format('F j,Y');

    if ($datetime2 > $datetime1) {
        $difference = $datetime1->diff($datetime2);
        $stay = $difference->days;
        $_SESSION['stay'] = $stay;
        $plans = Plan::find_plan($destination_city, $stay);
    } else {
        $_SESSION['message'] = "Please enter correct time format";
        header('Location: index.php');
    }
}

//print_r($plans);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Directon</title>
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
    <script type="text/javascript" src="js/calcuRoute.js"></script>

</head>
<!--Navbar start-->
<nav class="navbar navbar-default" style="">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">IIUC S<span style="font-size:20px; ">QLInject</span>ors </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html " style="color:#5ABAC6;  ">Home</a></li>


                <li><a href="#">Blog </a></li>
                <li><a href="contact.html">Contacts</a></li>
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>

                    <!-- BEGIN # MODAL LOGIN -->
                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-sm ">
                            <div class="modal-content">
                                <div class="modal-header" align="center">
                                    <img id="img_logo" src="images/bees.png">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </button>
                                </div>

                                <!-- Begin # DIV Form -->
                                <div id="div-forms">

                                    <!-- Begin # Login Form -->
                                    <form id="login-form">
                                        <div class="modal-body">

                                            <input id="login_username" class="form-control" type="text"
                                                   placeholder="Username " required>
                                            <input id="login_password" class="form-control" type="password"
                                                   placeholder="Password" required>


                                        </div>
                                        <div class="modal-footer">
                                            <div>
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login
                                                </button>
                                            </div>
                                            <div>
                                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost
                                                    Password?
                                                </button>
                                                <button id="login_register_btn" type="button" class="btn btn-link">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End # Login Form -->

                                    <!-- Begin | Lost Password Form -->
                                    <form id="lost-form" style="display:none;">
                                        <div class="modal-body">

                                            <input id="lost_email" class="form-control" type="text"
                                                   placeholder="E-Mail " required>
                                        </div>
                                        <div class="modal-footer">
                                            <div>
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send
                                                </button>
                                            </div>
                                            <div>
                                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In
                                                </button>
                                                <button id="lost_register_btn" type="button" class="btn btn-link">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End | Lost Password Form -->

                                    <!-- Begin | Register Form -->
                                    <form id="register-form" style="display:none;">
                                        <div class="modal-body">

                                            <input id="register_username" class="form-control" type="text"
                                                   placeholder="Username " required>
                                            <input id="register_email" class="form-control" type="text"
                                                   placeholder="E-Mail" required>
                                            <input id="register_password" class="form-control" type="password"
                                                   placeholder="Password" required>
                                        </div>
                                        <div class="modal-footer">
                                            <div>
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                    Register
                                                </button>
                                            </div>
                                            <div>
                                                <button id="register_login_btn" type="button" class="btn btn-link">Log
                                                    In
                                                </button>
                                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost
                                                    Password?
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End | Register Form -->

                                </div>
                                <!-- End # DIV Form -->

                            </div>
                        </div>
                    </div>
                    <!-- END # MODAL LOGIN -->
                </li>


            </ul>


        </div><!-- /.navbar-collapse -->


    </div><!-- /.container -->
</nav><!-- /.navbar -->
<!--Slider Start-->
<div class=" bg-overlay">
    <div class="row text-center">
        <h1 style="margin-top: 60px;"><?php echo $_SESSION['stay']; ?> Day(s)
            In <?php echo $_SESSION['destination_city']; ?> City </h1>
        <h4><?php echo $_SESSION['from_date']; ?> - <?php echo $_SESSION['to_date']; ?></h4>
    </div>
</div>
<!--Slider End-->
<!--Manu tabs start-->
<div class="container" style="margin-top: 30px;">
    <ul class="nav nav-tabs" style="font-size: 25px;">
        <li class=" active-border divider "><a href="direction.php">Home</a></li>
        <li class="divider"><a style="color: black;" href="Where_To_Stay_Hotel.php">Where to Stay</a></li>
        <li><a style="color: black;" href="How_To_Travel.php">How to Travel</a></li>

    </ul>

</div>
<br><br>
<!--Manu tabs end-->


<!--About the city Start-->
<div class="container">
    <div class="panel-group col-md-11 " style="margin-left: 30px;">
        <div class="panel panel-custom">
            <div class="panel-heading text-center">
                <a href="#"><h1><?php echo $_SESSION['destination_city']; ?></h1></a>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-md-6 panel-body-image">
                        <img src="images/<?php echo $_SESSION['city_image']; ?>">
                    </div>
                    <div class="col-md-6 panel-body-p">
                        <p> <span class="more">
                                <?php echo $_SESSION['city_description']; ?>
                            </span></p>
                        <h4>Accommodations</h4>
                        <p>Get expert advice on where to stay in <?php echo $_SESSION['destination_city']; ?> City.</p>
                        <a href="Where_To_Stay_Hotel.html" class="btn btn-primary">Book hotel <span><i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>

        </div>

        <?php if (!empty($plans)) {
            while ($row = mysqli_fetch_assoc($plans)) { ?>
                <div class="panel panel-custom">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <div class="plan-image" style="padding-top: 80px; padding-left: 80px">
                                    <?php $_SESSION['days'] = $row['days']; ?>
                                    <h4 class=""><?php echo $_SESSION['days']; ?></h4>
                                </div>
                            </div>
                            <div class="col-md-7 place-text">
                                <div>
                                    <?php
                                    $_SESSION['first_place'] = $row['first_place'];
                                    $_SESSION['second_place'] = $row['second_place'];
                                    ?>
                                    <h3><?php echo $_SESSION['first_place']; ?>
                                        -<?php echo $_SESSION['second_place']; ?></h3>
                                    <hr>
                                </div>
                                <div>
                                    <p> <span class="more">
                                            <?php $_SESSION['plan_description'] = $row['plan_description']; ?>
                                            <?php echo $_SESSION['plan_description']; ?>
                                </span></p>
                                </div>
                                <div class="col-md-12 place-stay-btn">
                                    <div class="col-md-4">
                                        <a data-toggle="modal" data-target="#myModal" class="btn btn-primary">How to
                                            travel</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;
                                                        </button>
                                                        <h4 class="modal-title">Your Direction</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Some text in the modal.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">
                                                            Close
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <a href="Where_To_Stay_Hotel.php" class="btn btn-primary">Where to stay </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            <?php }
        }; ?>

    </div>
</div>

<?php
require_once("includes/footer.php");
?>

<!--Script file Start-->

<script src="js/main.js"></script>
</body>
</html>