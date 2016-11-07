	</div> <!--Close Wrapper -->
	<footer>
		<div class="footer-menu">
			<div class="footer-menu-items">
				<?php wp_nav_menu( array('menu' => 'Footer Menu')); ?>
			</div>
		</div>
		<div class="copyright">
			<h4>&copy;<?php echo date("Y"); ?> | Rekið af Netveldinu | Allur&nbsp;réttur áskilinn.</h4>
			<!-- <p>( Keyrir á Wordpress | Í umsjón 740.is )</p> -->
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/app.js"></script>

	</body>
</html>
