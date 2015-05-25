<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage figpress
 * @since figpress 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				do_action( 'twentyfifteen_credits' );
			?>
			figpress theme is created, written by, and maintained by <a href="https://github.com/caokhoa">Cao Khoa</a>. <br/>
			It's built on Twenty Fifteen Theme By <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( '%s', 'twentyfifteen' ), 'WordPress.org' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
