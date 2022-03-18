<div id="post">

  <a name="article"></a>
  <div class="article">
    <?php	while (have_posts()) : the_post(); ?>
      <div class="container">
        <div class="article__date">
          <?=the_field('date');?>
        </div>
        <div class="article__title">
          <?=the_title();?>
        </div>
        <div class="article__body">
          <?php the_content(); ?>
        </div>
        <!-- <div class="article__share">
          <?php //echo do_shortcode('[Sassy_Social_Share]');?>
        </div> -->
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

  		<div class="module__posts__title">
        More from the blog
  		</div>

  		<div class="module__posts__grid">
  			<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
  				<?php get_template_part( 'views/view-posts', 'posts' ); ?>
  			<?php endwhile; ?>
  			<?php wp_reset_query();?>
  		<?php endif; ?>
  	</div>
  	<div class="clearfix"></div>
  	<div class="module__posts__pagination">
  		<?php the_posts_pagination( array(
  			'prev_text' => '&nbsp;',
  			'next_text' => '&nbsp;'
  		) ); ?>
  	</div>
  </div>

</div>
