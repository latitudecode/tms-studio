<?php get_header(); ?>


	<!--- start to the slider -->

	<section class="slider">
		<div class="home-slider"> <!-- pull in royal slider content/images -->
			<ul class="slider-buttons">
				<li><i class="#"></i></li> 
				<li><i class="#"></i></li>
				<li><i class="#"></i></li>								
			</ul>
			<div class="slide">
				<img src="<?php bloginfo('template_directory'); ?>/images/slide1.png" /> <!-- slider image -->
			</div>
			<div class="slide">
				<!-- <img src="#" /> <!-- slider image -->
			</div>
			<div class="slide">
				<!-- <img src="#" /> <!-- slider image -->
			</div>			
		</div>
	</section>

	<!-- end of the slider section -->
	<!-- start the medium seleciton with secondary nav -->
	
	<section class="cat-section row-effect">
		<?php query_posts('page_id=141'); if(have_posts()) : while(have_posts()) : the_post(); ?><!-- starting the WordPress loop -->

			<div class="media-entry-mosaic fl"> <!-- nav for selecting medium type -->
				 <ul>
					<li class="title"><h2>mosaic</h2></li>
					<li class="cat-img">
						<a href="<?php the_permalink(); ?>">	
							<figure class="effect-hover cat"> 
					          <?php 
	                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	                              the_post_thumbnail();
	                            } 
	                            ?>				
							</figure> 
						</a>					
					</li>
				</ul>
			</div> <!-- end nav for selecting type -->

		<?php endwhile; ?>
		<?php else : ?>
		    <p>Whoops! We are working on it.</p>
		<?php endif; ?> <!-- end loop -->

		<?php query_posts('page_id=139'); if(have_posts()) : while(have_posts()) : the_post(); ?><!-- starting the WordPress loop -->	

			<div class="media-entry-collage fr"> <!-- nav for selecting medium type -->
				 <ul>
					<li class="title"><h2>collage</h2></li>
					<li class="cat-img">						
						<a href="<?php the_permalink(); ?>">	
							<figure class="effect-hover cat"> 
					          <?php 
	                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	                              the_post_thumbnail();
	                            } 
	                            ?>				
							</figure> 
						</a>
					</li>
				</ul>
			</div> <!-- end nav for selecting type -->

		<?php endwhile; ?>
		<?php else : ?>
		    <p>Whoops! We are working on it.</p>
		<?php endif; ?> <!-- end loop -->

	</section>
	<div class="clear"></div>

	<!-- end medium selection section -->
	<!-- start the footer -->
<?php
get_footer();
	