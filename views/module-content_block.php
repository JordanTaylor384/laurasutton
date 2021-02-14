<?php $image = get_sub_field('image'); ?>

<section class="module content-block <?=the_sub_field('layout');?>">

  <div class="container">
    <div class="content-block__grid">

      <div class="content-block__grid__col1">
        <div class="content-block__text">
          <?=the_sub_field('content');?>
          <?php if (get_sub_field('button_text')): ?>
              <a href="<?=the_sub_field('button_link');?>" class="btn">
                <?=the_sub_field('button_text');?>
              </a>
          <?php endif; ?>
        </div>
      </div>

      <div class="content-block__grid__col2">
        <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
      </div>

    </div>
  </div>
</section>
