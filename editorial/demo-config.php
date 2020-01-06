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
	
	$theme_slug 	= 'editorial';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'editorial' => array(
			'name'				=> esc_html__( 'Editorial', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version'			=> '1.4.2',
			'theme_description' => esc_html__( 'Ultimate responsive magazine WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'blog', 'magazine' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
				'top-header' => 'top-header-menu',
				'primary' 	 => 'primary',
				'footer'	 => 'footer-menu'
			),
			'widgets_data_update'    => array(
				'dropdown_categories' => array(
					'category' => array(
						'editorial_featured_slider'   => array(
							1 => array(
								'editorial_slider_category' 	=> 'travel',
								'editorial_featured_category' 	=> 'fashion'
							)
						),
						'editorial_block_grid'   => array(
							1 => array(
								'editorial_block_cat_id' 	=> 'health'
							),
							2 => array(
								'editorial_block_cat_id' 	=> 'health'
							)
						),
						'editorial_block_layout'   => array(
							1 => array(
								'editorial_block_cat_id' 	=> 'technology'
							)
						),
						'editorial_block_column'   => array(
							1 => array(
								'editorial_block_cat_id' 	=> 'sports'
							),
							2 => array(
								'editorial_block_cat_id' 	=> 'lifestyle'
							),
							3 => array(
								'editorial_block_cat_id' 	=> 'food'
							)
						),
						'editorial_block_list'   => array(
							1 => array(
								'editorial_block_cat_id' 	=> 'Music'
							)
						),
						

					)
				)
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
