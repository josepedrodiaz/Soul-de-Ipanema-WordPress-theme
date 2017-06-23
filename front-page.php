<?php get_header(); ?>

<article class="parallax-slider">
    <div class="tp-banner-container">
        <div id="banner1" class="tp-banner">
            <ul>
                <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="<?php echo get_template_directory_uri(); ?>/upload/home_hostel_ipanema_rio_de_janeiro-1.jpg" data-saveperformance="off"  data-title="Parallax 3D">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png"  alt="greenbg" data-lazyload="<?php echo get_template_directory_uri(); ?>/upload/home_hostel_ipanema_rio_de_janeiro-1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    
                    <div class="tp-caption slider-title tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                        data-x="center" 
                        data-y="140"
                        data-speed="1000" 
                        data-start="800" 
                        data-easing="Power3.easeInOut" 
                        data-elementdelay="0.1" 
                        data-endelementdelay="0.1" 
                        data-endspeed="300" 
                        style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><br><br><span class="welcome"><?php _e('Bem-vindos a','souldeipanema'); ?></span><br> 

                            <h1 class="ipanema-home-title">
                            EL MISTI IPANEMA
                            </h1>

                    </div>
                </li>
            </ul>   
        </div>
    </div>  
</article>



<section class="section-light nopadding">
    <div id="withphone" class="container-full absolute">
        <div class="container">
            <div class="section-container">
                <div class="home-form">
                    <!-- Nav tabs -->
                    

                            <div id="cocardaTripAdvisor" class="hidden-xs hidden-sm">
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/sello-Ipanema-2.png" />
                            </div>




                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab_01">
                            <form class="bookform form-inline row" action="http://www.elmistihostels.com/bookings/booking.php" method="post" onsubmit="return checkeaForm('<?php _e('Deve preencher todos os campos do formulário','souldeipanema'); ?>');">
                            <input type="hidden" name="lang" value="<?php echo ICL_LANGUAGE_CODE; ?>">
                            <input type="hidden" name="destino" value="ipa">
                            <div class="row boxesForm">
                                <div class="form-group tituloFormContainer col-md-3 visible-md-block visible-lg-block">
                                    <span class="tituloForm"><?php _e('BOOK NOW','souldeipanema'); ?>!</span>
                                </div>
                                <div class="form-group col-md-2 col-sm-6 col-xs-12">
                                    <div class="input-group">
                                        <input readonly="readonly" type="text" class="form-control" placeholder="<?php _e('Arrival','souldeipanema'); ?>" id="datepicker"  name="llegada" autocomplete="off">
                                        <div class="input-group-addon" id="calendar0"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group col-md-2 col-sm-6 col-xs-12">
                                    <div class="input-group input-group2">
                                        <input readonly="readonly" type="text" class="form-control" placeholder="<?php _e('Departure','souldeipanema'); ?>" id="datepicker1"  name="partida" autocomplete="off">
                                        <div class="input-group-addon" id="calendar1"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-block"><i class="icon-search"></i> <?php _e('SEARCH','souldeipanema'); ?> </button>
                                </div>
                            </div>

                                <div class="col-md-12" id="formSubText">
                                    <p>
                                        <!-- <?php _e('RESERVATION CENTER','souldeipanema'); ?> -->
                                        <img class="visible-xs-inline visible-md-inline visible-lg-inline" src="<?php echo get_template_directory_uri(); ?>/images/wa.svg" />
                                        WHATSAPP
                                        <span class="formSubTextNumbers">
                                           +55 21 9848 55138 - +55 21 9847 92746 / 
                                        </span>
                                       
                                            <?php _e('PHONE','souldeipanema'); ?>
                                      
                                        <span class="formSubTextNumbers">
                                            +55.21. 2547.6419 - 0800 020 2661
                                        </span>
                                    </p>
                                </div>
                            </form>
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div><!-- end homeform -->
            </div><!-- section-container -->
        </div>
    </div><!-- end container -->
</section><!-- end section  SLIDER HOME -->


