<?php
/*
Template Name: PAGE DEFAULT
*/
?>
<?php get_header(); ?>



<div id="wrapper">
    

     <section id="page-header" class="section background page-header-interior" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title"><?php _e('Sobre','souldeipanema'); ?></h1>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="row">
                        <div id="content" class="col-md-8 col-sm-12 col-xs-12 content-main">
                            <div class="post-wrapper clearfix">
                              
                                <div class="post-title clearfix">
                                    <h5><?php the_title(); ?></h5>
                                </div><!-- end ost-title -->

                                <div class="post-content clearfix main-content">
                                    <?php the_content(); ?>
                                </div><!-- end post-content -->
                            
                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->

                        <div id="sidebar" class="col-md-4 col-sm-12 col-xs-12">
                            <div class="widget clearfix">
                                <div class="home-form" id="form-lateral">  
                                    <div class="tab-content"> 
                                        <div role="tabpanel" class="tab-pane active" id="tab_01"> 

                                            <div class="contenedorBoxes">


                                            <form class="bookform form-inline row" action="http://www.elmistihostels.com/bookings/booking.php" method="post" onsubmit="return checkeaForm('<?php _e('Deve preencher todos os campos do formulário','souldeipanema'); ?>');">
                                                <input type="hidden" name="lang" value="<?php echo ICL_LANGUAGE_CODE; ?>">
                                                <input type="hidden" name="destino" value="ipa">
                                                <div class="form-group tituloFormContainer col-md-12 visible-md-block visible-lg-block"> 
                                                        <span class="tituloForm"><?php _e('BOOK NOW','souldeipanema'); ?>!</span> 
                                                </div> 
                                                <div class=" boxesForm">   
                                                    <div class="form-group col-md-12"> 
                                                        <div class="input-group"> 
                                                            <input readonly="readonly" type="text" class="form-control" placeholder="<?php _e('Arrival','souldeipanema'); ?>" id="datepicker"  name="llegada" autocomplete="off">
                                                            <div class="input-group-addon" id="calendar0">
                                                                <i class="fa fa-calendar"></i>
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="form-group col-md-12"> 
                                                        <div class="input-group input-group2"> 
                                                            <input readonly="readonly" type="text" class="form-control" placeholder="<?php _e('Departure','souldeipanema'); ?>" id="datepicker1"  name="partida" autocomplete="off">
                                                            <div class="input-group-addon" id="calendar1">
                                                                <i class="fa fa-calendar"></i>
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                    <div class="form-group col-md-12"> 
                                                        <button type="submit" class="btn btn-primary btn-block">
                                                            <i class="icon-search"></i> <?php _e('SEARCH','souldeipanema'); ?> 
                                                        </button> 
                                                    </div> 
                                                </div> 

                                                </div><!-- END contenedorBoxes -->

                                                <div class="col-md-12" id="formSubText"> 
                                                <h3 class="subtitulo-form-lateral"><?php _e('CENTRAL DE RESERVAS','souldeipanema'); ?></h3>
                                                    <p><img class="visible-xs-inline visible-md-inline visible-lg-inline" src="http://www.elmistihostelipanema.com/wp-content/themes/souldeipanema/images/wa.svg"> WHATSAPP <span class="formSubTextNumbers WA"> +55 21 9848 55138 <br /> +55 21 9847 92746 </span> <br /><img class="visible-xs-inline visible-md-inline visible-lg-inline" src="http://www.elmistihostelipanema.com/wp-content/themes/souldeipanema/images/phone.svg" id="phone-icon">TELEFONE <span class="formSubTextNumbers"> +55.21. 2246.1070 <br /> 0800 020 2661 </span> </p> 
                                                </div> 
                                            </form> 





                                        </div> 
                                    </div> 
                                </div>
                            </div><!-- end widget -->

                            <div class="widget clearfix">
                                <div class="widget-title">
                                    <h3><?php _e('GALERÍA','souldeipanema'); ?></h3>
                                </div><!-- end title -->
                                <div class="flickrwidget clearfix">
                                    <ul class="list-inline">
                                     <?php 
                                          $post_content = get_post_meta($post->ID, 'galeria-lateral', true);
                                          preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
                                          $array_id = explode(",", $ids[1]);
                                          foreach( $array_id as $attachment_id ){
                                            $image_attributes = wp_get_attachment_image_src( $attachment_id, "full" );
                                            if( $image_attributes ) {
                                              $src = isset($image_attributes[0])? $image_attributes[0] : '';
                                              if(!empty($src)) { ?>
                                                    <li><a class="fancybox" rel="group" href="<?php echo $src ?>"><img src="<?php echo $src ?>" alt=""></a></li>
                                              <?php }
                                            }
                                          }
                                        ?>
                                        
                                    </ul>
                                </div><!-- end listwidget -->
                            </div><!-- end widget -->

                            
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

   
</div><!-- end wrapper -->




<!-- / HOME CONTENT -->


<!-- FANCYBOX -->

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>

<?php get_footer(); ?>