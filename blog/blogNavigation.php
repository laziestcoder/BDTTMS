<!--Navbar start-->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="../index.php"><img src="../images1/Bees.png" style="margin-top: -5px;"></a>-->
            <a class="navbar-brand" href="../index.php">IIUC S<span style="font-size:20px; ">QLInject</span>ors </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <div class="nav navbar-nav navbar-right">
                <li><a href="../">Home</a></li>
                <li><a href="index.php" style="color:#5ABAC6;">Blog </a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../contact.php">Contacts</a></li>
                <?php
                ob_start();
                //ekhan theke
                if (!$session->is_signed_in()) {
                    require_once ("../includes/login.php");
                } else {
                    if ($_SESSION["user_id"]) {
                        $id = $_SESSION["user_id"];
                        require_once("includes/loggedin.php");
                    } else {
                        $session->admin_logout();
                        require_once("../includes/login.php");
                    }
                }
                ?>
            <!-- /.navbar-collapse -->    <!-- /.container -->


</nav><!-- /.navbar -->