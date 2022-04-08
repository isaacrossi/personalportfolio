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

	<?php get_template_part('template-parts/content-header'); ?>

	<div class="entry-content  section-padding">

	 <p class="entry-content__info"> <?php the_field('date'); ?> - <?php the_field('category'); ?> </p>

	 <h1 class="entry-content__header"> <?php the_title(); ?> </h1>
	 
	 <p class="entry-content__paragraphs"> <?php the_content(); ?> </p>
	 
	</div><!-- .entry-content -->



	<footer class="entry-footer">
		<?php get_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
