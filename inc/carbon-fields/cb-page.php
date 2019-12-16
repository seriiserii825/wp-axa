<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_page_finance_options' );
function crb_attach_page_finance_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_id', '=', 25 )
	         ->add_tab( __( 'Why choose us' ), array(
		         Field::make( 'complex', 'crb_why_choose_us', __( 'Fields' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'icon', __( 'Icon' ) ),

			              Field::make( 'text', 'title_ro', __( 'Title ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'text', 'title_ru', __( 'Title ru' ) )
			                   ->set_width( 50 ),

			              Field::make( 'text', 'text_ro', __( 'Text ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'text', 'text_ru', __( 'Text ru' ) )
			                   ->set_width( 50 ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' )
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_fizic_page_options' );
function crb_attach_fizic_page_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_id', '=', 2 )
	         ->add_tab( __( 'Image' ), array(
		         Field::make( 'image', 'crb_online_image', __( 'Image in header' ) )
		              ->set_help_text( '1600x515' )
		              ->set_value_type( 'url' )
	         ) );
}
