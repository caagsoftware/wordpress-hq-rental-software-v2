<?php

/*
 * Define Reservation Pages Names and Slug
 */
define('HQ_RENTAL_WPV2_RESERVATION_STEP_1_PAGE_TITLE','Reservations Step 1');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_1_SLUG','reservation-step-1');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_2_PAGE_TITLE','Reservations Step 2');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_2_SLUG','reservation-step-2');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_3_PAGE_TITLE','Reservations Step 3');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_3_SLUG','reservation-step-3');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_4_PAGE_TITLE','Reservations Step 4');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_4_SLUG','reservation-step-4');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_5_PAGE_TITLE','Reservations Step 5');
define('HQ_RENTAL_WPV2_RESERVATION_STEP_5_SLUG','reservation-step-5');
define('HQ_RENTAL_WPV2_RESERVATION_CONFIRMATION_PAGE_TITLE','Confirmation');
define('HQ_RENTAL_WPV2_RESERVATION_CONFIRMATION_PAGE_SLUG','confirmation');
define('HQ_RENTAL_WPV2_AVAILABILITY_PAGE_TITLE','Availability Check');
define('HQ_RENTAL_WPV2_AVAILABILITY_PAGE_SLUG','availability');

/*
 * Creates Plugin Pages
 */
function hq_rental_wpv2_create_system_pages(){
    if( ! hq_rental_wpv2_exists_hq_page_by_name_and_title(HQ_RENTAL_WPV2_AVAILABILITY_PAGE_SLUG, HQ_RENTAL_WPV2_AVAILABILITY_PAGE_TITLE) ){
        $args_avalability = array(
            'post_name'     =>  HQ_RENTAL_WPV2_AVAILABILITY_PAGE_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_AVAILABILITY_PAGE_TITLE,
            'post_type'     =>  'page',
            'post_status'   =>  'publish'
        );
        $id_availability = wp_insert_post($args_avalability);
        if ( $id_availability != 0 ) {
            update_post_meta( $id_availability,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
        }
    }

    if( ! hq_rental_wpv2_exists_hq_page_by_name_and_title(HQ_RENTAL_WPV2_RESERVATION_STEP_1_SLUG, HQ_RENTAL_WPV2_RESERVATION_STEP_1_PAGE_TITLE) ){
        $args_step_1 = array(
            'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_1_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_1_PAGE_TITLE,
            'post_type'     =>  'page',
            'post_status'   =>  'publish'
        );
        $id_step_1 = wp_insert_post($args_step_1);
        if ( $id_step_1 != 0 ) {
            update_post_meta( $id_step_1,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
        }
    }

    if( !hq_rental_wpv2_exists_hq_page_by_name_and_title(HQ_RENTAL_WPV2_RESERVATION_STEP_2_SLUG, HQ_RENTAL_WPV2_RESERVATION_STEP_2_PAGE_TITLE) ){
        $args_step_2 = array(
            'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_2_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_2_PAGE_TITLE,
            'post_type'     =>  'page',
            'post_status'   =>  'publish'
        );
        $id_step_2 = wp_insert_post($args_step_2);
        if ( $id_step_2 != 0 ) {
            update_post_meta( $id_step_2,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
        }
    }

    if( !hq_rental_wpv2_exists_hq_page_by_name_and_title(HQ_RENTAL_WPV2_RESERVATION_STEP_3_SLUG, HQ_RENTAL_WPV2_RESERVATION_STEP_3_PAGE_TITLE) ){
        $args_step_3 = array(
            'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_3_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_3_PAGE_TITLE,
            'post_type'     =>  'page',
            'post_status'   =>  'publish'
        );
        $id_step_3 = wp_insert_post($args_step_3);
        if ( $id_step_3 != 0 ) {
            update_post_meta( $id_step_3,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
        }
    }

    if( ! hq_rental_wpv2_exists_hq_page_by_name_and_title(HQ_RENTAL_WPV2_RESERVATION_STEP_4_SLUG, HQ_RENTAL_WPV2_RESERVATION_STEP_4_PAGE_TITLE ) ){
        $args_step_4 = array(
            'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_4_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_4_PAGE_TITLE,
            'post_type'     =>  'page',
            'post_status'   =>  'publish'
        );
        $id_step_4 = wp_insert_post($args_step_4);
        if ( $id_step_4 != 0 ) {
            update_post_meta( $id_step_4,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
        }
    }

    if( ! hq_rental_wpv2_exists_hq_page_by_name_and_title( HQ_RENTAL_WPV2_RESERVATION_STEP_5_SLUG, HQ_RENTAL_WPV2_RESERVATION_STEP_5_PAGE_TITLE) ){
        $args_step_5 = array(
            'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_5_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_5_PAGE_TITLE,
            'post_type'     =>  'page',
            'post_status'   =>  'publish'
        );
        $id_step_5 = wp_insert_post($args_step_5);
        if ( $id_step_5 != 0 ) {
            update_post_meta( $id_step_5,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
        }
    }

    if( ! hq_rental_wpv2_exists_hq_page_by_name_and_title(HQ_RENTAL_WPV2_RESERVATION_CONFIRMATION_PAGE_SLUG, HQ_RENTAL_WPV2_RESERVATION_CONFIRMATION_PAGE_TITLE) ){
        $args_confirmation = array(
            'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_CONFIRMATION_PAGE_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_CONFIRMATION_PAGE_TITLE,
            'post_type'     =>  'page',
            'post_status'   =>  'publish'
        );
        $id_confirmation_page = wp_insert_post($args_confirmation);
        if ( $id_confirmation_page != 0 ) {
            update_post_meta( $id_step_5,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
        }
    }
}

/*
 * Creates Api User Token and Tenant Token Options on Wordpress
 */
function hq_rental_wpv2_create_settings_data()
{
    if(! get_option(HQ_RENTAL_WPV2_USER_TOKEN)){
        add_option(HQ_RENTAL_WPV2_USER_TOKEN, '');
    }
    if(! get_option(HQ_RENTAL_WPV2_TENANT_TOKEN) ){
        add_option(HQ_RENTAL_WPV2_TENANT_TOKEN, '');
    }
    if(! get_option(HQ_RENTAL_WPV2_DATE_FORMAT)){
        add_option( HQ_RENTAL_WPV2_DATE_FORMAT, 'Y-m-d H:i');
    }
}

/*
 * Checks if the Plugin Pages Are Created using Page Name and Title
 */
function hq_rental_wpv2_exists_hq_page_by_name_and_title($name, $title)
{
    $args_search = array(
        'name'     =>  $name,
        'title'    =>  $title,
        'post_type'     =>  'page',
        'post_status'   =>  'publish',
        'meta_key'      =>   HQ_RENTAL_WPV2_IS_HQ_PAGE_META,
        'meta_value'    =>  true
    );
    $query = new WP_Query( $args_search );
    return ! empty( $query->posts );
}
