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
	$pro_theme_slug = 'news-portal-pro';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'news-portal' => array(
			'name'				=> esc_html__( 'News Portal', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version' 			=> '1.1.19',
			'theme_description' => esc_html__( 'Ultimate responsive magazine WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'news-portal/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'news-portal/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'news-portal/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'news-portal/screenshot.png',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'blog', 'magazine' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
				'news_portal_top_menu' 		=> 'top menu',
				'news_portal_primary_menu' 	=> 'primary menu',
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
					'name'		=> 'Contact Form 7',
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				)
			 )
		),

		'news-portal-pro' => array(
			'name'				=> esc_html__( 'News Portal Pro', 'mystery-demo-importer' ),
			'theme_slug'        => $pro_theme_slug,
			'version' 			=> '1.1.5',
			'theme_description' => esc_html__( 'Ultimate responsive premium magazine WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'news-portal-pro/'.$pro_theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'news-portal-pro/'.$pro_theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'news-portal-pro/'.$pro_theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'news-portal-pro/screenshot.png',
			'preview_url'		=> 'http://demo.mysterythemes.com/'.$pro_theme_slug.'/',
			'is_shop'			=> true,
			'theme_type'        => array( 'premium', 'blog', 'magazine' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
				'news_portal_top_menu' 		=> 'top menu',
				'news_portal_primary_menu' 	=> 'primary menu',
				'news_portal_footer_menu'	=> 'footer menu'
			),
			'widgets_data_update'    => array(
				'dropdown_categories' => array(
					'category' => array(
						'news_portal_block_posts'   => array(
							2 => array(
								'block_cat_id' => 'Sports'
							),
							3 => array(
								'block_cat_id' => 'Health'
							)
						)
					)
				),
				'multi_checkbox' => array(
					'category' => array(
						'news_portal_featured_slider' => array(
							2 => array(
								'slider_cat_ids' 	=> array( 'Lifestyle' ),
								'featured_cat_ids'	=> array( 'Food', 'Sports', 'Tech', 'Travel' )
							),
						),

						'news_portal_featured_posts' => array(
							3 => array(
								'block_cat_ids'	=> array( 'Food', 'Gadget', 'Health' )
							),
						),

						'news_portal_list_posts' => array(
							3 => array(
								'block_cat_ids'	=> array( 'Gadget' )
							),
							4 => array(
								'block_cat_ids'	=> array( 'Tech' )
							),
						),

						'news_portal_fullwidth_posts' => array(
							3 => array(
								'block_cat_ids'	=> array( 'Travel' )
							),
						),

						'news_portal_carousel' => array(
							2 => array(
								'block_cat_ids'	=> array( 'Travel' )
							),
						),


					)
				)
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
			)
		)
	);

	return $demo_config;
	
}
