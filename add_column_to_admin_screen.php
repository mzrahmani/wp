//link:https://code.tutsplus.com/articles/quick-tip-add-custom-columns-in-wordpress-manage-screens--wp-25457
function custom_column_header( $columns ){
    $columns['img'] = 'Image';
    return $columns;
}
function custom_column_content( $value, $column_name, $term_id ){
    if ($column_name === 'img') {
        $columns = '<img style="max-height:80px;" src="'.wp_get_attachment_url( get_term_meta ( $term_id, 'category-image-id', true ) ).'" >';
    }
    return $columns;
}
add_filter( "manage_edit-cuisine_columns", 'custom_column_header', 10);
add_action( "manage_cuisine_custom_column", 'custom_column_content', 10, 3);
