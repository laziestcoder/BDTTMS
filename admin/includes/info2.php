<?php
require_once("../../includes/init.php");
echo $places = Place::find_places($_GET['term']);
?>