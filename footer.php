<a name="footer"></a>
<footer class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="flogo">
                        <object data="<?php echo get_template_directory_uri(); ?>/images/flogo.svg" type="image/svg+xml" style="pointer-events: none;"></object>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/flogo.svg" alt=""> -->
                    </div><!-- end logo -->
                </div><!-- end col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <div class="widget-title">
                            <h3><!-- ABOUT --></h3>
                        </div><!-- end title -->
                        <div class="textwidget">
                            <?php 
                            wp_nav_menu( array( 'theme_location' => 'footer-menu' ));
                                 ?>
                        </div><!-- end textwidget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="widget">

                    

                        <div class="widget-title">
                            <h3><?php _e('CONTATO','souldeipanema'); ?></h3>
                        </div><!-- end title -->
                        <div class="formrwidget">
                            
                            <?php 
                            switch (ICL_LANGUAGE_CODE) {
                                case "en":
                                    echo do_shortcode( '[contact-form-7 id="727" title="Formulário de contato EN"]' );
                                    break;
                                case "es":
                                    echo do_shortcode( '[contact-form-7 id="728" title="Formulário de contato ES"]' );
                                    break;
                                case "pt":
                                    echo do_shortcode( '[contact-form-7 id="612" title="Formulário de contato PT"]' ); 
                                    break;
                                default:
                                    echo do_shortcode( '[contact-form-7 id="612" title="Formulário de contato PT"]' ); 
                                    break;
                            }
                            ?>
                        </div><!-- end newsletter widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end copyrights -->

    <div class="copyrights clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-left">
                    <p><a href="http://www.elmistihostels.com/" target="_blank">EL MISTI HOSTELS</a> . RIO DE JANEIRO . <br class="visible-xs-inline">All rights reserved . <?php echo date("Y")?></p>
                </div><!-- end col -->
                <div class="col-md-5">
                    <div class="social-footer">
                        <nav>
                            <ul>
                                <li><a href="http://fb.me/MistiHostels" title="Facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/logoFB.svg" alt="Facebook" /></a></li>
                                <li><a href="https://twitter.com/mistihostels" title="Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/logoTWT.svg" alt="Twitter" /></a></li>
                                <li><a href="https://plus.google.com/+Elmistihostels" title="Google Plus"><img src="<?php echo get_template_directory_uri(); ?>/images/logoGPlus.svg" alt="Google Plus" /></a></li>
                                <li><a href="https://www.instagram.com/elmistihostels/" title="Instagram"><img src="<?php echo get_template_directory_uri(); ?>/images/logoIG.svg" alt="Instagram" /></a></li>
                                <li><a href="https://www.youtube.com/user/ElMistiHostels" title="Youtube"><img src="<?php echo get_template_directory_uri(); ?>/images/logoYT.svg" alt="Youtube" /></a></li>
                            </ul>
                        </nav>
                    </div><!-- end social-footer -->
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyrights -->
</div><!-- end wrapper -->

    <!-- Template core JavaScript's
    ================================================== -->
    <!-- jQuery Apear Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.3.3/jquery.appear.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/retina.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/sidebar.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/circle.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/progress.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js?v=20170214"></script>
   
	<!-- WP FOOTER -->
    <?php 
    wp_footer(); 
    ?>
    <!-- /WP FOOTER -->



  
<!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "https://elmistibookings.com/lz/server.php?a=059ba&rqst=track&output=jcrpt&ovlp=MjI_&ovlc=IzU5NWE1Yg__&ovlct=I2ZmZmZmZg__&ovlt=Q0hBVCBPTkxJTkU_&ovlto=Q09OVEFDVA__&ovlapo=MQ__&ovlntwo=MQ__&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);</script><noscript><img src="https://elmistibookings.com/lz/server.php?a=059ba&amp;rqst=track&amp;output=nojcrpt&ovlp=MjI_&ovlc=IzU5NWE1Yg__&ovlct=I2ZmZmZmZg__&ovlt=Q0hBVCBPTkxJTkU_&ovlto=Q09OVEFDVA__&ovlapo=MQ__&ovlntwo=MQ__" width="0" height="0" style="visibility:hidden;" alt=""></noscript><!-- http://www.LiveZilla.net Tracking Code -->


</body>
</html>