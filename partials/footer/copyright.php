<?php
/**
 * Footer copyright
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

// Get copyright data
$copy = apply_filters( 'wpex_footer_copyright', get_theme_mod( 'footer_copyright', '<a href="https://www.wpexplorer.com/mesa-free-wordpress-theme/" target="_blank" title="Mesa WordPress Theme">Mesa</a> Theme by <a href="https://www.wpexplorer.com" title="WPExplorer Themes" target="_blank">WPExplorer</a> Powered by <a href="https://wordpress.org/" title="WordPress" target="_blank">WordPress</a>' ) );

// Display copyright
if ( $copy ) : ?>

	<div class="footer-copyright wpex-clr">
		<?php echo wp_kses_post( do_shortcode( $copy ) ); ?>
	</div><!-- .footer-copyright -->
<?php endif; ?>