<!-- HOME CONTENT -->
<!-- SLIDE 1 - WELCOME-->
<section class="section clearfix slide1">
<div class="container">
    <div class="popular-destinations clearfix">
        <div class="hotel-title">
            <?php
                $findme = "EL MISTI IPANEMA"; 
                $pos = strpos(get_the_title(), $findme);
                $preTitle = substr(get_the_title(), 0, $pos); 
                $posTitle = substr(get_the_title(), $pos); 
            ?>
            <h2 id="welcome"><?php echo $preTitle; ?> <span><?php echo $posTitle; ?></span></h2>
        </div>




<iframe width="90%" height="600" src="https://www.youtube.com/embed/g3SEVngrCbU?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen style="margin: 30px auto; display: block;"></iframe>


        <div class="row">
            <div class="col-sm-6 primerColumna">
                <div class="clearfix">
                    <div class="post-media clearfix">
                        <?php echo the_post_thumbnail(); ?>
                    </div><!-- end post-media -->
                    
                    <div class="post-content clearfix homeText">
                       
                            <?php echo the_content();?>
                       
                    </div><!-- end post-content -->
                </div><!-- end post-wrapper -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div class="row">
                   
                     <?php
                        //Loop de los 3 items laterales
                        for ($i = 1; $i <= 3; $i++) {
                            $imageArray = get_field('imagen'.$i);
                    ?>
                           

                        <div class="clearfix listItem">
                            <div class="col-sm-5 redondelitoContainer">
                                <div class="post-media clearfix redondelito">
                                    <a href="#">
                                    <figure>
                                    <img src="<?php echo $imageArray["url"]; ?>" alt="<?php echo $imageArray["alt"]; ?>" title="<?php echo $imageArray["title"]; ?>" />
                                    </figure>
                                    </a>
                                </div><!-- end post-media -->
                            </div>
                            <div class="col-sm-6">
                                <div class="post-title clearfix">
                                    <h5><a href="#">
                                    <?php echo get_field('titulo'.$i); ?> </a>
                                    </h5>
                                </div><!-- end ost-title -->                                                
                                <div class="post-content clearfix">
                                    
                                    <?php echo get_field('texto'.$i); ?> 
                                    
                                </div><!-- end post-content -->
                            </div><!-- end col -->
                        </div><!-- end clearfix -->

                    <?php
                    } // FIN Loop de los 3 items laterales
                    ?>
                    



                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end related-hotels -->
    </div><!-- end container -->
</section><!-- /SLIDE 1 -->

<hr noshade="">

<!-- SLIDE 2 - vCard -->
<section class="nopadding clearfix slide2 container-fluid" style="overflow:hidden">
    <div class="vcard clearfix">
        <div class="hotel-title">
            <h2 id="location"><?php _e('titulo-location','souldeipanema'); ?></h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <div class="adr col-md-12">
                        <strong id="address"> <!-- <?php _e('ADDRESS','souldeipanema'); ?> --> </strong>
                        <span class="street-address">R. Joana Angélica, 47</span>
                        <span class="region">Ipanema. Rio de Janeiro. RJ.</span>
                        <span class="postal-code">22420-030</span>
                        <span class="country-name">Brazil</span>
                    </div>
                    <div class="contacts col-md-12">
                        <span id="wa">WHATSAPP</span> <span class="tel">+55 21 9848 55138 - <br class="visible-xs-inline"> +55 21 9847 92746</span> <br class="visible-xs-inline">
                        <span id="phone"> <?php _e('PHONE','souldeipanema'); ?></span> 
                        <span class="tel">+55 21 2547 2661</span> / <br class="visible-xs-inline">
                        <span class="tel">+55 21 2246 1070</span><br />
                        <span id="email">EMAIL</span> 
                        <a href="mailto:info@elmistihostelipanema.com" class="email">info@elmistihostelipanema.com</a>
                    </div>

                <div id="map"> </div>
                <div id="distances">
                    <ul>
                        <li class="ipanema"><span class="pointName"><?php _e('Praia de Ipanema','souldeipanema'); ?></span> <span class="time">2' <?php _e('a pé','souldeipanema'); ?></span></li>

                        <li class="copacabana"><span class="pointName"><?php _e('Praia de Copacabana','souldeipanema'); ?></span> <span class="time">25' <?php _e('a pé','souldeipanema'); ?></span></span></li>

                        <li class="metro"><span class="pointName"><?php _e('Estacao de Metro','souldeipanema'); ?></span> <span class="time">1' <?php _e('a pé','souldeipanema'); ?></span></li>

                        <li class="paodeacucar"><span class="pointName"><?php _e('Pao de Acucar','souldeipanema'); ?></span> <span class="time">9,5 km</span></li>

                        <li class="redentor"><span class="pointName"><?php _e('Cristo Redentor','souldeipanema'); ?></span> <span class="time">11,6 km</span></li>

                        <li class="lagoa"><span class="pointName"><?php _e('Lagoa Rodrigo de Freitas','souldeipanema'); ?></span> <span class="time">7' <?php _e('a pé','souldeipanema'); ?></span></li>

                        <li class="galeao"><span class="pointName"><?php _e('Aeroporto Galeao','souldeipanema'); ?></span> <span class="time">23 km</span></li>

                        <li class="rodoviaria"><span class="pointName"><?php _e('Rodoviaria Novo Rio','souldeipanema'); ?></span> <span class="time">11,7 km</span></li>
                    </ul>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end vcard -->
