<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function bs_axa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Language sidebar', 'bs-axa' ),
		'id'            => 'language',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Search', 'bs-axa' ),
		'id'            => 'search',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Exchange', 'bs-axa' ),
		'id'            => 'exchange',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'bs_axa_widgets_init' );

