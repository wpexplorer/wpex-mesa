<?php
/**
 * The default template for displaying post entries.
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

// Get format
$format = get_post_format();

// Base classes for entry
$classes = array( 'wpex-loop-entry', 'wpex-clr' );

// Counter
global $wpex_count, $is_featured_post;

// Check if embeds are allowed
$allow_embeds = apply_filters( 'wpex_entry_embeds', true );

// Check for media
$has_video = wpex_has_post_video();
$has_audio = wpex_has_post_audio();

// Entry columns
if ( ! $is_featured_post ) {
	$columns   = wpex_get_loop_columns();
	$classes[] = 'wpex-col';
	$classes[] = 'wpex-count-'. $wpex_count;
	$classes[] = 'wpex-col-'. $columns;
} else {
	$classes[] = 'wpex-featured-entry';
} ?>

<div id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>

	<div class="wpex-loop-entry-inner wpex-clr">

		<?php if ( 'quote' != $format  ) : ?>

			<?php if ( $allow_embeds && $has_video ) : ?>

				<?php get_template_part( 'partials/entry/video' ); ?>

			<?php elseif ( $allow_embeds && $has_audio ) : ?>

				<?php get_template_part( 'partials/entry/audio' ); ?>

			<?php elseif ( wpex_get_theme_mod( 'entry_thumbnail', true )  && has_post_thumbnail() ) : ?>

				<?php get_template_part( 'partials/entry/thumbnail' ); ?>

			<?php endif; ?>

		<?php endif; ?>

		<div class="wpex-loop-entry-content wpex-clr">

			<?php if ( 'quote' != $format  ) : ?>

				<?php
				// Display category tab
				if ( wpex_get_theme_mod( 'entry_category', true ) ) : ?>
					<?php get_template_part( 'partials/entry/category' ); ?>
				<?php endif; ?>

				<?php
				// Display title
				get_template_part( 'partials/entry/title' ); ?>

				<?php
				// Display entry meta
				if ( wpex_get_theme_mod( 'entry_meta', true ) ) : ?>
					<?php get_template_part( 'partials/entry/meta' ); ?>
				<?php endif; ?>

			<?php endif; ?>

			<?php
			// Display entry excerpt/content
			get_template_part( 'partials/entry/content' ); ?>

		</div><!-- .wpex-loop-entry-content -->

	</div><!-- .wpex-boxed-container -->

</div><!-- .wpex-loop-entry -->

<?php
// Reset counter
if ( ! $is_featured_post && $wpex_count == $columns ) {
	$wpex_count = 0;
} ?>