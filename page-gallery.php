<?php
/*
 * Template Name: Studio page
 * Description: Gallery page
 */

//

?>


<?php get_header(); ?>


	<!--- start to the slider -->

	<section class="slider">
			<div id="cbp-fwslider" class="cbp-fwslider">
				<ul>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/slide1.jpg" alt="img01"/></li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/slide2.jpg" alt="img02"/></li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/slide3.jpg" alt="img03"/></li>
					<li><img src="<?php bloginfo('template_directory'); ?>/images/slide4.jpg" alt="img04"/></li>
				</ul>
			</div>
	</section>

	<!-- end of the slider section -->

	<!-- start the footer -->
<?php
get_footer();
	