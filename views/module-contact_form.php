<?php $image = get_sub_field('image'); ?>
<?php $formID = get_sub_field('form_id');
$form = '[contact-form-7 id="'.$formID.'"]'; ?>

<section class="module contact-form">

  <div class="container">

    <div class="contact-form__grid">

      <div class="contact-form__grid__col1">
        <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>
      </div>

      <div class="contact-form__grid__col2">
        <div class="contact-form__title">
          <?=the_sub_field('title');?>
        </div>
        <div class="contact-form__text">
          <?=the_sub_field('text');?>
        </div>
        <img src="<?=$image['url'];?>" title="<?=$image['title'];?>" alt="<?=$image['alt'];?>"/>

        <?php echo do_shortcode($form);?>
      </div>

    </div>

  </div>

</section>
