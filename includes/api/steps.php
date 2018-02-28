<?php

/*
 * Retrieved Information Regarding the Step 1 of the Reservation Flow
 * @return
 */
function hq_rental_wpv2_api_get_locations_step_1()
{
    $response = wp_remote_get(HQ_RENTAL_WPV2_FLEETS_LOCATIONS_STEP_1_URL, hq_rental_wpv2_get_header());
    return hq_rental_wpv2_response_handler($response);
}

/*
 *
 */
function hq_rental_wpv2_get_availability_step_2($post_data)
{
    $response = wp_remote_post(HQ_RENTAL_WPV2_CHECK_AVAILABILITY_STEP_2_URL, hq_rental_wpv2_get_post_data_step_2($post_data));
    //$response = wp_remote_post(hq_rental_wpv2_get_query_string_availability_step_2($post_data), hq_rental_wpv2_get_header());
    return hq_rental_wpv2_response_handler($response);
}

/*
 *
 */
function hq_rental_wpv2_get_available_charges_step_3($post_data)
{
    $response = wp_remote_get(HQ_RENTAL_WPV2_ADDITIONAL_CHARGES_STEP_3_URL, hq_rental_wpv2_get_request_data_step_3($post_data));
    return hq_rental_wpv2_response_handler($response);
}

/*
 *
 */
function hq_rental_wpv2_get_clients_step_4($post_data)
{
    $response = wp_remote_post(HQ_RENTAL_WPV2_CLIENTS_4_URL, hq_rental_wpv2_get_header_step4($post_data));
    return hq_rental_wpv2_response_handler($response);
}