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
            'pick_up_date_label'	        =>	'',
            '$'	    =>	'',
            'return_date_label'		        =>	'',
            'return_date_placeholder'	    =>	'',
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
                                <select id="pick_up_location" name="pick_up_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                    <?php foreach ($locations as $location): ?>
                                        <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="hq-rental-book-form-field-wrapper">
                        <h4><?php echo $pick_up_location_placeholder; ?></h4>
                        <div class="stm_rent_form_fields">
                            <h4 class="stm_form_title">Place to pick up the Car*</h4>
                            <div class="stm_pickup_location">
                                <i class="stm-service-icon-pin"></i>
                                <select id="return_location"name="return_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                    <?php foreach ($locations as $location): ?>
                                        <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="hq-rental-book-form-field-wrapper">
                        <h4>PickUp Date</h4>
                        <div class="stm_rent_form_fields stm_rent_form_fields-drop">
                            <div class="stm_same_return ">
                                <h4 class="stm_form_title">Place to drop the Car*</h4>
                                <div class="stm_pickup_location stm_drop_location">
                                    <i class="stm-service-icon-pin"></i>
                                </div>
                            </div>
                            <div class="stm_date_time_input">
                                <div class="stm_date_input">
                                    <input id="hq-rental-pick-up-date-time-book-form" type="text" class="stm-date-timepicker-end" name="pick_up_date_time" value="" placeholder="<?php echo $pick_up_date_placeholder; ?>" required="" readonly="">
                                    <i class="stm-icon-date"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hq-rental-book-form-field-wrapper">
                        <h4>Return Date</h4>
                        <div class="stm_rent_form_fields stm_rent_form_fields-drop">
                            <div class="stm_same_return ">
                                <h4 class="stm_form_title">Place to drop the Car*</h4>
                                <div class="stm_pickup_location stm_drop_location">
                                    <i class="stm-service-icon-pin"></i>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-drop_location-s3-container"><span class="select2-selection__rendered" id="select2-drop_location-s3-container" title="Choose office">Choose office</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
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
        <?php
    }
}