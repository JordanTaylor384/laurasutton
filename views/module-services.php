<section class="module__services">
  <div class="container">

    <div class="module__services__heading">
      <?=the_sub_field('heading');?>
    </div>
    <div class="module__services__grid">
      <?php if ( have_rows('item')): ?>
        <?php while ( have_rows('item') ) : the_row(); ?>
          <a class="module__services__item <?=the_sub_field('theme');?>" href="<?=the_sub_field('link');?>">
            <div class="module__services__item__label">
              <?=the_sub_field('text');?>
            </div>
          </a>
        <?php endwhile;?>
      <?php endif; ?>
    </div>
  </div>
</section>
