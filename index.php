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
	'paged' => get_query_var( 'paged' ),
	'orderby' => 'post_date',
	'posts_per_page' => 9,
	'order' => 'DESC',
);
$wp_query = new WP_Query($args);
?>
<div id="content">

	<?php // check if the flexible content field has rows of data ?>
	<?php $post_id = get_option('page_for_posts'); ?>
	<?php if (have_rows('module', $post_id)): ?>
		<?php // loop through the rows of data ?>
		<?php while (have_rows('module', $post_id)) : the_row();?>
			<?php if (get_row_layout() == 'text'): ?>
				<?php get_template_part( 'views/module-text', 'text' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'testimonials'): ?>
				<?php get_template_part( 'views/module-testimonials', 'testimonials' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'calltoaction'): ?>
				<?php get_template_part( 'views/module-calltoaction', 'calltoaction' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'content_block'): ?>
				<?php get_template_part( 'views/module-content_block', 'content_block' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'page_header'): ?>
				<?php get_template_part( 'views/module-page_header', 'page_header' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'homepage_header'): ?>
				<?php get_template_part( 'views/module-homepage_header', 'homepage_header' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'services'): ?>
				<?php get_template_part( 'views/module-services', 'services' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'grid'): ?>
				<?php get_template_part( 'views/module-grid', 'grid' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'posts'): ?>
				<?php get_template_part( 'views/module-posts', 'posts' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'clients'): ?>
				<?php get_template_part( 'views/module-clients', 'clients' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'features'): ?>
				<?php get_template_part( 'views/module-features', 'features' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'form'): ?>
				<?php get_template_part( 'views/module-form', 'form' ); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>


	<div class="module__posts module__posts--layout">

		<?php $index = 0;?>

		<div class="module__posts__featured">
			<div class="container">
			<?php if ($wp_query->have_posts()): ?>
				<?php while ($wp_query->have_posts()): ?>
					<?php $wp_query->the_post(); ?>
					<?php if ($index === 0): ?>
						<?php get_template_part( 'views/posts/featured-posts', 'posts' ); ?>
					<?php endif; ?>
					<?php $index++;?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		</div>

		<?php $index = 0;?>

		<div class="container">
			<div class="module__posts__grid">
				<?php if ($wp_query->have_posts()): ?>
					<?php while ($wp_query->have_posts()): ?>
						<?php $wp_query->the_post(); ?>
						<?php if ($index != 0): ?>
							<?php get_template_part( 'views/posts/view-posts', 'posts' ); ?>
						<?php endif; ?>
						<?php $index++;?>
					<?php endwhile; ?>
					<?php wp_reset_query();?>
				<?php endif; ?>
			</div>
		</div>

		<div class="clearfix"></div>
	</div>



</div>
<?php
get_footer();