</section><!-- /SLIDE 2 - vCard -->



 <!-- Maps -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/maps.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIhW7KWiLb3VtgIBPvhWlb5I0-_-7NUk4&callback=initMap" async defer></script>
    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo get_template_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/revslider.js"></script>



 <!-- SLIDE 3 - GALERIA -->
<section class="nopadding clearfix">
    <div class="owl-fullwidth">
        <?php 
              $post_content = get_post_meta($post->ID, 'galeria-home', true);
              preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
              $array_id = explode(",", $ids[1]);
              //limit slides to N items
              $total_items = 25;
              $counter = 0;
              foreach( $array_id as $attachment_id ){
                $image_attributes = wp_get_attachment_image_src( $attachment_id, "full" );
                if( $image_attributes ) {
                  $src = isset($image_attributes[0])? $image_attributes[0] : '';
                  if(!empty($src)) { 
                        if($counter < 25){?>
                        <div class="owl-item-full">
                            <img src="<?php echo $src ?>" alt="foto-hostel-ipanema">
                        </div>
                  <?php }
                    $counter++;;
                    }
                }
              }
            ?>
    </div><!-- end container -->
</section><!-- end section -->
<!-- /SLIDE 3 - GALERIA -->

<!-- SECTION Services & FAcilities -->
<section class="section clearfix section-bottom sectionServices">
    <div class="container">
        <div class="hotel-title titleServices">
            <h2 id="services"><?php _e('titulo-services','souldeipanema'); ?></h2>
        </div><!-- end hotel-title -->
       


           
                <?php 
                $args = array('numberposts' => -1,'post_type' => 'post', 'category_name' => 'services', 'orderby' => 'post_date', 'order' => 'DESC', 'post_status' => 'publish','suppress_filters' => 0);
                 $catPost = get_posts($args); 
                 $counter = 1;
                 $divsDeInicio =  array(1,4,7);//divs de apertura de columnas
                 $divsDeCierre =  array(3,6,9);//divs de cierre de columnas
                   foreach ($catPost as $post) : setup_postdata($post); 
                    if(in_array($counter, $divsDeInicio)){
                    ?>
                        <div class="col-md-4">
                    <?php
                    }
                    ?>


                       <div class="service-style row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col-md-8 col-xs-8 col-sm-8 serviceDescription">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        </div>
                    </div><!-- end service -->


                    <?php
                    if(in_array($counter, $divsDeCierre)){
                    ?>
                        </div><!-- final COL -->
                    <?php
                    }
                    ?>
                     
                <?php 
                $counter++;
                endforeach; 
                wp_reset_postdata();
                ?>

       


               




    </div><!-- end container -->
</section>
<!-- / SECTION Services & FAcilities -->





