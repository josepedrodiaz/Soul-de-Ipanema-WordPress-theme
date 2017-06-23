<?php
/*
Template Name: Fotos
*/
?>
<?php get_header(); ?>



<div id="wrapper">
    

     <section id="page-header" class="section background page-header-interior" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title"><?php _e('Fotos','souldeipanema'); ?></h1>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix fotos">

      <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="row">
                        <div id="content" class="col-md-6 col-sm-12 col-xs-12 content-main content-fotos col-md-push-3">
                            <div class="post-wrapper clearfix">
                              
                                <div class="post-title clearfix">
                                    <h5><?php the_title(); ?></h5>
                                </div><!-- end ost-title -->

                                <div class="post-content clearfix main-content">
                                    <?php the_content(); ?>
                                </div><!-- end post-content -->
                            
                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->
                    </div>
                </div>
            </div>
        </div>

    
    </section><!-- end section -->

     <!-- SLIDE GALERIA -->
    <section class="galeria-fotos">

     <?php 
              $post_content = get_post_meta($post->ID, 'fotos_grandes', true);
              preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
              $array_id = explode(",", $ids[1]);
              foreach( $array_id as $attachment_id ){
                $image_attributes = wp_get_attachment_image_src( $attachment_id, "full" );
                if( $image_attributes ) {
                  $src = isset($image_attributes[0])? $image_attributes[0] : '';
                  if(!empty($src)) { 
                      
                      $var = '<div class="col-md-6 col-xs-12">                        
                        <a class="fancybox" rel="group" href="' . $src . '"> <img src="' . $src . '" alt="foto-hostel-ipanema"  class="bright" /></a>
                      </div>';

                      $fotos_grandes[] = $var;
                 
                    }
                }
              }
            ?>


    <?php 
              $post_content = get_post_meta($post->ID, 'fotos_pequenias', true);
              preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
              $array_id = explode(",", $ids[1]);
              //orden de las imagenes que no deben brillar
              $array_nobright = array(0,4,8);
              $counter = 0;
              foreach( $array_id as $attachment_id ){
                $image_attributes = wp_get_attachment_image_src( $attachment_id, "full" );
                if( $image_attributes ) {
                  $src = isset($image_attributes[0])? $image_attributes[0] : '';
                  if(!empty($src)) { 
                    
                    $var = '<div class="col-md-4 col-xs-12">';


                    if(!in_array($counter, $array_nobright)){
                        $var .= '<a href="' . $src .'" class="fancybox" rel="group">';
                    } 


                    $var.= '<img src="' . $src  .'" alt="foto-hostel-ipanema"';

                    if(!in_array($counter, $array_nobright)){
                        $var .= ' class="bright" ';
                    }


                    $var .= ' />';

                    if(!in_array($counter, $array_nobright)){
                        $var .= '</a>';
                    }
                     
                    $var .= '</div>';
                    
                    $fotos_chicas[] = $var;
                  
                    }
                }
                $counter++;
              }
            ?>

        <div class="row foto_grande">
        
           <?php 
            echo $fotos_grandes[0];
            echo $fotos_grandes[1];
           ?>

        </div>

        <div class="row foto_chica">

            <?php 
            echo $fotos_chicas[0];
            echo $fotos_chicas[1];
            echo $fotos_chicas[2];
           ?>

        </div>

        <div class="row foto_grande">
        
           <?php 
            echo $fotos_grandes[2];
            echo $fotos_grandes[3];
           ?>

        </div>


        <div class="row foto_chica">

            <?php 
            echo $fotos_chicas[3];
            echo $fotos_chicas[4];
            echo $fotos_chicas[5];
           ?>

        </div>


        <div class="row foto_grande">
        
           <?php 
            echo $fotos_grandes[4];
            echo $fotos_grandes[5];
           ?>

        </div>

        <div class="row foto_chica">

            <?php 
            echo $fotos_chicas[6];
            echo $fotos_chicas[7];
            echo $fotos_chicas[8];
           ?>

        </div>

        <div class="row foto_grande">
        
           <?php 
            echo $fotos_grandes[6];
            echo $fotos_grandes[7];
           ?>

        </div>

        <div class="row foto_chica">

            <?php 
            echo $fotos_chicas[9];
            echo $fotos_chicas[10];
            echo $fotos_chicas[11];
           ?>

        </div>

        

    </section><!-- end section -->
    <!-- /SLIDE GALERIA -->



<!-- SLIDER -->
<section class="section clearfix fotos" id="slideBig">
   <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                <article class="parallax-slider">
                  <div class="tp-banner-container">
                                <div id="banner1" class="tp-banner">
                                    <ul>


                                    <?php 
                                      $post_content = get_post_meta($post->ID, 'slide', true);
                                      preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
                                      $array_id = explode(",", $ids[1]);
                                      foreach( $array_id as $attachment_id ){
                                        $image_attributes = wp_get_attachment_image_src( $attachment_id, "full" );
                                        if( $image_attributes ) {
                                          $src = isset($image_attributes[0])? $image_attributes[0] : '';
                                          if(!empty($src)) { 
                                              
                                            


                                              echo '<li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="'.$src.'"  data-saveperformance="on" >
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png"  alt="greenbg" data-lazyload="'.$src.'" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"></li>';

                                    
                                         
                                            }
                                        }
                                      }






                                    ?>



                                        
                                        <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="http://www.elmistihostelipanema.com/wp-content/uploads/2016/11/900x598.jpg"  data-saveperformance="on"  >
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png"  alt="greenbg" data-lazyload="http://www.elmistihostelipanema.com/wp-content/uploads/2016/11/900x598.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"></li>
                                    </ul>   
                                </div>
                            </div>  
                  </article>
                    
                </div>
            </div>
        </div>

    
    </section><!-- end section -->

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo get_template_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/revslider.js"></script>

<!--  FIN SLIDER -->

<!--  2 GALERIA -->
    <section class="galeria-fotos">
        
        <div class="row foto_chica">

            <?php 
            echo $fotos_chicas[12];
            echo $fotos_chicas[13];
            echo $fotos_chicas[14];
           ?>

        </div>
        <div class="row foto_grande">
        
           <?php 
            echo $fotos_grandes[8];
            echo $fotos_grandes[9];
           ?>

        </div>



        <div class="row foto_chica">

            <?php 
            echo $fotos_chicas[15];
            echo $fotos_chicas[16];
            echo $fotos_chicas[17];
           ?>

        </div>
        <div class="row foto_grande">
        
           <?php 
            echo $fotos_grandes[10];
            echo $fotos_grandes[11];
           ?>

        </div>

        <div class="row foto_chica">

            <?php 
            echo $fotos_chicas[18];
            echo $fotos_chicas[19];
            echo $fotos_chicas[20];
           ?>

        </div>

    </section>
<!-- FIN  2 GALERIA -->






    <div style="text-align: center; margin: 0 0 25px;">
        <img src="/wp-content/uploads/2016/11/enjoy.jpg" / style="float: none;max-width: 80%">
    </div>

   
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