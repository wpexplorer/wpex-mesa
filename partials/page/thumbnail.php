<?php
/**
 * Displays the page thumbnail
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
} ?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="wpex-page-thumbnail wpex-clr">
		<?php the_post_thumbnail( apply_filters( 'wpex_page_thumbnail_size', 'full' ) ); ?>
	</div><!-- .wpex-page-thumbnail -->
<?php endif; ?>