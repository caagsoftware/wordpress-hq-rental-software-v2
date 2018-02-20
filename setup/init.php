<?php

function hq_rental_wpv2_init()
{
	update_option( HQ_RENTAL_WPV2_USER_TOKEN, '' );
	update_option( HQ_RENTAL_WPV2_TENANT_TOKEN, '' );
	update_option( HQ_RENTAL_WPV2_DATE_FORMAT, 'YYYY/MM/DD');
}
add_action('hq_rental_wpv2_init','hq_rental_wpv2_init');