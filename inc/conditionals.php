<?php
/**
 * Useful conditionals for this theme
 *
 * @package   Mesa WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

/**
 * Check if comments are enabled
 *
 * @since 1.0.0
 */
function wpex_has_comments( $bool = true ) {
	if ( 'page' == get_post_type() && ! get_theme_mod( 'page_comments', true ) ) {
		$bool = false;
	}
	return apply_filters( 'wpex_has_comments', $bool );
}

/**
 * Check if post has a video
 *
 * @since 1.0.0
 */
function wpex_has_post_video( $bool = false ) {
	if ( get_post_meta( get_the_ID(), 'wpex_post_video', true ) ) {
		$bool = true;
	}
	return apply_filters( 'wpex_has_post_video', $bool );
}

/**
 * Check if post has audio
 *
 * @since 1.0.0
 */
function wpex_has_post_audio( $bool = false ) {
	if ( get_post_meta( get_the_ID(), 'wpex_post_audio', true ) ) {
		$bool = true;
	}
	return apply_filters( 'wpex_has_post_audio', $bool );
}

/**
 * Check if social share is enabled
 *
 * @since 1.0.0
 */
function wpex_has_social_share( $bool = true ) {
	$bool = get_theme_mod( 'post_share', true );
	if ( post_password_required() ) {
		$bool = false;
	}
	$bool = apply_filters( 'wpex_has_social_share', $bool );
	return $bool;
}

/**
 * Check if social share is enabled
 *
 * @since 1.0.0
 */
function wpex_has_author_bio( $bool = true ) {
	$bool = get_theme_mod( 'post_author_info', true );
	$bool = apply_filters( 'wpex_has_author_bio', $bool );
	return $bool;
}

/**
 * Check if custom excerpt is enabled
 *
 * @since 1.0.0
 */
function wpex_has_custom_excerpt() {
	$display = wpex_get_theme_mod( 'entry_content_display', 'excerpt' );
	$bool    = false;
	if ( 'excerpt' == $display ) {
		$bool = true;
	}
	$bool = apply_filters( 'wpex_has_custom_excerpt', $bool );
	return $bool;
}