<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 */
?>

	<footer>		
		<div class="signup-man fl">
			<input class="signup-field" type="email" required="" placeholder="Signup for updates" id="mce-EMAIL" name="EMAIL" value="">
				<button class="signup-button" id="mc-embedded-subscribe" name="subscribe" type="submit">
	            	<a href="http://eepurl.com/benFan"><i class="fa fa-angle-right"></i></a>
	            </button>
        </div>
		<div class="rightz fr"><h4>&copy; 2014 Thomas Meyers</h4></div>
	</footer>

</div>
  </div>  
</div> <!-- end flyout navigation -->
</div> <!-- end pushdown contact -->
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>    
    <script>
      $(document).foundation();
    </script>
<?php wp_footer(); ?>
</body>
</html>






