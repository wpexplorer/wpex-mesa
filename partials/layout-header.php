<?php
/**
 * The main header layout
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

<div class="wpex-site-header-wrap wpex-clr">

	<header class="wpex-site-header wpex-container wpex-clr">

		<div class="wpex-site-branding wpex-clr">

			<?php get_template_part( 'partials/header/logo' ); ?>

			<?php get_template_part( 'partials/header/description' ); ?>

			<?php if ( wpex_get_theme_mod( 'header_social', true ) ) : ?>
				<?php get_template_part( 'partials/header/social' ); ?>
			<?php endif; ?>

		</div><!-- .wpex-site-branding -->

	</header><!-- .wpex-site-header -->

</div><!-- .wpex-site-header-wrap -->

<?php get_template_part( 'partials/header/nav' ); ?>