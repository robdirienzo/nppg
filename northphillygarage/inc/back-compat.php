<?php
/**
 * North Philly Parking Garage back compat functionality
 *
 * Prevents North Philly Parking Garage from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since North Philly Parking Garage 1.0
 */

/**
 * Prevent switching to North Philly Parking Garage on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since North Philly Parking Garage 1.0
 */
function northphillygarage_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'northphillygarage_upgrade_notice' );
}
add_action( 'after_switch_theme', 'northphillygarage_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * North Philly Parking Garage on WordPress versions prior to 3.6.
 *
 * @since North Philly Parking Garage 1.0
 */
function northphillygarage_upgrade_notice() {
	$message = sprintf( __( 'North Philly Parking Garage requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'northphillygarage' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since North Philly Parking Garage 1.0
 */
function northphillygarage_customize() {
	wp_die( sprintf( __( 'North Philly Parking Garage requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'northphillygarage' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'northphillygarage_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since North Philly Parking Garage 1.0
 */
function northphillygarage_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'North Philly Parking Garage requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'northphillygarage' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'northphillygarage_preview' );
