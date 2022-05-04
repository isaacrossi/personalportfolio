<section class="selected-work  container section-padding" id="work">

  <h2 class="selected-work__header">
    <span class="reg">Selected</span> Work
  </h2>

  <?php
      // organise our options into a data object
    $args = array(
      'posts_per_page' => 3,
      'orderby' => 'date',
      'category_name' => 'project'
    );
    // a variable with our query and options
    $query = new WP_Query( $args );
    // do a loop with our new query code 
    if ($query->have_posts()): while ($query->have_posts()): $query->the_post()
  ?>

  <div class="selected-work__content">

    <div class="selected-work__image">
      <img class="selected-work__billow-img" src="<?php the_field('image');?>">
      <div class="selected-work__caption">
        <p class="selected-work__stack"><?php the_field('stack'); ?></p>
      </div>
    </div>

    <div class="selected-work__details">
      <h3 class="selected-work__project-name"><?php the_title()?></h3>
      <p class="selected-work__project-bio">
        <?php the_field('description'); ?> 
      </p>
      <div class="selected-work__buttons">
      <a href="<?php the_field('link'); ?>"><div class="selected-work__live">Live Site</div></a>
        <a class="selected-work__github" href="<?php the_field('github'); ?>"> <img src="<?php bloginfo('template_url');?>/assets/github.svg"></a>
      </div>
    </div>

  </div>

  <?php endwhile; endif; ?>  

</section>