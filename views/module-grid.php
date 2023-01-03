<section class="module__grid">
  <div class="container">
    <div class="module__grid__heading">
      <?=the_sub_field('heading');?>
    </div>
    <div class="module__grid__grid">
      <?php if ( have_rows('item')): ?>
        <?php while ( have_rows('item') ) : the_row(); ?>
          <div class="module__grid__item <?=the_sub_field('theme');?>">
            <?=the_sub_field('text');?>
          </div>
        <?php endwhile;?>
      <?php endif; ?>
    </div>
  </div>
</section>
