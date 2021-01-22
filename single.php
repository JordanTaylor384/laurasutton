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
if (in_category('article')) {
  get_template_part( 'views/view-single-post', 'post' );
}
?>

<?php get_footer();
