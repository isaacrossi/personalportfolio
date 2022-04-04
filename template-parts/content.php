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

	<header class="entry-header">

	</header><!-- .entry-header -->



	<div class="entry-content">

	 <p class="entry-content__info"> <?php the_field('date'); ?> - <?php the_field('category'); ?> </p>

	 <h1 class="entry-content__header"> <?php the_title(); ?> </h1>
	 
	 <p class="entry-content__paragraphs"> <?php the_content(); ?> </p>
	 
	</div><!-- .entry-content -->



	<footer class="entry-footer">
		<?php //personalportfolio_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
