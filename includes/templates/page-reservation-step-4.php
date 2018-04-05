<?php
if(hq_rental_wpv2_is_coming_from_step_3($_POST)){
    $step_3_fields = hq_rental_wpv2_post_data_from_step_3($_POST);
    $clients = hq_rental_wpv2_get_clients_form_fields_step_4();
    $clients_fields = $clients->fields;
    //var_dump($clients_fields);
    $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($_POST);
    $hidden_inputs_array = hq_rental_wpv2_get_inputs_from_last_step_arrays('charges', $_POST['charges']);
    $partials_data = array(
            'clients_fields'        =>  $clients_fields,
            'hidden_inputs'         =>  $hidden_inputs,
            'hidden_inputs_array'   =>  $hidden_inputs_array,
            'clients'               =>  $clients
    );
}else{
    wp_redirect('/reservation-step-1');
}
get_header();
wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
wp_enqueue_script('hq_rental_wpv2_app_init');
wp_enqueue_script('hq_rental_wpv2_select2_js');
wp_enqueue_style('hq_rental_wpv2_select2_css');
global $post;
?>
    <div id="main">
        <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
            <?php hq_rental_wpv2_get_partial('banner', $partials_data)?>
        </div>
        <div class="stm-reservation-archive hq-rental-reservation-wrapper">
            <?php hq_rental_wpv2_get_partial('step-4-client-form', $partials_data)?>
        </div>

        <div class="stm-reservation-archive">

    </div>
    </div>
<?php
get_footer();