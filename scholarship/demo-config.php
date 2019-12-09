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
	
	$theme_slug 	= 'scholarship';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/default/';
	$demo_config 	= array(
		'default' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Best Free WordPress Education Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . $theme_slug.'.xml',
			'theme_settings' 	=> $git_url . $theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . $theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'education', 'portfolio' ),
			'home_title'  		=> 'Home',
			'blog_title'  		=> 'Blog',
			'menus_locations'	=> array(
									'scholarship_primary_menu' => 'Primary Menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'  	=> esc_html__( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'  	=> 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php'
					)
				)
			)
		)
	);
	
	return $demo_config;
	
}
