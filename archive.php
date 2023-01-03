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

?>

<div id="content">

	<div class="">
		<div class="container">

			<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<?php get_template_part( 'views/projects/view-projects', 'posts' ); ?>
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

<?php
get_footer();
