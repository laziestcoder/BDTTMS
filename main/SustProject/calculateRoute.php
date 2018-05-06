<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyC0gnjDKRXILSK2Auei7w8uln9DxrE6qgI"></script>
<script src="js/calcuRoute.js"></script>


<div id="map_canvas" style="width:65%; height:65%"></div>


<body onLoad="initialize(); calcRoute();  return false;">

<form action="#" onSubmit="calcRoute();return false;" id="routeForm">

    <label>

        From: <br />
        <input type="text" id="routeStart" value="">
        <a href="#" class="autoLink" style="display: none;">Use current location: <span>not found</span></a>

    </label>


    <label>
        <br/>To: <br />
        <input type="text" id="routeEnd" value="Dhaka">
    </label>
    <label><input type="radio" name="travelMode" value="DRIVING" checked /> Driving</label>
    <label><input type="radio" name="travelMode" value="BICYCLING" /> Bicylcing</label>
    <label><input type="radio" name="travelMode" value="TRANSIT" /> Public transport</label>
    <label><input type="radio" name="travelMode" value="WALKING" /> Walking</label>
    <input type="submit" value="Calculate route">


</form>

<div id="directionsPanel">
    Enter a starting point and click "Calculate route".
</div>
<?php


?>