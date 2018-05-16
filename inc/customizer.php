<?php
/**
* Fin:kom Theme Customizer
*
* @package Fin:kom
*/

/**
* Add postMessage support for site title and description for the Theme Customizer.
*
* @param WP_Customize_Manager $wp_customize Theme Customizer object.
*/
function finkom_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'finkom_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'finkom_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'finkom_customize_register' );

/**
* Render the site title for the selective refresh partial.
*
* @return void
*/
function finkom_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
* Render the site tagline for the selective refresh partial.
*
* @return void
*/
function finkom_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
* Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
*/
function finkom_customize_preview_js() {
	wp_enqueue_script( 'finkom-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'finkom_customize_preview_js' );

add_action( 'customize_register', 'prakmed_register_site_settings' );

// Add fields site identity section and new footer section in customizer
function prakmed_register_site_settings( $wp_customize ) {



	// Store Address
	$wp_customize->add_setting(
		'woocommerce_store_address',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'type'              => 'option'

		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'woocommerce_store_address',
			array(
				'label'          => __( 'Address', 'finkom' ),
				'section'        => 'title_tagline',
				'settings'       => 'woocommerce_store_address',
				'priority'       => 51
			)
			)
		);

		$wp_customize->add_setting(
			'woocommerce_store_address_2',
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'option'

			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woocommerce_store_address_2',
				array(
					'label'          => __( 'Address2', 'finkom' ),
					'section'        => 'title_tagline',
					'settings'       => 'woocommerce_store_address_2',
					'priority'       => 51
				)
				)
			);

		// Store Zip Code
		$wp_customize->add_setting(
			'woocommerce_store_postcode',
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'option'

			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'woocommerce_store_postcode',
				array(
					'label'          => __( 'Zip', 'finkom' ),
					'section'        => 'title_tagline',
					'settings'       => 'woocommerce_store_postcode',
					'priority'       => 52
				)
				)
			);

			// Store City
			$wp_customize->add_setting(
				'woocommerce_store_city',
				array(
					'default'     => '',
					'sanitize_callback' => 'sanitize_text_field',
					'type'              => 'option'

				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'woocommerce_store_city',
					array(
						'label'          => __( 'City', 'finkom' ),
						'section'        => 'title_tagline',
						'settings'       => 'woocommerce_store_city',
						'priority'       => 53
					)
					)
				);

				// Store Country
				$wp_customize->add_setting(
					'woocommerce_store_country',
					array(
						'default'     => '',
						'sanitize_callback' => 'sanitize_text_field',
						'type'              => 'option'

					)
				);

				$wp_customize->add_control(
					new WP_Customize_Control(
						$wp_customize,
						'woocommerce_store_country',
						array(
							'label'          => __( 'Country', 'finkom' ),
							'section'        => 'title_tagline',
							'settings'       => 'woocommerce_store_country',
							'priority'       => 54
						)
						)
					);

					// Store Phone
					$wp_customize->add_setting(
						'woocommerce_store_phone',
						array(
							'default'     => '',
							'sanitize_callback' => 'sanitize_text_field',
							'type'              => 'option'

						)
					);

					$wp_customize->add_control(
						new WP_Customize_Control(
							$wp_customize,
							'woocommerce_store_phone',
							array(
								'label'          => __( 'Phone', 'finkom' ),
								'section'        => 'title_tagline',
								'settings'       => 'woocommerce_store_phone',
								'priority'       => 55
							)
							)
						);
						// Store Email
						$wp_customize->add_setting(
							'woocommerce_store_email',
							array(
								'default'     => '',
								'sanitize_callback' => 'sanitize_email',
								'type'              => 'option'
							)
						);

						$wp_customize->add_control(
							new WP_Customize_Control(
								$wp_customize,
								'woocommerce_store_email',
								array(
									'label'          => __( 'E-mail', 'finkom' ),
									'section'        => 'title_tagline',
									'settings'       => 'woocommerce_store_email',
									'priority'       => 56
								)
								)
							);
						}
