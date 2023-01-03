<section class="module__clients">
  <div class="module__clients__heading">
    <?=the_sub_field('text');?>
  </div>
  <div class="module__clients__items">
    <?php if ( have_rows('item')): ?>
      <?php while ( have_rows('item') ) : the_row(); ?>
        <div class="module__clients__item">
          <?php $image = get_sub_field('image');?>
          <img src="<?=$image['url'];?>" alt="">
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
