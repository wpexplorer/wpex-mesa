<?php
/**
 * Top header navigation
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

// Location ID
$location = 'main';

// Check to make sure menu isn't empty
if ( has_nav_menu( $location ) ) : ?>

	<nav class="wpex-site-nav-wrap wpex-clr">

		<div class="wpex-site-nav wpex-container wpex-clr">

			<div class="wpex-site-nav-inner wpex-clr">

				<?php
				// Display menu
				wp_nav_menu( array(
					'theme_location'  => $location,
					'fallback_cb'     => false,
					'container'       => false,
					'menu_class'      => 'wpex-dropdown-menu wpex-clr',
					'walker'          => new WPEX_Dropdown_Walker_Nav_Menu,
				) ); ?>

				</div><!-- .wpex-site-nav-inner -->

		</div><!-- .wpex-site-nav -->

	</nav><!-- .wpex-site-nav-wrap -->

<?php endif; ?>