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
	
	$theme_slug 	= 'flexible';
	$git_url 		= 'https://raw.githubusercontent.com/mysterythemes/themes-demo-pack/master/'.$theme_slug.'/';
	$demo_config 	= array(
		'flexible' => array(
			'name'				=> esc_html__( 'Flexible Lite', 'mystery-demo-importer' ),
			'theme_slug'        => $theme_slug.'-lite',
			'version'			=> '1.1.6',
			'theme_description' => esc_html__( 'Elegant & Creative One Page WordPress Theme.', 'mystery-demo-importer' ),
			'xml_file'     		=> $git_url . 'default/'.$theme_slug.'.xml',
			'theme_settings' 	=> $git_url . 'default/'.$theme_slug.'-export.dat',
			'widgets_file'  	=> $git_url . 'default/'.$theme_slug.'-widgets.wie',
			'preview_screen'	=> $git_url . 'default/screenshot.png',
			'preview_url'		=> 'https://demo.mysterythemes.com/'.$theme_slug.'-lite/',
			'is_shop'			=> false,
			'theme_type'        => array( 'free', 'portfolio', 'multipurpose' ),
			'show_on_front'     => 'page',
			'home_title'  		=> 'Home',
			'blog_title'  		=> '',
			'menus_locations'	=> array(
				'primary' 	 => 'primary'
			),
			'widgets_data_update'    => array(
				'dropdown_categories' => array(
					'category' => array(
						'flexible_lite_testimonials_section'   => array(
							1 => array(
								'section_cat_id' => 'testimonial'
							)
						),
						'flexible_lite_sponsors'   => array(
							1 => array(
								'section_cat_id' => 'sponsors'
							)
						)
					)
				),
				'multi_checkbox' => array(
					'category' => array(
						'flexible_lite_latest_news' => array(
							1 => array(
								'slider_cat_ids' 	=> array( 'Blog' )
							)
						)
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
