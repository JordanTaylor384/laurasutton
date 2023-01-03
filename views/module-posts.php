<?php
$limit = get_sub_field('limit');
$args = array(
  'post_type' => 'post',
  'posts_per_page' => $limit,
);

$wp_query = new WP_Query($args) ;?>

<section class="module__posts <?=the_sub_field('theme');?>">
  <div class="container">
    <div class="module__posts__grid">
      <?php if ( $wp_query->have_posts() ) : ?>
        <?php while ( $wp_query->have_posts() ) : ?>
          <?php $wp_query->the_post(); ?>
          <?php get_template_part( 'views/posts/view-posts', 'posts' ); ?>
        <?php endwhile;?>
      <?php endif; ?>
    </div>
  </div>

  <div class="module__posts__background"></div>
</section>

<?php wp_reset_query(); ?>
