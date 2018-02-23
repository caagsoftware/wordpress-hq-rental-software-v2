<?php

function hq_rental_wpv2_is_coming_from_step_1($post_data)
{
    return isset($post_data['hq_rental_pick_up_location'], $post_data['hq_rental_pick_up_date_time'], $post_data['hq_rental_return_location'], $post_data['hq_rental_return_date_time']);
}
function hq_rental_wpv2_is_coming_from_step_2($post_data)
{
    var_dump('step3');
    var_dump(isset($post_data['hq_rental_pick_up_location'], $post_data['hq_rental_pick_up_date_time'], $post_data['hq_rental_return_location'], $post_data['hq_rental_return_date_time'], $post_data['hq_rental_vehicle_class_id']));
    return isset($post_data['hq_rental_pick_up_location'], $post_data['hq_rental_pick_up_date_time'], $post_data['hq_rental_return_location'], $post_data['hq_rental_return_date_time'], $post_data['hq_rental_vehicle_class_id']);
}

function hq_rental_wpv2_inputs_from_last_step($post_data)
{
    $output = '';
    foreach ($post_data as $key =>  $value){
        $output .= '<input type="hidden" name="'.$key.'" value="'.$value.'">';
    }
    return $output;
}