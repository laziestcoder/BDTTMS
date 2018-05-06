<?php
require_once('../../includes/init.php');

$comment = $_POST['comment'];
$userId = $_POST['userId'];
$postId = $_POST['postId'];

$blogComment = new BlogComment();
$blogComment->blog_comment = $comment;
$blogComment->blog_user_id = $userId;
$blogComment->blog_post_id = $postId;

//var_dump($blogComment);

$blogComment->save();

?>