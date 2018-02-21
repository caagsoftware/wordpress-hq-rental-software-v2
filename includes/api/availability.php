<?php



function hq_rental_wpv2_api_check_availability($vars)
{
	$query_string = hq_rental_wpv2_get_query_string($vars);
	$header = hq_rental_wpv2_get_header();
	$api = wp_remote_get(hq_rental_wpv2_get_query_string_availability($vars), $header );
	return json_decode($api['body']);
}

