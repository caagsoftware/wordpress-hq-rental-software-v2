<?php


function hq_rental_wpv2_get_settings()
{
	$settings = [];
	array_push( $settings, get_option(HQ_RENTAL_WPV2_USER_TOKEN, '') );
	array_push( $settings, get_option(HQ_RENTAL_WPV2_TENANT_TOKEN, '') );
	array_push( $settings, get_option(HQ_RENTAL_WPV2_DATE_FORMAT, ''));
	return $settings;
}