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
	
	$theme_slug 	= 'news-portal-pro';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'default' => array(
			'demo_name'			=> esc_html__( 'Default Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Ultimate responsive magazine Premium WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> true,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
									'news_portal_top_menu' 		=> 'top menu',
									'news_portal_primary_menu' 	=> 'primary menu',
									'news_portal_footer_menu'  	=> 'footer menu'
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'   => 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					),
					array(
						'plugin_name' 	=> __( 'WooCommerce', 'mystery-demo-importer' ),
						'plugin_slug'  	=> 'woocommerce',
						'install_setup' => 'woocommerce/woocommerce.php',
					)
				),
			)
		),
		'fashion' => array(
			'demo_name'			=> esc_html__( 'Fashion Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Ultimate responsive magazine Premium WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'fashion/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'fashion/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'fashion/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'fashion/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'-fashion/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
									'news_portal_primary_menu' 	=> 'primary menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'	=> 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		),
		'sports' => array(
			'demo_name'			=> esc_html__( 'Sport Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Ultimate responsive magazine Premium WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'sports/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'sports/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'sports/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'sports/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'-sports/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
									'news_portal_primary_menu' 	=> 'primary',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'	=> 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		),
		'blog' => array(
			'demo_name'			=> esc_html__( 'Blog Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Ultimate responsive magazine Premium WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'blog/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'blog/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'blog/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'blog/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'-blog/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'=> array(
									'news_portal_primary_menu' 	=> 'primary menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'	=> 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		),
		'food' => array(
			'demo_name'			=> esc_html__( 'Food Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Ultimate responsive magazine Premium WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'food/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'food/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'food/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'food/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'-food/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
									'news_portal_primary_menu' 	=> 'primary menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'	=> 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		),
		'tech' => array(
			'demo_name'			=> esc_html__( 'Tech Demo', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'theme_description' => esc_html__( 'Ultimate responsive magazine Premium WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'tech/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'tech/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'tech/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'tech/screenshot.jpg',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'-tech/',
			'is_shop'			=> false,
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
									'news_portal_primary_menu' 	=> 'primary menu',
								),
			'required_plugins'  => array(
				'free' => array(
					array(
						'plugin_name'   => __( 'Contact Form 7', 'mystery-demo-importer' ),
						'plugin_slug'   => 'contact-form-7',
						'install_setup' => 'contact-form-7/wp-contact-form-7.php',
					)
				),
			)
		)
	);

	return $demo_config;
	
}
