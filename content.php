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
	<div class="entry-time">
		<i class="far fa-clock"></i> <span class="time" data-timestamp="<?php echo get_the_time('U') ?>"><?php echo get_the_time_short() ?></span>
	</div>
	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
	<?php
		// Output the featured image.
		if ( has_post_thumbnail() ) :
			if ( 'grid' == get_theme_mod( 'featured_content_layout' ) ) {
				the_post_thumbnail();
			} else {
				the_post_thumbnail( 'twentyfourteen-full-width' );
			}
		endif;
	?>
	</a>

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
	</header><!-- .entry-header -->
	
	<div class="entry-summary">
		<?php if( $post->post_excerpt ) : ?>
		<?php the_excerpt(); ?>
		<?php endif; ?>
	</div><!-- .entry-summary -->
	
	
	<footer class="entry-meta">
		
		<span class="comments-link"><?php // comments_popup_link( __( '0', 'daily' ), __( '1', 'daily' ), __( '%', 'daily' ) ); ?></span>
			
		<?php echo get_wp_user_avatar(get_the_author_meta('ID'), 96); ?> By <?php the_author_posts_link(); ?>, <span class="time" data-timestamp="<?php echo get_the_time('U') ?>"><?php echo get_the_time('F j, Y, g:i A'); ?></span>
	</footer>
</article><!-- #post-## -->