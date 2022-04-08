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
			<p class="footer__about">Hey! I'm Isaac Rossi, A frontend developer based in Sydney, Australia. I began learning web developement in 2021 because I love to travel and the idea of working anywhere in the world is what motivates me to continue learning to code everyday.
      
		  I've got plenty more to learn about web development and how to use these skills to be location independent. I document this jouney on my blog hoping to inspire and be inspired by anyone who shares are similar deam to mine.

			</p>
		</div>

		<div class="footer__links">
			<div class="footer__socials">
				<a class="footer__email" href="mailto: isaacjohnrossi@gmail.com">isaacjohnrossi@gmail.com</a>
				<a class="footer__twitter" href="https://twitter.com/isaac__rossi">@isaacrossi</a>
			</div>
			<a class="footer__archive">Archive</a>
		</div>
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
