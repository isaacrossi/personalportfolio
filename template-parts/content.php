<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package personalportfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content  section-padding">

		<img src="<?php the_field('hero_image'); ?>" class="entry-content__image">
		
		<div>
			<p class="entry-content__info"> <?php the_field('date'); ?> - <?php the_field('category'); ?> </p>

			<h1 class="entry-content__header"> <?php the_title(); ?> </h1>

			<p class="entry-content__paragraphs"> <?php the_content(); ?> </p>
		</div>

	</div><!-- .entry-content -->



	<footer class="entry-footer">
		<?php get_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
