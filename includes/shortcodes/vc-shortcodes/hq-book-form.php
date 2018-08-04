<?php


//return isset($post_data['pick_up_location'], $post_data['pick_up_date_time'], $post_data['return_location'], $post_data['return_date_time']);

vc_map(
    array(
        'name'                    => __( 'HQ Rental Book Form', 'js_composer' ),
        'base'                    => 'hq_rental_form',
        'content_element'         => true,
        'show_settings_on_create' => true,
        'description'             => __( 'HQ Rental Book Form', 'js_composer'),
        'icon'                    => HQ_RENTAL_WPV2_LOGO_URL,
        'params' => array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => __( "Alignment", "my-text-domain" ),
                "param_name" => "alignment",
                "value" => array(
                    'left'  =>  'text-left',
                    'right' =>  'text-right'
                ),
                "description" => __( "Form Alignment", "my-text-domain" )
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Pick Up Location Label', 'motors'),
                'param_name' => 'pick_up_location_label',
                'value' => '',
                'description' => esc_html__('Enter the pick up Location Label')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Pick Up Location Placeholder', 'motors'),
                'param_name' => 'pick_up_location_placeholder',
                'value' => '',
                'description' => esc_html__('Enter the pick up Location Placeholder')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Flight Arrival Date Label', 'motors'),
                'param_name' => 'flight_date_label',
                'value' => '',
                'description' => esc_html__('Flight Arrival Date Label')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Flight Arrival Date Placeholder', 'motors'),
                'param_name' => 'flight_date_placeholder',
                'value' => '',
                'description' => esc_html__('Flight Arrival Date Placeholder')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Flight Number Label', 'motors'),
                'param_name' => 'flight_number_label',
                'value' => '',
                'description' => esc_html__('Flight Number Label')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Flight Number Placeholder', 'motors'),
                'param_name' => 'flight_number_placeholder',
                'value' => '',
                'description' => esc_html__('Flight Number Placeholder')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Return Location Label', 'motors'),
                'param_name' => 'return_location_label',
                'value' => '',
                'description' => esc_html__('Enter the return Location Label')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Return Location Placeholder', 'motors'),
                'param_name' => 'return_location_placeholder',
                'value' => '',
                'description' => esc_html__('Enter the return Location Placeholder')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Pick Up Date Label', 'motors'),
                'param_name' => 'pick_up_date_label',
                'value' => '',
                'description' => esc_html__('Enter the Pick Up Date Label')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Pick Up Date Placeholder', 'motors'),
                'param_name' => 'pick_up_date_placeholder',
                'value' => '',
                'description' => esc_html__('Enter the Pick Up Date Placeholder')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Return Date Label', 'motors'),
                'param_name' => 'return_date_label',
                'value' => '',
                'description' => esc_html__('Enter the Return Date Label')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Return Date Placeholder', 'motors'),
                'param_name' => 'return_date_placeholder',
                'value' => '',
                'description' => esc_html__('Enter the Return Date Placeholder')
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Button Text', 'motors'),
                'param_name' => 'button_text',
                'value' => '',
                'description' => esc_html__('Enter the Button Text')
            )
        )
    )
);

