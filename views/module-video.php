<?php //if (cn_cookies_accepted()): ?>

  <section class="module video">
    <div class="container">

      <div class="video__inner">
        <div class="video__title">
          <?=the_sub_field('title');?>
        </div>
        <div class="video__text">
          <?=the_sub_field('text');?>
        </div>
        <div class="video__wapper">
          <iframe width="100%" height="442" src="<?=the_sub_field('video_link');?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </section>

<?php //endif; ?>
