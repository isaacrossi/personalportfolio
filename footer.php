<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package personalportfolio
 */

?>

	<footer class="footer  container">
		<div class="footer__content">
			<img class="footer__me" src="<?php bloginfo('template_url');?>/assets/me.jpg">
			<p class="footer__about">I began learning to code in 2021 because of a strong desire for location independence.</p>
		</div>

		<div class="footer__links">
			<div class="footer__socials">
				<a class="footer__email">isaacjohnrossi@gmail.com</a>
				<a class="footer__twitter">@isaacrossi</a>
			</div>
			<a class="footer__archive">Archive</a>
		</div>
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
