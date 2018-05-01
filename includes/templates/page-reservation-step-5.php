<?php
if(hq_rental_wpv2_is_coming_from_step_4($_POST) and $_POST['hq_comes_from_step_4'] == '1'){
        $final_data = hq_rental_wpv2_create_new_client_from_step_4($_POST);
        $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($final_data['reservation']);
        $hidden_inputs_array = hq_rental_wpv2_get_inputs_from_last_step_arrays('charges', $final_data['reservation']['charges']);
        $partials_data = array(
                'hidden_inputs'         =>  $hidden_inputs,
                'hidden_inputs_array'   =>  $hidden_inputs_array,
                'reservation'           =>  $final_data['reservation'],
                'client'                =>  $final_data['client']
        );
}else{
    wp_redirect('/reservation-step-1');
    exit;
}
get_header();
wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
wp_enqueue_script('hq_rental_wpv2_app_init');
wp_enqueue_script('hq_rental_wpv2_select2_js');
wp_enqueue_style('hq_rental_wpv2_select2_css');
?>
    <div id="main">
        <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
            <?php hq_rental_wpv2_get_partial('banner', $partials_data); ?>
        </div>
        <div class="stm-reservation-archive hq-rental-reservation-wrapper">
            <?php hq_rental_wpv2_get_partial('step-5-confirmation-form', $partials_data); ?>
        </div>

    </div>
<?php
get_footer();
