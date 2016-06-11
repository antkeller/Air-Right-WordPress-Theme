			</div><!-- END #main -->
			<footer id="footer" class="source-org vcard copyright" role="contentinfo">
				<div class="footer-inside">
					<nav id="nav" class="primary-navigation" role="navigation">
						<?php wp_nav_menu( array('theme_location' => 'footer') ); ?>
					</nav>
					<small class="copyright">All content &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> <span>Products and Services LLC</span></small>
				</div><!-- .footer-inside -->
			</footer>
		</div><!-- END .wrapper-inside -->
	</div><!-- END #wrapper -->

	<div class="responsive-check">
		<div class="breakpoint-small"></div>
		<div class="breakpoint-medium"></div>
		<div class="breakpoint-large"></div>
	</div><!-- .responsive-check -->
	<?php wp_footer(); ?>

	<!-- JavaScript includes -->
<?php include '_/inc/footer-includes.php' ?>

	<!-- Init the main JS -->
	<script type="text/javascript">
		$(document).ready(function(){
			AIRRIGHT.Main.init();
		});
	</script>
	<!-- Google Analytics -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79155257-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
