<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sydney
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="title-post entry-title" ' . sydney_get_schema( "headline" ) . '>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'page_feat_image', 1 ) != 1 ) ) : ?>
	<div class="entry-thumb">
		<?php the_post_thumbnail('large-thumb'); ?>
	</div>
	<?php endif; ?>

	<div class="entry-content" <?php sydney_do_schema( 'entry_content' ); ?>>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
