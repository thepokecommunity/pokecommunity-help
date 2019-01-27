<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry">
		<header class="entry-header">
			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
			<div class="entry-categories">
				<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
			</div>
			<?php
				endif;
	
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				endif;
			?>
            <div class="entry-summary">
				<?php if( $post->post_excerpt ) : ?>
					<?php the_excerpt(); ?>
				<?php endif ?>
			</div><!-- .entry-summary -->
	
			<div class="entry-meta">
				<span class="comments-link"><?php // comments_popup_link( __( '0', 'daily' ), __( '1', 'daily' ), __( '%', 'daily' ) ); ?></span>
				<?php echo get_wp_user_avatar(get_the_author_meta('ID'), 96); ?> By <?php the_author_posts_link(); ?>, <span class="time" data-timestamp="<?php echo get_the_time('U') ?>"><?php echo get_the_time('F j, Y, g:i A'); /* echo human_time_diff( get_the_time('U'), current_time('timestamp') */ ?></span>
				<?php
					edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
				?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<?php
				
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );
	
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'nextpagelink'     => __( 'Next page' ),
					'previouspagelink' => __( 'Previous page' ),
				) );
			?>
		</div><!-- .entry-content -->
		
		<?php if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="entry-author-information">
				<?php echo get_wp_user_avatar(get_the_author_meta('ID'), 96); ?>
					<div class="author-description">
						<h1><?php the_author_posts_link(); ?></h1>
						<?php the_author_meta( 'description' ); ?>
					</div>
			</div>
		<?php endif; ?>
	
		<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
	</div>
</article><!-- #post-## -->