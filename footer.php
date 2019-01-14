<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		</div><!-- #main -->

		<footer id="colophon" class="page-footer" role="contentinfo">
			<div class="footer-brand">
				<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dailylogo-highres.png" alt="PokéCommunity Daily" title="PokéCommunity Daily" class="footer-logo"></p>
				<p class="slogan">Faster than Solaceon’s news press.</p>
			</div>

			<?php get_sidebar( 'footer' ); ?>

			<div class="footer-text">
				<?php do_action( 'twentyfourteen_credits' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>