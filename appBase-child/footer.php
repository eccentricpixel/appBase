<div id="footer">
	<footer class="row">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer-menu' ) ) {
			echo '<div class="row">';
			wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'inline-list', 'container' => 'nav', 'container_class' => 'large-12 columns' ) );
			echo '<div>';
		} ?>
		
		<div class="large-6 small-6 columns padBot">
			<div id="footerText">
				<p></p>
			</div>
			
			<div id="footerCopyright" class="padTop">&copy; COPYRIGHT SOMETHING <?php echo date("Y") ?></div>
			
			
			
			






			
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

<script>
jQuery(document).foundation();
</script>
</body>
</html>