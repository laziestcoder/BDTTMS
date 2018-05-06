<?php
require_once("init.php");
echo $cities = City::find_cities($_GET['term']);
?>