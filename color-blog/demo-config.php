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

	$theme_slug 		= 'color-blog';
	$pro_theme_slug 	= 'color-blog-pro';
	$git_url 			= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 		= array(
		'color-blog' => array(
			'name'				=> esc_html__( 'Color Blog', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version'			=> '1.0.4',
			'theme_description' => esc_html__( 'A clean and colorful WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url .'color-blog/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url .'color-blog/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url .'color-blog/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url .'color-blog/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'blog', 'magazine' ),
			'show_on_front'     => '',
			'home_title'  		=> '',
			'blog_title'  		=> '',
			'customizer_data_update'	=> array(
				'top_header_menu' 	=> 'top menu',
				'primary_menu'		=> 'main-menu',
				'footer_menu'		=> 'footer-menu'
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'		=> __( 'Contact Form 7', 'mystery-demo-importer' ),
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				)
			)
		),

		'color-blog-pro' => array(
			'name'				=> esc_html__( 'Color Blog Pro', 'mystery-demo-importer' ),
			'theme_slug'        => $pro_theme_slug,
			'version'			=> '1.0.4',
			'theme_description' => esc_html__( 'A clean and colorful WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url .'color-blog-pro/'.$pro_theme_slug.'.xml',
			'theme_settings' 	=> $git_url .'color-blog-pro/'.$pro_theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url .'color-blog-pro/'.$pro_theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url .'color-blog-pro/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$pro_theme_slug.'/',
			'is_shop'			=> true,
			'theme_type'        => array( 'premium', 'blog', 'magazine' ),
			'show_on_front'     => '',
			'home_title'  		=> '',
			'blog_title'  		=> '',
			'customizer_data_update'	=> array(
				'top_header_menu' 	=> 'Top Menu',
				'primary_menu'		=> 'Main Menu',
				'footer_menu'		=> 'Footer menu'
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'		=> __( 'Contact Form 7', 'mystery-demo-importer' ),
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				),
				'woocommerce' => array(
					'name'		=> 'WooCommerce',
					'slug'		=> 'woocommerce/woocommerce.php',
					'required'	=> true
				),
			)
		),

		'color-blog-pro-kids' => array(
			'name'				=> esc_html__( 'Color Blog Pro Kids', 'mystery-demo-importer' ),
			'theme_slug'        => $pro_theme_slug.'-kids',
			'version'			=> '1.0.4',
			'theme_description' => esc_html__( 'A clean and colorful WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url .'color-blog-pro-kids/'.$pro_theme_slug.'.xml',
			'theme_settings' 	=> $git_url .'color-blog-pro-kids/'.$pro_theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url .'color-blog-pro-kids/'.$pro_theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url .'color-blog-pro-kids/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$pro_theme_slug.'-kids/',
			'is_shop'			=> false,
			'theme_type'        => array( 'premium', 'blog', 'magazine' ),
			'show_on_front'     => '',
			'home_title'  		=> '',
			'blog_title'  		=> '',
			'customizer_data_update'	=> array(
				'top_header_menu' 	=> 'Top',
				'primary_menu'		=> 'Main Menu'
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'		=> __( 'Contact Form 7', 'mystery-demo-importer' ),
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				)
			)
		),

		'color-blog-pro-mag' => array(
			'name'				=> esc_html__( 'Color Blog Pro Mag', 'mystery-demo-importer' ),
			'theme_slug'        => $pro_theme_slug.'-mag',
			'version'			=> '1.0.4',
			'theme_description' => esc_html__( 'A clean and colorful WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url .'color-blog-pro-mag/'.$pro_theme_slug.'.xml',
			'theme_settings' 	=> $git_url .'color-blog-pro-mag/'.$pro_theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url .'color-blog-pro-mag/'.$pro_theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url .'color-blog-pro-mag/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$pro_theme_slug.'-mag/',
			'is_shop'			=> false,
			'theme_type'        => array( 'premium', 'blog', 'magazine' ),
			'show_on_front'     => '',
			'home_title'  		=> '',
			'blog_title'  		=> '',
			'customizer_data_update'	=> array(
				'top_header_menu' 	=> 'Top Menu',
				'primary_menu'		=> 'Main Menu'
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
