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

	$theme_slug 	= 'edigital';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'edigital' => array(
			'name'				=> esc_html__( 'Edigital', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug,
			'version'			=> '1.1.7',
			'theme_description' => esc_html__( 'Multipurpose theme mainly designed for Easy Digital Downloads Plugin.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'multipurpose', 'ecommerce' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
				'edigital_primary' 	=> 'primary',
				'edigital_footer'	=> 'Footer Menu'
			),
			'widgets_data_update'    => array(
				'dropdown_categories' => array(
					'category' => array(
						'edigital_service_section'   => array(
							1 => array(
								'section_cat_id' 	=> 'features'
							)
						),
						'edigital_testimonials'   => array(
							1 => array(
								'section_cat_id' 	=> 'Testimonials'
							)
						)
					)
				),
				'dropdown_categories' => array(
					'download_category' => array(
						'edigital_featured_products'   => array(
							1 => array(
								'section_edd_cat_id' 	=> 'featured'
							)
						),
					)
				),
				'multi_checkbox' => array(
					'category' => array(
						'edigital_latest_blog' => array(
							2 => array(
								'section_cat_ids' 	=> array( 'blog' )
							),
						)
					)
				)
			),
			'plugins_list' => array(
				'contact-form-7' => array(
					'name'		=> __( 'Contact Form 7', 'mystery-demo-importer' ),
					'slug'		=> 'contact-form-7/wp-contact-form-7.php',
					'required'	=> true
				),
				'easy-digital-downloads' => array(
					'name'		=> __( 'Easy Digital Downloads', 'mystery-demo-importer' ),
					'slug'		=> 'easy-digital-downloads/easy-digital-downloads.php',
					'required'	=> true
				)
			)
		)
	);
	
	return $demo_config;
	
}
