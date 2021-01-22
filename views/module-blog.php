<?php
$limit = get_sub_field('limit');
$category = get_sub_field('category');
?>

<div class="module post-index">

  <?php $args = array(
    'post_type' => 'post',
    'category_name' => $category,
    'posts_per_page' => $limit
  ); ?>

  <?php $wp_query = new WP_Query($args) ;?>

  <div class="container">

    <div class="post-index__grid slick-container">
      <?php $index = 1;?>
      <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <?php get_template_part( 'views/view-posts', 'posts' ); ?>
        <?php $index++;?>
      <?php endwhile; ?>
    <?php	endif; ?>
  </div>

</div>
</div>

<?php wp_reset_query(); ?>
