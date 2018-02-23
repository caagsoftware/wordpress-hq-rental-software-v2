<?php

use Carbon\Carbon;
function hq_rental_wpv2_get_header()
{
	$user = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_USER_TOKEN);
	$tenant = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_TENANT_TOKEN);
	$final_token = base64_encode($tenant . ':' . $user);
	$args = array(
		    'headers' => array(
		        'Authorization' => 'Basic ' . $final_token
		    )
		);
	return $args;
}

function hq_rental_wpv2_get_query_string($vars)
{
	$query_string = '';
	$counter = 1;
	foreach ($vars as $key => $value) {
		if(count($vars) == $counter){
			$query_string .= $key .'='.$value;	
		}else{
			$query_string .= $key .'='.$value.'&';	
		}
		$counter++;
	}
	return $query_string;
}
function hq_rental_wpv2_get_query_string_availability($data)
{
	return HQ_RENTAL_WPV2_CHECK_AVAILABILITY_ACTION . 'start_date='. $data['pick_up_date'] . ' ' . $data['pick_up_time'] . '&end_date=' . $data['return_date'] . ' ' . $data['return_time'];
}


function hq_rental_wpv2_response_handler($response)
{
    if(is_wp_error($response)){
        return array('errors'   =>  true, 'message' => $response->get_error_message());
    }else{
        return json_decode($response['body']    );
    }
}


function hq_rental_wpv2_get_query_string_availability_step_2($post_data)
{
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['hq-rental-pick-up-date-time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['hq_rental_return_date_time']);
    return HQ_RENTAL_WPV2_CHECK_AVAILABILITY_STEP_2_URL . 'pick_up_date=' . $pick_up_date->toDateString() . '?pick_up_time=' . $pick_up_date->toTimeString() . 'return_date=' . $return_date->toDateString() . '?return_time=' . $return_date->toTimeString() . '?brand=' . $post_data['brand_id'];

}