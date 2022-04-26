<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package annearcher
*/

get_header();
// get post category
$categorySlug = get_the_category($post->id);
$categorySlug = $categorySlug[0];
// get category slug
$categorySlug = $categorySlug->slug;

// if more than 1 post, display a featured post
if ($wp_query->found_posts > 1) {
	$isSingle = '';
} else {
	$isSingle = 'page-header--single';
} ?>

<div id="content">

	<div class="module__posts page-header <?=$isSingle;?>">
		<div class="container">

			<div class="module__posts__grid page-header__grid">
				<div class="module__posts__intro page-header__intro">
					<div class="module__posts__title page-header__title">
						<?=single_cat_title( '', false );?>
					</div>
					<p><?=the_archive_description();?></p>
				</div>



				<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					<?php if ($categorySlug == "books"): ?>
						<?php get_template_part( 'views/view-posts-books', 'posts' ); ?>
					<?php else: ?>
						<?php get_template_part( 'views/view-posts', 'posts' ); ?>
					<?php endif; ?>
				<?php endwhile; ?>
				<?php wp_reset_query();?>
			<?php endif; ?>

		</div>
		<div class="clearfix"></div>
		<div class="module__posts__pagination">
			<?php the_posts_pagination( array(
				'prev_text' => '&nbsp;',
				'next_text' => '&nbsp;'
			) ); ?>
		</div>
	</div>
</div>

<?php // check if the flexible content field has rows of data ?>
<?php $post_id = get_option('page_for_posts'); ?>
<?php if (have_rows('module', $post_id)): ?>
	<?php // loop through the rows of data ?>
	<?php while (have_rows('module', $post_id)) : the_row();?>
		<?php if (get_row_layout() == 'subscribe'): ?>
			<?php get_template_part( 'modules/module-subscribe', 'subscribe' ); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

</div>

<?php
get_footer();
