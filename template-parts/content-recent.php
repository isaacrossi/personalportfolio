<section class="recent-posts  container section-padding">


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
        <div  class="recent-posts__post">
          <p class="recent-posts__info"> <?php the_field('date'); ?> - <?php the_field('category'); ?> </p>

          <h4 class="recent-posts__title"> <?php the_title(); ?> </h4>
          
          <div class="recent-posts__body">
            <p class="recent-posts__subhead"> <?php the_field('subhead'); ?> </p>
            <div class="recent-posts__button">Read</div>
          </div>
          
        </div>
        
      <?php endwhile; endif; ?>

  </div>

</section>