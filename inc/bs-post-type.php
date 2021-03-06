<?php

	if (!defined('ABSPATH')) exit;

	add_action('init', 'my_custom_init');
	function my_custom_init()
	{
		register_post_type('slider', array(
			'labels' => array(
				'name' => __('Slider'), // Основное название типа записи
				'singular_name' => __('Slider'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Slider')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => get_template_directory_uri().'/assets/images/gallery.png',
			'supports' => array('title', 'editor', 'thumbnail')
		));

		register_post_type('online', array(
			'labels' => array(
				'name' => __('Online'), // Основное название типа записи
				'singular_name' => __('Online'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Online')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => get_template_directory_uri().'/assets/images/payment-copy.png',
			'supports' => array('title', 'editor', 'thumbnail')
		));

		register_post_type('fizic', array(
			'labels' => array(
				'name' => __('Persoane fizice'), // Основное название типа записи
				'singular_name' => __('Persoane fizice'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Persoane fizice')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => get_template_directory_uri().'/assets/images/boy.png',
			'supports' => array('title', 'editor', 'thumbnail')
		));
		register_post_type('juridic', array(
			'labels' => array(
				'name' => __(''), // Основное название типа записи
				'singular_name' => __('Persoane juridice'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Persoane juridice')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => get_template_directory_uri().'/assets/images/juridic.png',
			'supports' => array('title', 'editor', 'thumbnail')
		));
		register_post_type('reviews', array(
			'labels' => array(
				'name' => __(''), // Основное название типа записи
				'singular_name' => __('Commentarii'), // отдельное название записи типа Book
				'add_new' => __('Add new'),
				'add_new_item' => __('Add new'),
				'edit_item' => __('Edit new'),
				'new_item' => __('New item'),
				'view_item' => __('View'),
				'search_items' => __('Search'),
				'parent_item_colon' => '',
				'menu_name' => __('Commentarii')

			),
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'menu_icon' => get_template_directory_uri().'/assets/images/chat.png',
			'supports' => array('title', 'editor', 'thumbnail')
		));

	}
