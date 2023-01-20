<section class="module__accordions <?=the_sub_field('background');?>">
  <div class="container">

    <?php if (get_sub_field('intro')): ?>
      <div class="module__accordions__intro">
        <?=the_sub_field('intro');?>
      </div>
    <?php endif; ?>

    <div class="module__accordions__grid">
      <div class="module__accordions__grid__col">
        <?php if ( have_rows('item')): ?>
          <?php while ( have_rows('item') ) : the_row(); ?>
            <div class="module__accordions__item" data-index="<?=the_row_index();?>">
              <div class="module__accordions__item__head">
                <?=the_sub_field('head');?>
              </div>
              <div class="module__accordions__item__body">
                <?=the_sub_field('body');?>

                <a class="module__accordions__item__button" href="<?=the_sub_field('button_link');?>">
                  <?=the_sub_field('button_text');?>
                </a>
              </div>
            </div>
          <?php endwhile;?>
        <?php endif;?>
      </div>

      <div class="module__accordions__grid__col">
        <div class="module__accordions__image">
          <?php $image = get_sub_field('image');?>
          <?php if (get_sub_field('image')): ?>
            <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
          <?php endif; ?>
        </div>
      </div>

    </div>


  </div>
</section>
