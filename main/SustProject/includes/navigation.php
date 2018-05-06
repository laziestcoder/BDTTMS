<?php require_once "session.php"?>

<nav class="navbar navbar-default" >
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="Images1/Bees.png" style="margin-top: -5px;"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php " style="color:#5ABAC6;  ">Home</a></li>


                <li><a href="blog/">Blog </a></li>

                <li><a href="contact.php">Contacts</a></li>
                <li ><a href="about.php" >About</a></li>


              <?php
               ob_start();
                //ekhan theke
                if (!$session->is_signed_in()) {
                    require_once("login.php");
                }
                else{
                    if ($_SESSION["user_id"]) {
                        $id = $_SESSION["user_id"];
                       require_once("loggedin.php");
                    } else {
                        $session->admin_logout();
                        require_once("login.php");
                    }
                }
                ?>
            </ul>

            <!-- Modal -->
        </div>
    </div><!-- /.navbar-collapse -->
</nav>


    
<script type="text/javascript">
  function stopmodal_1() {

  
    document.getElementById('myLogin').style.visibility = "hidden";
  
}

function stopmodal_2(){

 //location.reload();
    document.getElementById('myLogin').style.visibility = "visible";


}

    
 </script>



