<section class="module events">
  <div class="container">

    <?php if ( have_rows('block')): ?>
      <?php while ( have_rows('block') ) : the_row(); ?>

        <div class="events__title">
          <?=the_sub_field('heading');?>
        </div>

        <?php if ( have_rows('item')): ?>
          <?php while ( have_rows('item') ) : the_row(); ?>
            <div class="events__item">
              <div class="events__item__grid">

                <div class="events__item__grid__col1">
                  <div class="events__item__title">
                    <?=the_sub_field('title');?>
                  </div>
                  <div class="events__item__date">
                    <?=the_sub_field('date');?>
                  </div>
                  <div class="events__item__location">
                    <?=the_sub_field('location');?>
                  </div>
                </div>

                <div class="events__item__grid__col2">
                  <?php if (get_sub_field('more_link')): ?>
                    <div class="events__item__more">
                      <a href="<?=the_sub_field('more_link');?>" target="_blank" aria-label="More info about this course. External link.">
                        <p>More Info</p>
                      </a>
                    </div>
                  <?php endif; ?>
                  <div class="events__item__button">
                    <a class="btn" href="<?=the_sub_field('button_link');?>" target="_blank" aria-label="Book your place on this course. External link.">
                        <?=the_sub_field('button_text');?>
                    </a>
                    <?php if (get_sub_field('more_link')): ?>
                      <div class="events__item__more">
                        <a href="<?=the_sub_field('more_link');?>" target="_blank" aria-label="More info about this course. External link.">
                          <p>More Info</p>
                        </a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>

              </div>
            </div>
          <?php endwhile;?>
        <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>


  </div>
</section>
