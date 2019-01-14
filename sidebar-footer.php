<?php
/**
 * The Footer Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="supplementary" class="row">
	<div id="footer-widgets-1" class="col-sm-3 footer-widgets widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div><!-- #footer-sidebar -->
	<div id="footer-widgets-2" class="col-sm-3 footer-widgets widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	</div><!-- #footer-sidebar -->
	<div id="footer-widgets-3" class="col-sm-3 footer-widgets widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-3' ); ?>
	</div><!-- #footer-sidebar -->
	<div id="footer-widgets-4" class="col-sm-3 footer-widgets widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer-4' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->
