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
			<?php if (get_row_layout() == 'header'): ?>
				<?php get_template_part( 'views/module-intro', 'header' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'content_block'): ?>
				<?php get_template_part( 'views/module-content_block', 'content_block' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'call_to_action'): ?>
				<?php get_template_part( 'views/module-call_to_action', 'call_to_action' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'video'): ?>
				<?php get_template_part( 'views/module-video', 'video' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'clients'): ?>
				<?php get_template_part( 'views/module-clients', 'clients' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'testimonials'): ?>
				<?php get_template_part( 'views/module-testimonials', 'testimonials' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'carousel'): ?>
				<?php get_template_part( 'views/module-carousel', 'carousel' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'form'): ?>
				<?php get_template_part( 'views/module-contact_form', 'form' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'events'): ?>
				<?php get_template_part( 'views/module-events', 'events' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'blog'): ?>
				<?php get_template_part( 'views/module-blog', 'blog' ); ?>
			<?php endif; ?>
			<?php if (get_row_layout() == 'editor'): ?>
				<?php get_template_part( 'views/module-editor', 'editor' ); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>
