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

$post_id = false;
if (is_home()) {
	$post_id = get_option('page_for_posts');
}

$args = array(
	'post_type' => 'post',
	// 'paged' => get_query_var( 'paged' ),
	'orderby' => 'post_date',
	'posts_per_page' => 1,
	'order' => 'DESC',
);
$wp_query = new WP_Query($args);
?>

<div class="module__posts page-header">
	<div class="container">

		<div class="module__posts__grid page-header__grid">
			<div class="module__posts__intro page-header__intro">
				<div class="module__posts__title page-header__title">
					Insights
				</div>
				<p><?=the_field('insights_description', $post_id);?></p>
			</div>
			<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<?php get_template_part( 'views/view-posts', 'posts' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_query();?>
		<?php endif; ?>
	</div>

	<div class="clearfix"></div>
	<!-- <div class="module__posts__pagination">
	<?php the_posts_pagination( array(
	'prev_text' => '&nbsp;',
	'next_text' => '&nbsp;'
) ); ?>
</div> -->
</div>
</div>

<?php // check if the flexible content field has rows of data ?>
<?php $post_id = get_option('page_for_posts'); ?>
<?php if (have_rows('module', $post_id)): ?>
	<?php // loop through the rows of data ?>
	<?php while (have_rows('module', $post_id)) : the_row();?>
		<?php if (get_row_layout() == 'call_to_action'): ?>
			<?php get_template_part( 'views/module-call_to_action', 'call_to_action' ); ?>
		<?php endif; ?>
		<?php if (get_row_layout() == 'blog'): ?>
			<?php get_template_part( 'views/module-blog', 'blog' ); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
