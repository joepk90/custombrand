<?php /* Template Name: Custom Brand Page */


get_header(); ?>

<?php

$attachment_id = get_field('background_image');
$size = "full"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );
// url = $image[0];
// width = $image[1];
// height = $image[2];
?>

<div class="site-wrapper" style="background-image: url(<?php echo $image[0]; ?>);"> 

            <div class="site-wrapper-inner" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/white-overlay.png);">

            <div class="container">
            <div class="row">

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
      <h1 class="h4"><?php echo get_post_meta($post->ID, 'custom_title', true); ?></h1>
      <p><?php echo get_post_meta($post->ID, 'custom_bodycopy', true); ?></p>
      <span><a class="btn button-first" target="blank" href="<?php echo get_post_meta($post->ID, 'ctafirst_buttonurl', true); ?>" role="button"><?php echo get_post_meta($post->ID, 'ctafirst_buttontext', true); ?> <span class="plus">&#43;</span></a></span>
      <span><a class="btn button-second" target="blank" href="<?php echo get_post_meta($post->ID, 'ctasecond_buttonurl', true); ?>" role="button"><?php echo get_post_meta($post->ID, 'ctasecond_buttontext', true); ?> <span class="plus">&#43;</span></a></span>



	</div>
      </div> 
      <div class="col-xs-0 col-sm-6 col-md-8"></div> 

        </div><!-- #row -->

    </div><!-- #container -->

    </div><!-- #site-wrapper-inner -->
    </div><!-- #site-wrapper -->

<?php
// get_sidebar();
get_footer();
