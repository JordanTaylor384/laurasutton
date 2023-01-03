<?php $image = get_sub_field('image'); ?>
<?php $formID = get_sub_field('form_id');
$form = '[contact-form-7 id="'.$formID.'"]'; ?>


<section class="module__contact">
  <div class="container">
    <div class="module__contact__heading">
      <?=the_sub_field('heading');?>
    </div>
    <div class="module__contact__subtitle">
      <?=the_sub_field('subtitle');?>
    </div>
    <div class="module__contact__form">
      <?php echo do_shortcode($form);?>
    </div>
  </div>
</section>
