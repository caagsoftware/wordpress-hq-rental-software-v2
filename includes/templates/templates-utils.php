<?php

function hq_rental_wpv2_is_coming_from_step_1()
{
    return isset($_POST['hq_rental_pick_up_location'], $_POST['hq_rental_pick_up_date_time'], $_POST['hq_rental_return_location'], $_POST['hq_rental_return_date_time']);
}
function hq_rental_wpv2_is_coming_from_step_2()
{
    return isset($_POST['hq_rental_pick_up_location'], $_POST['hq_rental_pick_up_date_time'], $_POST['hq_rental_return_location'], $_POST['hq_rental_return_date_time'], $_POST['vehicle_class_id']);
}

function hq_rental_wpv2_inputs_from_last_step($post_data)
{
    $output = '';
    foreach ($post_data as $key =>  $value){
        $output .= '<input type="hidden" name="'.$key.'" value="'.$value.'">';
    }
    return $output;
}