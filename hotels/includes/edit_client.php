<?php

$client = Booking::find_by_id($_GET['c_id']);
$client->pending_info = '1';

if($client->save()){
    header("Location: confirmed_clients.php");
}
?>