<section class="module__features">
  <div class="container">

    <div class="module__features__heading">
      <?=the_sub_field('heading');?>
    </div>
    <div class="module__features__subtitle">
      <?=the_sub_field('subtitle');?>
    </div>

    <?php if ( have_rows('item')): ?>
      <div class="module__features__grid">
        <?php while ( have_rows('item') ) : the_row(); ?>
          <?php $image = get_sub_field('image');?>

          <div class="module__features__item <?=the_sub_field('colour');?>">
            <div class="module__features__item__grid">
              <img src="<?=$image['url'];?>" alt="">
              <p>
                <?=the_sub_field('text');?>
              </p>
            </div>
          </div>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>
</section>
