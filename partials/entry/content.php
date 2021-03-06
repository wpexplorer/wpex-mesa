<?php
/**
 * The post entry title
 *
 * @package   Mesa WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get display
if ( is_front_page() ) {
	$display = wpex_get_theme_mod( 'home_entry_content_display', 'excerpt' );
} else {
	$display = wpex_get_theme_mod( 'entry_content_excerpt', 'excerpt' );
} ?>

<div class="wpex-loop-entry-excerpt entry wpex-clr">

	<?php if ( post_password_required() ) : ?>

		<?php esc_html_e( 'This post is password protected you will need a password to access the article.', 'wpex-mesa' ); ?>

	<?php elseif ( 'content' != $display && 'quote' != get_post_format() && wpex_has_custom_excerpt() ) : ?>

		<?php
		if ( $elength = wpex_get_entry_excerpt_length() ) {
			wpex_excerpt( $elength, false );
		} ?>

	<?php else : ?>

	   <?php the_content(); ?>

	<?php endif; ?>

</div><!--.wpex-loop-entry-excerpt -->