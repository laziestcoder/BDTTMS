    <?php require_once("includes/header.php"); ?>
        <!--Navbar start-->
    <?php require_once("includes/navigation.php"); ?>
        <!-- /.navbar -->
        <!--Slider Start-->

        <div class="background-img">
            <div>
                <div class=" background-text">
                    <h1 class="">Explore Bangladesh With Trip Planner</h1>
                    <h3 class="">A Trip Planning Site For Explore the country
                    </h3>
                </div>
            </div>
            <!--Hotel booking form start-->


            <div class="container-fluid">
                <div>
                    <div class=" col-md-11  image-form-div" style="background: #F8F8F8;  border-radius: 10px; box-shadow: 3px 3px 10px gray; margin-top: 20px;">
                        <form action="showdirection.php" method="post" target="_blank" class="form-inline image-form">
                            <div class="form-group">
                                <input type="text" name="fromCity" id="from_city" class="form-control " placeholder="Your Location">
                            </div>
                            <div class="form-group">
                                <input type="text" name="toCity" id="to_city" class="form-control " placeholder="Your Destination">
                            </div>
                            <div class="form-group">
                                <div class="input-group input-daterange">
                                    <input type="text" name="startDate" class="form-control" value="" placeholder="Start Tour ">
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></div>
                                    <input type="text" name="endDate" class="form-control" value="" placeholder="End Tour">
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="member" class="form-control" style="width: 160px;">
                                    <option disabled selected>Member</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Make A Plan" class=" btn btn-primary form-control   submit-btn button-book-now" style="width: 200px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--Hotel booking form end-->
        </div><!--Slider End--><!--Easy to use, easy to browse Start-->


        <div class="container">
            <h2 class="no-background"><span class="span-heading">Easy to use, easy to browse</span></h2>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="circle col-md-offset-2 circle-logo "><i class="fa fa-map-marker fa-4x" aria-hidden="true" style="margin: 20px 35px"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="circle col-md-offset-2 circle-logo "><i class="fa fa-calendar-check-o fa-4x" aria-hidden="true" style="margin: 20px 23px"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="circle col-md-offset-2 circle-logo "><i class="fa fa-plane fa-4x" aria-hidden="true" style="margin: 20px 25px"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="col-md-12">
                                <div class="circle col-md-offset-2 circle-logo "><i class="fa fa-suitcase fa-4x" aria-hidden="true" style="margin: 20px 21px"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-2">
                            <h3 style="margin-left: 28px;">Make a plan</h3>
                        </div>

                        <div class="col-md-1" style="margin-left: 10px;">
                            <img src="Images1/arrow.png" style="margin-top: 23px; ">
                        </div>

                        <div class="col-md-2" style="margin-left: 20px;">
                            <h3 style="margin-left: 20px;">Customize it</h3>
                        </div>

                        <div class="col-md-1">
                            <img src="Images1/arrow.png" style="margin-top: 23px; ">
                        </div>

                        <div class="col-md-2">
                            <h3 style="margin-left: 50px;">Book it</h3>
                        </div>

                        <div class="col-md-1">
                            <img src="Images1/arrow.png" style="margin-top: 23px; ">
                        </div>

                        <div class="col-md-2">
                            <h3 style="margin-left: 40px;">Manage it</h3>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-3 text-center" style="margin-left: -30px;">
                            <p>A complete day-by-day itinerary<br>
                                based on your preferences</p>
                        </div>

                        <div class="col-md-3 text-center" style="margin-left: 30px;">
                            <p>Refine your plan. We'll find<br> the
                                best routes and schedules</p>
                        </div>

                        <div class="col-md-3 text-center">
                            <p>Choose from the best hotels
                                and<br> activities. Up to 50% off</p>
                        </div>

                        <div class="col-md-3 text-center">
                            <p>Everything in one place.<br>
                                Everyone on the same page.</p>
                        </div>
                    </div>
                </div>
            </div><!--Easy to use, easy to browse End-->
        <!--Find destination-->
        <div class="container">
            <h2 class="no-background"><span class="span-heading">Popular Destination</span></h2>
        </div>

        <div class="wrapper">
            <div class="main">
                <div class="container-img">
                    <div class="shuffle-group">
                        <div data-si-mousemove-trigger="100" class="shuffle-me">
                            <a href="#" class="info a_info" target="_blank">
                                <h1 class=" h1_info">The Cox's Bazar</h1>
                                <h2 class=" h1_info">Visit the world longest sea beach</h2></a>
                            <div class="images">
                                <img src="Images1/115930470.jpg" style="height: 430px">
                                <img src="Images1/2 (1).jpg" style="height: 430px">
                                <img src="Images1/sunset-over-cox-s-bazar.jpg" style="height: 430px">
                                <img src="Images1/sail-the-fishing-boat-is-coxs-bazar-tour-with-deshghuri.jpg" style="height: 432px">
                                <img src="Images1/HT_barbados_MEM_151120_16x9_992.jpg" style="height: 430px">
                            </div>
                        </div>

                        <div class="shuffle-me">
                            <a href="#"
                               class="info a_info" target="_blank">
                                <h1 class=" h1_info">The Bandarban</h1>
                                <h2 class=" h1_info">A district of green beauty</h2></a>
                            <div class="images">
                                <img src="Images1/bandarban/images.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/bandarban/Nilgiri Resort.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/bandarban/sajek.jpg" style="height: 210px; width: 320px">
                            </div>
                        </div>

                        <div class="shuffle-me">
                            <a href="#"
                               class="info a_info" target="_blank">
                                <h1 class=" h1_info">The Sajek Valley</h1>
                                <h2 class=" h1_info"> an emerging tourist spot in Bangladesh</h2></a>
                            <div class="images">
                                <img src="Images1/sajek/download.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/sajek/images (2).jpg" style="height: 210px; width: 320px">
                                <img src="Images1/sajek/megh-machang-at-sajek.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/sajek/richang.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/sajek/sajek.jpg" style="height: 210px; width: 320px">
                            </div>
                        </div>
                    </div>

                    <div class="shuffle-group">
                        <div data-si-mousemove-trigger="100" class="shuffle-me">
                            <a href="#"
                               class="info a_info" target="_blank">
                                <h1 class=" h1_info">The Sundarbans</h1>
                                <h2 class=" h1_info">one of the largest such forests in the world </h2></a>
                            <div class="images">
                                <img src="Images1/sundarbans/shundarban.jpg" style="height: 430px">
                                <img src="Images1/sundarbans/tiger.jpg" style="height: 430px">
                                <img src="Images1/sundarbans/22912101039_160e96ffa1_b.jpg" style="height: 430px">
                                <img src="Images1/sundarbans/golpata.jpg" style="height: 430px">
                                <img src="Images1/sundarbans/Hiron-Point-Sundarban-Bangladesh.jpg" style="height: 430px">
                                <img src="Images1/sundarbans/Hive in Sundarban.jpg" style="height: 430px">
                                <img src="Images1/sundarbans/Sundarban+Bangladesh.jpg" style="height: 430px">
                            </div>
                        </div>

                        <div class="shuffle-me">
                            <a href="#"
                               class="info a_info" target="_blank">
                                <h1 class=" h1_info">Mosque city bagaerhat</h1>
                                <h2 class=" h1_info">Its a full of beautiful historic mosques</h2></a>
                            <div class="images">
                                <img src="Images1/bagerhat/download (1).jpg" style="height: 210px; width: 320px">
                                <img src="Images1/bagerhat/85451_93923_49636.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/bagerhat/images.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/bagerhat/download.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/bagerhat/5054472_f520.jpg" style="height: 210px; width: 320px">
                            </div>
                        </div>
                        <div class="shuffle-me">
                            <a href="#"
                               class="info a_info" target="_blank">
                                <h1 class=" h1_info">The sonargaon</h1>
                                <h2 class=" h1_info">historic administrative, commercial and maritime centre in Bengal</h2>
                            </a>
                            <div class="images">
                                <img src="Images1/sonargaon/images.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/sonargaon/images (1).jpg" style="height: 210px; width: 320px">
                                <img src="Images1/sonargaon/images (2).jpg" style="height: 210px; width: 320px">
                                <img src="Images1/sonargaon/images (3).jpg" style="height: 210px; width: 320px">
                                <img src="Images1/sonargaon/sonargaon 2.jpg" style="height: 210px; width: 320px">
                            </div>
                        </div>
                    </div>

                    <div class="shuffle-group">
                        <div data-si-mousemove-trigger="100" class="shuffle-me">
                            <a href="#"
                               class="info a_info" target="_blank">
                                <h1 class=" h1_info">The Sylhet</h1>
                                <h2 class=" h1_info">Sylhet is the naturally beautiful place in the north-eastern part of
                                    bangladesh</h2></a>
                            <div class="images">
                                <img src="Images1/sylhet/7bca13f5f36725de7f2d4f7726766177.jpg" style="height: 430px">
                                <img src="Images1/sylhet/images.jpg" style="height: 430px">
                                <img src="Images1/sylhet/private-tour-sylhet-full-day-tour-of-ratargul-and-bisnakandi-in-sylhet-343163.jpg" style="height: 430px">
                                <img src="Images1/sylhet/Ratargul Swamp Forest, Sylhet(11).jpg" style="height: 430px">
                                <img src="Images1/sylhet/Sylhet2.jpg" style="height: 430px">
                                <img src="Images1/sylhet/Ratargul Swamp Forest, Sylhet (12).JPG" style="height: 430px">
                            </div>
                        </div>

                        <div class="shuffle-me">
                            <a href="#"
                               class="info a_info" target="_blank">
                                <h1 class=" h1_info">The dhaka</h1>
                                <h2 class=" h1_info">Dhaka is the capital city of Bangladesh</h2></a>
                            <div class="images">
                                <img src="Images1/dhaka/1484735672.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/dhaka/main-qimg-0c239c2785b0ca7071e57d17ff21bd10-c.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/dhaka/25c10333782950.56b81cc695b41.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/dhaka/dhaka-parliament.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/dhaka/Lalbager_Kella_01.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/dhaka/11257.jpg" style="height: 210px; width: 320px">
                            </div>
                        </div>

                        <div class="shuffle-me">
                            <a href="#"
                               class="info a_info" target="_blank">
                                <h1 class=" h1_info">The Kuakata</h1>
                                <h2 class=" h1_info">Famous for its panoramic sea beach.</h2></a>
                            <div class="images">
                                <img src="Images1/kuakata/download (1).jpg" style="height: 210px; width: 320px">
                                <img src="Images1/kuakata/download.jpg" style="height: 210px; width: 320px">
                                <img src="Images1/kuakata/kuakata2.JPG" style="height: 210px; width: 320px">
                                <img src="Images1/kuakata/kuakata2.JPGkuakata2.JPG" style="height: 210px; width: 320px">
                                <img src="Images1/kuakata/01.jpg" style="height: 210px; width: 320px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Find destination End-->
        <!--Explore whole region Start-->
    <?php require_once("includes/explore_region.php"); ?>
        <!--Explore whole region End-->
        <!--Footer Start-->
    <?php require_once("includes/footer.php"); ?>
