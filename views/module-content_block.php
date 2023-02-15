<?php $index = get_row_index();?>

<section class="module__content-block <?=the_sub_field('theme');?> <?=the_sub_field('layout');?>">
  <div class="container">
    <div class="module__content-block__grid">

      <div class="module__content-block__content">
        <div class="module__content-block__title">
          <?=the_sub_field('title');?>
        </div>

        <?=the_sub_field('content');?>
        <?php if (have_rows('links')): ?>
          <?php while (have_rows('links') ) : the_row(); ?>

            <?php if (get_sub_field('link_url')): ?>
              <a class="module__content-block__link" href="<?=the_sub_field('link_url');?>">
                <?=the_sub_field('link_text');?>
              </a>
            <?php else: ?>
              <a class="module__content-block__open" data-index="<?=$index;?>">
                <?=the_sub_field('link_text');?>
              </a>
            <?php endif; ?>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="module__content-block__image">
        <?php $image = get_sub_field('image');?>
        <img src="<?=$image['url'];?>" alt="<?=$image['title'];?>" />
      </div>

    </div>
  </div>
</section>

<?php if (get_sub_field('display_modal') == true): ?>
  <div class="module__content-block__modal" data-index="<?=$index;?>">
    <div class="module__content-block__modal__inner">
      <div class="module__content-block__modal__close"></div>
      <div class="module__content-block__modal__content">
        <?=the_sub_field('modal_content');?>
      </div>
    </div>
  </div>
<?php endif; ?>
