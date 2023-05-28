<?php
/**
 * Two Column options.
 *
 * @package Presazine
 */

$default = presazine_get_default_theme_options();

// Two Column Section
$wp_customize->add_section( 'section_home_travel',
	array(
		'title'      => __( 'Two Column Posts', 'presazine' ),
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		'active_callback' => 'presazine_travel_design_enable',
		)
);

$wp_customize->add_setting( 'theme_options[disable_travel_section]',
	array(
		'default'           => $default['disable_travel_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'presazine_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Presazine_Switch_Control( $wp_customize, 'theme_options[disable_travel_section]',
    array(
		'label' 			=> __('Enable/Disable Two Column Section', 'presazine'),
		'section'    		=> 'section_home_travel',
		 'settings'  		=> 'theme_options[disable_travel_section]',
		'on_off_label' 		=> presazine_switch_options(),
    )
) );

// Add arrow enable setting and control.
$wp_customize->add_setting( 'theme_options[travel_content_align]', array(
	'default'           => $default['travel_content_align'],
	'sanitize_callback' => 'presazine_sanitize_select',
) );

$wp_customize->add_control( 'theme_options[travel_content_align]', array(
	'label'             => esc_html__( 'Choose Content Align', 'presazine' ),
	'section'           => 'section_home_travel',
	'type'              => 'radio',
	'active_callback' => 'presazine_travel_active',
	'choices'				=> array( 
		'content-right'     => esc_html__( 'Right Side', 'presazine' ), 
		'content-center'     => esc_html__( 'Center Side', 'presazine' ), 
		'content-left'     => esc_html__( 'Left Side', 'presazine' ), 
		'content-justify'     => esc_html__( 'Justify', 'presazine' )
		)
) );

//Two Column Section title
$wp_customize->add_setting('theme_options[travel_title]', 
	array(
	'default'           => $default['travel_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[travel_title]', 
	array(
	'label'       => __('Section Title', 'presazine'),
	'section'     => 'section_home_travel',   
	'settings'    => 'theme_options[travel_title]',
	'active_callback' => 'presazine_travel_active',		
	'type'        => 'text'
	)
);


// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[travel_category_enable]', array(
	'default'           => $default['travel_category_enable'],
	'sanitize_callback' => 'presazine_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[travel_category_enable]', array(
	'label'             => esc_html__( 'Enable Category', 'presazine' ),
	'section'           => 'section_home_travel',
	'type'              => 'checkbox',
	'active_callback' => 'presazine_travel_active',
) );	

// Number of items
$wp_customize->add_setting('theme_options[travel_excerpt_length]', 
	array(
	'default' 			=> $default['travel_excerpt_length'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'presazine_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[travel_excerpt_length]', 
	array(
	'label'       => __('Excerpt Length', 'presazine'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 1000.', 'presazine'),
	'section'     => 'section_home_travel',   
	'settings'    => 'theme_options[travel_excerpt_length]',		
	'type'        => 'number',
	'active_callback' => 'presazine_travel_active',
	'input_attrs' => array(
			'min'	=> 0,
			'max'	=> 1000,
			'step'	=> 1,
		),
	)
);

// Setting  Team Category.
$wp_customize->add_setting( 'theme_options[travel_category]',
	array(

	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Presazine_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[travel_category]',
		array(
		'label'    => __( 'Select Category', 'presazine' ),
		'section'  => 'section_home_travel',
		'settings' => 'theme_options[travel_category]',	
		'active_callback' => 'presazine_travel_active',		
		)
	)
);
