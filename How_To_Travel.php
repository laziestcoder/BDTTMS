<!DOCTYPE html>
<html>
<head>
	<title>Your Directon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/style.css" >
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>
    <!--Google fronts-->
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Francois+One" rel="stylesheet">
  

     
    <!--Google fronts End-->
    <!--Date picker Start-->
     <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
	<!--Date picker End-->	
     


    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.js" ></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="js/jquery.shuffle-images.js"></script>
  
</head>
<body>



<!--Navbar start-->

<?php require_once ("includes/navigation.php");?>

<!-- /.navbar -->



<!--Slider Start-->
	       <div class=" bg-overlay">
				<div class="row text-center">
                    <h1><?php echo $_SESSION['stay']; ?> Day(s) In <?php echo $_SESSION['destination_city']; ?> City </h1>
                    <h4><?php echo $_SESSION['from_date']; ?>
                        - <?php echo $_SESSION['to_date']; ?></h4>
                    <br><br>
				</div>
		  </div>
	    <!--Slider End-->
	    <!--Manu tabs start-->
	<div class="container" style="margin-top: 30px;">
		   		<ul class="nav nav-tabs" style="font-size: 25px;">
     			<li  class="  divider "><a href="direction.php" style="color: black;">Destination Place</a></li>
     			<li  class="divider"><a  style="color: black;" href="Where_To_Stay_Hotel.php" >Where to Stay</a></li>
     			<li   class=" active-border "><a  href="How_To_Travel.php">Your Vehicle</a></li>
     			
     		</ul>
		
	</div>
	<br><br>
 <!--Manu tabs end-->

 <!--How to travel tabs start-->
