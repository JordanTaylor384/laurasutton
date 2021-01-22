<section class="module clients">
  <div class="container">

    <div class="clients__grid">
      <?php if ( have_rows('logos')): ?>
        <?php while ( have_rows('logos') ) : the_row(); ?>
          <?php $image = get_sub_field('image');?>
          <a href="<?=the_sub_field('link');?>" target="_blank">
            <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
          </a>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

  </div>
</section>
