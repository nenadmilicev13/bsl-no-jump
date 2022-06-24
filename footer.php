<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nmtheme
 */

?>
	<footer class="footer">
		<div class="wrapper">
			<div class="footer__container">
				<div class="footer__container-left">
					<ul class="footer__container-list">

					<?php if ( have_rows('navigation', 'option') ) : ?>
						<?php while ( have_rows('navigation', 'option') ) : the_row(); ?>

							<li><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('label'); ?></a></li>

						<?php endwhile; ?>
					<?php endif; ?>
						<!-- <li><a href="javascript:;">Work</a></li>
						<li><a href="javascript:;">Services</a></li>
						<li><a href="javascript:;">Studio</a></li>
						<li><a href="javascript:;">Resources</a></li>
						<li><a href="javascript:;">Start Here</a></li> -->
					</ul>
				</div>

				<div class="footer__container-right">
					<ul class="footer__container-right-media">
						<li><a href="javasceript:;">
							<span class="social-media-icon font-facebook"></span></a>
						</li>
						<li><a href="javasceript:;">
							<span class="social-media-icon font-twitter"></span></a>
						</li>
						<li><a href="javasceript:;">
							<span class="social-media-icon font-instagram"></span></a>
						</li>
						<li><a href="javasceript:;">
							<span class="social-media-icon font-linkedin"></span></a>
						</li>
					</ul>
					<div class="footer__mail">
						<a href="mailto:contact@baseline.rs">contact@baseline.rs</a>
					</div>
				</div>
			</div>
			<div class="footer__bottom">
				<span class="copyright"><?php echo get_field('copyright', 'option'); ?></span>
			</div>
		</div>
	</footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
