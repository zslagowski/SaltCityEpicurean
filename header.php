<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GEMM_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://use.fontawesome.com/4c52521bb5.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'RapBetter-Theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<div class="row">
      <div class="col-md-12">

        <div class="sce-logo-button text-center"><h1><a href="#">SCE</a></h1></div>

        <div class="col-sm-12 text-center"><nav class="navbar text-center" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!--end navbar-header-->

                <div class="collapse navbar-collapse menu-primary" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu( array(
                        'menu'              => '',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => '',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>

                </div><!--end navbar-colapse-->
        </nav></div>

      </div><!--col-md-12-->

      <div class="gemm-footer-icons">
        <?php

            $query = new WP_Query( array( 'post_type' => 'gemm_footer_social' ) );

            if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

            ?>

            <a href="<?php the_field('gemm-sm-footer-link'); ?>" target="__blank"><i class="fa <?php the_field('gemm-footer-icon-class'); ?>" aria-hidden="true"></i></a>

            <?php endwhile; endif; wp_reset_postdata; ?>
      </div>

    </div>  <!--.row-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
