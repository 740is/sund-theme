	</div> <!--Close Wrapper -->
	<footer>
		<div class="footer-menu">
			<div class="footer-menu-items">
				<div class="footer-menu-item">
					<?php wp_nav_menu( array('menu' => '7')); ?>
				</div>
			</div>

			<div class="footer-menu-items">
				<div class="footer-menu-item">
					<?php wp_nav_menu( array('menu' => '30')); ?>
				</div>
			</div>
		</div>
		<div class="copyright">
			<h4>&copy;<?php echo date("Y"); ?> | Rekið af Netveldinu | Allur&nbsp;réttur áskilinn.</h4>
			<a href="http://740.is" target="_blank" style="font-size: 0.65em; text-decoration: none; color: #8e8e8e;">740.is</a>
		</div>
	</footer>
<?php wp_footer(); ?>
	<script src="https://code.jquery.com/jquery-2.2.1.js"
  integrity="sha256-eNcUzO3jsv0XlJLveFEkbB8bA7/CroNpNVk3XpmnwHc="
  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/app.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10692555-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>
</html>
