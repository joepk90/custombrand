<?php /* Template Name: Custom Brand Page */


get_header(); ?>

<div class="col-xs-12 col-sm-6 col-md-4">
        <?php

$attachment_id = get_field('custom_logo');
$size = "full"; // (thumbnail, medium, large, full or custom size)

$image = wp_get_attachment_image_src( $attachment_id, $size );
// url = $image[0];
// width = $image[1];
// height = $image[2];
?>
<img class="img-responsive" src="<?php echo $image[0]; ?>" />
      <div class="content">
      <h1 class="h4"><?php echo get_post_meta($post->ID, 'custom_brand', true); ?></h1>
      <p><?php echo get_post_meta($post->ID, 'custom_intro', true); ?></p>
      <p class="small"><?php echo get_post_meta($post->ID, 'custom_about', true); ?></p>
      <span><a class="btn button-read" href="#" role="button">READ MORE <span class="plus">&#43;</span></a></span>
      <span><a class="btn button-contact" href="#" role="button">GET IN TOUCH <span class="plus">&#43;</span></a></span>



	</div>
      </div> 
      <div class="col-xs-0 col-sm-6 col-md-8"></div> 

<?php
// get_sidebar();
get_footer();
