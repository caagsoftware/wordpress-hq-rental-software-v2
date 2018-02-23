<?php

function hq_rental_wpv2_api_get_locations_step_1()
{
    $response = wp_remote_get(HQ_RENTAL_WPV2_FLEETS_LOCATIONS_STEP_1_URL, hq_rental_wpv2_get_header());
    return hq_rental_wpv2_response_handler($response);
}

function hq_rental_wpv2_get_availability_step_2($post_data)
{
    $response = wp_remote_post(hq_rental_wpv2_get_query_string_availability($vars), hq_rental_wpv2_get_header());
    return hq_rental_wpv2_response_handler($response);
}