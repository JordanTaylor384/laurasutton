<section class="module__testimonials">
  <div class="container">

    <?php if (get_sub_field('heading')): ?>
      <div class="module__testimonials__heading">
        <?=the_sub_field('heading');?>
      </div>
    <?php endif; ?>

    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <?php if ( have_rows('item')): ?>
          <?php while ( have_rows('item') ) : the_row(); ?>
            <div class="module__testimonials__item swiper-slide">
              <div class="module__testimonials__item__quote">
                <?=the_sub_field('text');?>
              </div>
              <div class="module__testimonials__item__grid">
                <?php $image = get_sub_field('image');?>
                <img class="module__testimonials__item__image" src="<?=$image['url'];?>" alt="<?=$image['title'];?>">
                <div class="module__testimonials__item__name">
                  <?=the_sub_field('name');?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <?php if (count(get_sub_field('item')) > 1): ?>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      <?php endif; ?>

    </div>

  </div>
</section>
