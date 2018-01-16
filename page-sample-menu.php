<?php
/**
 * Template Name: Sample Menu Page
 **/

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>
				<div class="sce-sample-menu-header text-center">
					<h1><?php the_title(); ?></h1>
				</div>

			<?php endwhile; // End of the loop.
			?>

			<div class="sce-sample-menu-container container">

				<?php $query = new WP_Query( array( 
	                'post_type' => 'sce_sample_menu'
	            ) ); ?>

	            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

	              		<div class="col-md-6 text-center">
	          				<h2><?php the_title(); ?></h2>
	              			<p><?php the_field('sce_food_choices'); ?></p>
	              		</div>

	            <?php endwhile; else : ?>
	              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	            <?php endif; wp_reset_postdata(); ?>

            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();