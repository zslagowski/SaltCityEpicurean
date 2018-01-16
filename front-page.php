<?php get_header(); ?>

<section id="gemm-front-header-image">
    <?php $query = new WP_Query( array( 
      'post_type' => 'sce_home_sections',
      'name'      => 'Header Background'
    ) ); ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="gemm-homepage-welcome-msg-bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
              <div class="container gemm-homepage-welcome-msg text-center">
                <?php the_content(); ?>
              </div> <!--.container -->
    <?php endwhile; endif; wp_reset_postdata(); ?>
            
              <div class="sce-photostrip-section text-center"> <!--photostrip section begin-->
                <?php $query = new WP_Query( array( 
                    'post_type' => 'sce_home_sections',
                    'name'      => 'Photostrip Section'
                  ) ); ?>

                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                  <div class="sce-photostrip-row">
                    <div class="sce-photostrip-image-container">
                      <img src="<?php the_field('image_1_photostrip'); ?>"/>
                    </div>
                    <div class="sce-photostrip-image-container">
                      <img src="<?php the_field('image_2_photostrip'); ?>"/>
                    </div>
                    <div class="sce-photostrip-image-container">
                      <img src="<?php the_field('image_3_photostrip'); ?>"/>
                    </div>
                    <div class="sce-photostrip-image-container">
                      <img src="<?php the_field('image_4_photostrip'); ?>"/>
                    </div>
                    <div class="sce-photostrip-image-container">
                      <img src="<?php the_field('image_5_photostrip'); ?>"/>
                    </div>
                  </div>

                <?php endwhile; else : ?>
                  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; wp_reset_postdata(); ?>
              </div> <!-- photostrip section end -->
            </div> <!--.rb-homepage-welcome-msg -->    
</section>

<section class="sce-about" id="about">
   <?php $query = new WP_Query( array( 
      'post_type' => 'sce_home_sections',
      'name'      => 'One of Utah\'s Premiere Culinary Service Providers'
   ) ); ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="container">
        <div class="sce-about-content text-center">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div><!--.sce-about-content-->
      </div><!--container-->

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; wp_reset_postdata(); ?>
</section>

<section class="sce-home-services text-center">
  <?php $query = new WP_Query( array( 
      'post_type' => 'sce_home_sections',
      'name'      => 'Our Services'
   ) ); ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="container">
        <div class="sce-home-services-content text-center">
          <h2><?php the_title(); ?></h2>
          <a href="<?php the_field('sce_link_to_page'); ?>"><div class="sce-home-services-button">Menu</div></a>
        </div><!--.sce-home-services-content-->
        <div class="sce-home-services-images">
          <div class="sce-home-services-image-container">
            <img src="<?php the_field('image_1_photostrip'); ?>"/>
          </div>
          <div class="sce-home-services-image-container">
            <img src="<?php the_field('image_2_photostrip'); ?>"/>
          </div>
        </div>
      </div><!--container-->

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; wp_reset_postdata(); ?>
</section>

<div class="sce-gold-divider"></div>

<section class="sce-meet-charlotte" id="meet-charlotte" style="background-image: url('http://localhost/saltcityepicurean/wp-content/uploads/2018/01/SCE_Pattern.png'); background-size: cover; background-repeat: no-repeat;">
  <?php $query = new WP_Query( array( 
      'post_type' => 'sce_home_sections',
      'name'      => 'Meet Charlotte'
  ) ); ?>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="container">
        
        <div class="sce-meet-charlotte-content">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div><!--.sce-meet-charlotte-content-->
        <div class="sce-meet-charlotte-image"><img src="<?php the_post_thumbnail_url(); ?>"/></div>

      </div><!--container-->

    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; wp_reset_postdata(); ?>
</section>


<?php get_footer(); ?>
