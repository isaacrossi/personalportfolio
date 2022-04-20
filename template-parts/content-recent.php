<section class="recent-posts  container section-padding" id="blog">


  <h2 class="recent-posts__header">
    <span class="reg"> Latest From My </span> Blog.
  </h2>


  <div>

    <?php

        // organise our options into a data object
      $args = array(
        'posts_per_page' => 3,
        'orderby' => 'date',
      );
      // a variable with our query and options
      $query = new WP_Query( $args );
      // do a loop with our new query code
      if ($query->have_posts()): while ($query->have_posts()): $query->the_post()

    ?>
        <div class="recent-posts__post">

          <div>
            <p class="recent-posts__info"> <?php the_field('date'); ?> - <?php the_field('category'); ?> </p>

            <h3 class="recent-posts__title"> <?php the_title(); ?> </h3>

            <div class="recent-posts__body">
              <p class="recent-posts__subhead"> <?php the_field('subhead'); ?> </p>
              <a href="<?php the_permalink()?>"><div class="recent-posts__button">Read</div></a>
            </div>
          </div>
        
          <img src="<?php the_field('hero_image'); ?>" class="recent-posts__image"> 
          
        </div>

        
        
      <?php endwhile; endif; ?>

  </div>

</section>