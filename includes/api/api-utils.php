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

function hq_rental_wpv2_get_header_step4($post_data)
{
    $body = array();
    $user = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_USER_TOKEN);
    $tenant = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_TENANT_TOKEN);
    $final_token = base64_encode($tenant . ':' . $user);
    $args = array(
        'headers' => array(
            'Authorization' => 'Basic ' . $final_token
        )
    );
    $charges = array();
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['hq_rental_pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['hq_rental_return_date_time']);
    $body['brand_id'] = $post_data['brand_id'];
    $body['pick_up_location'] = $post_data['hq_rental_pick_up_location'];
    $body['pick_up_date'] = $pick_up_date->toDateString();
    $body['pick_up_time'] = $pick_up_date->toTimeString();
    $body['return_date'] = $return_date->toDateString();
    $body['return_time'] = $return_date->toTimeString();
    $body['brand'] = $post_data['brand_id'];
    $body['vehicle_class_id'] = $post_data['hq_rental_vehicle_class_id'];
    foreach ($post_data as $key => $value){
        $charges[] = $key.'_'.$value;
    }
    $body['additional_charges'] = $charges;
    $args['body'] = $body;
    return $args;
}

function hq_rental_wpv2_get_http_arguments(array $post_data = [])
{
    $vars = array();
    $user = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_USER_TOKEN);
    $tenant = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_TENANT_TOKEN);
    $final_token = base64_encode($tenant . ':' . $user);
    $args = array(
        'headers' => array(
            'Authorization' => 'Basic ' . $final_token
        )
    );

    if(isset($body['pick_up_date_time'])){
        $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['pick_up_date_time']);
        $vars['pick_up_date'] = $pick_up_date->toDateString();
        $vars['pick_up_time'] = $pick_up_date->toTimeString();
    }
    if(isset($body['return_date_time'])){
        $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['return_date_time']);
        $vars['return_date'] = $pick_up_date->toDateString();
        $vars['return_time'] = $pick_up_date->toTimeString();
    }
    $vars[] = $post_data;
    $args['body'] = $vars;
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
        return json_decode($response['body']);
    }
}


function hq_rental_wpv2_get_query_string_availability_step_2($post_data)
{
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['return_date_time']);
    return HQ_RENTAL_WPV2_CHECK_AVAILABILITY_STEP_2_URL . 'pick_up_date=' . $pick_up_date->toDateString() . '&pick_up_time=' . $pick_up_date->format('H:i') . '&return_date=' . $return_date->toDateString() . '&return_time=' . $return_date->format('H:i') . '&brand=' . $post_data['brand_id'] . '&pick_up_location=' . $post_data['pick_up_location'] .'&return_location=' . $post_data['return_location'] ;
}

function hq_rental_wpv2_get_query_string_availability_step_3($post_data)
{
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['return_date_time']);
    return HQ_RENTAL_WPV2_ADDITIONAL_CHARGES_STEP_3_URL . 'pick_up_date=' . $pick_up_date->toDateString() . '&pick_up_time=' . $pick_up_date->format('H:i') . '&return_date=' . $return_date->toDateString() . '&return_time=' . $return_date->format('H:i') . '&brand=' . $post_data['brand_id'] . '&pick_up_location=' . $post_data['pick_up_location'] .'&return_location=' . $post_data['return_location'] .'&vehicle_class_id=' . $post_data['vehicle_class_id'] ;
}

function hq_rental_wpv2_get_query_string_clients_step_4($post_data)
{
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['hq_rental_pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['hq_rental_return_date_time']);
    $charges_string = hq_rental_wpv2_get_query_string_arrays($post_data['hq_rental_charges']);

}

function hq_rental_wpv2_get_query_string_arrays($data_array)
{
    $output = '[';
    foreach ($data_array as $key => $value){
        $output .= $key.'_'.$value;
    }
    $output .= ']';
    var_dump($output);
    die();
    return $output;
}


function hq_rental_wpv2_get_api_calls_arguments(array $post_data = [])
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

function hq_rental_wpv2_get_query_string_from_array($data_array)
{
    $query_variables = '';
    if(!empty($data_array)){
        foreach ($data_array as $key  =>  $value) {
            $query_variables =  $key.'='.$value;
        }
    }
    return $query_variables;
}

function hq_rental_wpv2_get_post_data_step_2($post_data)
{
    $body = array();
    $user = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_USER_TOKEN);
    $tenant = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_TENANT_TOKEN);
    $final_token = base64_encode($tenant . ':' . $user);
    $args = array(
        'headers' => array(
            'Authorization' => 'Basic ' . $final_token
        )
    );
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['return_date_time']);
    $body['pick_up_location'] = $post_data['pick_up_location'];
    $body['pick_up_date'] = $pick_up_date->toDateString();
    $body['pick_up_time'] = $pick_up_date->format('H:i');
    $body['return_date'] = $return_date->toDateString();
    $body['return_time'] = $return_date->format('H:i');
    $body['brand'] = $post_data['brand_id'];
    $args['body'] = $body;
    return $args;
}

function hq_rental_wpv2_get_request_data_step_3($post_data)
{
    $body = array();
    $user = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_USER_TOKEN);
    $tenant = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_TENANT_TOKEN);
    $final_token = base64_encode($tenant . ':' . $user);
    $args = array(
        'headers' => array(
            'Authorization' => 'Basic ' . $final_token
        )
    );
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['return_date_time']);
    $body['pick_up_location'] = $post_data['pick_up_location'];
    $body['pick_up_date'] = $pick_up_date->toDateString();
    $body['pick_up_time'] = $pick_up_date->format('H:i');
    $body['return_date'] = $return_date->toDateString();
    $body['return_time'] = $return_date->format('H:i');
    $body['brand'] = $post_data['brand_id'];
    $body['vehicle_class_id'] = $post_data['vehicle_class_id'];
    $args['body'] = $body;
    return $args;
}
