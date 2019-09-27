<?php
//link: https://premium.wpmudev.org/blog/wordpress-image-sizes/
add_image_size( 'mzr_medium', 400, 400, true );

add_filter( 'image_size_names_choose','wpmudev_custom_image_sizes' );
function wpmudev_custom_image_sizes( $sizes ) {
return array_merge( $sizes, array(
//Add your custom sizes here
'mzr_medium' => __( 'archive pages size 400x400' ),
) );
}
?>
