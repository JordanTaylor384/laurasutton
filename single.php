<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package annearcher
*/

get_header(); ?>

<?php
if (get_post_type() == 'portfolio') {
  get_template_part( 'views/projects/view-single-projects', 'portfolio' );
} else {
  get_template_part( 'views/posts/view-single-post', 'post' );
}
?>

<?php get_footer();
