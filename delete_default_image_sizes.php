<?php
// link: https://wpbeaches.com/remove-wordpress-default-image-sizes/
add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );
// Remove default image sizes here. 
function prefix_remove_default_images( $sizes ) {
 unset( $sizes['thumbnail']); // 150px
 unset( $sizes['medium']); // 300px
 unset( $sizes['large']); // 1024px
 unset( $sizes['medium_large']); // 768px
 return $sizes;
}
// Disable WordPRess responsive srcset images
add_filter('max_srcset_image_width', create_function('', 'return 1;'));

?>
