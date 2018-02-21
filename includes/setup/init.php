<?php

function hq_rental_wpv2_init()
{
	add_option( HQ_RENTAL_WPV2_USER_TOKEN, '' );
	add_option( HQ_RENTAL_WPV2_TENANT_TOKEN, '' );
	add_option( HQ_RENTAL_WPV2_DATE_FORMAT, 'YYYY/MM/DD');
}
add_action('hq_rental_wpv2_init','hq_rental_wpv2_init');