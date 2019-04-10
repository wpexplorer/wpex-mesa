<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package   Mesa WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */ ?>

<div class="wpex-entry-none wpex-clr">

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>

		<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wpex-mesa' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php } elseif ( is_search() ) { ?>

		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms.', 'wpex-mesa' ); ?></p>

	<?php } elseif ( is_category() ) { ?>

		<p><?php esc_html_e( 'There aren\'t any posts currently published in this category.', 'wpex-mesa' ); ?></p>

	<?php } elseif ( is_tax() ) { ?>

		<p><?php esc_html_e( 'There aren\'t any posts currently published under this taxonomy.', 'wpex-mesa' ); ?></p>

	<?php } elseif ( is_tag() ) { ?>

		<p><?php esc_html_e( 'There aren\'t any posts currently published under this tag.', 'wpex-mesa' ); ?></p>

	<?php } elseif ( is_404() ) { ?>

		<h1>404</h1>
		<p><?php esc_html_e( 'Unfortunately, the page you are looking for does not exist.', 'wpex-mesa' ); ?></p>

	<?php } else { ?>

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'wpex-mesa' ); ?></p>

	<?php } ?>

</div><!-- .wpex-entry-none -->