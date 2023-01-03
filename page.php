<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package annearcher
*/

get_header(); ?>
<?php // check if the flexible content field has rows of data ?>
<?php if (have_rows('module')): ?>
	<div id="content">
		<?php // loop through the rows of data ?>
		<?php while (have_rows('module')) : the_row();?>
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
	</div>
<?php endif; ?>

<?php get_footer(); ?>
