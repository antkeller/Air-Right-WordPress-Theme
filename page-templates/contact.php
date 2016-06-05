<?php
/**
 * Template Name: Contact
 */
?>
 <?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="contact-page container-fluid">
      <div class="section-content row">

        <h1 class="col-xs-12"><?php the_title(); ?></h1>

        <div class="contact-content col-xs-12">
          <?php the_content(); ?>
        </div><!-- .contact-content -->

      </div>
    </section>


	<?php endwhile; endif; ?>


<?php get_footer(); ?>
