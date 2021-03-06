<?php
/**
 * Template part for displaying posts.
 *
 * @package areavoices
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="dashicons dashicons-calendar-alt"></span> <?php the_time( 'j F Y' ); ?><span class="separator">|</span><span class="dashicons dashicons-admin-users"></span> <?php the_author_posts_link(); ?><span class="separator">|</span><span class="dashicons dashicons-category"></span> <?php the_category( ', ' ); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_post_thumbnail( 'featured-image' ); ?>
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'areavoices' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'areavoices' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php areavoices_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
