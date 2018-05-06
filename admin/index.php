<?php //ob_start();
require_once("../includes/init.php"); ?>
<?php require_once("../includes/session.php"); ?>

<?php
//ob_start();
//ekhan theke
if (!$session->is_admin_signed_in()) {
    header("Location: login.php");
} else {
    if ($_SESSION["admin_id"]) {
        $id = $_SESSION["admin_id"];
        //print_r($id);
        // var_dump($id);die();
        $user = Adminpro::find_by_id($id);
        $name = $user->admin_name;
    } else {
        $session->logout();
        redirect("location:login.php");
    }
}
/*print_r($id);
var_dump($id);die();
print_r($user);
var_dump($user);die();*/
?>

<?php
require_once("includes/header.php"); ?>

<!-- Navigation -->
<?php include("includes/top_nav.php"); ?>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<?php require_once("includes/side_nav.php"); ?>


<div id="page-wrapper">

    <div class="container-fluid">


        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome <span style="text-transform: capitalize;"><?php echo $name; ?></span>

                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary" style="border-color: #A8216B; color: #A8216B;">
                    <div class="panel-heading" style="background-color: #A8216B;">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-ravelry fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                    $division = Division::count_divisions();
                                    echo $division;
                                    ?>
                                </div>
                                <div>Divisions</div>
                            </div>
                        </div>
                    </div>
                    <a href="divisions.php">
                        <div class="panel-footer" style="color: #A8216B;">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-area-chart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                    $city_count = City::count_city();
                                    echo $city_count;
                                    ?>
                                </div>
                                <div>Cities</div>
                            </div>
                        </div>
                    </div>
                    <a href="cities.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-eercast fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                    $place_count = Place::count_place();
                                    echo $place_count;
                                    ?>
                                </div>
                                <div>Places</div>
                            </div>
                        </div>
                    </div>
                    <a href="places.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red" style="background-color: #2E9598;border-color: #2E9598;">
                    <div class="panel-heading" style="background-color: #2E9598;border-color: #2E9598;">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-superpowers fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                    $plan_count = Plan::count_plan();
                                    echo $place_count;
                                    ?>
                                </div>
                                <div>Plans</div>
                            </div>
                        </div>
                    </div>
                    <a href="plans.php">
                        <div class="panel-footer" style="color: #2E9598;">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red" style="background-color: #C22326;border-color: #C22326;">
                    <div class="panel-heading" style="background-color: #C22326;border-color: #C22326;">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bed fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                    $count_registered_hotel = RegisterHotel::count_registerHotel();
                                    echo $count_registered_hotel;
                                    ?>
                                </div>
                                <div>Registered Hotel</div>
                            </div>
                        </div>
                    </div>
                    <a href="view_registered_hotel.php">
                        <div class="panel-footer" style="color: #C22326;">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bed fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                    $count_unregistered_hotel = RegisterHotel::count_unregisteredHotel();
                                    echo $count_unregistered_hotel;
                                    ?>
                                </div>
                                <div>Unregistered Hotel</div>
                            </div>
                        </div>
                    </div>
                    <a href="hotels.php?source=view_unregistered_hotel">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red" style="background-color: #F98441;border-color: #F98441;">
                    <div class="panel-heading" style="background-color: #F98441;border-color: #F98441;">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-plane fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                    ?>
                                </div>
                                <div>Registered Transport</div>
                            </div>
                        </div>
                    </div>
                    <a href="categories.php">
                        <div class="panel-footer" style="color: #F98441;">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red" style="background-color: #95C51F;border-color: #95C51F;">
                    <div class="panel-heading" style="background-color: #95C51F;border-color: #95C51F;">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-plane fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                    ?>
                                </div>
                                <div>Unregistered Transport</div>
                            </div>
                        </div>
                    </div>
                    <a href="categories.php">
                        <div class="panel-footer" style="color: #95C51F;">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <script type="text/javascript">
                google.charts.load('current', {'packages': ['bar']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Data', 'Count'],
                        <?php
                        $divisons = Division::count_divisions();
                        $cities = City::count_city();
                        $places = Place::count_place();
                        $plans = Plan::count_plan();
                        $registered_hotel = RegisterHotel::count_registerHotel();
                        $active_data = ['All Divisions', 'All Cities', 'All Places', 'All Plans', 'Registered Hotel'];
                        $active_count = [$divisons, $cities, $places, $plans, $registered_hotel];

                        for ($i = 0; $i < count($active_data); $i++) {
                            echo "['{$active_data[$i]}'" . ", " . "{$active_count[$i]}],";
                        }
                        ?>
                    ]);

                    var options = {
                        chart: {
                            title: '',
                            subtitle: '',
                        }
                    };

                    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                    chart.draw(data, google.charts.Bar.convertOptions(options));
                }
            </script>

            <div id="columnchart_material" style="width: auto; height: 500px;"></div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php require_once("includes/footer.php"); ?>

