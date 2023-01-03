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
            <a class="module__content-block__link" href="<?=the_sub_field('link_url');?>">
              <?=the_sub_field('link_text');?>
            </a>
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
