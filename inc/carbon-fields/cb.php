<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
	$basic_options_container = Container::make('theme_options', __('Carbon Fields'))
		->add_tab(__('Socials'), array(
			Field::make('complex', 'crb_socials', __('Fields'))
			     ->add_fields(array(
				     Field::make('text', 'icon', __('Icon'))
				          ->set_width(50),
				     Field::make('text', 'link', __('Link'))
				          ->set_width(50),
			     ))
			     ->set_layout('tabbed-horizontal')
		))
		->add_tab(__('Info'), array(
			Field::make('text', 'crb_phone', __('Telefon'))
				->set_width(50),
			Field::make('text', 'crb_email', __('Email'))
				->set_width(50),

			Field::make('text', 'crb_address_ro', __('address ro'))
				->set_width(50),
			Field::make('text', 'crb_address_ru', __('address ru'))
			     ->set_width(50),
		));
	
	// Add second options page under 'Basic Options'
	Container::make('theme_options', 'Blocks')
		->set_page_parent($basic_options_container)// reference to a top level container
		->add_tab(__('Index intro'), array(
			Field::make('text', 'crb_intro_index_title_ro', __('Block index_intro title ro'))
				->set_width(30),
			Field::make('text', 'crb_intro_index_title_ru', __('Block index_intro title ru'))
				->set_width(30),
			Field::make('text', 'crb_intro_index_title_en', __('Block index_intro title en'))
				->set_width(30),
			
			Field::make('textarea', 'crb_intro_index_text_ro', __('Block index_intro text ro'))
				->set_width(30),
			Field::make('textarea', 'crb_intro_index_text_ru', __('Block index_intro text ru'))
				->set_width(30),
			Field::make('textarea', 'crb_intro_index_text_en', __('Block index_intro text en'))
				->set_width(30),
		));
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(__DIR__ . '/../../vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}
