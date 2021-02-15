<?php $image = get_field('thumbnail'); ?>

<div class="post__item">
  <div class="post__item__inner">
    <div class="post__item__date">
      <?=the_field('date');?>
    </div>
    <a href="<?=the_permalink();?>" aria-label="Read blog post <?php the_title(); ?>.">
      <div class="post__item__image">
        <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
        <div class="post__item__image__mask"></div>
      </div>
      <div class="post__item__title">
        <?php the_title(); ?>
      </div>
      <div class="post__item__excerpt">
        <?=the_field('excerpt');?>
      </div>
      <p class="post__item__read">Read blog post</p>
    </a>

  </div>
</div>
