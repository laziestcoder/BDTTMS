<?php
/*//require_once ("../../includes/init.php");
//ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
}
else{
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
    } else {
        $session->logout();
        redirect("location:login.php");
    }
}
*/ ?>

<div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #0f192a">
    <ul class="nav navbar-nav side-nav" style="height: 100%; background-color: #0f192a">
        <li>
            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#user"><i
                        class="fa fa-users"></i>Clients<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="user" class="collapse">
                <li>
                    <a class="fa fa-user-plus" href="clients.php?source=pending_clients">View Client Information</a>
                </li>
                <li>
                    <a class="fa fa-user-plus" href="clients.php">View Confirmed Client</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>