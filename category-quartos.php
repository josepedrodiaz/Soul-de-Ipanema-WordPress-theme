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

    <section class="section clearfix hostels">

        <div class="container-fluid">
                

        		<?php
        		// The Loop
                $i=1;
                global $query_string;
                query_posts( $query_string . '&order=ASC' );

        		while ( have_posts() ) : 
        			the_post(); 
        		


               // for ($x = 1; $x <= 7; $x++) { // FOR for testing
                    ?>
           
                <?php
                    $imageArray = get_field('img_listado_cuartos');
                    //https://placeholdit.imgix.net/~text?txtsize=46&txt=hostel&w=370&h=216
                
                if( $i == 1 || $i == 4 || $i == 7 ){
                        echo "<div class='row'>";
                    }
                ?>

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="post-wrapper clearfix border-bottom">
                        <div class="hotel-wrapper">
                            <div class="post-media">
                                <a href="<?php the_permalink() ?>"><img src="<?php echo $imageArray["url"]; ?>" alt="" class="img-responsive"></a>
                            </div><!-- end media -->
                            <div class="post-title clearfix">
                                
                                    <h5>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h5>
                                <!-- end left -->
                                <!--
                                <div class="pull-right">
                                    <h6><?=get_field('precio')?></h6>
                                </div><!-- end left 
                                -->
                            </div><!-- end title -->
                            <!--
                            <span class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span><!-- end rating -->
                            <?php the_content(); ?>
                            <a href="<?php the_permalink() ?>">
                                +Info
                            </a>
                        </div><!-- end hotel-wrapper -->                            
                    </div><!-- end post-wrapper -->
                </div>


        			

        		<?php 
                // } // END FOR TESTING
                ?>


               


                <?php
                if( $i == 3 || $i == 6 ){
                        echo "</div>";
                    }
                $i++;
        		endwhile; 
        		?>
        			


                 <!-- BANNER FINAL LISTADO DE QUARTOS -->
                <div class="col-md-8 hidden-sm-down col-xs-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/enjoy-meet-explore.png" id="banner-pie-listado-quartos">
                </div>

          
        </div>
     
    </section><!-- end section -->
    <!-- /SLIDE GALERIA -->



   
</div><!-- end wrapper -->




<?php get_footer(); ?>