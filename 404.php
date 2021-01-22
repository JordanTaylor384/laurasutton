<?php
/**
* The template for displaying 404 pages (Not Found)
*
* @package WordPress
* @subpackage Twenty_Thirteen
* @since Twenty Thirteen 1.0
*/

get_header(); ?>
<div class="error-wrapper">
  <div class="error">

    <div class="container">
      <div class="inner">
        <h1>Page not found</h1>
        <p class="not-found">We couldn't find the page you're looking for, please use the site navigation or alternatively go back to the <a href="<?php echo site_url(); ?>">homepage</a>.</p>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
