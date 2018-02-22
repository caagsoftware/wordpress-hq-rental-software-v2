<?php
define('HQ_RENTAL_WPV2_AVAILABILITY_PAGE_TITLE','Availability Check');
define('HQ_RENTAL_WPV2_AVAILABILITY_PAGE_SLUG','availability');

function hq_rental_wpv2_create_system_pages(){
    $args_avalability = array(
            'post_name'     =>  HQ_RENTAL_WPV2_AVAILABILITY_PAGE_SLUG,
            'post_title'    =>  HQ_RENTAL_WPV2_AVAILABILITY_PAGE_TITLE
    );
    $id = wp_insert_post($args_avalability);
    if( $id != 0){
        update_post_meta( $id,HQ_RENTAL_WPV2_IS_HQ_PAGE_META, true);
    }
}