class WPBakeryShortCode_hq_rental_form extends WPBakeryShortCode{
    protected function content( $atts, $content = null ) {
        extract( shortcode_atts( array(
            'pick_up_location_label'	    =>	'',
            'pick_up_location_placeholder'	=>	'',
            'return_location_label'	    =>	'',
            'return_location_placeholder'	=>	'',
            'pick_up_date_label'	        =>	'',
            'pick_up_date_placeholder' 	    =>	'',
            'return_date_label'		        =>	'',
            'return_date_placeholder'	    =>	'',
            'flight_date_label'             =>  '',
            'flight_date_placeholder'       =>  '',
            'flight_number_label'           =>  '',
            'flight_number_placeholder'     =>  '',
            'button_text'                   =>  '',
            'alignment'                     =>  'text-left'
        ), $atts ) );
        hq_rental_wpv2_assets();
        $api_call = hq_rental_wpv2_api_get_locations_step_1();
        $locations = $api_call->fleets_locations;
        ?>
        <script>
            var hqDateTimeFormatPickers = '<?php echo get_option(HQ_RENTAL_WPV2_DATE_FORMAT); ?>';
        </script>
        <div class="stm_rent_car_form_wrapper style_1 text-right ">
            <div class="stm_rent_car_form">
                <form id="hq-rental-book-form" action="/reservation-step-2" method="post">
                    <input type="hidden" name="brand_id" value="<?php echo $locations[0]->brand_id; ?>">
                    <input type="hidden" id="pick_up_location_hidden" name="pick_up_location_hidden" value="" />
                    <input type="hidden" id="return_location_hidden" name="return_location_hidden" value="" />
                    <div class="hq-rental-book-form-field-wrapper">
                        <h4><?php echo $pick_up_location_label; ?></h4>
                        <div class="stm_rent_form_fields">
                            <div class="stm_pickup_location">
                                <i class="stm-service-icon-pin"></i>
                                <select id="pick_up_location" name="pick_up_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required="required">
                                        <option><?php echo $pick_up_location_placeholder; ?></option>
                                    <?php foreach ($locations as $location): ?>
                                        <option value="<?php echo $location->id; ?>" data-is-airport="<?php echo $location->is_airport; ?>"><?php echo $location->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="hq-airport-fields-wrapper">
                        <div class="hq-rental-book-form-field-wrapper">
                            <h4 ><?php echo $flight_date_label; ?></h4>
                            <div class="stm_rent_form_fields">
                                <div class="stm_pickup_location">
                                    <i class="fa fa-plane" style="padding-top:5px;"></i>
                                    <input id="hq-rental-airport-date-time-book-form" type="text" class="stm-date-timepicker-end hq-airport-input" name="flight_arrival_date_date" required="required" placeholder="<?php echo $flight_date_placeholder; ?>" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="hq-rental-book-form-field-wrapper">
                            <h4><?php echo $flight_number_label; ?></h4>
                            <div class="stm_rent_form_fields">
                                <div class="stm_pickup_location">
                                    <i class="fa fa-plane" style="padding-top:5px;"></i>
                                    <input type="text" class="stm-date-timepicker-end hq-airport-input" name="flight_number" required="required" placeholder="<?php echo $flight_number_placeholder; ?>" required="required"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hq-rental-book-form-field-wrapper">
                        <h4><?php echo $return_location_label; ?></h4>
                        <div class="stm_rent_form_fields">
                            <h4 class="stm_form_title">Place to pick up the Car*</h4>
                            <div class="stm_pickup_location">
                                <i class="stm-service-icon-pin"></i>
                                <select id="return_location" name="return_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required="required">
                                    <option><?php echo $return_location_placeholder; ?></option>
                                    <?php foreach ($locations as $location): ?>
                                        <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="hq-rental-book-form-pick-up-date-wrapper" class="hq-rental-book-form-field-wrapper">
                        <h4><?php echo $pick_up_date_label; ?></h4>
                        <div class="stm_rent_form_fields stm_rent_form_fields-drop">
                            <div class="stm_date_time_input">
                                <div class="stm_date_input">
                                    <input id="hq-rental-pick-up-date-time-book-form" type="text" class="stm-date-timepicker-end" name="pick_up_date_time" value="" placeholder="<?php echo $pick_up_date_placeholder; ?>" required="required" readonly="">
                                    <i class="stm-icon-date"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hq-rental-book-form-field-wrapper">
                        <h4>Return Date</h4>
                        <div class="stm_rent_form_fields stm_rent_form_fields-drop">
                            <div class="stm_date_time_input">
                                <h4 class="stm_form_title">Drop Date/Time*</h4>
                                <div class="stm_date_input">
                                    <input id="hq-rental-return-date-time-book-form" type="text" class="stm-date-timepicker-end" name="return_date_time" value="" placeholder="Return Date" required="" readonly=""> <i class="stm-icon-date"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit">Find a vehicle<i class="fa fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
        <style>
            .hq-airport-input{
                background-color:#fff !important;
                border-color: #fff !important;
                padding-left:35px !important;
            }
            #hq-airport-fields-wrapper{
                display: none;
            }
        </style>
        <?php
    }
}
