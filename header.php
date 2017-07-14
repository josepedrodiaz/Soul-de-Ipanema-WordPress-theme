<!doctype html>

<html lang="<?php echo ICL_LANGUAGE_CODE; ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://haughtiest-repair.000webhostapp.com/custom.css" rel="stylesheet">
    <meta name="description" content="El Misti Hostel Ipanema">
    <meta name="author" content="Pedro Diaz">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Favicons -->
    <?php
            if($_GET["ico"] == 2){
                $iconPath = "favicon2.png";
            }else{
                $iconPath = "favicon.png";
            }
    ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/<?=$iconPath?>">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon.png" />
    <!-- FONT -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/cera-web-ipa.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Default Styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="<?php echo get_template_directory_uri(); ?>/rs-plugin/css/settings.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- WP head -->
    <?php wp_head(); ?>
    <!-- /WP head -->


    <!-- JQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>


    

</head>
<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W2CJBV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W2CJBV');</script>
<!-- End Google Tag Manager -->

<!-- PRELOADER
<div id="loader">
    <div class="loader-container">
        <h3 class="loader-back-text"><img src="<?php echo get_template_directory_uri(); ?>/images/loader.gif" alt="" class="loader"></h3>
    </div>
</div>
 -->


<?php
    //include Blog marecia Button
    include("inc/mareciaButton.php");
    //include Best Price Banner
    include("inc/bestPrice.php");
?>


<div id="wrapper">

    <div id="langSelector">

        <?php
            langSelector();
        ?>
    </div>
    <header class="header fixedheader nomargin">
        <div class="menu-container">
            <div class="container">
                <div class="menu-wrapper">
                    <nav id="navigation" class="navbar" role="navigation">
                        <div class="navbar-inner">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="icon-menu27"></i>
                                </button>
                                <a id="brand" class="clearfix navbar-brand" href="/">
                                <!-- 
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-el-misti-hostel-ipanema.svg" alt="Trips"> -->
                                <object data="<?php echo get_template_directory_uri(); ?>/images/logo-el-misti-hostel-ipanema.svg" type="image/svg+xml" style="pointer-events: none;"></object>
                                </a>
                            </div><!-- end navbar-header -->
                            <div id="navbar-collapse" class="navbar-right navbar-collapse collapse clearfix">
                            <?php 
                            wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav yamm">%3$s</ul>' ));
                                 ?>




                                          

                                    </div><!-- /#idiomas -->




                            </div><!-- end navbar-callopse -->
                        </div><!-- end navbar-inner -->













<div id="traductorHeader">
                                                        <div id="google_translate_element"> </div>


                                                            <script type="text/javascript">
                                                            function googleTranslateElementInit() {
                                                              new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.SIMPLE,  autoDisplay: false, multilanguagePage: true}, 'google_translate_element');
                                                            }
                                                            </script>

                                                            <script>
                                                                if ($(window).width() >= 630) {
                                                                    
                                                                    document.write("<script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"><\/script>");
                                                                }
                                                            </script>






                                                            <div id="google_translate_elementTWO"></div>

                                                            <script type="text/javascript">
                                                            function googleTranslateElementInitTWO() {
                                                              new google.translate.TranslateElement({pageLanguage: 'pt', layout: google.translate.TranslateElement.InlineLayout.LIST,  autoDisplay: false, multilanguagePage: true}, 'google_translate_elementTWO');
                                                            }
                                                            </script>

                                                            <script>
                                                            if ($(window).width() < 630) {
                                                               
                                                                    document.write("<script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInitTWO\"><\/script>");
                                                                }
                                                            </script>


                                                    </div>









                    </nav><!-- end navigation -->
                </div><!-- menu wrapper -->
            </div><!-- end container -->
        </div><!-- end menu-container -->
    </header><!-- end header -->