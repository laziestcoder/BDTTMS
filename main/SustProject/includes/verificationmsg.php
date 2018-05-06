<?php

$active = 0;
$deactive = 0;
$invalid = 0;
//print_r($_GET);
if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
    // Verify data
    $email = $database->escape_string($_GET['email']); // Set email variable
    $hash = $database->escape_string($_GET['hash']); // Set hash variable
    $sql = "SELECT email, hash, active FROM tbl_user WHERE email='" . $email . "' AND hash='" . $hash . "' AND active='0'";
    print_r($sql);
    $search = $database->query($sql);//or die(mysqli_error());
    //var_dump($search);
   // print_r($search);
    $match = mysqli_num_rows($search);
   // print_r($match);
    if ($match > 0) {
        // We have a match, activate the account
        $sql = "UPDATE tbl_user SET active='1' WHERE email='" . $email . "' AND hash='" . $hash . "'";
        $database->query($sql);
        $active = 1;
        $deactive = 0;
        $invalid = 0;
    } else {
        // No match -> invalid url or account has already been activated.
        $active = 0;
        $deactive = 1;
        $invalid = 0;
    }

} else {
    // Invalid approach
    $active = 0;
    $deactive = 0;
    $invalid = 1;
}

?>
<!-- stop PHP Code -->