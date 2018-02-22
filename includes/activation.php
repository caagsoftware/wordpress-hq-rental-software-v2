<?php
/*
 *
 */
define('HQ_RENTAL_WPV2_AVAILABILITY_PAGE_TITLE','Availability Check');
define('HQ_RENTAL_WPV2_AVAILABILITY_PAGE_SLUG','availability');

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


function hq_rental_wpv2_create_system_pages(){
    $args_avalability = array(
            'post_name'     =>  HQ_RENTAL_WPV2_AVAILABILITY_PAGE_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_AVAILABILITY_PAGE_TITLE,
            'post_type'     =>  'page',
            'post_status'   =>  'publish'
    );
    $args_step_1 = array(
        'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_1_SLUG,
        'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_1_PAGE_TITLE,
        'post_type'     =>  'page',
        'post_status'   =>  'publish'
    );
    $args_step_2 = array(
        'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_2_SLUG,
        'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_2_PAGE_TITLE,
        'post_type'     =>  'page',
        'post_status'   =>  'publish'
    );
    $args_step_3 = array(
        'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_3_SLUG,
        'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_3_PAGE_TITLE,
        'post_type'     =>  'page',
        'post_status'   =>  'publish'
    );
    $args_step_4 = array(
        'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_4_SLUG,
        'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_4_PAGE_TITLE,
        'post_type'     =>  'page',
        'post_status'   =>  'publish'
    );
    $args_step_5 = array(
        'post_name'     =>  HQ_RENTAL_WPV2_RESERVATION_STEP_5_SLUG,
        'post_title'    =>  HQ_RENTAL_WPV2_RESERVATION_STEP_5_PAGE_TITLE,
        'post_type'     =>  'page',
        'post_status'   =>  'publish'
    );
    $id_availability = wp_insert_post($args_avalability);
    $id_step_1 = wp_insert_post($args_step_1);
    $id_step_2 = wp_insert_post($args_step_2);
    $id_step_3 = wp_insert_post($args_step_3);
    $id_step_4 = wp_insert_post($args_step_4);
    $id_step_5 = wp_insert_post($args_step_5);
    if ( $id_availability != 0 ) {
        update_post_meta( $id_availability,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
    }
    if ( $id_step_1 != 0 ) {
        update_post_meta( $id_step_1,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
    }
    if ( $id_step_2 != 0 ) {
        update_post_meta( $id_step_2,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
    }
    if ( $id_step_3 != 0 ) {
        update_post_meta( $id_step_3,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
    }
    if ( $id_step_4 != 0 ) {
        update_post_meta( $id_step_4,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
    }
    if ( $id_step_5 != 0 ) {
        update_post_meta( $id_step_5,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
    }
}
function hq_rental_wpv2_create_settings_data()
{
    add_option(HQ_RENTAL_WPV2_USER_TOKEN, '');
    add_option(HQ_RENTAL_WPV2_TENANT_TOKEN, '');
}
