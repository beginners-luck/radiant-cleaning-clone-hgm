	<div class="push"></div>
</div> <!-- end .wrap -->

<!-- begin footer -->
<footer class="container-fluid">
	<div class="footer-top-row blue-bkg-color">
		<img src="<?php the_field('footer_logo_image', 'options'); ?>">
		<div class="wp-content">
		<?php the_field('footer_content', 'options'); ?>
		</div>
	</div>
	<div class="footer-bottom-row">
		<div>
			<p><?php the_field('copyright', 'options'); ?></p>
		</div>
		<div class="aligncenter">
			<?php wp_nav_menu( array( 'theme_location' => 'footer_menu') ) ?>
		</div>
		<div class="c-and-c-watermark">
			<a href="https://cacpro.com/" target="_blank">Handcrafted by<span class="icon-cacpro" aria-hidden="true"></span></a>
		</div>
	</div>
</footer>
<!-- end footer -->
<?php wp_footer(); ?>
</body>
</html>
