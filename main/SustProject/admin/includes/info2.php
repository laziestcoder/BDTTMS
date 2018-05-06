<?php
require_once("../../init.php");
echo $places = Place::find_places($_GET['term']);
?>