<section class="module__homepage-header">
  <div class="container">

    <div class="module__homepage-header__heading">
      <?=the_sub_field('title');?>
    </div>

    <?php if (get_sub_field('button_text')):?>
      <a class="module__homepage-header__button" href="<?=the_sub_field('button_link');?>">
        <?=the_sub_field('button_text');?>
      </a>
    <?php endif; ?>
  </div>
</section>
