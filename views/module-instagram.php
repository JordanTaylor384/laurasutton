<?php $feed = get_sub_field('feed_embed');?>

<section class="module__instagram">
  <div class="module__instagram__wrapper">
    <div class="container">
      <img class="module__instagram__logo" src="<?=the_field('sticky_logo', 'option');?>" alt="Anne Archer Associates Logo" aria-label="Smiling A logo"  title="Anne Archer Associates Logo"/>
      <div class="module__instagram__title">
        <?=the_sub_field('title');?>
      </div>
      <div class="module__instagram__intro">
        <?=the_sub_field('text');?>
      </div>
      <div class="module__instagram__embed">
        <?php echo do_shortcode($feed);?>
      </div>
    </div>
  </div>
</section>
