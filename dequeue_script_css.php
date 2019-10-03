<?php
// speed up the website by only enqueue th right js and css files
function inf_remove_junk() {
    global $post;
    if (!is_admin() ) {
        //contact form 7
        if($post->ID == 13549 ){
        wp_dequeue_style('contact-form-7');
        wp_dequeue_style('contact-form-7-rtl');
        wp_dequeue_script('contact-form-7');
        }
        if(!is_front_page() ){
        // Slider revolution 
        wp_dequeue_script('tp-tools');
        wp_dequeue_script('revmin');
        wp_dequeue_style('rs-plugin-settings');
        }
     }

}

add_action( 'wp_enqueue_scripts', 'inf_remove_junk' );
?>
