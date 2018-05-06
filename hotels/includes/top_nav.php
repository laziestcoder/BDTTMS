<?php ob_start();

if(isset($_SESSION["hotel_admin_id"]))
{
    $id=$_SESSION["hotel_admin_id"];
    $user=RegisterHotel::find_by_id($id);
    $name=$user->hotel_admin_name;
}

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php">IIUC BeeS Hotel Admin Panel</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                        src="images/user.PNG" class="profile-image img-circle "
                        style="height: 25px; width: 25px;"> <?php echo $name;?> <b
                        class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="profile.php?source=view_profile&id=<?php // echo $id;?>"> <i class="fa fa-fw fa-user"></i>
                        My Profile</a>
                </li>
                <li>
                    <a href="profile.php?source=edit_profile&id=<?php //echo $id;?>"> <i class="fa fa-fw fa-gear"></i>
                        Edit Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../includes/hotel_logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>