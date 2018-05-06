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

<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

        <!-- Admin Sector Starts -->

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#user"><i
                        class="fa fa-users"></i> Admin <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="user" class="collapse">
                <li>
                    <a class="fa fa-user-plus" href="admins.php?source=add_admin"> Add Admin</a>
                </li>
                <li>
                    <!--<a class="fa fa-user" href="admins.php"> View All Admins</a>-->
                    <a class="fa fa-user" href=".#"> View All Admins</a>

                </li>
            </ul>
        </li>


        <!-- Division Sector Starts -->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#division_dropdown"><i
                        class="fa fa-ravelry "></i> Division <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="division_dropdown" class="collapse">
                <li>
                    <a class="fa fa-cube" href="divisions.php?source=add_division"> Add Division</a>
                </li>
                <li>
                    <a class="fa fa-cubes" href="divisions.php"> View Divisions</a>
                </li>
            </ul>
        </li>
        <!-- City Sector Starts -->

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#city"><i
                        class="fa fa-area-chart "></i> City <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="city" class="collapse">
                <li>
                    <a class="fa fa-th-large" href="cities.php?source=add_city"> Add City</a>
                </li>
                <li>
                    <a class="fa fa-th" href="cities.php"> View Cities</a>
                </li>
            </ul>
        </li>

        <!-- Place Sector Starts -->

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#place"><i
                        class="fa fa-superpowers""></i> Place <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="place" class="collapse">
                <li>
                    <a class="fa  fa-eercast" href="places.php?source=add_place"> Add Place</a>
                </li>
                <li>
                    <a class="fa fa-snowflake-o" href="places.php"> View Places</a>
                </li>
            </ul>
        </li>

        <!-- Plan Sector Starts -->

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#plan"><i
                        class="fa fa-cogs"></i> Plan <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="plan" class="collapse">
                <li>
                    <a class="fa fa-cog" href="plans.php?source=add_plan"> Add Plan</a>
                </li>
                <li>
                    <a class="fa fa-spinner " href="plans.php"> View Plans</a>
                </li>
            </ul>
        </li>

        <!-- Hotel Sector Starts -->


        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#hotels"><i
                        class="fa fa-home"></i> Hotels <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="hotels" class="collapse">
                <li>
                    <a class="fa fa-bed" href="hotels.php?source=view_unregistered_hotel"> View Unregistered Hotels</a>
                </li>
                <li>
                    <a class="fa fa-bed" href="view_registered_hotel.php">View Registered Hotels</a>
                </li>
            </ul>
        </li>

        <!-- Transport Sector Starts -->
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#transport"><i
                        class="fa fa-bus"></i> Transports<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="transport" class="collapse">

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#car"><i
                                class="fa fa-car"></i> Vehicles <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="car" class="collapse">
                        <li>
                            <a href="transports.php?source=add_car"> Add Vehicle</a>
                        </li>
                        <li>
                            <a href="transports.php"> View All Vehicles</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#air"><i
                                class="fa fa-plane"></i> Air-Plane<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="air" class="collapse">
                        <li>
                            <a href="transports.php?source=add_airlines"> Add Airline</a>
                        </li>
                        <li>
                            <a href="transports.php"> View All Airlines</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>