<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">

				    	<div class="row">
				    		<div class="small-12 columns alpha ha-waypoint">
								<a href="#anchor-1" class="button down adam"></a>
				    		</div>
				    		<div id="anchor-1" class="small-12 columns beta ha-waypoint" data-animate-down="ha-header-small" data-animate-up="ha-header-large">
								<a href="" class="button back-to-top"></a>
				    		</div>
				    		<div class="small-12 columns charlie ha-waypoint" data-animate-down="ha-header-box" data-animate-up="ha-header-small"></div>
				    		<div class="small-12 columns delta ha-waypoint" data-animate-down="ha-header-box" data-animate-up="ha-header-small">
								<div class="row">
									<div class="small-12 large-8 large-centered columns">
										<div class="row">
											<div class="small-12 large-3 columns"></div>
										</div>
										<div class="row">
											<div class="small-12 large-3 columns"></div>
										</div>
									</div>
								</div>
				    		</div>
				    		<div class="small-12 columns echo ha-waypoint" data-animate-down="ha-header-box" data-animate-up="ha-header-small"></div>
				    	</div>
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    					
					    <?php endwhile; else : ?>

					    <?php endif; ?>

    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
