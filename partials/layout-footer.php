<?php
/**
 * Footer Layout
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

<?php get_template_part( 'partials/footer/ad' ); ?>

<footer class="wpex-site-footer-wrap wpex-clr">

	<div class="wpex-site-footer wpex-container wpex-clr">

		<?php if ( get_theme_mod( 'footer_copyright', true ) ) : ?>
			
			<div class="wpex-footer-copyright">
				<?php get_template_part( 'partials/footer/copyright' ); ?>
			</div><!-- .wpex-footer-copyright -->

		<?php endif; ?>

	</div><!-- .wpex-site-footer -->

</footer><!-- .wpex-site-footer-wrap -->