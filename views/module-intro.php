<?php $image = get_sub_field('image'); ?>

<section class="module intro <?=the_sub_field('layout');?>">

  <div class="container">
    <div class="intro__grid <?=the_sub_field('layout');?>">

      <div class="intro__grid__col1">
        <div class="intro__text">
          <?=the_sub_field('text');?>
        </div>
      </div>

      <div class="intro__grid__col2">
        <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
      </div>

    </div>
  </div>
</section>
