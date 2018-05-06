<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
		<link rel="stylesheet" href="../css/bootstrap.css" >


	<link rel="stylesheet" href="../css/font-awesome.css" >
    <link rel="stylesheet" href="../css/style.css" >
    <link rel="stylesheet" href="../css/blogStyle.css">

</head>
<body>
 <!--Navbar start-->
     <nav class="navbar navbar-default" style="">
	      <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	       <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="../index.php"><img src="../Images1/Bees.png" style="margin-top: -5px;"></a>
	        </div>
	    
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="navbar-collapse-2">
	          <ul class="nav navbar-nav navbar-right">
	          <li ><a href="../">Home</a></li>
	          <li ><a href="blogPost.php">Write Post</a></li>

	           
                <li ><a href="index.php" style="color:#5ABAC6;">Blog </a></li>
                  <li ><a href="../contact.php">Contacts</a></li>
                  <li ><a href="../about.php" >About</a></li>
                    <li ><a href="#"  data-toggle="modal" data-target="#login-modal" >Login</a>
                    </li>
              </ul>



                        <?php
                        require_once ("../includes/login.php");
                        require_once ("../includes/lostpass.php");
                        require_once ("../includes/registration.php");
                        ?>




	          
	        </div>    <!-- /.navbar-collapse -->


	     </div>
	     <!-- /.container -->
	    </nav>
 <!-- /.navbar -->


	    <!-- Blog body start -->
         <div class="row body-main">
            <div class="col-md-12">
                   <!--  Left sidebar start -->
            	   	<div class="col-md-2">
            			     	   <div class="panel-group col-md-12" id="pa1">
            			     	   	   <div class="panel panel-default" >
            			     	   	      <div class="panel-heading">
            			     	   	         <h4 class="panel-title">
            			     	   	         	<a href="#cal1" data-toggle="collapse" data-parent="#pa1" style="color:#569485; "><span><i class="glyphicon glyphicon-chevron-down"></i></span> Categories</a>
            			     	   	         </h4>
            			     	   	      	  
            			     	   	      </div>
            			     	   	      <div class="collapse panel-collapse" id="cal1">
            			     	   	      	  <div class="panel-body">Your categories</div>
            			     	   	      </div>
            			     	   	   	
            			     	   	   </div>
            			     	   	   <div class="panel panel-default" >
            			     	   	      <div class="panel-heading">
            			     	   	         <h4 class="panel-title">
            			     	   	         	<a href="#cal2" data-toggle="collapse" data-parent="#pa1" style="color:#569485; "><span><i class="glyphicon glyphicon-chevron-down"></i></span> Authorities</a>
            			     	   	         </h4>
            			     	   	      	  
            			     	   	      </div>
            			     	   	      <div class="collapse panel-collapse" id="cal2">
            			     	   	      	  <div class="panel-body">Your Authorities</div>
            			     	   	      </div>
            			     	   	   	
            			     	   	   </div>
            			     	   	      <div class="panel panel-default">
            			     	   	      <div class="panel-heading">
            			     	   	         <h4 class="panel-title">
            			     	   	         	<a href="#cal3" data-toggle="collapse" data-parent="#pa1" style="color:#569485; "><span><i class="glyphicon glyphicon-chevron-down"></i></span> Explore</a>
            			     	   	         </h4>
            			     	   	      	  
            			     	   	      </div>
            			     	   	      <div class="collapse panel-collapse" id="cal3">
            			     	   	      	  <div class="panel-body">Explore caterogries</div>
            			     	   	      </div>
            			     	   	   	
            			     	   	   </div>
            			     	   	      <div class="panel panel-default">
            			     	   	      <div class="panel-heading">
            			     	   	         <h4 class="panel-title">
            			     	   	         	<a href="#cal4" data-toggle="collapse" data-parent="#pa1" style="color:#569485; "><span><i class="glyphicon glyphicon-chevron-down"></i></span> FAQ</a>
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
                                 <!-- Status Box Start-->
						           <div >
						           	   <div class="row"  >
						           	   	   <div class="col-md-12" >
						           	   	   	   <form action="" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;" >
						           	   	   	       <div class="share" style="border-radius: 5px;" >
						           	   	   	       	   <div class="panel panel-default" >
						           	   	   	       	      <div class="panel-heading"  >
						           	   	   	       	            <ul class="post-types ">
																	<li class="post-type">
																		<a class="status" title="" href="#"><i class="glyphicon glyphicon-pencil"></i> Post a status</a>
																	</li>
																	<li class="post-type">
																		<span style="border-left:2px solid  gray; "></span>
																	</li>
																	<li class="post-type">
																		<a class="photos" href="#"><i class="glyphicon glyphicon-facetime-video"></i> Go to Live</a>
																	</li>
															  </ul>
						           	   	   	       	      	
						           	   	   	       	      </div>
						           	   	   	       	      <div class="panel-body">
						           	   	   	       	         <textarea  name="message" id="status_message" class="form-control message" placeholder="Types your expriments..." cols="40" rows="4" style="overflow: hidden;"></textarea>

						           	   	   	       	      	
						           	   	   	       	      </div>
						           	   	   	       	      <div class="panel-footer">
						           	   	   	       	          <div class="row">
						           	   	   	       	          	  <div class="col-md-7">
						           	   	   	       	          	  	   <div class="form-group">
						           	   	   	       	          	  	   	   <div class="">
						           	   	   	       	          	  	   	   	   <label class="custom-file-upload btn btn-default  ">
																				    <input class="input-button" type="file" name="" value=""><i class="glyphicon glyphicon-picture"></i>
																				    Photo/Video
																				</label>
						           	   	   	       	          	  	   	   </div>
						           	   	   	       	          	  	   </div>
						           	   	   	       	          	  </div>
						           	   	   	       	          	  <div class="col-md-4 " >
						           	   	   	       	          	  	   <div class="form-group">
						           	   	   	       	          	  	   	   <input type="submit" name="submit" value="Post" class="btn btn-primary col-md-6 col-md-offset-9" style="background:#569485; border-color: #CCCCCC; ">
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
                                  <!--Comment Bar Start-->
            <div class="row">
               <div class="col-md-12">
                  <div class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;" >
                    <div class="share">
                    	<div class="panel panel-default">
                    	    	   <div class="panel-heading" style="border-bottom: none; background: white; height: 50px;">
                    	    	        <div class="row">
                    	    	       	   <div class="col-md-12">
                    	    	       	       <div class="col-md-9">
                    	    	       	             <div class="col-md-2">
                    	    	       	   	   	        <a href="#"><img src="images/logo.png" style="height: 50px; width: 50px; "></a>
                    	    	       	   	         </div>
		                    	    	       	   	   <div class="col-md-10" > 
		                    	    	       	   	   	   <a href="#" ><h4>Tanmoy Dhar</h4></a>
		                    	    	       	   	   	   <a href="#"><p style="font-size: 15px;margin-top: -10px; margin-left: 2px;">Mirpur,Dhaka</p> </a>
		                    	    	       	   	   </div>
                    	    	       	       	
                    	    	       	       </div>
                    	    	       	       <div class="col-md-3 ">
                    	    	       	            <button class="btn btn-default col-md-offset-9 btn-md" style=" color: white; background: #569485; margin-top: 10px;"><i class="glyphicon glyphicon-list"></i></button>
                    	    	       	       	  
                    	    	       	       </div>
                    	    	       	   	 
                    	    	       	   </div>
                    	    	       </div>
		               	   	    
		               	   	      </div>
		               	   	      <div class="panel-body">
		               	   	       <div>
		               	   	       	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		               	   	       </div>
		               	   	       <div>
		               	   	       	  <img src="images/sunset-over-cox-s-bazar.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/pexels-photo-128458.jpeg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>
		               	   	         <div style="padding-top: 5px">
		               	   	       	  <img src="images/sail-the-fishing-boat-is-coxs-bazar-tour-with-deshghuri.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/kuakata.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>

		               	   	   	
		               	   	   </div>
		               	   	   <div class="panel panel-footer" style="border: none; background-color: white;">
                               
		               	   	   	<div  style="background: #eee; box-shadow: 5px 5px 20px #888888; ">
		               	   	   	        <ul class="comments" style="height: 30px;">
                                                 <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px;"><span class="badge">6</span> Likes </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;font-size: 15px; padding-left: 20px; " data-toggle="modal" data-target="#all_comments"> <span class="badge">6</span>  Comments</a>
		               	   	   	          	  	       	  	<div class="modal fade" id="all_comments">
					               	   	   	          	  		<div class="modal-dialog modal-md">
					               	   	   	          	  			<div class="modal-content">
					               	   	   	          	  			   <div class="modal-header" style="border: none;">
					               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
					               	   	   	          	  			   </div>
					               	   	   	          	  			      <div class="modal-body">
					               	   	   	          	  	   	                
																			          <div class="well ">
																			          	<a href="#" class="lead">Tanmoy Dhar</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">2 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Amit</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">3 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Irfan karim</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">4 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Toufiq</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">5 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			    
					               	   	   	          	  	   	  	   </div>

					               	   	   	          	  			</div>
					               	   	   	          	  		</div>
					               	   	   	          	  	</div>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px; padding-left: 50px;"> <span class="badge">6</span>  Shares</a>
		               	   	   	          	  </div>
		               	   	   	          </div>
		               	   	   	        	
		               	   	   	        </ul>  
                                        <ul class="comments" style="height: 50px; border-top: 1px solid #dddddd;">
		               	   	   	          <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;"><i class="fa fa-thumbs-up" style="font-size: 30px;" aria-hidden="true"></i>Like </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; padding-left: 15px;" data-toggle="modal" data-target="#your_comment" ><i class="glyphicon glyphicon-comment" d style="font-size: 25px"></i><span></span> Comment</a>

			               	   	   	          	  	<div class="modal fade" id="your_comment">
			               	   	   	          	  		<div class="modal-dialog modal-md">
			               	   	   	          	  			<div class="modal-content">
			               	   	   	          	  			   <div class="modal-header" style="border: none;">
			               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
			               	   	   	          	  			   </div>
			               	   	   	          	  			      <div class="modal-body">
			               	   	   	          	  	   	  	   	  <form action="">
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	   <textarea class="form-control" rows="3" placeholder="your comments"></textarea>
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	  <input type="submit" name="" value="Make a comment" class="btn btn-primary col-md-offset-5 " style="background:#569485; border-color: #CCCCCC;">
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  </form>
			               	   	   	          	  	   	  	   </div>

			               	   	   	          	  			</div>
			               	   	   	          	  		</div>
			               	   	   	          	  	</div>

		               	   	   	          	  
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; padding-left: 50px; "><i class="fa fa-share-alt-square fa-1x" style="font-size: 30px;" aria-hidden="true"></i><span> </span> Share</a>
		               	   	   	          	  </div>
		               	   	   	          </div>

		               	   	   	      </ul>
		               	   	   	    
		               	   	   	 
		               	   	   	   
		               	   	   	    
		               	   	   	   

		               	   
		               	   	   	 </div>
		               	   	   	
		               	   	   


		               	   	   </div>
                    		
                    	</div>
                    </div>
                  	
                  </div>	
               </div>
            	
            </div>
            <!--Commet Bar End-->
                                   <!--Comment Bar Start-->
            <div class="row">
               <div class="col-md-12">
                  <div   class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;" >
                    <div class="share">
                    	<div class="panel panel-default">
                    	    	   <div class="panel-heading" style="border-bottom: none; background: white; height: 50px;">
                    	    	        <div class="row">
                    	    	       	   <div class="col-md-12">
                    	    	       	       <div class="col-md-9">
                    	    	       	             <div class="col-md-2">
                    	    	       	   	   	        <a href="#"><img src="images/logo.png" style="height: 50px; width: 50px; "></a>
                    	    	       	   	         </div>
		                    	    	       	   	   <div class="col-md-10" > 
		                    	    	       	   	   	   <a href="#" ><h4>Amit</h4></a>
		                    	    	       	   	   	   <a href="#"><p style="font-size: 15px;margin-top: -10px; margin-left: 2px;">Chockbazar,Dhaka</p> </a>
		                    	    	       	   	   </div>
                    	    	       	       	
                    	    	       	       </div>
                    	    	       	       <div class="col-md-3 ">
                    	    	       	            <button class="btn btn-default col-md-offset-9 btn-md" style=" color: white; background: #569485; margin-top: 10px;"><i class="glyphicon glyphicon-list"></i></button>
                    	    	       	       	  
                    	    	       	       </div>
                    	    	       	   	 
                    	    	       	   </div>
                    	    	       </div>
		               	   	    
		               	   	      </div>
		               	   	      <div class="panel-body">
		               	   	       <div>
		               	   	       	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		               	   	       </div>
		               	   	       <div>
		               	   	       	  <img src="images/sunset-over-cox-s-bazar.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/pexels-photo-128458.jpeg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>
		               	   	         <div style="padding-top: 5px">
		               	   	       	  <img src="images/sail-the-fishing-boat-is-coxs-bazar-tour-with-deshghuri.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/kuakata.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>

		               	   	   	
		               	   	   </div>
		               	   	   <div class="panel panel-footer" style="border: none; background-color: white;">
                               
		               	   	   	<div  style="background: #eee; box-shadow: 5px 5px 20px #888888; ">
		               	   	   	        <ul class="comments" style="height: 30px;">
                                                 <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px;"><span class="badge">6</span> Likes </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;font-size: 15px; padding-left: 20px; " data-toggle="modal" data-target="#all_comments"> <span class="badge">6</span>  Comments</a>
		               	   	   	          	  	       	  	<div class="modal fade" id="all_comments">
					               	   	   	          	  		<div class="modal-dialog modal-md">
					               	   	   	          	  			<div class="modal-content">
					               	   	   	          	  			   <div class="modal-header" style="border: none;">
					               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
					               	   	   	          	  			   </div>
					               	   	   	          	  			      <div class="modal-body">
					               	   	   	          	  	   	                
																			          <div class="well ">
																			          	<a href="#" class="lead">Tanmoy Dhar</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">2 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Amit</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">3 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Irfan karim</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">4 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Toufiq</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">5 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			    
					               	   	   	          	  	   	  	   </div>

					               	   	   	          	  			</div>
					               	   	   	          	  		</div>
					               	   	   	          	  	</div>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px; padding-left: 50px;"> <span class="badge">6</span>  Shares</a>
		               	   	   	          	  </div>
		               	   	   	          </div>
		               	   	   	        	
		               	   	   	        </ul>  
                                        <ul class="comments" style="height: 50px; border-top: 1px solid #dddddd;">
		               	   	   	          <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;"><i class="fa fa-thumbs-up" style="font-size: 30px;" aria-hidden="true"></i>Like </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; padding-left: 15px;" data-toggle="modal" data-target="#your_comment" ><i class="glyphicon glyphicon-comment" d style="font-size: 25px"></i><span></span> Comment</a>

			               	   	   	          	  	<div class="modal fade" id="your_comment">
			               	   	   	          	  		<div class="modal-dialog modal-md">
			               	   	   	          	  			<div class="modal-content">
			               	   	   	          	  			   <div class="modal-header" style="border: none;">
			               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
			               	   	   	          	  			   </div>
			               	   	   	          	  			      <div class="modal-body">
			               	   	   	          	  	   	  	   	  <form action="">
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	   <textarea class="form-control" rows="3" placeholder="your comments"></textarea>
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	  <input type="submit" name="" value="Make a comment" class="btn btn-primary col-md-offset-5 " style="background:#569485; border-color: #CCCCCC;">
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  </form>
			               	   	   	          	  	   	  	   </div>

			               	   	   	          	  			</div>
			               	   	   	          	  		</div>
			               	   	   	          	  	</div>

		               	   	   	          	  
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; padding-left: 50px; "><i class="fa fa-share-alt-square fa-1x" style="font-size: 30px;" aria-hidden="true"></i><span> </span> Share</a>
		               	   	   	          	  </div>
		               	   	   	          </div>

		               	   	   	      </ul>
		               	   	   	    
		               	   	   	 
		               	   	   	   
		               	   	   	    
		               	   	   	   

		               	   
		               	   	   	 </div>
		               	   	   	
		               	   	   


		               	   	   </div>
                    		
                    	</div>
                    </div>
                  	
                  </div>	
               </div>
            	
            </div>
            <!--Commet Bar End-->
                                   <!--Comment Bar Start-->
            <div class="row">
               <div class="col-md-12">
                  <div action="#"  class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;" >
                    <div class="share">
                    	<div class="panel panel-default">
                    	    	   <div class="panel-heading" style="border-bottom: none; background: white; height: 50px;">
                    	    	        <div class="row">
                    	    	       	   <div class="col-md-12">
                    	    	       	       <div class="col-md-9">
                    	    	       	             <div class="col-md-2">
                    	    	       	   	   	        <a href="#"><img src="images/logo.png" style="height: 50px; width: 50px; "></a>
                    	    	       	   	         </div>
		                    	    	       	   	   <div class="col-md-10" > 
		                    	    	       	   	   	   <a href="#" ><h4>Irfan ul karim</h4></a>
		                    	    	       	   	   	   <a href="#"><p style="font-size: 15px;margin-top: -10px; margin-left: 2px;">Oxizen,Chittagong</p> </a>
		                    	    	       	   	   </div>
                    	    	       	       	
                    	    	       	       </div>
                    	    	       	       <div class="col-md-3 ">
                    	    	       	            <button class="btn btn-default col-md-offset-9 btn-md" style=" color: white; background: #569485; margin-top: 10px;"><i class="glyphicon glyphicon-list"></i></button>
                    	    	       	       	  
                    	    	       	       </div>
                    	    	       	   	 
                    	    	       	   </div>
                    	    	       </div>
		               	   	    
		               	   	      </div>
		               	   	      <div class="panel-body">
		               	   	       <div>
		               	   	       	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		               	   	       </div>
		               	   	       <div>
		               	   	       	  <img src="images/sunset-over-cox-s-bazar.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/pexels-photo-128458.jpeg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>
		               	   	         <div style="padding-top: 5px">
		               	   	       	  <img src="images/sail-the-fishing-boat-is-coxs-bazar-tour-with-deshghuri.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/kuakata.jpg" style="height: 150px; width: 250px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>

		               	   	   	
		               	   	   </div>
		               	   	   <div class="panel panel-footer" style="border: none; background-color: white;">
                               
		               	   	   	<div  style="background: #eee; box-shadow: 5px 5px 20px #888888; ">
		               	   	   	        <ul class="comments" style="height: 30px;">
                                                 <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px;"><span class="badge">6</span> Likes </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;font-size: 15px; padding-left: 20px; " data-toggle="modal" data-target="#all_comments"> <span class="badge">6</span>  Comments</a>
		               	   	   	          	  	       	  	<div class="modal fade" id="all_comments">
					               	   	   	          	  		<div class="modal-dialog modal-md">
					               	   	   	          	  			<div class="modal-content">
					               	   	   	          	  			   <div class="modal-header" style="border: none;">
					               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
					               	   	   	          	  			   </div>
					               	   	   	          	  			      <div class="modal-body">
					               	   	   	          	  	   	                
																			          <div class="well ">
																			          	<a href="#" class="lead">Tanmoy Dhar</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">2 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Amit</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">3 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Irfan karim</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">4 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Toufiq</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">5 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			    
					               	   	   	          	  	   	  	   </div>

					               	   	   	          	  			</div>
					               	   	   	          	  		</div>
					               	   	   	          	  	</div>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px; padding-left: 50px;"> <span class="badge">6</span>  Shares</a>
		               	   	   	          	  </div>
		               	   	   	          </div>
		               	   	   	        	
		               	   	   	        </ul>  
                                        <ul class="comments" style="height: 50px; border-top: 1px solid #dddddd;">
		               	   	   	          <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;"><i class="fa fa-thumbs-up" style="font-size: 30px;" aria-hidden="true"></i>Like </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; padding-left: 15px;" data-toggle="modal" data-target="#your_comment" ><i class="glyphicon glyphicon-comment" d style="font-size: 25px"></i><span></span> Comment</a>

			               	   	   	          	  	<div class="modal fade" id="your_comment">
			               	   	   	          	  		<div class="modal-dialog modal-md">
			               	   	   	          	  			<div class="modal-content">
			               	   	   	          	  			   <div class="modal-header" style="border: none;">
			               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
			               	   	   	          	  			   </div>
			               	   	   	          	  			      <div class="modal-body">
			               	   	   	          	  	   	  	   	  <form action="">
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	   <textarea class="form-control" rows="3" placeholder="your comments"></textarea>
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	  <input type="submit" name="" value="Make a comment" class="btn btn-primary col-md-offset-5 " style="background:#569485; border-color: #CCCCCC;">
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  </form>
			               	   	   	          	  	   	  	   </div>

			               	   	   	          	  			</div>
			               	   	   	          	  		</div>
			               	   	   	          	  	</div>

		               	   	   	          	  
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; padding-left: 50px; "><i class="fa fa-share-alt-square fa-1x" style="font-size: 30px;" aria-hidden="true"></i><span> </span> Share</a>
		               	   	   	          	  </div>
		               	   	   	          </div>

		               	   	   	      </ul>
		               	   	   	    
		               	   	   	 
		               	   	   	   
		               	   	   	    
		               	   	   	   

		               	   
		               	   	   	 </div>
		               	   	   	
		               	   	   


		               	   	   </div>
                    		
                    	</div>
                    </div>
                  	
                  </div>	
               </div>
            	
            </div>
            <!--Commet Bar End-->
 

        </div>
                  

        <!-- Main body End -->


        <!-- Right top post Start -->

        <div class="col-md-4">
           <div class=" col-md-12" style="background: #539684; height: 40px; color: white; border-radius: 5px;  box-shadow: 2px 2px 10px #888888;">
        	   <p style="padding-top: 10px;">Top Post</p>
        		
        	</div>

        	<br>
        	<br>
        	<br>
        	                 <!--Comment Bar Start-->
            <div class="row">
               <div class="col-md-12">
                  <div class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;" >
                    <div class="share">
                    	<div class="panel panel-default">
                    	    	   <div class="panel-heading"  style="border-bottom: none; background: white; height: 30px;">
                    	    	        <div class="row">
                    	    	       	   <div class="col-md-12">
                    	    	       	       <div class="col-md-9">
                    	    	       	             <div class="col-md-2">
                    	    	       	   	   	        <a href="#"><img src="images/logo.png" style="height: 30px; width: 30px; "></a>
                    	    	       	   	         </div>
		                    	    	       	   	   <div class="col-md-10" > 
		                    	    	       	   	   	   <a href="#" ><h4>Tanmoy Dhar</h4></a>
		                    	    	       	   	   	   <a href="#"><p style="font-size: 12px;margin-top: -10px; margin-left: 2px;">Mirpur,Dhaka</p> </a>
		                    	    	       	   	   </div>
                    	    	       	       	
                    	    	       	       </div>
                    	    	       	    
                    	    	       	   	 
                    	    	       	   </div>
                    	    	       </div>
		               	   	    
		               	   	      </div>
		               	   	      <div class="panel-body">
		               	   	       <div>
		               	   	       	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		               	   	       </div>
		               	   	       <div>
		               	   	       	  <img src="images/sunset-over-cox-s-bazar.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/pexels-photo-128458.jpeg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>
		               	   	         <div style="padding-top: 5px">
		               	   	       	  <img src="images/sail-the-fishing-boat-is-coxs-bazar-tour-with-deshghuri.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/kuakata.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>

		               	   	   	
		               	   	   </div>
		               	   	   <div class="panel panel-footer" style="border: none; background-color: white;">
                               
		               	   	   	<div  style="background: #eee; box-shadow: 5px 5px 20px #888888; ">
		               	   	   	        <ul class="comments" style="height: 30px;">
                                                 <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-3">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 10px;"><span class="badge">6</span> Likes </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-5">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;font-size: 10px;  " data-toggle="modal" data-target="#all_comments"> <span class="badge">6</span>  Comments</a>
		               	   	   	          	  	       	  	<div class="modal fade" id="all_comments">
					               	   	   	          	  		<div class="modal-dialog modal-md">
					               	   	   	          	  			<div class="modal-content">
					               	   	   	          	  			   <div class="modal-header" style="border: none;">
					               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
					               	   	   	          	  			   </div>
					               	   	   	          	  			      <div class="modal-body">
					               	   	   	          	  	   	                
																			          <div class="well ">
																			          	<a href="#" class="lead">Tanmoy Dhar</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">2 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Amit</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">3 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Irfan karim</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">4 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Toufiq</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">5 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			    
					               	   	   	          	  	   	  	   </div>

					               	   	   	          	  			</div>
					               	   	   	          	  		</div>
					               	   	   	          	  	</div>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 10px; "> <span class="badge">6</span>  Shares</a>
		               	   	   	          	  </div>
		               	   	   	          </div>
		               	   	   	        	
		               	   	   	        </ul>  
                                        <ul class="comments" style="height: 50px; border-top: 1px solid #dddddd;">
		               	   	   	          <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-3">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 17px"><i class="fa fa-thumbs-up" style="font-size: 17px;" aria-hidden="true"></i>Like </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-5">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px;" data-toggle="modal" data-target="#your_comment" ><i class="glyphicon glyphicon-comment" d style="font-size: 15px"></i><span></span> Comment</a>

			               	   	   	          	  	<div class="modal fade" id="your_comment">
			               	   	   	          	  		<div class="modal-dialog modal-md">
			               	   	   	          	  			<div class="modal-content">
			               	   	   	          	  			   <div class="modal-header" style="border: none;">
			               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
			               	   	   	          	  			   </div>
			               	   	   	          	  			      <div class="modal-body">
			               	   	   	          	  	   	  	   	  <form action="">
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	   <textarea class="form-control" rows="3" placeholder="your comments"></textarea>
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	  <input type="submit" name="" value="Make a comment" class="btn btn-primary col-md-offset-5 " style="background:#569485; border-color: #CCCCCC;">
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  </form>
			               	   	   	          	  	   	  	   </div>

			               	   	   	          	  			</div>
			               	   	   	          	  		</div>
			               	   	   	          	  	</div>

		               	   	   	          	  
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px "><i class="fa fa-share-alt-square fa-1x" style="font-size: 15px;" aria-hidden="true"></i><span> </span> Share</a>
		               	   	   	          	  </div>
		               	   	   	          </div>

		               	   	   	      </ul>
		               	   	   	    
		               	   	   	 
		               	   	   	   
		               	   	   	    
		               	   	   	   

		               	   
		               	   	   	 </div>
		               	   	   	
		               	   	   


		               	   	   </div>
                    		
                    	</div>
                    </div>
                  	
                  </div>	
               </div>
            	
            </div>
            <!--Commet Bar End-->
            	                 <!--Comment Bar Start-->
            <div class="row">
               <div class="col-md-12">
                  <div class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;" >
                    <div class="share">
                    	<div class="panel panel-default">
                    	    	   <div class="panel-heading"  style="border-bottom: none; background: white; height: 30px;">
                    	    	        <div class="row">
                    	    	       	   <div class="col-md-12">
                    	    	       	       <div class="col-md-9">
                    	    	       	             <div class="col-md-2">
                    	    	       	   	   	        <a href="#"><img src="images/logo.png" style="height: 30px; width: 30px; "></a>
                    	    	       	   	         </div>
		                    	    	       	   	   <div class="col-md-10" > 
		                    	    	       	   	   	   <a href="#" ><h4>Tanmoy Dhar</h4></a>
		                    	    	       	   	   	   <a href="#"><p style="font-size: 12px;margin-top: -10px; margin-left: 2px;">Mirpur,Dhaka</p> </a>
		                    	    	       	   	   </div>
                    	    	       	       	
                    	    	       	       </div>
                    	    	       	    
                    	    	       	   	 
                    	    	       	   </div>
                    	    	       </div>
		               	   	    
		               	   	      </div>
		               	   	      <div class="panel-body">
		               	   	       <div>
		               	   	       	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		               	   	       </div>
		               	   	       <div>
		               	   	       	  <img src="images/sunset-over-cox-s-bazar.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/pexels-photo-128458.jpeg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>
		               	   	         <div style="padding-top: 5px">
		               	   	       	  <img src="images/sail-the-fishing-boat-is-coxs-bazar-tour-with-deshghuri.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/kuakata.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>

		               	   	   	
		               	   	   </div>
		               	   	   <div class="panel panel-footer" style="border: none; background-color: white;">
                               
		               	   	   	<div  style="background: #eee; box-shadow: 5px 5px 20px #888888; ">
		               	   	   	        <ul class="comments" style="height: 30px;">
                                                 <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-3">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 10px;"><span class="badge">6</span> Likes </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-5">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;font-size: 10px;  " data-toggle="modal" data-target="#all_comments"> <span class="badge">6</span>  Comments</a>
		               	   	   	          	  	       	  	<div class="modal fade" id="all_comments">
					               	   	   	          	  		<div class="modal-dialog modal-md">
					               	   	   	          	  			<div class="modal-content">
					               	   	   	          	  			   <div class="modal-header" style="border: none;">
					               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
					               	   	   	          	  			   </div>
					               	   	   	          	  			      <div class="modal-body">
					               	   	   	          	  	   	                
																			          <div class="well ">
																			          	<a href="#" class="lead">Tanmoy Dhar</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">2 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Amit</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">3 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Irfan karim</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">4 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Toufiq</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">5 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			    
					               	   	   	          	  	   	  	   </div>

					               	   	   	          	  			</div>
					               	   	   	          	  		</div>
					               	   	   	          	  	</div>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 10px; "> <span class="badge">6</span>  Shares</a>
		               	   	   	          	  </div>
		               	   	   	          </div>
		               	   	   	        	
		               	   	   	        </ul>  
                                        <ul class="comments" style="height: 50px; border-top: 1px solid #dddddd;">
		               	   	   	          <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-3">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 17px"><i class="fa fa-thumbs-up" style="font-size: 17px;" aria-hidden="true"></i>Like </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-5">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px;" data-toggle="modal" data-target="#your_comment" ><i class="glyphicon glyphicon-comment" d style="font-size: 15px"></i><span></span> Comment</a>

			               	   	   	          	  	<div class="modal fade" id="your_comment">
			               	   	   	          	  		<div class="modal-dialog modal-md">
			               	   	   	          	  			<div class="modal-content">
			               	   	   	          	  			   <div class="modal-header" style="border: none;">
			               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
			               	   	   	          	  			   </div>
			               	   	   	          	  			      <div class="modal-body">
			               	   	   	          	  	   	  	   	  <form action="">
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	   <textarea class="form-control" rows="3" placeholder="your comments"></textarea>
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	  <input type="submit" name="" value="Make a comment" class="btn btn-primary col-md-offset-5 " style="background:#569485; border-color: #CCCCCC;">
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  </form>
			               	   	   	          	  	   	  	   </div>

			               	   	   	          	  			</div>
			               	   	   	          	  		</div>
			               	   	   	          	  	</div>

		               	   	   	          	  
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px "><i class="fa fa-share-alt-square fa-1x" style="font-size: 15px;" aria-hidden="true"></i><span> </span> Share</a>
		               	   	   	          	  </div>
		               	   	   	          </div>

		               	   	   	      </ul>
		               	   	   	    
		               	   	   	 
		               	   	   	   
		               	   	   	    
		               	   	   	   

		               	   
		               	   	   	 </div>
		               	   	   	
		               	   	   


		               	   	   </div>
                    		
                    	</div>
                    </div>
                  	
                  </div>	
               </div>
            	
            </div>
            <!--Commet Bar End-->
            	                 <!--Comment Bar Start-->
            <div class="row">
               <div class="col-md-12">
                  <div class="facebook-share-box" style=" box-shadow: 5px 5px 20px #888888;" >
                    <div class="share">
                    	<div class="panel panel-default">
                    	    	   <div class="panel-heading"  style="border-bottom: none; background: white; height: 30px;">
                    	    	        <div class="row">
                    	    	       	   <div class="col-md-12">
                    	    	       	       <div class="col-md-9">
                    	    	       	             <div class="col-md-2">
                    	    	       	   	   	        <a href="#"><img src="images/logo.png" style="height: 30px; width: 30px; "></a>
                    	    	       	   	         </div>
		                    	    	       	   	   <div class="col-md-10" > 
		                    	    	       	   	   	   <a href="#" ><h4>Tanmoy Dhar</h4></a>
		                    	    	       	   	   	   <a href="#"><p style="font-size: 12px;margin-top: -10px; margin-left: 2px;">Mirpur,Dhaka</p> </a>
		                    	    	       	   	   </div>
                    	    	       	       	
                    	    	       	       </div>
                    	    	       	    
                    	    	       	   	 
                    	    	       	   </div>
                    	    	       </div>
		               	   	    
		               	   	      </div>
		               	   	      <div class="panel-body">
		               	   	       <div>
		               	   	       	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		               	   	       </div>
		               	   	       <div>
		               	   	       	  <img src="images/sunset-over-cox-s-bazar.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/pexels-photo-128458.jpeg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>
		               	   	         <div style="padding-top: 5px">
		               	   	       	  <img src="images/sail-the-fishing-boat-is-coxs-bazar-tour-with-deshghuri.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       	  <img src="images/kuakata.jpg" style="height: 100px; width: 150px; box-shadow: 2px 2px 20px #888888; ">
		               	   	       </div>

		               	   	   	
		               	   	   </div>
		               	   	   <div class="panel panel-footer" style="border: none; background-color: white;">
                               
		               	   	   	<div  style="background: #eee; box-shadow: 5px 5px 20px #888888; ">
		               	   	   	        <ul class="comments" style="height: 30px;">
                                                 <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-3">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 10px;"><span class="badge">6</span> Likes </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-5">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485;font-size: 10px;  " data-toggle="modal" data-target="#all_comments"> <span class="badge">6</span>  Comments</a>
		               	   	   	          	  	       	  	<div class="modal fade" id="all_comments">
					               	   	   	          	  		<div class="modal-dialog modal-md">
					               	   	   	          	  			<div class="modal-content">
					               	   	   	          	  			   <div class="modal-header" style="border: none;">
					               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
					               	   	   	          	  			   </div>
					               	   	   	          	  			      <div class="modal-body">
					               	   	   	          	  	   	                
																			          <div class="well ">
																			          	<a href="#" class="lead">Tanmoy Dhar</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">2 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Amit</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">3 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Irfan karim</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">4 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			             <div class="well ">
																			          	<a href="#" class="lead">Toufiq</a>
																			         
																			          	<span class="pull-right" style="font-size: 15px; color: gray">5 days ago</span>
																			          	<hr>
																			          	<p>I love this this product. and best in price. u can try this.. </p>
																			          	
																			          </div>
																			    
					               	   	   	          	  	   	  	   </div>

					               	   	   	          	  			</div>
					               	   	   	          	  		</div>
					               	   	   	          	  	</div>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 10px; "> <span class="badge">6</span>  Shares</a>
		               	   	   	          	  </div>
		               	   	   	          </div>
		               	   	   	        	
		               	   	   	        </ul>  
                                        <ul class="comments" style="height: 50px; border-top: 1px solid #dddddd;">
		               	   	   	          <div class="col-md-12" >
		               	   	   	          	  <div class="col-md-3">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 17px"><i class="fa fa-thumbs-up" style="font-size: 17px;" aria-hidden="true"></i>Like </a>
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-5">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px;" data-toggle="modal" data-target="#your_comment" ><i class="glyphicon glyphicon-comment" d style="font-size: 15px"></i><span></span> Comment</a>

			               	   	   	          	  	<div class="modal fade" id="your_comment">
			               	   	   	          	  		<div class="modal-dialog modal-md">
			               	   	   	          	  			<div class="modal-content">
			               	   	   	          	  			   <div class="modal-header" style="border: none;">
			               	   	   	          	  			   	   <a href="#" class="close" data-dismiss="modal">&times;</a>
			               	   	   	          	  			   </div>
			               	   	   	          	  			      <div class="modal-body">
			               	   	   	          	  	   	  	   	  <form action="">
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	   <textarea class="form-control" rows="3" placeholder="your comments"></textarea>
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  	   <div class="form-group">
			               	   	   	          	  	   	  	   	  	   	  <input type="submit" name="" value="Make a comment" class="btn btn-primary col-md-offset-5 " style="background:#569485; border-color: #CCCCCC;">
			               	   	   	          	  	   	  	   	  	   </div>
			               	   	   	          	  	   	  	   	  </form>
			               	   	   	          	  	   	  	   </div>

			               	   	   	          	  			</div>
			               	   	   	          	  		</div>
			               	   	   	          	  	</div>

		               	   	   	          	  
		               	   	   	          	  </div>
		               	   	   	          	  <div class="col-md-4">
		               	   	   	          	  	<a href="#" style="text-decoration: none; color: #569485; font-size: 15px "><i class="fa fa-share-alt-square fa-1x" style="font-size: 15px;" aria-hidden="true"></i><span> </span> Share</a>
		               	   	   	          	  </div>
		               	   	   	          </div>

		               	   	   	      </ul>
		               	   	   	    
		               	   	   	 
		               	   	   	   
		               	   	   	    
		               	   	   	   

		               	   
		               	   	   	 </div>
		               	   	   	
		               	   	   


		               	   	   </div>
                    		
                    	</div>
                    </div>
                  	
                  </div>	
               </div>
            	
            </div>
            <!--Commet Bar End-->


               
        	
        </div>




        <!-- Right top post End -->


            
     </div>
         	
  </div> 
<!-- Blog body End -->

<br>
<br>
<!--Footer Start-->
 <?php require_once ("../includes/footer.php");?>
  <!--Footer End-->


 <script src="js/main.js" ></script>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.js" ></script>