<?php
//ob_start();
//require_once("../includes/init.php");
//require_once("../includes/session.php");

if (!isset($_SESSION)) session_start();
$allBlogPost = Blog::all_blog();
//var_dump($allBlogPost);
//print_r($allBlogPost);
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer-col">
                <div href="../index.php" class="logofooter">IIUC SQL INJECTORS</div>

                <p><i class="fa fa-map-pin"></i> Chittagong, Bangladesh</p>
                <p><i class="fa fa-phone"></i> Phone (Bd) : +880 1521487511</p>
                <p><i class="fa fa-envelope"></i> E-mail : iiucbees@developer.com</p>

            </div>
            <div class="col-md-2 col-sm-6 footer-col">

            </div>
            <div class="col-md-3 col-sm-6 footer-col">
                <h6 class="heading7">LATEST POST</h6>
                <div class="post">
                    <?php foreach ($allBlogPost as $singlePost) {
                    $singleUserId = $singlePost->user_id;
                    //var_dump($singleUserId);
                    //$singleUserInfo = User::find_by_id($singleUserId);
                    //var_dump($singleUserInfo);

                    ?>
                    <p><a style="text-decoration: none; text-transform: capitalize;color: #539684;"
                          href="blog/viewSinglePost.php?user_id=<?php echo $singlePost->user_id; ?>&post_id=<?php echo $singlePost->id ?>">
                            <h4 style="margin:0;"><?php echo $singlePost->blog_title; } ?></h4></a></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 footer-col">
                <h6 class="heading7">Social Media</h6>
                <ul class="footer-social">
                    <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i></li>
                    <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i></li>
                    <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i></li>
                    <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--footer start from here-->

<?php require_once("copyright.php");?>
<!--Footer End-->


<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/daterangepicker.js"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjLtTeREHHcWmzQbD3pM46KRKud5Q5X-g&callback=initMap">
</script>


<script src="js/lightbox.js"></script>
<script src="js/main.js"></script>
</body>
</html>