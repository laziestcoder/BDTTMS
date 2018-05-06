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
                case 'add_post':
                    require_once("includes/add_post.php");
                    break;
                case 'edit_post':
                    require_once("includes/edit_post.php");
                    break;
                default:
                    require_once("index.php");
                    break;
            }

            ?>
        </div>
    </div>
</div>
</div>
</div>

