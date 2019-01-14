<?php
/**
 * The Footer Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! is_active_sidebar( 'post-sidebar' ) ) {
	return;
}
?>

<div id="supplementary" class="row">
	<div id="widgets-inline-post-right" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'post-sidebar' ); ?>
	</div>
</div><!-- #supplementary -->
