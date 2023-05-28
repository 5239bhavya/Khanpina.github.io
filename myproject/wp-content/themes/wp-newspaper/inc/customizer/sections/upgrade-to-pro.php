<?php
/**
 *
 * @package WP Newspaper
 */

function wp_newspaper_customizer_upgrade_to_pro( $wp_customize ) {

	$wp_customize->add_section( new Wp_Newspaper_Customize_Section_Pro_Control( $wp_customize, 'wp_newspaper_upgrade_to_pro',	array(
			'title'    => esc_html__( 'WP Mag Plus', 'wp-newspaper' ),
			'type'	=> 'upgrade-to-pro',
			'pro_text' => esc_html__( 'Upgrade to Pro', 'wp-newspaper' ),
			'pro_url'  => esc_url( 'https://wpmagplus.com/wp-magazine-plus/' ),
			'priority' => 1
		) )	);

	
}
add_action( 'customize_register', 'wp_newspaper_customizer_upgrade_to_pro' );