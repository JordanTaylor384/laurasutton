<?php $image = get_field('thumbnail'); ?>
<?php $id = get_the_category($post_id); ?>
<?php $category = $id[0]->name;?>
<?php $categorySlug = $id[0]->slug;?>


<div class="post__item">
  <div class="post__item__inner">
    <a href="<?=the_field('book_link');?>" target="_blank" aria-label="Read blog post <?php the_title(); ?>.">
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
    </a>
    <div class="post__item__meta">
      <a href="<?=the_field('book_link');?>" target="_blank" class="post__item__category post__item__category--<?=$categorySlug;?>" aria-label="View all posts with the category <?=$categorySlug;?>">
        <?=$category;?>
      </a>
      <!-- <div class="post__item__date">
        <?=the_field('date');?>
      </div> -->
    </div>
  </div>
  <!-- <p class="post__item__read">Read blog post</p> -->
</div>
