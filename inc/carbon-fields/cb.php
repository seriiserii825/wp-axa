<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	$basic_options_container = Container::make( 'theme_options', __( 'Carbon Fields' ) )
	                                    ->add_tab( __( 'Socials' ), array(
		                                    Field::make( 'complex', 'crb_socials', __( 'Fields' ) )
		                                         ->add_fields( array(
			                                         Field::make( 'text', 'icon', __( 'Icon' ) )
			                                              ->set_width( 50 ),
			                                         Field::make( 'text', 'link', __( 'Link' ) )
			                                              ->set_width( 50 ),
		                                         ) )
		                                         ->set_layout( 'tabbed-horizontal' )
	                                    ) )
	                                    ->add_tab( __( 'Info' ), array(
		                                    Field::make( 'image', 'crb_logo', __( 'Logo' ) )
		                                         ->set_value_type( 'url' )
		                                         ->set_width( 50 ),

		                                    Field::make( 'image', 'crb_logo_white', __( 'Logo white' ) )
		                                         ->set_value_type( 'url' )
		                                         ->set_width( 50 ),

		                                    Field::make( 'text', 'crb_phone', __( 'Telefon' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_email', __( 'Email' ) )
		                                         ->set_width( 50 ),

		                                    Field::make( 'text', 'crb_address_ro', __( 'address ro' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_address_ru', __( 'address ru' ) )
		                                         ->set_width( 50 ),

		                                    Field::make( 'text', 'crb_description_ro', __( 'description ro' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_description_ru', __( 'description ru' ) )
		                                         ->set_width( 50 ),

		                                    Field::make( 'text', 'crb_copyright_ro', __( 'copyright ro' ) )
		                                         ->set_width( 50 ),
		                                    Field::make( 'text', 'crb_copyright_ru', __( 'copyright ru' ) )
		                                         ->set_width( 50 ),
	                                    ) );

//	 Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Blocks' )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Numbers' ), array(
			Field::make( 'text', 'crb_numbers_title_ro', __( 'Tile ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_numbers_title_ru', __( 'Tile ru' ) )
			     ->set_width( 50 ),

			Field::make( 'text', 'crb_numbers_text_ro', __( 'Text ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_numbers_text_ru', __( 'Text ru' ) )
			     ->set_width( 50 ),

			Field::make( 'text', 'crb_numbers_one', __( 'Number' ) ),
			Field::make( 'text', 'crb_numbers_one_ro', __( 'one ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_numbers_one_ru', __( 'one ru' ) )
			     ->set_width( 50 ),

			Field::make( 'text', 'crb_numbers_two', __( 'Number' ) ),
			Field::make( 'text', 'crb_numbers_two_ro', __( 'two ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_numbers_two_ru', __( 'two ru' ) )
			     ->set_width( 50 ),

			Field::make( 'text', 'crb_numbers_three', __( 'Number' ) ),
			Field::make( 'text', 'crb_numbers_three_ro', __( 'three ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_numbers_three_ru', __( 'three ru' ) )
			     ->set_width( 50 ),

			Field::make( 'text', 'crb_numbers_four', __( 'Number' ) ),
			Field::make( 'text', 'crb_numbers_four_ro', __( 'four ro' ) )
			     ->set_width( 50 ),
			Field::make( 'text', 'crb_numbers_four_ru', __( 'four ru' ) )
			     ->set_width( 50 ),
		) )
	         ->add_tab( __( 'Partners' ), array(
		         Field::make( 'complex', 'crb_parners', __( 'Fields' ) )
		              ->add_fields( array(
			              Field::make( 'image', 'image', __( 'Image' ) )
			                   ->set_value_type( 'url' )
			                   ->set_width( 50 ),
			              Field::make( 'text', 'link', __( 'Link' ) )
			                   ->set_width( 50 ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' )
	         ) );
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( __DIR__ . '/../../vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
