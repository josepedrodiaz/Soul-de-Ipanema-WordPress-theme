<?php
/*
Template Name: Contato
*/
?>
<?php get_header(); ?>



<div id="wrapper">
    

     <section id="page-header" class="section background page-header-interior" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title"><?php _e('Contato','souldeipanema'); ?></h1>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix contato">


    <!-- Maps -->
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
    <script src="<?php echo get_template_directory_uri(); ?>/js/maps.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIhW7KWiLb3VtgIBPvhWlb5I0-_-7NUk4&callback=initMap" async defer></script>

        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">
                    <!-- START CONTENT -->
                    <div class="row">
                        <div id="content" class="col-md-5 content-main">
                          <div class="widget clearfix">
                                <div class="home-form" id="form-lateral">  
                                    <div class="tab-content"> 
                                        <div role="tabpanel" class="tab-pane active infoLocalizacao" id="tab_01">
                                            <div class="contenedorBoxes">



                                                <div class="form-group tituloFormContainer col-md-12 visible-md-block visible-lg-block"> 
                                                    <span class="tituloForm">
                                                    <?php _e('INFO','souldeipanema'); ?>
                                                    </span> 
                                                </div>

                                                <div class="col-md-12">
                                                    
                                                    <div class="row">
                                                        <div class="col-xs-2 col-md-2">
                                                            <img id="EnderecoLocimg" src="/img/endereco.svg" /> 
                                                        </div>
                                                        <div class="col-xs-10 col-md-10 EnderecoLoc">
                                                            R. Joana Angélica, 47 Ipanema. <br />
                                                            Rio de Janeiro. RJ.  <br />
                                                            22420-030 Brasil <br />
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-xs-2 col-md-2">
                                                            <img id="WALocimg" src="/img/wa.svg" /> 
                                                        </div>
                                                        <div class="col-xs-10 col-md-10 WALoc">
                                                            +55 21 9848 55138
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-xs-2 col-md-2">
                                                            <img id="TelLocimg" src="/img/tel.svg" /> 
                                                        </div>
                                                        <div class="col-xs-10 col-md-10 TelLoc">
                                                            +55 22 547 2661 <br />
                                                            +55 21 2547 6419 <br />
                                                            +55 21 2246-1070 <br />
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="row">
                                                        <div class="col-xs-2 col-md-2">
                                                           <img id="MailLocimg" src="/img/mail.svg" />
                                                        </div>
                                                        <div class="col-xs-10 col-md-10 MailLoc">
                                                            info@elmistihostelipanema.com
                                                        </div> 
                                                    </div>

                                            </div>
                                        </div>     
                                        </div> 
                                    </div>
                                </div>
                            </div><!-- end widget -->
                        </div><!-- end col -->
                        <div id="content" class="col-md-7 content-main">
                         
                            <div class="widget">
                        <div class="widget-title">
                            <h3><?php _e('CONTATO','souldeipanema'); ?></h3>
                        </div><!-- end title -->
                        <div class="formrwidget">
                            
                            <?php 
                            switch (ICL_LANGUAGE_CODE) {
                                case "en":
                                    echo do_shortcode( '[contact-form-7 id="747" title="Formulário de contato PT_Sección CONTATO"]' );
                                    break;
                                case "es":
                                    echo do_shortcode( '[contact-form-7 id="747" title="Formulário de contato PT_Sección CONTATO"]' );
                                    break;
                                case "pt":
                                    echo do_shortcode( '[contact-form-7 id="747" title="Formulário de contato PT_Sección CONTATO"]' ); 
                                    break;
                                default:
                                    echo do_shortcode( '[contact-form-7 id="747" title="Formulário de contato PT_Sección CONTATO"]' ); 
                                    break;
                            }
                            ?>
                        </div><!-- end newsletter widget -->
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