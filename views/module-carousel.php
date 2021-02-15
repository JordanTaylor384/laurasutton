<?php if (cn_cookies_accepted()): ?>

<div class="module carousel">

  <div class="carousel__inner">
    <div class="carousel__title">
      <?=the_sub_field('title');?>
    </div>
    <div class="carousel__text">
      <?=the_sub_field('text');?>
    </div>
  </div>

  <?php if ( have_rows('slide')): ?>
    <div class="carousel__slider swiper-container">
      <div class="swiper-wrapper">

        <?php while ( have_rows('slide') ) : the_row(); ?>
          <div class="swiper-slide slide">
            <div class="slide__inner">
              <?php if (get_sub_field('image')): ?>
                <?php $image = get_sub_field('image');?>
                <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
              <?php endif; ?>
              <?php if (get_sub_field('video')): ?>
                <iframe width="100%" height="442" src="<?=the_sub_field('video');?>" tabindex="-1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile;?>

      </div>

      <div class="swiper-pagination"></div>
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>
  <?php endif; ?>
</div>

<?php endif; ?>
