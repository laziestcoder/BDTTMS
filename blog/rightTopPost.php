<?php
$topPost = Blog::top_blog();
//print_r($topPost);
?>

<div class="col-md-4">
    <div class=" col-md-12"
         style="background: #539684; height: 40px; color: white; border-radius: 5px;  box-shadow: 2px 2px 10px #888888;margin-top: 10px;">
        <p style="padding-top: 10px;"><strong>Top Post</strong></p>

    </div>

    <br>
    <br>
    <br>
    <!--Comment Bar Start-->

    <?php foreach ($topPost as $singlePost) {
    $singleUserId = $singlePost->id;
    //print_r($singleUserId);
    //var_dump($singleUserId);
    $singleUserInfo = User::find_by_id($singleUserId);
    //var_dump($singleUserInfo);

    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;">
                <div class="share">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #539684;">


                            <a
                               href="viewSinglePost.php?user_id=<?php echo $singlePost->user_id; ?>&post_id=<?php echo $singlePost->id ?>">
                                <h4 ><?php echo $singlePost->blog_title; ?></h4></a>

                        </div>
                        <div class="panel-body">
                            <div>
                                <p><?php echo $singlePost->blog_post; ?></p>
                            </div>
                            <?php
                            if($singlePost->blog_image) {
                                $allImages = $singlePost->blog_image;
                                $imageArr = explode(", ", $allImages);
                                foreach ($imageArr as $i) { ?>
                            <div class="col-md-5">
                                <img src="<?php echo 'includes/images/' . $i; ?>"
                                     style="height: 90px; width: 160px; box-shadow: 2px 2px 20px #888888;margin-left:6px;margin-bottom:6px; ">

                            </div>
                            <?php }} ?>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php } ?>
    <!--Commet Bar End-->

</div>