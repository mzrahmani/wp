function get_related_post_by_term($term_id,$tax){ 
    $args = array(
        'post_type'              => 'recipe',
        'post_status'            => array( 'published' ),
        'posts_per_page'         => '1',
        'order'                  => 'ASC',
        'orderby'                => 'rand',
        'tax_query' => array(
                            array (
                                    'taxonomy'      => $tax,
                                    'field'         => 'term_id',
                                    'terms'         => $term_id,

                                    )
                            )
                );
    return  get_posts($args);
}
