<div class="row clearfix">
    <footer class="large-12 columns ">
    	<!-- logo -->
		<div class="logo-footer">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/style/images/logo.png" alt="Logo" class="logo-footer">
			</a>
		</div>
		<!-- /logo -->
        <div id="copyright">&copy;<?php echo date("Y "); echo stripslashes(get_option('ranklab_copyright')); ?></div>
    </footer>
</div><!-- end footer-container -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
