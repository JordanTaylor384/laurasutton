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



  <div class="module__related">
    <div class="container">
      <div class="module__related__grid">
        <div class="module__related__item module__related__item--prev">
          <?php if (get_previous_post()):?>
            <span>Previous Post</span>
            <a href="<?=get_the_permalink(get_previous_post()->ID);?>">
              <?=get_previous_post()->post_title;?>
            </a>
          <?php endif; ?>
        </div>
        <div class="module__related__item module__related__item--next">
          <?php if (get_next_post()):?>
            <span>Next Post</span>
            <a href="<?=get_the_permalink(get_next_post()->ID);?>">
              <?=get_next_post()->post_title;?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
