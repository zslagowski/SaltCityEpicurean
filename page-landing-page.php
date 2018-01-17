<?php
/**
 * Template Name: Landing Page Template
 **/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="sce-landing-page-header row text-center" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
					<div class="col-md-7">

						<div class="sce-top-pro text-center"> 
							<img ng-src="https://static7.thumbtackstatic.com/media/pages/profile/best-of/best-of-2016.png" src="https://static7.thumbtackstatic.com/media/pages/profile/best-of/best-of-2016.png"> 
						</div>
						<h1>
							Boutique Catering for<br> 
							Your <?php the_title(); ?> Event
						</h1>
						
					</div>
					<div class="col-md-5 sce-landing-page-top-form">
						<?php Ninja_Forms()->display( 3 ); ?>
					</div>
				</div>					

			<?php endwhile; // End of the loop.?>
			

			<div class="sce-landing-page-tesimonials container">

            	<h2 class="text-center">Testimonials</h2>

				<?php $query = new WP_Query( array( 
	                'post_type' => 'sce_testimonials'
	            ) ); ?>

	            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	            	
	          		<div class="col-sm-12">
	          			<div class="row">
	          				<div class="col-md-3  col-sm-4 text-center">
		          				<div class="sce-testimonials-image-container" style="background: url(<?php the_post_thumbnail_url();?>) 50% 50% no-repeat;"></div>
	          				</div>
		          			<div class="col md-9 col-sm-8">
		          				<h3><?php the_title(); ?></h3>
		          				<div class="sce-testimonial-content">
		          					<?php the_content(); ?>
		          					<i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
		          				</div>

		          			</div>
	          			</div>
	          		</div>

	            <?php endwhile; endif; wp_reset_postdata(); ?>
			</div>

			<div class="sce-landing-page-contact container">
				<?php Ninja_Forms()->display( 4 ); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();