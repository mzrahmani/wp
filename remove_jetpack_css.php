<?php
// remove jetpack css to keep website light
// link: https://css-tricks.com/snippets/wordpress/removing-jetpack-css/
add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );

?>