<!-- Section REVIEWS -->
<section class="section clearfix reviewsSection">
    <div class="container">
    <div class="hotel-title">
            <h2 id="reviews"><?php _e('titulo-reviews','souldeipanema'); ?></h2>
        </div><!-- end hotel-title -->
        <div class="row">
            <div class="col-sm-12" id="fullwidth">

                <!-- START CONTENT -->
                <div class="row progress-circle">


                    <?php 
                    $args = array('numberposts' => -1,'post_type' => 'post', 'category_name' => 'reviews', 'orderby' => 'post_date', 'order' => 'DESC', 'post_status' => 'publish','suppress_filters' => 0);
                     $catPost = get_posts($args); 
                     $counter = 1;
                       foreach ($catPost as $post) : setup_postdata($post); 
                    ?>                   

                            <!-- Init Review -->
                             <div class="col-md-3 col-sm-6 text-center wow fadeIn">
                                <div class="circle-stat" id="circle<?=$counter?>"><canvas width="170" height="170"></canvas>
                                    <h3><?=get_field('porcentaje-review')?>%</h3>                            
                                </div><!-- end circle-stat -->
                                <div class="stat-details">
                                    <h3><?php the_title(); ?></h3>
                                     <?php the_content(); ?>
                                </div><!-- end stat-details -->
                            </div><!-- end col -->
                           <!-- END REVIEW -->
                            
                                     
                    <?php 
                    $counter++;
                    endforeach; 
                    wp_reset_postdata();
                    ?>
                    




                    <?php 
                    //REVIEW FINAL
                    $args = array('numberposts' => -1,'post_type' => 'post', 'category_name' => 'lastreview', 'orderby' => 'post_date', 'order' => 'DESC', 'post_status' => 'publish','suppress_filters' => 0);
                     $catPost = get_posts($args); 
                     $counter = 1;
                       foreach ($catPost as $post) : setup_postdata($post); 
                    ?>                   


                        <!-- Init LAST Review -->
                         <div class="col-md-12 wow fadeIn lastreview">
                        <hr noshade="" width="100%;margin:0 auto;display: block;
                                                height: 1px;
                                                border: 1px solid #707173;
                                                margin: 1em 0;
                                                padding: 0; 
                                            color: #707173;
                                            background-color: #707173;
                                            border: none;">
                                 <div class="review"><?php the_content(); ?></div>
                                <div class="name"><?php the_title(); ?></div>
                        </div><!-- end col -->
                       <!-- END REVIEW -->
                    
                                     
                    <?php 
                    $counter++;
                    endforeach; 
                    wp_reset_postdata();
                    ?>
                    
                   
                </div><!-- end row -->
                <!-- END CONTENT -->

            </div><!-- end fullwidth -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- / Section Reviews -->



<!-- Parallax HOME -->
<section class="section fullscreen parallax" style="background-image:url('/img/parallaxHome.jpg');margin-bottom:0" data-img-width="1920" data-img-height="1200" data-diff="0">
     <div class="container" style="">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
     </div>
 </section>
 <!-- /Parallax HOME -->









<!-- SECTION STAFF -->
<section class="section clearfix section-bottom sectionStaff">
    <div class="container">
        <div class="hotel-title titleServices">
            <h2 id="services"><?php _e('Our Staff','souldeipanema'); ?></h2>
        </div><!-- end hotel-title -->          
                <?php 
                $args = array('numberposts' => -1,'post_type' => 'post', 'category_name' => 'staff', 'orderby' => 'post_date', 'order' => 'ASC', 'post_status' => 'publish','suppress_filters' => 0);
                 
                 $catPost = get_posts($args); 
                 $counter = 1;
                 $divsDeInicio =  array(1,4,7);//divs de apertura de columnas
                 $divsDeCierre =  array(3,6,9);//divs de cierre de columnas
                   foreach ($catPost as $post) : setup_postdata($post); 
                    if(in_array($counter, $divsDeInicio)){
                    ?>
                        <div class="col-md-4">
                    <?php
                    }
                    ?>


                       <div class="service-style row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col-md-8 col-xs-8 col-sm-8 staffDescription">
                        <h3 class="green"><?php echo get_the_title(); ?>
                        <span class="rol"> / <?=get_field('country')?></span></h3>
                        <p><?php echo get_the_content(); ?></p>
                        </div>
                    </div><!-- end service -->


                    <?php
                    if(in_array($counter, $divsDeCierre)){
                    ?>
                        </div><!-- final COL -->
                    <?php
                    }
                    ?>
                     
                <?php 
                $counter++;
                endforeach; 
                wp_reset_postdata();
                ?>

       


               




    </div><!-- end container -->
</section>
<!-- / SECTION Services & FAcilities -->










<!-- / HOME CONTENT -->

<?php get_footer(); ?>