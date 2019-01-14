<?php
/**
 * The Footer Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! is_active_sidebar( 'post-inline-right' ) ) {
	return;
}
?>

<div id="supplementary" class="inline-widgets">
	<div id="widgets-post-inline-right" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'post-inline-right' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->
