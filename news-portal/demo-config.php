<?php
/**
 * Demo Importer function with array of theme data
 *
 * @author   Mystery Themes
 * @category Admin
 * @package  Importer/Functions
 * @version  1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup demo importer config.
 *
 * @return array
 */
function mt_demo_importer_config(){
	
	$theme_slug 	= 'news-portal';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'news-portal' => array(
			'name'			=> esc_html__( 'News Portal', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version' => '1.1.19',
			'theme_description' => esc_html__( 'Ultimate responsive magazine WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.png',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'blog', 'magazine' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
				'news_portal_top_menu' => 'top menu',
				'news_portal_primary_menu' => 'primary menu',
			),
			'widgets_data_update'    => array(
				'dropdown_categories' => array(
					'category' => array(
						'news_portal_block_posts'   => array(
							2 => array(
								'block_cat_id' => 'Sports'
							),
							3 => array(
								'block_cat_id' => 'Travel'
							),
							4 => array(
								'block_cat_id' => 'Food'
							),
							5 => array(
								'block_cat_id' => 'Travel'
							),
						)
					)
				),
				'multi_checkbox' => array(
					'category' => array(
						'news_portal_featured_slider' => array(
							2 => array(
								'slider_cat_ids' 	=> array( 'Tech' ),
								'featured_cat_ids'	=> array( 'Fashion', 'Lifestyle', 'Music', 'Travel' )
							),
						),

						'news_portal_featured_posts' => array(
							3 => array(
								'block_cat_ids'	=> array( 'Fashion', 'Tech' )
							),
						),

						'news_portal_carousel' => array(
							2 => array(
								'block_cat_ids'	=> array( 'Food', 'Music' )
							),
						),


					)
				)
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'=> 'Contact Form 7',
					'slug'=> 'contact-form-7/wp-contact-form-7.php',
					'required'=> true
				)
			 )
		)
	);

	return $demo_config;
	
}
