<?php $post_id = get_the_ID(); ?>
<div id="post">

  <a name="article"></a>
  <div class="article">
    <?php	while (have_posts()) : the_post(); ?>
      <div class="container">

        <a href="/portfolio" class="article__back">All projects</a>
        <div class="article__title">
          <?=the_title();?>
        </div>
        <div class="article__body">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <?php
  $args = array(
  	'post_type' => 'portfolio',
  	'paged' => get_query_var( 'paged' ),
  	'posts_per_page' => 2,
  	'post__not_in' => array($post_id)
  );

  $wp_query = new WP_Query($args); ?>

  <section class="module__posts module__posts--yellow">
    <div class="container">
      <div class="module__posts__grid">
        <?php if ( $wp_query->have_posts() ) : ?>
          <?php while ( $wp_query->have_posts() ) : ?>
            <?php $wp_query->the_post(); ?>
            <?php get_template_part( 'views/projects/view-projects', 'projects' ); ?>
          <?php endwhile;?>
        <?php endif; ?>
      </div>
    </div>

    <div class="module__posts__background"></div>
  </section>
