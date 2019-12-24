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
		'default' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Ultimate responsive magazine WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.png',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'blog', 'magazine' ),
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
								'block_cat_id' => 'sports'
							),
							3 => array(
								'block_cat_id' => 'travel'
							),
							4 => array(
								'block_cat_id' => 'food'
							),
							5 => array(
								'block_cat_id' => 'travel'
							),
						)
					)
				),
				'multi_checkbox' => array(
					'category' => array(
						'news_portal_featured_slider' => array(
							2 => array(
								'slider_cat_ids' 	=> array( 'tech' ),
								'featured_cat_ids'	=> array( 'fashion', 'lifestyle', 'music', 'travel' )
							),
						),

						'news_portal_featured_posts' => array(
							3 => array(
								'block_cat_ids'	=> array( 'fashion', 'tech' )
							),
						),
					)
				)
			),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'  	=> esc_html__( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'  	=> 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php'
					)
				)
			),

		)
	);

	return $demo_config;
	
}
