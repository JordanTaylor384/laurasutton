<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package annearcher
*/

?>

<?php if ( is_active_sidebar( 'body_position' ) ) : ?>
	<?php dynamic_sidebar( 'body_position' ); ?>
<?php endif; ?>

<footer class="site-footer">
	<div class="container">

		<div class="site-footer__grid">
			<div class="site-footer__logo">
				<img src="<?=the_field('footer_logo', 'option');?>"/>
			</div>
			<div class="site-footer__contact">
				<p>Let's stay in touch.</p>
				<a href="/contact">
					<button type="button" name="button">
						Email
					</button>
				</a>
			</div>
			<div class="site-footer__nav">
				<nav>
					<?php wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
						'walker' => new Custom_Menu_List()
					) ); ?>
				</nav>
			</div>
			<div class="site-footer__smallprint">
				&copy; Anne Archer Associates <?php echo date("Y"); ?>. Website by xxx.
			</div>
		</div>

	</div>
</footer>

</div><!-- .page -->
</div><!-- page-classes -->

<?php wp_footer(); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="/wp-content/themes/annearcher/assets/dist/js/ScrollMagic.js"></script>
<script src="/wp-content/themes/annearcher/assets/dist/js/animation.gsap.js"></script>
<script src="/wp-content/themes/annearcher/assets/dist/js/debug.addIndicators.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtou9S36hy276NftyvPnch3iB_4KkZqik"></script>

</body>
</html>
