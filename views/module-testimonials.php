<section class="module testimonials">
  <div class="container">

    <div class="testimonials__title">
      <?=the_sub_field('title');?>
    </div>

    <div class="testimonials__grid">
      <?php if ( have_rows('testimonials')): ?>
        <?php $counter = 0; ?>
        <?php $group = 1; ?>

        <?php while ( have_rows('testimonials') ) : the_row(); ?>
          <?php
          if ($counter % 3 === 0) :
            if ($group === 1) :
              echo '<div class="testimonials__wrap shown" data-group="'.$group.'">';
            else:
              echo '<div class="testimonials__wrap" data-group="'.$group.'">';
            endif;
          endif;
          ?>
            <div class="testimonials__item">
              <div class="testimonials__quote">
                <?=the_sub_field('quote');?>
              </div>
              <div class="testimonials__name">
                <?=the_sub_field('name');?>
              </div>
              <div class="testimonials__role">
                <?=the_sub_field('role');?>
              </div>
            </div>
            <?php if($counter % 3 === 2) :    echo '</div>'; endif; ?>

            <?php $counter++;?>
            <?php
            if ($counter % 3 === 0) { $group++; }; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <?php if ($counter > 3) : ?>
      <div class="testimonials__more">
        <a href="#readmore">
          <button type="button" name="button">Read more</button>
        </a>
      </div>
    <?php endif; ?>

    </div>
  </section>
