<?php
/**
 * Template Name: Products
 */
?>
 <?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="products container-fluid">
      <div class="section-content row">
        <h1 class="col-xs-12"><?php the_title(); ?></h1>
        <div class="page-copy col-xs-12">
          <?php the_content(); ?>
        </div>
				<ul class="item-list col-xs-12">
					<?php
						// get full list of products and render logos
						$args = array(
							'post_type' => 'airright_products',
							'posts_per_page' => -1,
							'orderby' => 'menu_order',
							'order' => 'ASC'
						);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							$title = get_the_title();
							$description = get_the_content();
              $image = get_field('airright_item_photo');
					?>
					<li class="item row">
            <div class="item-image-wrapper col-xs-12 col-sm-5">
              <img src="<?php echo get_template_directory_uri(); ?>/_/img/square.gif" data-src="<?php echo $image['url']; ?>" alt="<?php echo $title; ?>" class="lazy" />
            </div><!-- .item-image-wrapper -->
            <div class="item-copy-wrapper col-xs-12 col-sm-7">
              <h3><?php echo $title; ?></h3>
              <p class="item-copy"><?php echo $description; ?></p>
            </div><!-- .item-copy-wrapper -->
          </li>

					<?php
						endwhile;
						wp_reset_query();
					?>
				</ul><!-- .item-list -->
      </div>
    </section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
