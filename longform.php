<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
/*
Template Name: Longform Post
Template Post Type: post
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'longformpost', get_post_format() );

					if (class_exists(scVBConnector)) {
						echo("<div id='comments'>");
						echo scVBConnector::$storedCommentsStr;
						echo("</div>");
					}
					else {
						$pokecommunity_threadid = get_post_meta( get_the_ID(), 'threadid', true );
						if ( empty( $pokecommunity_threadid ) ) {
							$pokecommunity_threadid = get_post_meta( get_the_ID(), 'vbconnectorthreadid', true );
						}
						// Check if the custom field has a value.
						if ( ! empty( $pokecommunity_threadid ) ) {
						    echo "<div class='comments threadlink'><a href='http://www.pokecommunity.com/showthread.php?t=$pokecommunity_threadid'>Read comments</a></div>";
						}
					}

					?>
					
					<?php


					// Previous/next post navigation.
					twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
/*
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
*/
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();