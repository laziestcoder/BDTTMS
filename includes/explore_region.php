<?php require_once("config.php"); ?>
<?php require_once("database.php"); ?>
<?php require_once("db_object.php"); ?>
<?php require_once("division.php"); ?>

<?php

$divisions = Division::find_all();

?>

<div class="container">
    <h2 class="no-background"><span class="span-heading">Explore A Whole Region</span></h2>

</div>
<div class="container">
    <div class="container">

        <div class="row">
            <?php foreach ($divisions as $division): ?>
                <div class="col-lg-3" style="margin-top: 28px;">
                    <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                        <p style="text-align:center;">
                            <img src="images/<?php echo $division->div_image; ?>" alt=""
                                 style="height: 200px;width: 265px;">
                        </p>
                        <div class="caption">
                            <div class="blur"></div>
                            <div class="caption-text">
                                <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">
                                    <?php echo $division->div_name; ?></h3>
                                <p><?php echo substr($division->div_description, 0, 80) . "..."; ?></p>
                                <a class=" btn btn-primary" href="#">Make Plan</a>
                            </div>
                        </div>
                    </div>

                </div>

            <?php endforeach; ?>
        </div>

    </div>

</div>

</div>
<br>
<br>
<br>