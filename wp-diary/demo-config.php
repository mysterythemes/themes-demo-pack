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

	$theme_slug 	= 'wp-diary';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'wp-diary' => array(
			'name'				=> esc_html__( 'WP Diary', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version'			=> '1.0.6',
			'theme_description' => esc_html__( 'A pure blogger free WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'blog', 'portfolio' ),
			'show_on_front'     => 'page',
			'home_title'  		=> '',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
				'primary_menu' 	=> 'front menu',
				'footer_menu'	=> 'front menu'
			),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'		=> esc_html__( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'  		=> 'contact-form-7',
						'install_setup'  	=> 'contact-form-7/wp-contact-form-7.php'
					)
				)
			)
		)
	);
	
	return $demo_config;
	
}
