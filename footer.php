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

	<footer class="footer" id="about">
		<div class="footer__inner  container">
			<div class="footer__content">
				<img class="footer__me" src="<?php bloginfo('template_url');?>/assets/me.jpg">
				<div  class="footer__about">
					<p class="footer__p1">Hey! I'm Isaac Rossi, a web developer based in Sydney, Australia. I began learning web developement in 2021 with a goal of becomming location independent.</p>
					
					<p>I've got plenty more to learn about web development and how to use these skills to be location independent. I document this jouney on my blog hoping to inspire and be inspired by anyone who shares are similar deam to mine.</p>
				</div>
			
			</div>

			<div class="footer__links">
				<div class="footer__socials">
					<a class="footer__email" href="mailto: isaacjohnrossi@gmail.com">isaacjohnrossi@gmail.com</a>
					<a class="footer__twitter" href="https://twitter.com/isaac__rossi">@isaacrossi</a>
				</div>
				<a class="footer__archive">Archive</a>
			</div>
		</div>
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
