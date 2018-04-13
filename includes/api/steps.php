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
function hq_rental_wpv2_post_data_from_step_3($post_data)
{
    $response = wp_remote_post(HQ_RENTAL_WPV2_ADDITIONAL_CHARGES_STEP_4_URL, hq_rental_wpv2_get_header_step4($post_data));
    return hq_rental_wpv2_response_handler($response);
}

/*
 *
 */
function hq_rental_wpv2_get_clients_form_fields_step_4()
{
    $response = wp_remote_get(HQ_RENTAL_WPV2_CLIENTS_STEP_4_URL, hq_rental_wpv2_get_clients_field_header());
    return hq_rental_wpv2_response_handler($response);
}

/*
 *
 */
function hq_rental_wpv2_create_new_client_from_step_4($post_data)
{
    //All validation Regarding The creation of the contact
    $link = 'https://api.caagcrm.com/api/contacts/categories/' . $post_data['category_id'] . '/contacts';
    $arguments = hq_rental_wpv2_get_header_new_client($post_data);
    $response = wp_remote_post( $link, $arguments );
    $data_response = array(
        'reservation'   =>  $post_data,
        'client'  =>  json_decode($response['body'])
    );
    return $data_response;
}

function hq_rental_wpv2_book_confirmation($post_data)
{
    $response = wp_remote_post(HQ_RENTAL_WPV2_CONFIRMATION_URL, hq_rental_wpv2_get_confirmation_request_data($post_data));
    return hq_rental_wpv2_response_handler($response);
}
