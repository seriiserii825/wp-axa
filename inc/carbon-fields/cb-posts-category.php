<?php

if (!defined('ABSPATH')) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'crb_attach_news_posts_options');
function crb_attach_news_posts_options()
{
	Container::make('post_meta', __('Fields'))
		->where( 'post_term', '=', array(
			'field' => 'slug',
			'value' => 'noutati',
			'taxonomy' => 'category',
		) )
		->add_fields( array(
			Field::make('text', 'crb_news_short_text_ro', __('Short text ro'))
			     ->set_width(50),
			Field::make('text', 'crb_news_short_text_ru', __('Short text ru'))
			     ->set_width(50),
		));

}
