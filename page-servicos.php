<?php
/*
Template Name: Serviços
*/
?>
<?php get_header(); ?>




<div id="wrapper">
    

     <section id="page-header" class="section background page-header-interior" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title"><?php _e('Serviços','souldeipanema'); ?></h1>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-style row">
                        <div class=" col-md-3 col-sm-3 col-xs-3">
                            <img class="iconServices" src="<?php $image = get_field('service_1_image'); echo $image['url']; ?>" />
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5><?php echo get_field('service_1_title') ?></h5>
                        <p><?php echo get_field('service_1_description') ?></p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class=" col-md-3 col-sm-3 col-xs-3">
                            <img class="iconServices" src="<?php $image = get_field('service_2_image'); echo $image['url']; ?>" />
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5><?php echo get_field('service_2_title') ?></h5>
                        <p><?php echo get_field('service_2_description') ?></p>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="service-style row">
                        <div class=" col-md-3 col-sm-3 col-xs-3">
                            <img class="iconServices" src="<?php $image = get_field('service_3_image'); echo $image['url']; ?>" />
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5><?php echo get_field('service_3_title') ?></h5>
                        <p><?php echo get_field('service_3_description') ?></p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class=" col-md-3 col-sm-3 col-xs-3">
                            <img class="iconServices" src="<?php $image = get_field('service_4_image'); echo $image['url']; ?>" />
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5><?php echo get_field('service_4_title') ?></h5>
                        <p><?php echo get_field('service_4_description') ?></p>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->


                <div class="col-md-6">
                    <div class="service-style row">
                        <div class=" col-md-3 col-sm-3 col-xs-3">
                            <img class="iconServices" src="<?php $image = get_field('service_5_image'); echo $image['url']; ?>" />
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5><?php echo get_field('service_5_title') ?></h5>
                        <p><?php echo get_field('service_5_description') ?></p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class=" col-md-3 col-sm-3 col-xs-3">
                            <img class="iconServices" src="<?php $image = get_field('service_6_image'); echo $image['url']; ?>" />
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5><?php echo get_field('service_6_title') ?></h5>
                        <p><?php echo get_field('service_6_description') ?></p>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->


                <div class="col-md-6">
                    <div class="service-style row">
                        <div class=" col-md-3 col-sm-3 col-xs-3">
                            <img class="iconServices" src="<?php $image = get_field('service_7_image'); echo $image['url']; ?>" />
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5><?php echo get_field('service_7_title') ?></h5>
                        <p><?php echo get_field('service_7_description') ?></p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class=" col-md-3 col-sm-3 col-xs-3">
                            <img class="iconServices" src="<?php $image = get_field('service_8_image'); echo $image['url']; ?>" />
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5><?php echo get_field('service_8_title') ?></h5>
                        <p><?php echo get_field('service_8_description') ?></p>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

   
</div><!-- end wrapper -->





<?php get_footer(); ?>