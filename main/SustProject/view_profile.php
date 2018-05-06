<?php
ob_start();


//ekhan theke
if (!$session->is_signed_in()) {
    header("Location: index.php");
}
else{
    if ($_SESSION["user_id"]) {
        $id = $_SESSION["user_id"];
    } else {
        $session->admin_logout();
        redirect("location:index.php");
    }
}

?>


<?php
//$id='1';
$id=$_GET["id"];
//echo $id;
//echo "Page Loaded";
$user =Profile::find_by_id($id);

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
    <link rel="stylesheet" href="css/style.css" >
	<link rel="stylesheet" href="css/bootstrap.css" >
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
			<link rel="stylesheet" href="css/style.css" >
     <script src="js/jquery.js"></script>

    <script src="js/bootstrap.js" ></script>
</head>
<body style="background-color: #E1E1E1;">
<!--Navbar start-->



<?php require_once ("includes/navigation.php");?>
<!-- /.navbar -->

<?php
 $img = $user->image_path();
 //print_r($img);

$covimg = $user->covimage_path();



?>
        <div class="container thumbnail" style=" background-color: white; height: 800px">
                  <div class="cover" >
				     <img src="<?php echo $covimg;?>" style=" height: 300px;width: 100% "  alt="user_cover">
				  </div>
				  <br>
				  <br>
				  <div class="row">
				    <!-- left column -->
				    <div class="col-md-6">
				      <div class="text-center">
				        <img src="<?php echo $img; ?>" class="avatar img-circle img-thumbnail" alt="user_picture"" style="border-top-right-radius:10px; border-bottom-left-radius: 10px; ">
				        <h3><?php echo $user->username; ?></h3>
				     
				      </div>
				    </div>
				 
				    <div class="col-md-6 "  style="border-left: 2px dotted #E1E1E1;">
				     <div style="border-bottom: 2px dotted #E1E1E1; margin-left: -15px; ">
				      <h3 style="padding-left: 45px"> <strong> My Information </strong></h3>
				      </div>				     
				       <div class="col-md-12">
				      <div class="col-md-4">
				        <h4><strong>Name:</strong></h4>
				      	
				      </div>
				      <div class="col-md-6">
				         <h4><?php echo $user->fullname; ?></h4>
				      	
				      </div>
				      </div>
				         <div class="col-md-12">
				      <div class="col-md-4">
				        <h4><strong>Occupation:</strong></h4>
				      	
				      </div>
				      <div class="col-md-6">
				         <h4><?php echo $user->occupation; ?></h4>
				      	
				      </div>
				      </div>
				            <div class="col-md-12">
				      <div class="col-md-4">
				        <h4><strong>Gender:</strong></h4>
				      	
				      </div>
				      <div class="col-md-6">
				         <h4><?php echo $user->gender; ?></h4>
				      	
				      </div>
				      </div>
				            <div class="col-md-12">
				      <div class="col-md-4">
				        <h4><strong>Email:</strong></h4>
				      	
				      </div>
				      <div class="col-md-6">
				         <h4><?php echo $user->email; ?></h4>
				      	
				      </div>
				      </div>
				            <div class="col-md-12">
				      <div class="col-md-4">
				        <h4><strong>Phone number:</strong></h4>
				      	
				      </div>
				      <div class="col-md-6">
				         <h4><?php echo $user->mobile_no; ?></h4>
				      	
				      </div>
				      </div>
				            <div class="col-md-12">
				      <div class="col-md-4">
				        <h4><strong>Nationality:</strong></h4>
				      	
				      </div>
				      <div class="col-md-6">
				         <h4><?php echo $user->nationality; ?></h4>
				      	
				      </div>
				      </div>
				      <div class="col-md-12">
				      <div class="col-md-4">
				        <h4><strong>Address:</strong></h4>
				      	
				      </div>
				      <div class="col-md-6">
				         <h4><?php echo $user->address; ?></h4>
				      	
				      </div>
				      </div>
				       <div class="col-md-12">
				      <div class="col-md-4">
				        <h4><strong>Bio:</strong></h4>
				      	
				      </div>
				      <div class="col-md-6">
				         <h4><?php echo $user->bio; ?></h4>
				      	
				      </div>
				      </div>




				    </div>
				  </div>
				</div>
   <br>


<!--Footer Start-->
<?php require_once ("includes/footer.php");?>
<!--Footer End-->
