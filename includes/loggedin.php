<?php
//ob_start();
require_once("init.php");
require_once("session.php");
//ekhan theke
if (!$session->is_signed_in()) {
    header("Location:index.php");
    unset($_SESSION["user_id"]);
} else {
    if ($_SESSION["user_id"]) {
        $id = $_SESSION["user_id"];
        $user = Profile::find_by_id($_SESSION['user_id']);
        //header("location:index.php");
    } else {
        $session->admin_logout();
        header("location:index.php");
    }
}

?>


<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                src="images/users/<?php echo $user->user_image; ?>" class="profile-image img-circle "
                style="height: 25px; width: 25px;"> <?php echo $user->username; ?> <span class="caret"></span> </a>
    <ul class="dropdown-menu">
        <li><a href="profile.php?source=view_profile&id=<?php echo $id; ?>">My Profile</a></li>
        <li>
            <a href="profile.php?source=edit_profile&id=<?php echo $id; ?>">Edit Profile</a></li>
        <li><a href="includes/logout.php?">Log Out</a></li>

    </ul>

</li>