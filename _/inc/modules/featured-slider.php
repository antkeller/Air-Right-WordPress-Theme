<?php
if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) header('Location: /'); // do not allow stanalone viewing

  $sliders = Array();
  while(have_rows('airright_featured_slider')):
    the_row();
    $sliderImage = get_sub_field('airright_featured_slider_image');
    $sliderAltText = get_sub_field('airright_featured_slider_alt_text');
    array_push($sliders, Array('image' => $sliderImage, 'alt' => $sliderAltText));
  endwhile;
?>

<div class="featured-slider">
  <div class="slide-list owl-carousel owl-theme-airright">

    <?php foreach ($sliders as $slider) : ?>
    <div class="slide-item">
      <img src="<?php echo get_template_directory_uri(); ?>/_/img/square.gif" data-src="<?php echo $slider['image']['url']; ?>" alt="<?php echo $slider['alt']; ?>" class="lazy" />
    </div><!--.slide-item -->

    <?php endforeach; ?>

  </div>
</div>
