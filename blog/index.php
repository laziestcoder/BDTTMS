<?php
ob_start();
require_once("../includes/init.php");
require_once("../includes/session.php");

if (!isset($_SESSION)) session_start();
$allBlogPost = Blog::all_blog();
//var_dump($allBlogPost);
//print_r($allBlogPost);
?>


<head>

   <title>Blog</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/blogStyle.css">
  <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.js"></script>



    <!--NEWLY ADDED-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          media="all">
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>

    <!--Google fronts-->
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">

    <!--Google fronts End-->
    <!--Date picker Start-->
    <link rel="stylesheet" type="text/css" href="../css/daterangepicker.css"/>
    <!--Date picker End-->
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../resources/css/contact.css" rel="stylesheet" type="text/css">

    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-ui.js"></script>

    <script src="../js/bootstrap.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.shuffle-images.js"></script>


    <!--NEWLY ADDED END-->


    <style>
        /*.blogPost {
            white-space: nowrap;
            width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
        }*/
    </style>


</head>
</body>


<?php
require_once("blogNavigation.php");
?>

<!-- Blog body start -->
<div class="row body-main">
    <div class="col-md-12">
        <!--  Left sidebar start -->
        <div class="col-md-2">
            <div class="panel-group col-md-12" id="pa1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#cal1" data-toggle="collapse" data-parent="#pa1" style="color:#569485; "><span><i
                                            class="glyphicon glyphicon-chevron-down"></i></span> Categories</a>
                        </h4>

                    </div>
                    <div class="collapse panel-collapse" id="cal1">
                        <div class="panel-body">Your categories</div>
                    </div>

                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#cal2" data-toggle="collapse" data-parent="#pa1" style="color:#569485; "><span><i
                                            class="glyphicon glyphicon-chevron-down"></i></span> Authorities</a>
                        </h4>

                    </div>
                    <div class="collapse panel-collapse" id="cal2">
                        <div class="panel-body">Your Authorities</div>
                    </div>

                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#cal3" data-toggle="collapse" data-parent="#pa1" style="color:#569485; "><span><i
                                            class="glyphicon glyphicon-chevron-down"></i></span> Explore</a>
                        </h4>

                    </div>
                    <div class="collapse panel-collapse" id="cal3">
                        <div class="panel-body">Explore caterogries</div>
                    </div>

                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#cal4" data-toggle="collapse" data-parent="#pa1" style="color:#569485; "><span><i
                                            class="glyphicon glyphicon-chevron-down"></i></span> FAQ</a>
                        </h4>

                    </div>
                    <div class="collapse panel-collapse" id="cal4">
                        <div class="panel-body">Your FAQ</div>
                    </div>

                </div>
            </div>


        </div>
        <!--  Left sidebar End -->
        <!-- Main body start -->
        <div class="col-md-6" style="background-color: white;">
            <?php
            ob_start();
                if ($session->is_signed_in()) {
                    require_once("includes/add_post.php");
                }
            ?>
            <!--Comment Bar Start-->
            <!--Blog Post Section Start-->
            <?php foreach ($allBlogPost as $singlePost) {
                $singleUserId = $singlePost->user_id;
                //var_dump($singleUserId);
                $singleUserInfo = User::find_by_id($singleUserId);
                //var_dump($singleUserInfo);

                ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;">
                            <div class="share">
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <a style="text-decoration: none; text-transform: capitalize;color: #539684;"
                                           href="viewSinglePost.php?user_id=<?php echo $singlePost->user_id; ?>&post_id=<?php echo $singlePost->id ?>">
                                            <h4 style="margin:0;"><?php echo $singlePost->blog_title; ?></h4></a>

                                    </div>

                                    <div class="panel-body">
                                        <?php
                                        if($singlePost->blog_image) {
                                            $allImages = $singlePost->blog_image;
                                            $imageArr = explode(", ", $allImages);
                                            foreach ($imageArr as $i) { ?>
                                        <div class="col-md-5">

                                            <img src="<?php echo 'includes/images/' . $i; ?>"
                                                 style="margin-top: 12px; height: 200px; width: 220px; box-shadow: 2px 2px 20px #888888;margin-left:6px;margin-bottom: 6px; ">

                                        </div>
                                        <?php  } } ?>

                                        <div class="col-md-6 "
                                             style="overflow: hidden; margin-left: 15px;  padding: 10px;text-transform: capitalize;">
                                            <?php echo $singlePost->blog_post; ?>

                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            <?php } ?>

            <!--blog post section end-->


        </div>


        <!-- Main body End -->


        <!-- Right top post Start -->

        <?php require_once("rightTopPost.php"); ?>

        <!-- Right top post End -->


    </div>

</div>
<!-- Blog body End -->

<br>
<br>
<!--Footer Start-->
<?php require_once("../includes/footer.php"); ?>
<!--Footer End-->

<script //src="../js/main.js"></script>
