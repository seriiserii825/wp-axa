<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function bs_axa_scripts() {
	wp_enqueue_style( 'bs-axa-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-axa-bootstrap-css', get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'bs-axa-font-awesome.min-css', get_stylesheet_directory_uri().'/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bs-axa-icon-font-css', get_stylesheet_directory_uri().'/assets/css/icon-font.css' );
	wp_enqueue_style( 'bs-axa-animate-css', get_stylesheet_directory_uri().'/assets/css/animate.css' );
	wp_enqueue_style( 'bs-axa-contactme/select2.min-css', get_stylesheet_directory_uri().'/assets/css/contactme/select2.min.css' );
	wp_enqueue_style( 'bs-axa-contactme/bootstrap-datepicker.standalone.min-css', get_stylesheet_directory_uri().'/assets/css/contactme/bootstrap-datepicker.standalone.min.css' );
	wp_enqueue_style( 'bs-axa-contactme/jquery.timepicker-css', get_stylesheet_directory_uri().'/assets/css/contactme/jquery.timepicker.css' );
	wp_enqueue_style( 'bs-axa-contactme/contactme-1.3-css', get_stylesheet_directory_uri().'/assets/css/contactme/contactme-1.3.css' );
	wp_enqueue_style( 'bs-axa-owl.carousel.min-css', get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'bs-axa-owl.theme.default.min-css', get_stylesheet_directory_uri().'/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'bs-axa-colorbox-css', get_stylesheet_directory_uri().'/assets/css/colorbox.css' );
	wp_enqueue_style( 'bs-axa-slick-css', get_stylesheet_directory_uri().'/assets/libs/slick.css' );
	wp_enqueue_style( 'bs-axa-fontawesome-5-css', get_stylesheet_directory_uri().'/assets/libs/fontawesome/css/all.min.css' );
	wp_enqueue_style( 'bs-axa-style-css', get_stylesheet_directory_uri().'/assets/css/my.css' );
	wp_enqueue_style( 'bs-axa-responsive-css', get_stylesheet_directory_uri().'/assets/css/responsive.css' );

	wp_enqueue_script( 'bs-axa-bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-jquery.counterup.min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-waypoints.min', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-smoothscroll', get_template_directory_uri() . '/assets/js/smoothscroll.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-contactme/bootstrap-datepicker.min', get_template_directory_uri() . '/assets/js/contactme/bootstrap-datepicker.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-contactme/bootstrap-datepicker-lang/en', get_template_directory_uri() . '/assets/js/contactme/bootstrap-datepicker-lang/en.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-contactme/jquery.timepicker.min', get_template_directory_uri() . '/assets/js/contactme/jquery.timepicker.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-slick.min', get_template_directory_uri() . '/assets/libs/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-axa-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true );


	wp_enqueue_script( 'bs-axa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bs_axa_scripts' );
