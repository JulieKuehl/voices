<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package areavoices
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="copyright">
			<?php printf( esc_html__( '&copy; Copyright ', 'areavoices' )); ?><?php the_date( 'Y' ); ?> <?php echo bloginfo( 'name' ); ?> | Area Voices
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
