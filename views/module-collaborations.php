<section class="module__collaborations">
  <div class="container">

    <?php if ( have_rows('repeater')): ?>
      <?php while ( have_rows('repeater') ) : the_row(); ?>
        <?php $image = get_sub_field('image');?>

        <div class="module__collaborations__item">
          <div class="module__collaborations__item__grid">
            <div class="module__collaborations__item__image">
              <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
            </div>
            <div class="module__collaborations__item__text">
              <?=the_sub_field('text');?>
              <a class="btn" href="<?=the_sub_field('button_link');?>" target="_blank">
                <?=the_sub_field('button_text');?>
              </a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>
