<?php require_once("../includes/init.php"); ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <?php

            if (isset($_GET['source'])) {
                $source = $_GET['source'];
            } else {
                $source = '';
            }

            switch ($source) {
                case 'add_place':
                    require_once("includes/add_post.php");
                    break;
                case 'edit_place':
                    require_once("includes/edit_post.php");
                    break;
                default:
                    require_once("includes/view_all_post.php");
                    break;
            }

            ?>
        </div>
    </div>
</div>
</div>
</div>

