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

    $theme_slug 	= 'easy-store';
    $pro_theme_slug = 'easy-store-pro';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'easy-store' => array(
			'name'				=> esc_html__( 'Easy Store', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version'        	=> '1.0.16',
			'theme_description' => esc_html__( 'Easy Ecommerce WordPress Theme', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'easy-store/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'easy-store/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'easy-store/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'easy-store/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> true,
			'theme_type'        => array( 'free', 'woocommerce', 'ecommerce' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> 'Blog',
			'customizer_data_update' => array(
				'nav_menu_locations' => array(
					'easy_store_primary_menu' 	=> 'Primary Menu',
			   		'easy_store_footer_menu' 	=> 'Footer Menu',
				),
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'		=> 'Contact Form 7',
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				),
				'woocommerce' => array(
					'name'		=> 'WooCommerce',
					'slug'		=> 'woocommerce/woocommerce.php',
					'required'	=> true
				),
				'yith-woocommerce-wishlist' => array(
					'name'		=> 'YITH WooCommerce Wishlist',
					'slug'		=> 'yith-woocommerce-wishlist/init.php',
					'required'	=> true
				)
			)
		),

		'easy-store-pro' => array(
			'name'				=> esc_html__( 'Easy Store Pro', 'mystery-demo-importer' ),
			'theme_slug'        => $pro_theme_slug,
			'version'        	=> '1.0.9',
			'theme_description' => esc_html__( 'Premium Creative Ecommerce WordPress Theme', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'easy-store-pro/'.$pro_theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'easy-store-pro/'.$pro_theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'easy-store-pro/'.$pro_theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'easy-store-pro/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$pro_theme_slug.'/',
			'is_shop'			=> true,
			'theme_type'        => array( 'premium', 'woocommerce', 'ecommerce' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'customizer_data_update' => array(
				'nav_menu_locations' => array(
					'easy_store_primary_menu' 	=> 'front menu',
			   		'easy_store_footer_menu' 	=> 'Footer Menu',
				),
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'		=> 'Contact Form 7',
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				),
				'woocommerce' => array(
					'name'		=> 'WooCommerce',
					'slug'		=> 'woocommerce/woocommerce.php',
					'required'	=> true
				),
				'yith-woocommerce-wishlist' => array(
					'name'		=> 'YITH WooCommerce Wishlist',
					'slug'		=> 'yith-woocommerce-wishlist/init.php',
					'required'	=> true
				),
				'yith-woocommerce-quick-view' => array(
					'name'		=> 'YITH WooCommerce Quick View',
					'slug'		=> 'yith-woocommerce-quick-view/init.php',
					'required'	=> true
				)
			)
		),

		'easy-store-pro-fashion' => array(
			'name'				=> esc_html__( 'Easy Store Pro Fashion', 'mystery-demo-importer' ),
			'theme_slug'        => $pro_theme_slug.'-fashion',
			'version'        	=> '1.0.9',
			'theme_description' => esc_html__( 'Premium Creative Ecommerce WordPress Theme', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'easy-store-pro-fashion/'.$pro_theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'easy-store-pro-fashion/'.$pro_theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'easy-store-pro-fashion/'.$pro_theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'easy-store-pro-fashion/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$pro_theme_slug.'-fashion/',
			'is_shop'			=> true,
			'theme_type'        => array( 'premium', 'woocommerce', 'ecommerce' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'customizer_data_update' => array(
				'nav_menu_locations' => array(
					'easy_store_primary_menu' 	=> 'front menu',
			   		'easy_store_footer_menu' 	=> 'Footer Menu',
				),
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'		=> 'Contact Form 7',
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				),
				'woocommerce' => array(
					'name'		=> 'WooCommerce',
					'slug'		=> 'woocommerce/woocommerce.php',
					'required'	=> true
				),
				'yith-woocommerce-wishlist' => array(
					'name'		=> 'YITH WooCommerce Wishlist',
					'slug'		=> 'yith-woocommerce-wishlist/init.php',
					'required'	=> true
				),
				'yith-woocommerce-quick-view' => array(
					'name'		=> 'YITH WooCommerce Quick View',
					'slug'		=> 'yith-woocommerce-quick-view/init.php',
					'required'	=> true
				)
			)
		)
	);

	return $demo_config;
}
