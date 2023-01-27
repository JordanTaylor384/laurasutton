<section class="module__text">
  <div class="container">

    <?php if (get_sub_field('heading')): ?>
      <div class="module__text__heading">
        <?=the_sub_field('heading');?>
      </div>
    <?php endif; ?>

    <div class="module__text__grid <?=the_sub_field('columns');?>">

      <?php if (get_sub_field('img')): ?>
        <?php $image = get_sub_field('img');?>
        <div class="module__text__grid__col--img">
          <img src="<?=$image['url'];?>" alt=""/>
        </div>
      <?php endif; ?>

      <?php if (get_sub_field('column_1')): ?>
        <div class="module__text__grid__col--1">
          <?=the_sub_field('column_1');?>

          <?php if (get_sub_field('columns') == 'module__text--columns-img'): ?>
            <a class="module__text__button" href="<?=the_sub_field('button_link');?>">
              <?=the_sub_field('button_text');?>
            </a>
          <?php endif; ?>
        </div>

      <?php endif; ?>

      <?php if (get_sub_field('column_2')): ?>
        <div class="module__text__grid__col--2">
          <?=the_sub_field('column_2');?>

          <?php if (get_sub_field('button_text')): ?>
            <a class="module__text__button" href="<?=the_sub_field('button_link');?>">
              <?=the_sub_field('button_text');?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>

    </div>

  </div>
</section>
