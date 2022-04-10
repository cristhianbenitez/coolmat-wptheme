<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info container">
		<div class="footer-copyright">
			<p>&copy; <?php echo date('Y') ?> cool mat. All Rights Reserved</p>
		</div>
		<div class="social-media-links">
			<a href="#" class="social-link"><img src="<?php bloginfo('template_url'); ?>/assets/facebook-icon.svg" alt="social media icon"></a>
			<a href="#" class="social-link"><img src="<?php bloginfo('template_url'); ?>/assets/instagram-icon.svg" alt="social media icon"></a>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