<style>
    *How to travel tabs start*/
    .tab_container {
        width: 90%;
        margin: 0 auto;
        padding-top: 70px;
        position: relative;
    }

    .inputbus, section {
        clear: both;
        padding-top: 10px;
        display: none;
    }

    label {
        font-weight: 700;
        font-size: 18px;
        display: block;
        float: left;
        width: 20%;
        padding: 1.5em;
        color: #757575;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
        background: #f0f0f0;
    }

    #tab1:checked ~ #content1,
    #tab2:checked ~ #content2,
    #tab3:checked ~ #content3,
    #tab4:checked ~ #content4,
    #tab5:checked ~ #content5 {
        display: block;
        padding: 20px;
        background: #fff;
        color: #999;
        border-bottom: 2px solid #f0f0f0;
    }

    .tab_container .tab-content p,
    .tab_container .tab-content h3 {
        -webkit-animation: fadeInScale 0.7s ease-in-out;
        -moz-animation: fadeInScale 0.7s ease-in-out;
        animation: fadeInScale 0.7s ease-in-out;
    }
    .tab_container .tab-content h3  {
        text-align: center;
    }

    .tab_container [id^="tab"]:checked + label {
        background: #fff;
        box-shadow: inset 0 3px #0CE;
    }

    .tab_container [id^="tab"]:checked + label .fa {
        color: #0CE;
    }

    label .fa {
        font-size: 1.3em;
        margin: 0 0.4em 0 0;
    }

    !*Media query*!
    @media only screen and (max-width: 930px) {
        label span {
            font-size: 14px;
        }
        label .fa {
            font-size: 14px;
        }
    }

    @media only screen and (max-width: 768px) {
        label span {
            display: none;
        }

        label .fa {
            font-size: 16px;
        }

        .tab_container {
            width: 98%;
        }
    }

    !*Content Animation*!
    @keyframes fadeInScale {
        0% {
            transform: scale(0.9);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
    /*how to travel end*/
</style>
    <div class="container" >
          <div class="tab_container">

               <input class="inputbus" id="tab1" type="radio" name="tabs" checked>
               <label for="tab1" class="col-md-offset-2  "><i class="fa fa-bus" aria-hidden="true"></i><span>Bus</span></label>

               <input class="inputbus" id="tab2" type="radio" name="tabs">
               <label for="tab2"><i class="fa fa-plane" aria-hidden="true"></i><span>Flight</span></label>

               <input class="inputbus" id="tab3" type="radio" name="tabs">
               <label for="tab3"><i class="fa fa-train" aria-hidden="true"></i><span>Train</span></label>

             

                 <section id="content1" class="tab-content ">
                 <div class="thumbnail booking-transport-form-1">

                 	
                
                  <form role="form" class="form-horizontal  "  style="margin-top: 30px">
      			<div class="form-group">
      				<div class="col-sm-3">
      					<input type="text" name="" class="form-control" placeholder="Your name">
      				</div>
      				<div class="col-sm-3">
      					<input type="tex" name="" class="form-control" placeholder="Your phone number">
      				</div>
      				<div class="col-sm-3">
      					<input type="text" name="" class="form-control" placeholder="Your location">
      				</div>
      				<div class="col-sm-3">
      					<input type="tex" name="" class="form-control" placeholder="Your direction">
      				</div>
      				
      			</div>

      			<div class="form-group">
      				<div class="col-sm-3">
      				    <input type="date" name="" class="form-control">
      				</div>
      				<div class="col-sm-3">
      					 <input type="time" name="" class="form-control">
      				</div>
      				<div class="col-sm-3">
      				  	<select class="form-control"  class="form-control">
	        	    	    <option disabled selected>Bus type</option>
	        	    		<option>Green line</option>
	        	    		<option>Soudia</option>
	        	    		<option>Tr travels</option>
	        	    	</select>
      				</div>
      				<div class="col-sm-3">
      						<select class="form-control"  class="form-control">
	        	    	    <option disabled selected>Total set</option>
	        	    		<option>1</option>
	        	    		<option>2</option>
	        	    		<option>3</option>
	        	    		<option>4</option>
	        	    		<option>5</option>
	        	    		<option>6</option>
	        	    		<option>7</option>
	        	    		<option>8</option>
	        	    		<option>9</option>
	        	    	</select>
      				</div>
      			</div>
      				
      					<input type="submit" name="" value="Book Now" class="btn btn-primary col-sm-offset-5 " style="width: 200px;" >
      			
      			
      		</form>
                 </div>
               </section>

               <section id="content2" class="tab-content">
                  <div class="thumbnail booking-transport-form-2">
                   
                 	
                
                  <form role="form" class="form-horizontal  "  style="margin-top: 30px">
      			<div class="form-group">
      				<div class="col-sm-3">
      					<input type="text" name="" class="form-control" placeholder="Your name">
      				</div>
      				<div class="col-sm-3">
      					<input type="tex" name="" class="form-control" placeholder="Your phone number">
      				</div>
      				<div class="col-sm-3">
      					<input type="text" name="" class="form-control" placeholder="Your location">
      				</div>
      				<div class="col-sm-3">
      					<input type="tex" name="" class="form-control" placeholder="Your direction">
      				</div>
      				
      			</div>

      			<div class="form-group">
      				<div class="col-sm-3">
      				    <input type="date" name="" class="form-control">
      				</div>
      				<div class="col-sm-3">
      					 <input type="time" name="" class="form-control">
      				</div>
      				<div class="col-sm-3">
      				  	<select class="form-control"  class="form-control">
	        	    	    <option disabled selected>Flight name</option>
	        	    		<option>Green line</option>
	        	    		<option>Soudia</option>
	        	    		<option>Tr travels</option>
	        	    	</select>
      				</div>
      				<div class="col-sm-3">
      						<select class="form-control"  class="form-control">
	        	    	    <option disabled selected>Total set</option>
	        	    		<option>1</option>
	        	    		<option>2</option>
	        	    		<option>3</option>
	        	    		<option>4</option>
	        	    		<option>5</option>
	        	    		<option>6</option>
	        	    		<option>7</option>
	        	    		<option>8</option>
	        	    		<option>9</option>
	        	    	</select>
      				</div>
      			</div>
      				
      					<input type="submit" name="" value="Book Now" class="btn btn-primary col-sm-offset-5 " style="width: 200px;" >
      			
      			
      		</form>
                 </div>
                
               </section>

               <section id="content3" class="tab-content">
                   <div class="thumbnail booking-transport-form-3">
                    <h3 style="color: white;" ><i class="fa fa-frown-o fa-3" aria-hidden="true " ></i></h3>
                    <h2  class="text-center" style="color: white;">Sorry in bangladesh train booking is not available in online.</h2>
                   </div>
              
               </section>

          </div>
    </div>

 <!--How to travel tabs end-->

 <!--Footer Start-->

 <?php require_once("includes/footer.php"); ?>

 <!--Footer End-->
