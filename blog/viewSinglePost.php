<?php
require_once("../includes/init.php");
$userId = $_GET['user_id'];
$postId = $_GET['post_id'];
$singleUserInfo = User::find_by_id($userId);
$singlePostInfo = Blog::find_by_id($postId);

if (isset($_POST['submit'])) {
    $comment = new BlogComment();
    //echo $_POST['comment'];
    $comment->blog_comment = $_POST['comment'];
    $comment->blog_user_id = $userId;
    $comment->blog_post_id = $postId;
    $comment->save();
    $i = BlogComment::comment_count($postId);
    $blog = Blog::find_by_id($postId);
    $blog->blog_comment = $i;
    $blog->save();
}

/*$query = "SELECT * FROM tbl_blog WHERE id = '{$postId}'";
$blog = Blog::find_by_query($query);
$blog -> blog_comment = $i;
$blog->update();*/

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/blogStyle.css">

    <title><?php echo $singlePostInfo->blog_title; ?></title>
</head>
<body>
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

            <!--Comment Bar Start-->
            <div class="row">
                <div class="col-md-12">
                    <div class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;">
                        <div class="share">
                            <div class="panel panel-default">
                                <div class="panel-heading"
                                     style="border-bottom: none; background: white; height: 30px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-9">
                                                <div class="col-md-2">
                                                    <a href="#"><i class="fa fa-user fa-4x" aria-hidden="true"
                                                                   style="color: #539684;"></i></a>
                                                </div>
                                                <!--<div class="col-md-10" style="margin-left: -20px; ">
                                                    <a href="#"><h4 style="color: #539684;"><?php /*echo $singleUserInfo->username; */ ?></h4></a>
                                                    <a href="#" style="color: #A8A8A8;"><p
                                                                style="font-size: 12px;margin-top: -10px; "><?php /*echo $singleUserInfo->address; */ ?></p>
                                                    </a>
                                                </div>-->
                                                <div>
                                                    <h4><?php echo $singlePostInfo->blog_title; ?></h4>
                                                </div>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="panel-body">
                                    <div>
                                        <?php echo $singlePostInfo->blog_post; ?>
                                    </div>
                                    <div>

                                        <?php
                                        if($singlePostInfo->blog_image) {
                                            $imageArr = explode(", ", $singlePostInfo->blog_image);

                                            foreach ($imageArr as $singleImage) {
                                                ?>

                                                <img style="height: 150px; width: 300px; box-shadow: 2px 2px 20px #888888; margin: 2px ; "
                                                     src="<?php echo 'includes/images/' . $singleImage; ?>" alt="">
                                            <?php }
                                        } ?>
                                    </div>


                                </div>
                                <div class="panel panel-footer"
                                ">
                                <?php if(isset($_SESSION["user_id"])) { ?>

                                <form action="" method="post" id="formId">
                                    <div class="form-group">
                                        <textarea name="comment" id="postComment" cols="30" class="form-control"
                                                  rows="2" placeholder="Type a comment"></textarea>
                                        <input type="hidden" value="<?php echo $userId ?>" id="userId" name="userId">
                                        <input type="hidden" value="<?php echo $postId ?>" id="postId" name="postId">
                                    </div>
                                    <input style="background-color: #539684; border: #539684;" type="submit"
                                           class="btn btn-primary" name="submit" id="btnSubmit" value="Comment">
                                    <!--<input style="background-color: #539684; border: #539684;" type="submit"
                                           class="btn btn-primary" name="like" id="btnSubmit2" value="like">
-->
                                </form>
                                <?php }?>

                                <div>
                                    <div style="margin-top: 10px">
                                        <table class="table table-bordered table-striped">
                                            <?php
                                            $comments = BlogComment::get_all_comments($postId);
                                            while ($row = mysqli_fetch_assoc($comments)) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        echo $row['blog_comment'] . "<br>"; ?>
                                                        <small style="font-size: 10px;color: #2B2B2B;">Commented
                                                            by <?php echo $singleUserInfo->username; ?></small>
                                                    </td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!--Commet Bar End-->


        <!--blog post section end-->


    </div>


    <!-- Main body End -->


    <!-- Right top post Start -->

    <?php require_once("rightTopPost.php") ?>


    <!-- Right top post End -->
</div>

</div>
<!-- Blog body End -->

<br>
<br>
<!--Footer Start-->
<?php require_once("blogFooter.php"); ?>
<!--Footer End-->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#btnSubmit').click(function () {
            var comment = $('#postComment').val();
            var userId = $('#userId').val();
            var postId = $('#postId').val();
            $.ajax({
                type: "POST",
                url: "includes/data.php",
                data: {'comment='+comment, 'userId='+userId, 'postId='+postId}
                success: function (data) {
                    alert("Data: " + data);
                }
            });
        });
    });
</script>


</body>
</html>
