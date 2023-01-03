<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package laurasutton
*/

?>
<footer class="site-footer">

		<div class="site-footer__grid">
			<div class="site-footer__logo">
				<div class="site-footer__logo__image"></div>
				&copy; <?=date("Y");?> Laura Sutton Content.
			</div>
			<div class="site-footer__nav">
				<nav class="footer">
					<?php wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
						'walker' => new Custom_Menu_List()
					) ); ?>
				</nav>
			</div>
			<div class="site-footer__socials">
				<ul>
					<?php if (get_field('linkedin', 'option')):?>
						<li><a class="linkedin" href="<?=the_field('linkedin', 'option');?>" target="_blank"></a></li>
					<?php endif; ?>
					<?php if (get_field('twitter', 'option')):?>
						<li><a class="twitter" href="<?=the_field('twitter', 'option');?>" target="_blank"></a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>

</footer>

<div class="contact-sticky">
	<a class="contact-sticky__button" href="/contact">
		Contact
	</a>
</div>

</div><!-- .page -->

<?php wp_footer(); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="/wp-content/themes/laurasutton/assets/dist/js/ScrollMagic.js"></script>
<script src="/wp-content/themes/laurasutton/assets/dist/js/animation.gsap.js"></script>
<script src="/wp-content/themes/laurasutton/assets/dist/js/debug.addIndicators.js"></script>

</body>
</html>
