<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Energia
 */
?>
	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div id="pagefooter">
				<em>Corrections, suggestions, and new documentation should be posted to the <a href="http://forum.43oh.com/forum/28-energia/" rel="nofollow">Forum</a>.</em><br /><br />
				The text of the Energia getting started and reference guides are licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/" rel="nofollow">Creative Commons Attribution-ShareAlike 3.0 License</a>. Energia reference is based on Arduino reference. Code samples in the guide are released into the public domain.<br /><br />
				&copy;Energia <br />
				<?php do_action( 'energia_credits' ); ?>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'energia' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'energia' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'energia' ), 'Energia', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>