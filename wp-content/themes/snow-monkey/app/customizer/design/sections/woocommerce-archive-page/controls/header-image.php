<?php
/**
 * @package snow-monkey
 * @author inc2734
 * @license GPL-2.0+
 * @version 14.0.0
 */

use Inc2734\WP_Customizer_Framework\Framework;

Framework::control(
	'image',
	'woocommerce-archive-header-image',
	[
		'label'           => __( 'Featured Image', 'snow-monkey' ),
		'priority'        => 110,
		'active_callback' => function() {
			return 'none' !== get_theme_mod( 'woocommerce-archive-eyecatch' );
		},
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$panel   = Framework::get_panel( 'design' );
$section = Framework::get_section( 'design-woocommerce-archive-page' );
$control = Framework::get_control( 'woocommerce-archive-header-image' );
$control->join( $section )->join( $panel );
