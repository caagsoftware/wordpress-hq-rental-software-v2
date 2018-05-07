<?php

use Carbon\Carbon;

/*
 * Retrieved Basic Header for Api Calls
 */
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

/*
 * Retrieved arguments for Post Request after Step 3
 */
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
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['return_date_time']);
    $body['brand_id'] = $post_data['brand_id']; 
    $body['pick_up_location'] = $post_data['pick_up_location'];
    $body['pick_up_date'] = $pick_up_date->toDateString();
    $body['pick_up_time'] = $pick_up_date->format('H:i');
    $body['return_date'] = $return_date->toDateString();
    $body['return_time'] = $return_date->format('H:i');
    $body['brand'] = $post_data['brand_id'];
    $body['vehicle_class_id'] = $post_data['vehicle_class_id'];
    foreach ($post_data as $key => $value){
        $charges[] = $key.'_'.$value;
    }
    $body['additional_charges'] = $charges;
    $args['body'] = $body;
    var_dump($body);
    die();
    return $args;
}

/*
 *
 */
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

/*
 *  Retrieved Query String for Api Calls - Decrepited
 */
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
/*
 *
 */
function hq_rental_wpv2_get_query_string_availability($data)
{
	return HQ_RENTAL_WPV2_CHECK_AVAILABILITY_ACTION . 'start_date='. $data['pick_up_date'] . ' ' . $data['pick_up_time'] . '&end_date=' . $data['return_date'] . ' ' . $data['return_time'];
}


function hq_rental_wpv2_response_handler($response)
{

    if(is_wp_error($response)){
        return array('errors'   =>  true, 'message' => $response->get_error_message());
    }else{
		$sucess_request = json_decode($response['body']);
		
        return json_decode($response['body']);
    }
}

/*
 *
 */
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
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['return_date_time']);
    $charges_string = hq_rental_wpv2_get_query_string_arrays($post_data['charges']);

}

/*
 *
 */
function hq_rental_wpv2_get_query_string_arrays($data_array)
{
    $output = '[';
    foreach ($data_array as $key => $value){
        $output .= $key.'_'.$value;
    }
    $output .= ']';
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

/*
 *
 */
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



function hq_rental_wpv2_get_query_string_from_errors($data_array)
{
    $query_variables = '?error='. urlencode(true);
    $counter = 0;
    if(!empty($data_array)) {
        foreach ($data_array as $key => $value) {
            $query_variables .= '&' . $key . '=' . urlencode($value[0]);
        }
    }
    return $query_variables;
}

/*
 *
 */
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

/*
 *
 */
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

/*
 *
 */
function hq_rental_wpv2_get_clients_field_header()
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

/*
 *
 */
function hq_rental_wpv2_get_header_new_client($post_data)
{
    $args = hq_rental_wpv2_get_basic_header();
    $body = array();
    foreach ($post_data['client'] as $key => $value){
        switch ($value['type']){
            case 'text':
                $body[$key] = $value['value'];
				break;
			case 'decimal':
                $body[$key] = $value['value'];
				break;
            case 'checkbox':
                $body[$key] = $value['value'];
				break;
            case 'textarea':
                $body[$key] = $value['value'];
				break;
			case 'countries':
				$body[$key] = $value['value'];
				break;
			case 'nationality':
				$body[$key] = $value['value'];
				break;
			case 'radio':
				$body[$key] = $value['value'];
				break;
			case 'dropdown':
				$body[$key] = $value['value'];
				break;
			case 'multiselect':
				$body[$key] = $value['value'];
				break;
			case 'date':
				$body[$key] = array(
					'day'		=>	$value['value']['day'],
					'month'		=>	$value['value']['month'],
					'year'		=>	$value['value']['year']
				);
				break;
			case 'phone':
				/*
				$body[$key] = array(
						'items'	=>	array([
							'number'		=>	$value['value']['number'],
							'cc'			=>	$value['value']['cc'],
							'ext'			=>	$value['value']['ext'],
							'country'		=>	$value['value']['country']
						])
					);*/
				break;
			case 'currencies':
				$body[$key] = $value['value'];
				break;
			case 'identification':
				$expiration = is_null($value['value']['expiration']) ? '' : $value['value']['expiration'];
				$body[$key] = array(
					'items' => array([
						'type'			=>	trim($value['value']['type']),
						'number'		=>	trim($value['value']['id_number']),
						'expires_on'	=>	$expiration
					])
				);
				break;
			case 'email':
				$body[$key] = array(
					'items' => array([
						'type'			=>	trim($value['value']['type']),
						'email'		=>	trim($value['value']['email'])
					])
				);
				break;
            default:
                $body[$key] = $value['value'];
        }
    }
    $body['category'] = $post_data['category_id'];
    $body['contact_entity'] = 'person';
    $args['body'] = $body;
    return $args;
}

function hq_rental_wpv2_get_confirmation_request_data( $post_data )
{
    $args = hq_rental_wpv2_get_basic_header();
    $body = array();
    foreach( $post_data as $key => $value ){
        if($key == 'client_id'){
            $body['customer_id'] = $value;
        }else if($key == 'brand_id'){
            $body['brand'] = $value;
        }else if( $key == 'charges' ){
        }else{
            $body[$key] = $value;
        }

    }
    $pick_up_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['pick_up_date_time']);
    $return_date = Carbon::createFromFormat('Y-m-d H:i', $post_data['return_date_time']);
    $body['pick_up_location'] = $post_data['pick_up_location'];
    $body['pick_up_date'] = $pick_up_date->toDateString();
    $body['pick_up_time'] = $pick_up_date->format('H:i');
    $body['return_date'] = $return_date->toDateString();
    $body['return_time'] = $return_date->format('H:i');
    $args['body'] = $body;
    return $args;
}

function hq_rental_wpv2_get_countries_for_dropdown()
{
    $response = wp_remote_get(HQ_RENTAL_WPV2_COUNTRIES_URL, hq_rental_wpv2_get_basic_header());
    return hq_rental_wpv2_response_handler($response);
}

function hq_rental_wpv2_get_basic_header()
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
