<div id="post">

  <a name="article"></a>
  <div class="article">
    <?php	while (have_posts()) : the_post(); ?>
      <div class="container">

        <a href="/blog" class="article__back">All blog posts</a>
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
  $currentID = get_the_ID();
  $args = array(
  	'post_type' => 'post',
  	'paged' => get_query_var( 'paged' ),
    'posts_per_page' => 3,
    'post__not_in' => array($currentID)
  );

  $wp_query = new WP_Query($args); ?>

  <div class="module__posts related">
  	<div class="container">

  		<div class="module__posts__grid">
  			<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
  				<?php get_template_part( 'views/view-posts', 'posts' ); ?>
  			<?php endwhile; ?>
  			<?php wp_reset_query();?>
  		<?php endif; ?>
  	</div>
  	<div class="clearfix"></div>
  </div>

</div>
