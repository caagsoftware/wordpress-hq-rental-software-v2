<?php
    use Carbon\Carbon;
    if(hq_rental_wpv2_is_coming_from_step_3($_POST)){
        $step_3_fields = hq_rental_wpv2_post_data_from_step_3($_POST);
        $charges_step_3 = $step_3_fields->price->selected_insurances;
        $prices = $step_3_fields->price;
        $selected_car = $step_3_fields->price->class;
        $clients = hq_rental_wpv2_get_clients_form_fields_step_4();
        $clients_fields = $clients->fields;
        $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($_POST);
        $hidden_inputs_array = hq_rental_wpv2_get_inputs_from_last_step_arrays('charges', $_POST['charges']);
        $pick_up_location_worflow = $_POST['pick_up_location_hidden'];
        $return_location_worflow = $_POST['return_location_hidden'];
        $pickup_date = Carbon::createFromFormat('Y-m-d H:i', $_POST['pick_up_date_time'],0);
        $return_date = Carbon::createFromFormat('Y-m-d H:i', $_POST['return_date_time'],0);
        $partials_data = array(
                'clients_fields'                =>  $clients_fields,
                'hidden_inputs'                 =>  $hidden_inputs,
                'hidden_inputs_array'           =>  $hidden_inputs_array,
                'clients'                       =>  $clients,
                'pick_up_location_worflow'      =>  $pick_up_location_worflow,
                'return_location_worflow'       =>  $return_location_worflow,
                'pick_up_date'                  =>  $pickup_date,
                'return_date'                   =>  $return_date,
                'charges'                       =>  $charges_step_3,
                'selected_car'                  =>  $selected_car,
                'prices'                        =>  $prices
        );
    }else{
        wp_redirect('/reservation-step-1');
    }
    get_header();
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_select2_js');
    //wp_enqueue_style('hq_rental_wpv2_select2_css');
    wp_enqueue_style('hq_rental_wpv2_intl_phones_css');
    wp_enqueue_script('hq_rental_wpv2_select2_js');
    wp_enqueue_script('hq_rental_wpv2_intl_phone_js');
    wp_enqueue_script('hq_rental_wpv2_intl_phone_utils_js');
    wp_enqueue_script('hq_rental_wpv2_app_init');
    global $post;
?>
    <style media="screen">
        .iti-flag {
            background-image: url("<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/flags.png'  ?>");
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .iti-flag {
                background-image: url("<?php echo plugin_dir_url( __FILE__ ) . 'assets/img/flags@2x.png'  ?>");
            }
        }
    </style>
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
