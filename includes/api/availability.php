<?php



function hq_rental_wpv2_check_availability($vars)
{
	$query_string = hq_rental_wpv2_get_query_string($vars);
	$header = hq_rental_wpv2_get_header();
	$api = wp_get_remote(HQ_RENTAL_WPV2_CHECK_AVAILABILITY_ACTION + $query_string, HQ_RENTAL_WPV2_CHECK_AVAILABILITY_ACTION );
	var_dump($api);
}

