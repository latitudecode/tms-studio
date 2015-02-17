<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 */
?>

	<footer>
		<div class="product-menu"> <!-- start product menu -->
			<ul>
				<li class="previous"><a href="#"><i class="fa fa-arrow-circle-left"></i></a></li>
				<li class="product-title"><?php the_title(); ?> - <?php echo get_post_meta($post->ID, 'latitude_size', true); ?></li>
				<li class="grid-block"><a href="#"><i class="fa fa-th-large"></i></a></li>
				<li class="next"><a href="#"><i class="fa fa-arrow-circle-right"></i></a></li>												
			</ul>
		</div> <!-- end product menu -->		
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
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
<?php wp_footer(); ?>
</body>
</html>