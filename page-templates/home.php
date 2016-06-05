<?php
/**
 * Template Name: Home Page
 */
?>
 <?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="home-page container-fluid">
      <div class="section-content row">
        <h1 class="mission-title col-xs-12">Air Right Products and Services LLC is a factory distributor and representative for multiple air pollution control equipment product lines.</h1>
        <div class="home-page-banner col-xs-12 col-sm-10 col-sm-offset-1">

          <?php include get_template_directory() . '/_/inc/modules/featured-slider.php'; ?>

        </div><!-- .home-page-image -->
        <div class="home-page-mission-statement col-xs-12">
          <?php the_content(); ?>
        </div><!-- .home-page-mission-statement -->
      </div>
    </div><!-- .home-page -->

	<?php endwhile; endif; ?>


<?php get_footer(); ?>
