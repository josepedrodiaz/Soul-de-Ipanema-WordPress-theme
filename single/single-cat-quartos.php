<?php
/**
* Category QUARTOS Template
*/

get_header(); ?> 





<div id="wrapper">
    

     <section id="page-header" class="section background page-header-interior" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title"><?php _e('Quartos','souldeipanema'); ?></h1>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    




        <?php
        // The Loop
        while ( have_posts() ) : 
            the_post(); 


        $image = get_field('img_header_cuarto');
        $linkbooknow = get_field('link_book_now');
        ?>
            

        <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="single-hotel-wrapper">
                        <div class="single-hotel-image">
                            <img src="<?php echo $image['url']; ?>" alt="" class="img-responsive">
                            <div class="price">
                                <h2 class="room-name"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                                <h2><?php the_field('precio'); ?>
                                 <span><b>/<?php _e('noite','souldeipanema'); ?></b></span></h2>
                                <a href="<?php echo $linkbooknow . "?dateStart=" . date("Y-m-d") . "&numNights=1&lang=" . ICL_LANGUAGE_CODE ?>" class="btn btn-primary btn-lg"> <i class="icon-search"></i> <?php _e('SEARCH','souldeipanema'); ?> </a>
                            </div><!-- end price -->
                        </div><!-- end image -->

                       

                        <div class="row">
                            <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                                <div class="book-widget">
                                    <div class="hotel-title">
                                        <h5><?php _e('BOOK NOW','souldeipanema'); ?></h5>
                                    </div>

                                    <form class="bookform form-inline row" action="http://www.elmistihostels.com/bookings/booking.php" method="post" onsubmit="return checkeaForm('<?php _e('Deve preencher todos os campos do formulário','souldeipanema'); ?>');">
                                        <input type="hidden" name="lang" value="<?php echo ICL_LANGUAGE_CODE; ?>">
                                        <input type="hidden" name="destino" value="ipa">
                                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                               <input readonly="readonly" type="text" class="form-control" placeholder="<?php _e('Arrival','souldeipanema'); ?>" id="datepicker"  name="llegada" autocomplete="off" required>
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                            <div class="input-group">
                                               <input readonly="readonly" type="text" class="form-control" placeholder="<?php _e('Departure','souldeipanema'); ?>" id="datepicker1"  name="partida" autocomplete="off" required>
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>

                                    
                                        <div class="form-group col-md-2 col-sm-6 col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-block btn-normal"><i class="icon-search"></i> <?php _e('SEARCH','souldeipanema'); ?> </button>
                                        </div>
                                    </form>

                                    <div class="clearfix"></div>                
                                    <hr>

                                    <div class="row hotel-desc">
                                        <div class="col-md-12">
                                            <?php echo get_field("cuarto_copy"); ?>
                                        </div>
                                    </div><!-- end row -->

                                    <br>


                                    <h5 class="possui"><?php _e('ESSE QUARTO POSSUI','souldeipanema'); ?> </h5>

                                    <div class="row hotel-icon-list">
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <?php
                                                $str_servicios = get_field('services');
                                                $array_servicio = explode(',', $str_servicios);
                                                $total_items = count($array_servicio);
                                                for ($i=0; $i < 7; $i++) { 
                                                    echo "<p><span class=\"icon-container " . $array_servicio[$i] . "\"><i class=\"\"></i></span>";
                                                    _e($array_servicio[$i],'souldeipanema');
                                                    echo "</p>";
                                                }
                                            ?>
                                            
                                        </div><!-- end col -->

                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                        <?php
                                           for ($i=7; $i < $total_items; $i++) { 
                                                    echo "<p><span class=\"icon-container " . $array_servicio[$i] . "\"><i class=\"\"></i></span>";
                                                    _e($array_servicio[$i],'souldeipanema');
                                                    echo "</p>";
                                                }
                                        ?>
                                        </div><!-- end col -->

                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            
                                            
                                        </div><!-- end col -->
                                    </div><!-- end hotel-icon-list -->

                                 
                                    
                                </div><!-- end book-widget -->

                                <div class="clearfix"></div>
                                <hr class="after_services">
                                <br>

                                <div class="review-widget">
                                    <div class="hotel-title">
                                        <h5>REVIEWS</h5>
                                    </div>

                                    <div class="row hotel-review">
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="review-list">
                                                <h5><?php _e('SERVICE','souldeipanema'); ?>:</h5> 
                                                <span class="rating">
                                                <?php
                                                $stars = get_field('service1_stars');
                                                for ($i=0; $i < $stars ; $i++) { 
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php   
                                                }
                                                ?>
                                                </span><!-- end rating -->
                                            </div>

                                            <div class="review-list">
                                                <h5><?php _e('SLEEP QUALITY','souldeipanema'); ?>:</h5> 
                                                <span class="rating">
                                                <?php
                                                $stars = get_field('service2_stars');
                                                for ($i=0; $i < $stars ; $i++) { 
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php   
                                                }
                                                ?>
                                                </span><!-- end rating -->
                                            </div>

                                            <div class="review-list">
                                                <h5><?php _e('LOCATION','souldeipanema'); ?>:</h5> 
                                                <span class="rating">
                                                <?php
                                                $stars = get_field('service3_stars');
                                                for ($i=0; $i < $stars ; $i++) { 
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php   
                                                }
                                                ?>
                                                </span><!-- end rating -->
                                            </div>

                                            <div class="review-list">
                                                <h5><?php _e('SWIMMING POOL','souldeipanema'); ?>:</h5> 
                                                <span class="rating">
                                                <?php
                                                $stars = get_field('service4_stars');
                                                for ($i=0; $i < $stars ; $i++) { 
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php   
                                                }
                                                ?>
                                                </span><!-- end rating -->
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="review-list">
                                                <h5><?php _e('VALUE','souldeipanema'); ?>:</h5> 
                                                <span class="rating">
                                                <?php
                                                $stars = get_field('service5_stars');
                                                for ($i=0; $i < $stars ; $i++) { 
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php   
                                                }
                                                ?>
                                                </span><!-- end rating -->
                                            </div>

                                            <div class="review-list">
                                                <h5><?php _e('CLEANLINESS','souldeipanema'); ?>:</h5> 
                                                <span class="rating">
                                                <?php
                                                $stars = get_field('service6_stars');
                                                for ($i=0; $i < $stars ; $i++) { 
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php   
                                                }
                                                ?>
                                                </span><!-- end rating -->
                                            </div>

                                            <div class="review-list">
                                                <h5><?php _e('ROOMS','souldeipanema'); ?>:</h5> 
                                                <span class="rating">
                                                <?php
                                                $stars = get_field('service7_stars');
                                                for ($i=0; $i < $stars ; $i++) { 
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php   
                                                }
                                                ?>
                                                </span><!-- end rating -->
                                            </div>

                                            <div class="review-list">
                                                <h5><?php _e('FITNESS FACILITY','souldeipanema'); ?>:</h5> 
                                                <span class="rating">
                                                <?php
                                                $stars = get_field('service8_stars');
                                                for ($i=0; $i < $stars ; $i++) { 
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                <?php   
                                                }
                                                ?>
                                                </span><!-- end rating -->
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="review-total text-center">
                                                <h1><?php echo get_field('review_total') ?></h1>
                                                <span class="rating">
                                                    <?php
                                                    $stars = get_field('review_total_stars');
                                                    for ($i=0; $i < $stars ; $i++) { 
                                                    ?>
                                                        <i class="fa fa-star"></i>
                                                    <?php   
                                                    }
                                                    ?>
                                                </span><!-- end rating -->
                                                <span class="tripTxt">Trip Advisor Reviews</span>
                                            </div><!-- end review-total -->
                                        </div><!-- end col -->
                                    </div><!-- end hotel-review -->
                                </div><!-- end review widget -->

                                <hr>

                                

                               
                            </div><!-- end content -->

                            <div id="sidebar" class="col-md-3 col-sm-12 col-xs-12">
                                <div class="widget clearfix">
                                    <div class="widget-title">
                                        <h6><?php _e('CLIENTS LIKE THIS HOTEL FOR','souldeipanema'); ?>:</h6>
                                    </div><!-- end title -->

                                    <div class="hotel-widget clearfix">
                                    <?php 
                                         $image = get_field('like_img1');
                                     ?>
                                        <p><img src="<?=$image['url']?>" /> 
                                         <?php echo get_field('like_title1') ?></p>
                                        <small><?php echo get_field('like_desc1') ?></small>
                                    </div><!-- end listwidget -->

                                    <div class="hotel-widget clearfix">
                                    <?php 
                                         $image = get_field('like_img2');
                                     ?>
                                        <p><img src="<?=$image['url']?>" /> 
                                         <?php echo get_field('like_title2') ?></p>
                                        <small><?php echo get_field('like_desc2') ?></small>
                                    </div><!-- end listwidget -->

                                    <div class="hotel-widget clearfix">
                                    <?php 
                                         $image = get_field('like_img3');
                                     ?>
                                        <p><img src="<?=$image['url']?>" /> 
                                         <?php echo get_field('like_title3') ?></p>
                                        <small><?php echo get_field('like_desc3') ?></small>
                                    </div><!-- end listwidget -->

                                    <div class="hotel-widget clearfix">
                                    <?php 
                                         $image = get_field('like_img4');
                                     ?>
                                        <p><img src="<?=$image['url']?>" /> 
                                         <?php echo get_field('like_title4') ?></p>
                                        <small><?php echo get_field('like_desc4') ?></small>
                                    </div><!-- end listwidget -->

                                    <div class="hotel-widget clearfix">
                                    <?php 
                                         $image = get_field('like_img5');
                                     ?>
                                        <p><img src="<?=$image['url']?>" /> 
                                         <?php echo get_field('like_title5') ?></p>
                                        <small><?php echo get_field('like_desc5') ?></small>
                                    </div><!-- end listwidget -->



                                    <!-- REVIEWS  Sidebar-->
                                     <div class="hotel-widget clearfix reviews-sidebar">
                                        <?php 
                                        $gender1 = get_field('review_gender1');
                                         ?>
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/<?=$gender1?>.png" class="imgReview1">
                                        <h2>
                                            <?php 
                                            //Name
                                            echo get_field('review_name1');
                                            //Stars
                                            $stars_review1 = get_field('review_stars1');
                                            $stars_review1 = intval($stars_review1);
                                             for( $i = 1; $i <= $stars_review1; $i++ ){
                                                echo "<img src='".get_template_directory_uri()."/images/star.png' class='reviewStars' />";
                                            } 
                                            if(!is_int($stars_review1)){
                                                 echo "<img src='".get_template_directory_uri()."/images/media-star.png' class='reviewStars' />";
                                            }
                                            ?> 

                                        </h2>
                                        <hr class="linea" />
                                        <p><?php echo get_field('review_desc1') ?></p>
                                    </div><!-- end listwidget -->

                                     <div class="hotel-widget clearfix reviews-sidebar">
                                        <?php 
                                        $gender2 = get_field('review_gender2');
                                         ?>
                                         <img src="<?php echo get_template_directory_uri(); ?>/images/<?=$gender2?>.png" class="imgReview2">
                                        <h2>
                                            <?php 
                                            //Name
                                            echo get_field('review_name2');
                                            //Stars
                                            $stars_review2 = get_field('review_stars2');
                                            $end = intval($stars_review2);
                                             for( $i = 1; $i <= $end; $i++ ){
                                                echo "<img src='".get_template_directory_uri()."/images/star.png' class='reviewStars' />";
                                            } 
                                            if(!is_int($stars_review2)){
                                                 echo "<img src='".get_template_directory_uri()."/images/media-star.png' class='reviewStars' />";
                                            }
                                            ?> 

                                        </h2>
                                        <hr class="linea" />
                                        <p><?php echo get_field('review_desc2') ?></p>
                                    </div><!-- end listwidget -->

                                   


                                </div><!-- end widget -->
                            </div><!-- end sidebar -->
                        </div><!-- end row -->
                    </div><!-- end single-hotel-wrapper -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>








        <?php 
        endwhile; 
        ?>




   
</div><!-- end wrapper -->




<?php get_footer(); ?>