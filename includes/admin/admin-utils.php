<?php

function hq_rental_wpv2_save_settings($options)
{
    update_option(HQ_RENTAL_WPV2_USER_TOKEN, $options[HQ_RENTAL_WPV2_USER_TOKEN]);
    update_option(HQ_RENTAL_WPV2_TENANT_TOKEN, $options[HQ_RENTAL_WPV2_TENANT_TOKEN]);
    update_option(HQ_RENTAL_WPV2_DATE_FORMAT, $options[HQ_RENTAL_WPV2_DATE_FORMAT]);
}

function hq_rental_wpv2_get_settings()
{
    $settings = array(
        HQ_RENTAL_WPV2_USER_TOKEN 	=> get_option(HQ_RENTAL_WPV2_USER_TOKEN),
        HQ_RENTAL_WPV2_TENANT_TOKEN => get_option(HQ_RENTAL_WPV2_TENANT_TOKEN),
        HQ_RENTAL_WPV2_DATE_FORMAT	=> get_option(HQ_RENTAL_WPV2_DATE_FORMAT)
    );  
    return $settings;
}

/*
 * Checks if the Option were properly saved
 * @param Array
 * @return bool
 */
function hq_rental_wpv2_check_settings_save($settings)
{
	return (get_option(HQ_RENTAL_WPV2_USER_TOKEN) == $settings[HQ_RENTAL_WPV2_USER_TOKEN]) and (get_option(HQ_RENTAL_WPV2_TENANT_TOKEN) == $settings[HQ_RENTAL_WPV2_TENANT_TOKEN]);
}

function hq_rental_wpv2_get_option($option)
{
    return get_option($option);
}

