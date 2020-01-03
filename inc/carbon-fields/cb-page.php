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
	         ->or_where( 'post_id', '=', 8 )
	         ->add_tab( __( 'Image' ), array(
		         Field::make( 'image', 'crb_online_image', __( 'Image in header' ) )
		              ->set_help_text( '1600x515' )
		              ->set_value_type( 'url' )
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_rca_page_options' );
function crb_attach_rca_page_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_id', '=', 169 )
	         ->add_tab( __( 'Intro' ), array(
		         Field::make( 'image', 'crb_rca_image', __( 'Image' ) )
		              ->set_help_text( '1600x515' )
		              ->set_value_type( 'url' ),

		         Field::make( 'textarea', 'crb_rca_intro_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_rca_intro_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Accident cu daune nesemnificative' ), array(
		         Field::make( 'text', 'crb_rca_1_title_ro', __( 'Title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_1_title_ru', __( 'Title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_1_text_ro', __( 'Text intro ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_1_text_ru', __( 'Text intro ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'textarea', 'crb_rca_1_text_quote_ro', __( 'Text intro ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_rca_1_text_quote_ru', __( 'Text intro ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_rca_1_title_condition_ro', __( 'Titlu conditii ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_1_title_condition_ru', __( 'Titlu conditii ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'complex', 'crb_rca_1_condition', __( 'Conditii' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'title_ro', __( 'Title ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'text', 'title_ru', __( 'Title ru' ) )
			                   ->set_width( 50 ),

			              Field::make( 'textarea', 'text_ro', __( 'Text ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'textarea', 'text_ru', __( 'Text ru' ) )
			                   ->set_width( 50 ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),

		         Field::make( 'textarea', 'crb_rca_1_warning_ro', __( 'Atentie ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_rca_1_warning_ru', __( 'Atentie ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_1_footer_text_ro', __( 'Textul de jos ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_1_footer_text_ru', __( 'Textul de jos ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'complex', 'crb_rca_1_list', __( 'Lista' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'title_ro', __( 'Title ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'text', 'title_ru', __( 'Title ru' ) )
			                   ->set_width( 50 ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) )
	         ->add_tab( __( 'Accident cu daune mari (peste 10 000 lei) și fără răniți/victime' ), array(
		         Field::make( 'text', 'crb_rca_2_title_ro', __( 'Title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_2_title_ru', __( 'Title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_2_intro_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_2_intro_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_2_obligation_text_ro', __( 'Obligatiuni ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_2_obligation_text_ru', __( 'Obligatiuni ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'complex', 'crb_rca_2_list', __( 'Lista' ) )
		              ->add_fields( array(
			              Field::make( 'textarea', 'title_ro', __( 'Title ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'textarea', 'title_ru', __( 'Title ru' ) )
			                   ->set_width( 50 ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),

		         Field::make( 'rich_text', 'crb_rca_2_footer_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_2_footer_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Accident cu daune mari și cu răniți/victime' ), array(
		         Field::make( 'text', 'crb_rca_3_title_ro', __( 'Title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_3_title_ru', __( 'Title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_3_intro_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_3_intro_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Accident când făptașul nu a fost identificat' ), array(
		         Field::make( 'text', 'crb_rca_4_title_ro', __( 'Title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_4_title_ru', __( 'Title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_4_intro_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_4_intro_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_4_limit_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_4_limit_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),
	         ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_accident_rca_page_options' );
function crb_attach_accident_rca_page_options() {
	Container::make( 'post_meta', __( 'Fields' ) )
	         ->where( 'post_id', '=', 202 )
	         ->add_tab( __( 'Intro' ), array(
		         Field::make( 'image', 'crb_rca_image', __( 'Image' ) )
		              ->set_help_text( '1600x515' )
		              ->set_value_type( 'url' ),

		         Field::make( 'textarea', 'crb_rca_intro_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_rca_intro_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Accident cu daune nesemnificative' ), array(
		         Field::make( 'text', 'crb_rca_1_title_ro', __( 'Title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_1_title_ru', __( 'Title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_1_text_ro', __( 'Text intro ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_1_text_ru', __( 'Text intro ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'textarea', 'crb_rca_1_text_quote_ro', __( 'Text intro ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_rca_1_text_quote_ru', __( 'Text intro ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'text', 'crb_rca_1_title_condition_ro', __( 'Titlu conditii ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_1_title_condition_ru', __( 'Titlu conditii ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'complex', 'crb_rca_1_condition', __( 'Conditii' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'title_ro', __( 'Title ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'text', 'title_ru', __( 'Title ru' ) )
			                   ->set_width( 50 ),

			              Field::make( 'textarea', 'text_ro', __( 'Text ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'textarea', 'text_ru', __( 'Text ru' ) )
			                   ->set_width( 50 ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),

		         Field::make( 'textarea', 'crb_rca_1_warning_ro', __( 'Atentie ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'textarea', 'crb_rca_1_warning_ru', __( 'Atentie ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_1_footer_text_ro', __( 'Textul de jos ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_1_footer_text_ru', __( 'Textul de jos ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'complex', 'crb_rca_1_list', __( 'Lista' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'title_ro', __( 'Title ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'text', 'title_ru', __( 'Title ru' ) )
			                   ->set_width( 50 ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),
	         ) )
	         ->add_tab( __( 'Accident cu daune mari (peste 10 000 lei) și fără răniți/victime' ), array(
		         Field::make( 'text', 'crb_rca_2_title_ro', __( 'Title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_2_title_ru', __( 'Title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_2_intro_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_2_intro_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_2_obligation_text_ro', __( 'Obligatiuni ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_2_obligation_text_ru', __( 'Obligatiuni ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'complex', 'crb_rca_2_list', __( 'Lista' ) )
		              ->add_fields( array(
			              Field::make( 'textarea', 'title_ro', __( 'Title ro' ) )
			                   ->set_width( 50 ),
			              Field::make( 'textarea', 'title_ru', __( 'Title ru' ) )
			                   ->set_width( 50 ),
		              ) )
		              ->set_layout( 'tabbed-horizontal' ),

		         Field::make( 'rich_text', 'crb_rca_2_footer_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_2_footer_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Accident cu daune mari și cu răniți/victime' ), array(
		         Field::make( 'text', 'crb_rca_3_title_ro', __( 'Title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_3_title_ru', __( 'Title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_3_intro_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_3_intro_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),
	         ) )
	         ->add_tab( __( 'Accident când făptașul nu a fost identificat' ), array(
		         Field::make( 'text', 'crb_rca_4_title_ro', __( 'Title ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'text', 'crb_rca_4_title_ru', __( 'Title ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_4_intro_text_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_4_intro_text_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),

		         Field::make( 'rich_text', 'crb_rca_4_limit_ro', __( 'Text ro' ) )
		              ->set_width( 50 ),
		         Field::make( 'rich_text', 'crb_rca_4_limit_ru', __( 'Text ru' ) )
		              ->set_width( 50 ),
	         ) );
}
