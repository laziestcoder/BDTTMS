<?php

if (!isset($_SESSION)) session_start();


if (isset($_POST['submit'])) {


    $blog = new Blog();
    $blog->blog_title = $_POST['blogTitle'];
    $blog->blog_post = $_POST['blogPost'];
    $blog->blog_image = Blog::multi_images($_FILES['file']);
    $blog->user_id = $_SESSION['user_id'];
    $blog->status=1;
    if ($blog->save()) {
        $message = "Data recorded successfully";
        header('Location:index.php');
    } else {
        $message = "Data record failed";
    }
}

?>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="../../resources/js/bootstrap.js"></script>
    <script src="../../resources/js/jquery.js"></script>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>tinymce.init({
            selector: 'textarea.postArea',  // change this value according to your HTML

            menu: {
                table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
                tools: {title: 'Tools', items: 'spellchecker code'}

            }
        });

    </script>

    <style type="text/css">
        {
            margin: 0
        ;
            padding: 0
        ;
        }
        .navbar-custom {
            background: #E1E1E1;
        }

        .navbar-a {
            color: #569485;
            font-size: 20px;
        }

        .navbar-a:hover {
            color: #569485;

        }

        body {
            background: #E1E1E1;
        }

        .body-main {
            margin: -18px;

        }

        /*Status Bar*/
        .facebook-share-box {
            width: 100%;
        }

        .facebook-share-box .share {
            -webkit-transition: 0.1s ease-out height;
            -moz-transition: 0.1s ease-out height;
            -ms-transition: 0.1s ease-out height;
            -o-transition: 0.1s ease-out height;
            transition: 0.1s ease-out height;
            clear: both;
            background: white;
            border: 2px solid #dddddd;
            margin-bottom: 10px;
            position: relative;
        }

        .facebook-share-box .post-types li a {
            color: #569485;
            text-decoration: none;
        }

        .facebook-share-box .post-types li a.active {
            color: #404040;
        }

        .facebook-share-box .share .arrow {
            background: url("arrow.png") no-repeat #dddddd;
            position: absolute;
            width: 14px;
            height: 10px;
            left: 4px;
            display: inline;
            top: -10px;
            -webkit-transition: 0.3s ease-out all;
            -moz-transition: 0.3s ease-out all;
            -ms-transition: 0.3s ease-out all;
            -o-transition: 0.3s ease-out all;
            transition: 0.3s ease-out all;
        }

        .facebook-share-box .post-types li a {
            color: #569485;
            text-decoration: none;
        }

        .facebook-share-box .post-types li a.active {
            color: #404040;
        }

        .facebook-share-box .post-types {
            padding-left: 5px;
        }

        .facebook-share-box ul {
            list-style: none;
            margin-bottom: 9px;
        }

        .facebook-share-box .post-types li {
            display: inline;
            margin-right: 10px;
        }

        .message {
            border-radius: 0;
            border: none;
        }

        .panel {
            border-radius: 0;
            border: none;
            margin-bottom: 0;
        }

        .privacy-dropdown {
            width: 100px;
        }

        /*Status bar end*/

        ul.comments {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
            font-size: 20px;
        }

        ul.comments li {

            display: inline;
        }

        ul .comments li a {
            text-decoration: none;
            color: #569485;
        }

        ul.co-small {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
            font-size: 15px;
        }

        ul.co-small li {

            display: inline;
        }

        ul .co-small li a {
            text-decoration: none;
            color: #569485;
        }

        .input-button[type="file"] {
            display: none;

        }

        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;

            width: 120px;
            color: #569485;
        }

        .custom-file-upload:hover {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;

            width: 120px;
            color: #569485;
        }
    </style>
<!--    <link href="../../css/addpost.css" rel="stylesheet">-->


<div class="container">

    <!-- Status Box Start-->
    <div>
        <div class="row">
            <div class="col-md-7" style="margin-left: -15px">
                <form action="" method="post" enctype="multipart/form-data" class="facebook-share-box"
                      style=" box-shadow: 5px 5px 20px #888888;">
                    <div class="share" style="border-radius: 5px;">
                        <div class="panel panel-default">

                            <div class="panel-body" style="background-color: #F5F5F5;">
                                <div class="form-group">
                                    <h4 class="text-center">Make a Post</h4>
                                    <input type="text" name="blogTitle" placeholder="Blog title" class="form-control" required>
                                </div>
                                <textarea name="blogPost" id="blogPost" class="postArea form-control message"
                                          placeholder="Types your expriments..." cols="45" rows="4"
                                          style="overflow: hidden;  "></textarea>


                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <div class="">
                                                <label class="custom-file-upload btn btn-default  ">
                                                    <input name="file[]" id="blogImage" multiple="multiple"
                                                           class="input-button" type="file"><i
                                                            class="glyphicon glyphicon-picture"></i>
                                                    Photo
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="Post"
                                                   class="btn btn-primary col-md-6 col-md-offset-9"
                                                   style="background:#569485; border-color: #CCCCCC; ">
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Status Box End-->


</div>