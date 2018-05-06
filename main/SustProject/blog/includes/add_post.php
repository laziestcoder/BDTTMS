<?php
/*
$cities = City::find_all();
*/

?>

<?php
$message = '';
if (isset($_POST['submit'])) {
    $blog = new Blog();
    $blog->blog_title = $_POST['blogTitle'];
    $blog->blog_post = $_POST['blogPost'];
    $blog->blog_image = Blog::set_image($_FILES['blogImage']);
    $blog->blog_user_id = $_POST['userId'];

    if ($blog->save()) {
        $message = "Data recorded successfully";
    } else {
        $message = "Data record failed";
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.css">
    <script src="../../resources/js/bootstrap.js"></script>
    <script src="../../resources/js/jquery.js"></script>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>tinymce.init({
            selector: 'textarea',  // change this value according to your HTML

            menu: {
                table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
                tools: {title: 'Tools', items: 'spellchecker code'}

            }
        });

    </script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Title Of your Post</label><br>
        <input type="text" name="blogTitle" placeholder="Blog title"><br><br>
        <textarea name="blogPost" id="blogPost" cols="30" rows="10"></textarea><br><br>
        <input type="file" name="blogImage"><br><br>
        <input type="text" name="userId" placeholder="user id"><br><br>
        <input style="margin-top: 5px" type="submit" class="btn btn-lg btn-default" value="Submit Post">
    </form>
</div>
<div><?php echo $message; ?></div>
</body>
</html>