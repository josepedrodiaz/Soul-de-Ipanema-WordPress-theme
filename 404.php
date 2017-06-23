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
                                            +55.21. 2246.1070 - 0800 020 2661
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


<hr noshade="">

<!-- 404 CONTENT -->
<!-- SLIDE 1 - WELCOME-->
<section class="section clearfix slide1">
<div class="container">
    <h1>OOOPS!</h1>
    <p>Content not found. <a href="/">Home page.</a></p>
    </div><!-- end container -->
</section><!-- /SLIDE 1 -->
<!-- / 404 CONTENT -->



<hr noshade="">



    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo get_template_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
    <script src="<?php echo get_template_directory_uri(); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/revslider.js"></script>




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


<br />






<?php get_footer(); ?>