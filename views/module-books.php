<section class="module post-index">

  <div class="container">
    <div class="post-index__introduction post-index__introduction--books">

      <div class="post-index__icon"></div>

      <?php if (get_sub_field('title')): ?>
        <div class="post-index__title"><?=the_sub_field('title');?></div>
      <?php endif; ?>

      <?php if (get_sub_field('introduction')): ?>
        <div class="post-index__text"><?=the_sub_field('introduction');?></div>
      <?php endif; ?>

    </div>

    <div class="post-index__grid slick-container">

      <?php if ( have_rows('repeater')): ?>
        <?php while ( have_rows('repeater') ) : the_row(); ?>
          <div class="post__item">
            <div class="post__item__inner">
              <a href="<?=the_permalink();?>">
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
                <a class="post__item__category post__item__category--books">
                  Books
                </a>
                <div class="post__item__date">
                  <?=the_field('date');?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>

  </div>
</section>

<?php wp_reset_query(); ?>
