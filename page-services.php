<?php
/**
 * Template Name: Services Page
 **/

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>
				<div class="sce-services-page-header text-center">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>

			<?php endwhile; // End of the loop.
			?>

			<?php $query = new WP_Query( array( 
                'post_type' => 'sce_services_section'
            ) ); ?>

            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

              <div class="sce-services-page-sections">
              	<h2 class="text-center"><?php the_title();?></h2>
              	<hr>
              	<p><?php the_content(); ?></p>
              </div>
              <div class="row">
              	<div class="col-md-6 sce-services-meal-plans">
	              <h3 class="text-center"><?php the_field('sce_plan_name_1'); ?></h3>
	              <p><?php the_field('sce_plan_description_1'); ?></p>
	            </div>
	            <div class="col-md-6 sce-services-meal-plans">
	              <h3 class="text-center"><?php the_field('sce_plan_name_2'); ?></h3>
	              <p><?php the_field('sce_plan_description_2'); ?></p>
	            </div>
              </div>

            <?php endwhile; else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();