$('#myCarousel').carousel({
  interval: 40000
});

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  if (next.next().length>0) {
 
      next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
      
  }
  else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
     
  }
});


  <!--Navbar start-->
    <nav class="navbar navbar-custom navbar-fixed-top" style="height:60px; background: white; ">
       <div class="container-fluid">
          <div class="navbar-header">
             <a href="#" class="navbar-brand"><img src="images/logo-1.png" style="margin-top: -12px;"></a>

            
          </div>
          <div class="container-fluid row">
            <div class="col-md-8 col-md-offset-1">
                <ul class="nav navbar-nav  nav-color   " >
            <li ><a href="index.html " style="color:#5ABAC6;  ">Home</a></li>
            <li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#5ABAC6; ">Rooms <span class="glyphicon glyphicon-menu-down"></span></a>
               <ul class="dropdown-menu" style="border-top: 2px solid #5ABAC6;">
                  <li ><a href="#" >Blog</a></li>
                  <li class="divider"></li>
                  <li ><a href="#">Gallery</a></li>
                
               </ul>
            </li>
            <li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="glyphicon glyphicon-menu-down"></span></a>
               <ul class="dropdown-menu" style="border-top: 2px solid #5ABAC6;">
                  <li ><a href="#" style="">Blog</a></li>
                  <li class="divider"></li>
                  <li ><a href="#">Gallery</a></li>
                
               </ul>
            </li>
            <li ><a href="#">Gallery</a></li>
            <li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <span class="glyphicon glyphicon-menu-down"></span></a>
               <ul class="dropdown-menu" style="border-top: 2px solid #5ABAC6;">
                  <li ><a href="#">Blog</a></li>
                  <li class="divider"></li>
                  <li ><a href="#">Gallery</a></li>
                
               </ul>
            </li>
              <li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown">Content <span class="glyphicon glyphicon-menu-down"></span></a>
               <ul class="dropdown-menu" style="border-top: 2px solid #5ABAC6;">
                  <li ><a href="#">Blog</a></li>
                  <li class="divider"></li>
                  <li ><a href="#">Gallery</a></li>
                
               </ul>
            </li>
            <li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown">Demos <span class="glyphicon glyphicon-menu-down"></span></a>
               <ul class="dropdown-menu" style="border-top: 2px solid #5ABAC6;">
                  <li ><a href="#">Blog</a></li>
                  <li class="divider"></li>
                  <li ><a href="#">Gallery</a></li>
                
               </ul>
            </li>
            
          </ul>
          
            </div>
            <div>
               <ul class="nav navbar-nav nav-color ">
                  <li><a href="#" style="font-size: 18px;"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Login</a></li>
                
               </ul>
              
            </div>
          </div>
         
             
       
     
         

       </div>
      
    </nav>

     <!--Navbar End--> 