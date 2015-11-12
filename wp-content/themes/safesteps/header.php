<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage safe_steps
 * @since Safe Steps 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->   
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css"> 
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.0.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- HEADER -->

        <header id="home" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1"> 
                        <div class="col-md-3 logo">
                            <img src="<?php bloginfo('template_directory'); ?>/img/logo_safesteps.png">
                        </div>
                        <div class="col-md-5 text-left emergency"> 
                                <h1><b><span class="font-3x">24/7 Family Violence Response</span><br /><span class="font-2x">1800 015 188</span></b> (Toll Free)</h1> 
                        </div>
                        <div class="col-md-3 text-left call">
                            <h2><span class="font-2x">If you are in danger</span><br /><span class="font-3x">CALL 000</span></h2>
                        </div> 
                        <div class="quick">
                            <img src="<?php bloginfo('template_directory'); ?>/img/quickscope.jpg">
                        </div> 
                    </div>
                </div> 
            </div>
        </header>

