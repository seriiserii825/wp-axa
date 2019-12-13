<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_attach_online_post_type_options' );
function crb_attach_online_post_type_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'online' )
	         ->add_tab( __( 'Link to page' ), array(
		         Field::make( 'text', 'crb_online_link_to_page', __( 'Page id' ) )
		              ->set_help_text( 'Page id' ),
	         ) )
	         ->add_tab( __( 'Image' ), array(
		         Field::make( 'text', 'crb_online_icon', __( 'Icon' ) )
		              ->set_help_text( 'Icon name fa-.....' ),

		         Field::make( 'image', 'crb_online_image', __( 'Image in header' ) )
		              ->set_help_text( '1600x515' )
		              ->set_value_type( 'url' )
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_fizic_post_type_options' );
function crb_attach_fizic_post_type_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_type', '=', 'fizic' )
	         ->add_tab( __( 'Image' ), array(
		         Field::make( 'image', 'crb_online_image', __( 'Image in header' ) )
		              ->set_help_text( '1600x515' )
		              ->set_value_type( 'url' )
	         ) );
}
