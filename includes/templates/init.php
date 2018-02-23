<?php
define('HQ_RENTAL_WPV2_IS_HQ_PAGE_META','hq_rental_wpv2_is_hq_rental_page');
require_once('templates-utils.php');
/*
 * Manage the Template Display
 * Overrides behavior for Template Display
 */
function hq_rental_wpv2_template_hierarchy( $template ) {
    global $post;
    $custom_template_file = 'page-'.$post->post_name.'.php';
    // Check if a custom template exists in the theme folder, if not, load the plugin template file
    if(get_post_meta( $post->ID , HQ_RENTAL_WPV2_IS_HQ_PAGE_META)){
        if ( $theme_file = locate_template( array(  custom_template_file ) ) ) {
            $file = $theme_file;
        }
        else {
            $file = HQ_RENTAL_WPV2_BASE_DIR . '/includes/templates/' . $custom_template_file;
        }
        return $file;
    }
    return $template;
}
add_filter( 'template_include', 'hq_rental_wpv2_template_hierarchy' );