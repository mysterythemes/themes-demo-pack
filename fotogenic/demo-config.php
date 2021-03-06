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

    $theme_slug 	= 'fotogenic';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'fotogenic' => array(
			'name'			=> esc_html__( 'Fotogenic', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version'			=> '1.0.7',
			'theme_description' => esc_html__( 'A clean and powerful photography WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'photography', 'portfolio' ),
			'show_on_front'     => '',
			'home_title'  		=> '',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
			   'menu-1' => 'main menu',
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'		=> __( 'Contact Form 7', 'mystery-demo-importer' ),
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				)
			)
		)
	);

	return $demo_config;
}
