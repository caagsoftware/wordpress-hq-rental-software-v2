<?php 


function hq_rental_wpv2_get_header()
{
	$user = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_USER_TOKEN);
	$tenant = hq_rental_wpv2_get_option(HQ_RENTAL_WPV2_TENANT_TOKEN);
	$args = array(
		    'headers' => array(
		        'Authorization' => 'Basic ' . $final_token
		    )
		);
	return $args;
};

function hq_rental_wpv2_get_query_string($vars)
{
	$query_string = '';
	$counter = 1;
	foreach ($vars as $key => $value) {
		if(count($vars) == counter){
			$query_string .= $key .'='.$value;	
		}else{
			$query_string .= $key .'='.$value.'&';	
		}
		$counter++;
	}
	return $query_string;
}

