<section class="module__calltoaction <?=the_sub_field('theme');?>">
  <div class="container">

    <div class="module__calltoaction__heading">
      <?=the_sub_field('title');?>
    </div>
    <div class="module__calltoaction__content">
      <?=the_sub_field('content');?>
    </div>

    <?php if ( have_rows('button')): ?>
      <?php while ( have_rows('button') ) : the_row(); ?>
        <a class="module__calltoaction__button" href="<?=the_sub_field('button_link');?>">
          <?=the_sub_field('button_text');?>
        </a>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>
