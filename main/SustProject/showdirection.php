<?php

$startplace= $_POST["currentLoc"];
$endplace = $_POST["destinationLock"] ;
$startdate = $_POST["startdate"];
$enddate = $_POST["enddate"];
$member = $_POST["member"];


echo "Start Place ".$startplace.'<br>' ;
echo "Destination Place ".$endplace.'<br>' ;
echo "Start Date ".$startdate.'<br>';
echo "End Date ".$enddate.'<br>';
echo "Member ".$member.'<br>';
?>
<br>
<!--test 1 start -->
<!--

<form action="http://maps.google.com/maps" method="get" target="_blank">
   <label for="saddr">Enter your location</label>
   <type="text" name="saddr" value=<?php /*echo $endplace; */?>
   <type="hidden" name="daddr" value=<?php /*echo $startplace; */?> >
   <input type="submit" value="Get directions" />
</form>

-->
<!--test 1 end-->

<!--test 2 start-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyC0gnjDKRXILSK2Auei7w8uln9DxrE6qgI"></script>
<script src="js/calcuRoute.js"></script>


<div id="map_canvas" style="width:65%; height:65%"></div>


<body onLoad="initialize(); calcRoute(); return false;">

<form action="#" onSubmit="calcRoute();return false;" id="routeForm">

    <label>

        From: <br />
        <input type="text" id="routeStart" value='<?php echo $startplace; ?>' >
        <a href="#" class="autoLink" style="display: none;">Use current location: <span>not found</span></a>

    </label>


    <label>
        <br/>To: <br />
        <input type="text" id="routeEnd" value='<?php echo $endplace; ?>' >
    </label>
    <label><input type="radio" name="travelMode" value="DRIVING" checked /> Driving</label>
    <label><input type="radio" name="travelMode" value="BICYCLING" /> Bicylcing</label>
    <label><input type="radio" name="travelMode" value="TRANSIT" /> Public transport</label>
    <label><input type="radio" name="travelMode" value="WALKING" /> Walking</label>
    <input type="submit" value="Calculate route">


</form>

<div id="directionsPanel">
    To check again enter a start point and end point and click "Calculate route".
</div>
<?php


?>



<!--test 2 end-->