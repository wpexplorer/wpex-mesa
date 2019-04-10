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
} ?>

<header class="wpex-loop-entry-header wpex-clr">
	<h2 class="wpex-loop-entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!-- .wpex-loop-entry-title -->
</header><!-- .wpex-loop-entry-header -->