<section class="module c2a">
  <div class="c2a__bg"></div>

  <div class="container">
    <div class="c2a__grid">

      <div class="c2a__content">
        <?=the_sub_field('content');?>
      </div>

      <div class="c2a__button">
        <?php if (get_sub_field('button_text')): ?>
          <a class="btn" href="<?=the_sub_field('button_link');?>">
            <?=the_sub_field('button_text');?>
          </a>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
