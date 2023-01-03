<?php $image = get_field('image'); ?>

<div class="post__item">
  <a href="<?=the_permalink();?>" aria-label="Read blog post <?php the_title(); ?>.">
    <div class="post__item__image">
      <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
      <div class="post__item__image__mask"></div>
    </div>
    <div class="post__item__inner">
      <div class="post__item__title">
        <?php the_title(); ?>
      </div>
      <div class="post__item__excerpt">
        <?=the_field('excerpt');?>
      </div>
      <div class="post__item__more">
        <?=the_field('button_text');?>
      </div>
    </div>
  </a>
</div>
