<?php

/*
 * Manage the Template Display
 * Overrides behavior for Template Display
 */
function hq_rental_wpv2_template_hierarchy( $template ) {
    global $post;
    $template = 'page-'.$post->post_name.'.php';
    // Check if a custom template exists in the theme folder, if not, load the plugin template file
    if ( $theme_file = locate_template( array(  $template ) ) ) {
        $file = $theme_file;
    }
    else {
        $file = HQ_RENTAL_WPV2_BASE_DIR . '/includes/templates/' . $template;
    }
    return $file;
}
add_filter( 'template_include', 'hq_rental_wpv2_template_hierarchy' );