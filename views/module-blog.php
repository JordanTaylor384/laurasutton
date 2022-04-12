<?php
$limit = get_sub_field('limit');
$category = get_sub_field('category');
if (count($category) == 1) {
  $categorySlug = get_category($category[0]);
  $categorySlug = $categorySlug->category_nicename;
} else {
  $categorySlug = 'mixed';
}
?>

<section class="module post-index">

  <?php $moduleArgs = array(
    'post_type' => 'post',
    'cat' => $category,
    'posts_per_page' => $limit
  ); ?>

  <?php $moduleQuery = new WP_Query($moduleArgs) ;?>

  <div class="container">
    <div class="post-index__introduction post-index__introduction--<?=$categorySlug;?>">

      <?php if (count($category) == 1) :?>
        <div class="post-index__icon"></div>
      <?php endif; ?>

      <?php if (get_sub_field('title')): ?>
        <div class="post-index__title"><?=the_sub_field('title');?></div>
      <?php endif; ?>

      <?php if (get_sub_field('introduction')): ?>
        <div class="post-index__text"><?=the_sub_field('introduction');?></div>
      <?php endif; ?>

      <?php if (count($category) == 1) :?>
        <a class="post-index__more" href="<?=the_sub_field('view_all_link');?>" aria-label="View all posts in the category <?=$categorySlug;?>">
          View all
        </a>
      <?php endif; ?>
    </div>

    <div class="post-index__grid slick-container">
      <?php $index = 1;?>
      <?php if ( $moduleQuery->have_posts() ) : while ( $moduleQuery->have_posts() ) : $moduleQuery->the_post(); ?>
        <?php if ($categorySlug == 'books'): ?>
          <?php get_template_part( 'views/view-posts-books', 'posts' ); ?>
        <?php else: ?>
          <?php get_template_part( 'views/view-posts', 'posts' ); ?>
        <?php endif; ?>
        <?php $index++;?>
      <?php endwhile; ?>
    <?php	endif; ?>



  </div>

</div>
</section>

<?php wp_reset_query(); ?>
