<?php
/**
 * Scroll to top button
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

<a href="#" title="<?php esc_html_e( 'Top', 'mesa' ); ?>" class="wpex-site-scroll-top"><span class="fa fa-caret-up"></span></a>