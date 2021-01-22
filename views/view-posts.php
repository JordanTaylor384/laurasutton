<?php $image = get_field('thumbnail'); ?>

<div class="post__item">
  <div class="post__item__inner">
    <div class="post__item__date">
      <?=the_field('date');?>
    </div>
    <div class="post__item__image">
      <a href="<?=the_permalink();?>">
        <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
      </a>
    </div>
    <div class="post__item__title">
      <a href="<?=the_permalink();?>">
        <?php the_title(); ?>
      </a>
    </div>
    <div class="post__item__excerpt">
      <?=the_field('excerpt');?>
    </div>
  </div>
</div>
