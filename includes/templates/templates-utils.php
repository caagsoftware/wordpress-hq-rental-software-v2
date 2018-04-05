<?php

/*
 *
 */

function hq_rental_wpv2_is_coming_from_step_1($post_data)
{
    return isset($post_data['pick_up_location'], $post_data['pick_up_date_time'], $post_data['return_location'], $post_data['return_date_time']);
}
function hq_rental_wpv2_is_coming_from_step_2($post_data)
{
    return isset($post_data['pick_up_location'], $post_data['pick_up_date_time'], $post_data['return_location'], $post_data['return_date_time'], $post_data['vehicle_class_id']);
}

/*
 *
 */
function hq_rental_wpv2_is_coming_from_step_3($post_data)
{
    return isset($post_data['pick_up_location'], $post_data['pick_up_date_time'], $post_data['return_location'], $post_data['return_date_time'], $post_data['vehicle_class_id'], $post_data['charges']);
}

/*
 *
 */
function hq_rental_wpv2_is_coming_from_step_4($post_data)
{
    return isset($post_data['pick_up_location'], $post_data['pick_up_date_time'], $post_data['return_location'], $post_data['return_date_time'], $post_data['vehicle_class_id'], $post_data['charges'], $post_data['category_id'], $post_data['hq_comes_from_step_4']);
}

/*
 *
 */
function hq_rental_wpv2_inputs_from_last_step($post_data)
{
    $output = '';
    foreach ($post_data as $key =>  $value){
        if(! is_array($value) ){
            $output .= '<input type="hidden" name="'.$key.'" value="'.$value.'">';
        }
    }
    return $output;
}

function hq_rental_wpv2_inputs_from_last_step_formatting_step_4($post_data)
{
    $output = '';
    foreach ($post_data as $key =>  $value){
        if(! is_array($value) ){
            $output .= '<input type="hidden" name="hq_flow['.$key.']" value="'.$value.'">';
        }
    }
    return $output;
}

/*
 *
 */
function hq_rental_wpv2_get_inputs_from_last_step_arrays($arrayName, $post_data){
    $output = '';
    foreach ($post_data as $key => $value) {
        $output .= '<input type="hidden" name="'. $arrayName .'['. $key .']" value="'. $value .'">';
    }
    return $output;
}

/*
 *
 */
function hq_rental_wpv2_retrieve_errors_and_redirect($redirect_page, $errors)
{
    $query_string = '';
    foreach ($errors as $error){
        $query_string .= $error;
    }
    wp_redirect($redirect_page);
    exit;
}

function hq_rental_wpv2_is_text_input_clients($field)
{
    return ($field->type == 'text' or $field->type == 'email' or $field->type == 'users');
}

function hq_rental_wpv2_get_banner()
{
    global $post;

}

function hq_rental_wpv2_get_partial($partial_name, $data = [])
{
    $default_file = HQ_RENTAL_WPV2_BASE_DIR . '/includes/templates/partials/' . $partial_name . '.php';
    $custom_file = get_stylesheet_directory() . '/hq-rental-partials/'. $partial_name .'.php';
    if( hq_rental_wpv2_its_rental_page() ) {
        if (file_exists($custom_file)) {
            include $custom_file;
        } else {
            include $default_file;
        }
    }
}

function hq_rental_wpv2_its_rental_page()
{
    global $post;
    return get_post_meta( $post->ID , HQ_RENTAL_WPV2_IS_HQ_PAGE_META);
}