<?php
$per_page= 16;
$offset = ( $page-1 ) * $per_page;
$terms_args = array(
    'taxonomy' => $taxonomy_slug,
    'hide_empty' => false,
    'number' => $per_page,
    'offset' => $offset 
);
$terms = get_terms( $terms_args );
$total_terms = wp_count_terms( $taxonomy_slug );
$pages = ceil($total_terms/$per_page);
?>
