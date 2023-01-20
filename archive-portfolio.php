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
* @package laurasutton
*/

get_header();

?>

<div id="content">

	<?php // check if the flexible content field has rows of data ?>
	<?php $post_id = get_option('page_for_posts'); ?>
	<?php if (have_rows('module', 14)): ?>
		<?php // loop through the rows of data ?>
		<?php while (have_rows('module', 14)) : the_row();?>
			<?php if (get_row_layout() == 'text'): ?>
				<?php get_template_part( 'views/module-text', 'text' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'content_block'): ?>
				<?php get_template_part( 'views/module-content_block', 'content_block' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'page_header'): ?>
				<?php get_template_part( 'views/module-page_header', 'page_header' ); ?>
			<?php endif; ?>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php
	$args = array(
		'post_type' => 'portfolio',
		'paged' => get_query_var( 'paged' ),
		'orderby' => 'post_date',
		'posts_per_page' => 9,
		'order' => 'DESC',
	);
	$wp_query = new WP_Query($args);
	?>

	<div class="module__projects module__projects--layout">

			<?php $index = 0;?>

			<div class="module__projects__featured">
				<div class="container">
				<?php if ($wp_query->have_posts()): ?>
					<?php while ($wp_query->have_posts()): ?>
						<?php $wp_query->the_post(); ?>
						<?php if ($index === 0): ?>
							<?php get_template_part( 'views/projects/featured-projects', 'projects' ); ?>
						<?php endif; ?>
						<?php $index++;?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			</div>

			<?php $index = 0;?>

			<div class="container">
				<div class="module__projects__grid">
					<?php if ($wp_query->have_posts()): ?>
						<?php while ($wp_query->have_posts()): ?>
							<?php $wp_query->the_post(); ?>
							<?php if ($index != 0): ?>
								<?php get_template_part( 'views/projects/view-projects', 'projects' ); ?>
							<?php endif; ?>
							<?php $index++;?>
						<?php endwhile; ?>
						<?php wp_reset_query();?>
					<?php endif; ?>
				</div>
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

<?php
get_footer();
