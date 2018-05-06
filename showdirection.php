<?php

$startplace = $_POST["fromCity"];
$endplace = $_POST["toCity"];
$startdate = $_POST["startDate"];
$enddate = $_POST["endDate"];
$member = $_POST["member"];

?>
<?php
require_once("includes/init.php");
/*session_start();*/
//print_r($_POST);
if (isset($_POST['submit'])) {
    $from_city = $_POST['fromCity'];
    $destination_city = $_POST['toCity'];
    $_SESSION['destination_city'] = $destination_city;
    $from_date = $_POST['startDate'];
    $to_date = $_POST['endDate'];
    $member = $_POST['member'];

    $city = City::get_city_info($destination_city);

    if ($city) {
        $_SESSION['city_image'] = $city->city_image;
        $_SESSION['city_description'] = $city->city_description;
    }

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
        session_start();
        $_SESSION['message'] = "Please enter correct time format";
        header('Location: index.php');
    }
}
//print_r($plans);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plans</title>
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyC0gnjDKRXILSK2Auei7w8uln9DxrE6qgI"></script>


</head>
<body onLoad="initialize(); calcRoute(); return false;">
<!--Navbar start-->
<?php require_once("includes/navigation.php"); ?>
<!-- /.navbar -->

<!--Slider Start-->
<div class=" bg-overlay">
    <div class="row text-center">
        <h1 style="margin-top: 60px;"><?php echo $_SESSION['stay']; ?> Day(s)
            In <?php echo $_SESSION['destination_city']; ?> City </h1>
        <h4><?php echo $_SESSION['from_date']; ?> - <?php echo $_SESSION['to_date']; ?></h4>


    </div>
</div>
<!--Slider End-->
<div class="container">
    <h2 class="text-center">Your Direction</h2>

    <div id="map_canvas" style="width:100%; height:300px;"></div>


    <form action="#" onSubmit="calcRoute();return false;" id="routeForm" style="display: none;">

        <label>

            <br/>
            <input type="text" id="routeStart" value='<?php echo $startplace; ?>'>
            <a href="#" class="autoLink" style="display: none;">Use current location: <span>not found</span></a>

        </label>


        <label>
            <br/>To: <br/>
            <input type="text" id="routeEnd" value='<?php echo $endplace; ?>'>
        </label>
        <label><input type="radio" name="travelMode" value="DRIVING" checked/></label>
        <input type="submit" value="Calculate route">


    </form>
</div>


<br>
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

<?php
if ($city) {
    ?>
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
                            <p>Get expert advice on where to stay in <?php echo $_SESSION['destination_city']; ?>
                                City.</p>
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
                                   <h3>Day</h3>
                                    <?php $_SESSION['days'] = $row['days']; ?>
                                    <h1 class=""><?php echo $_SESSION['days']; ?></h1>
                                    <div class="plan-image" style="padding-top: 80px; padding-left: 80px">
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
                                            <!--<a data-toggle="modal" data-target="#myModal" class="btn btn-primary">How to
                                                travel</a>-->
                                            <!-- Modal -->
                                            <!--<div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">


                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                &times;
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
                                            </div>-->
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
<?php } else { ?>
    <div class="container">
        <div class="panel-group">
            <div class="panel-body text-center">
                <h3>There is no plan for these city.</h3>
            </div>
        </div>
    </div>
    <?php
}
//require_once("showdirection1.php");
require_once("includes/footer.php");
?>

<!--Script file Start-->

<script src="js/main.js"></script>


<script>

    var directionDisplay, map;
    var directionsService = new google.maps.DirectionsService();
    var geocoder = new google.maps.Geocoder();


    function initialize() {
        // set the default center of the map
        var latlng = new google.maps.LatLng(23.810332, 90.412518);
        // set route options (draggable means you can alter/drag the route in the map)
        var rendererOptions = {draggable: true};
        directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
        // set the display options for the map
        var myOptions = {
            zoom: 14,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false
        };
        // add the map to the map placeholder
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        // bind the map to the directions
        directionsDisplay.setMap(map);
        // point the directions to the container for the direction details
        directionsDisplay.setPanel(document.getElementById("directionsPanel"));
        // start the geolocation API
        if (navigator.geolocation) {
            // when geolocation is available on your device, run this function
            navigator.geolocation.getCurrentPosition(foundYou, notFound);
        } else {
            // when no geolocation is available, alert this message
            alert('Geolocation not supported or not enabled.');
        }
    }


    function notFound(msg) {
        alert('Could not find your location :( Please allow location access.')
    }

    function foundYou(position) {
        // convert the position returned by the geolocation API to a google coordinate object
        var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        // then try to reverse geocode the location to return a human-readable address
        geocoder.geocode({'latLng': latlng}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                // if the geolocation was recognized and an address was found
                if (results[0]) {
                    // add a marker to the map on the geolocated point
                    marker = new google.maps.Marker({
                        position: latlng,
                        map: map
                    });
                    // compose a string with the address parts
                    var address = results[0].address_components[1].long_name + ' ' + results[0].address_components[0].long_name + ', ' + results[0].address_components[3].long_name
                    // set the located address to the link, show the link and add a click event handler
                    $('.autoLink span').html(address).parent().show().click(function () {
                        // onclick, set the geocoded address to the start-point formfield
                        $('#routeStart').val(address);
                        // call the calcRoute function to start calculating the route
                        calcRoute();
                    });
                }
            } else {
                // if the address couldn't be determined, alert and error with the status message
                alert("Geocoder failed due to: " + status);
            }
        });
    }


    function calcRoute() {
        // get the travelmode, startpoint and via point from the form
        var travelMode = $('input[name="travelMode"]:checked').val();
        var start = $("#routeStart").val();
        var end = $("#routeEnd").val();
        // compose a array with options for the directions/route request
        var request = {
            origin: start,
            destination: end,
            unitSystem: google.maps.UnitSystem.IMPERIAL,
            travelMode: google.maps.DirectionsTravelMode[travelMode]
        };
        // call the directions API
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                // directions returned by the API, clear the directions panel before adding new directions
                $('#directionsPanel').empty();
                // display the direction details in the container
                directionsDisplay.setDirections(response);
            } else {
                // alert an error message when the route could nog be calculated.
                if (status == 'ZERO_RESULTS') {
                    alert('No route could be found between the origin and destination.');
                } else if (status == 'UNKNOWN_ERROR') {
                    alert('A directions request could not be processed due to a server error. The request may succeed if you try again.');
                } else if (status == 'REQUEST_DENIED') {
                    alert('This webpage is not allowed to use the directions service.');
                } else if (status == 'OVER_QUERY_LIMIT') {
                    alert('The webpage has gone over the requests limit in too short a period of time.');
                } else if (status == 'NOT_FOUND') {
                    alert('At least one of the origin, destination, or waypoints could not be geocoded.');
                } else if (status == 'INVALID_REQUEST') {
                    alert('The DirectionsRequest provided was invalid.');
                } else {
                    alert("There was an unknown error in your request. Requeststatus: nn" + status);
                }
            }
        });
    }
</script>
</body>
</html>

