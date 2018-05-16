<?php
    //this ccs class - > add yellow background on current step boxes
    $date_format = get_option( HQ_RENTAL_WPV2_DATE_FORMAT );
    $hq_rental_active_step = 'hq-rental-active-step';
    $pick_up_location = $data['pick_up_location_workflow'];
    $return_location = $data['return_location_workflow'];
    $pick_up_date = $data['pick_up_date'];
    $return_date = $data['return_date'];
    $selected_car = $data['selected_car'];
    $client = $data['client'];
    $prices = $data['prices'];
?>
<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -221.5px; box-sizing: border-box; width: 1583px;">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class=" vc_custom_1485249035889">
                    <div class="stm-fullwidth-with-parallax-bg" style=" background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>); ">
                        <div class="container">
                            <div class="stm_wizard_title heading-font">Reservation</div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="stm_nav_wizard_step stm_nav_wizard_step_1">
                                        <div class="inner current">
                                            <a class="top heading-font">
                                                <div class="number"> <span>1</span></div>
                                                <label>Your Itinerary</label>
                                            </a>
                                            <!--Add in this dicv the active css class-->
                                            <!--<div class="hq-rental-non-active-step hq-rental-active-step">-->
                                            <div class="<?php echo hq_rental_wpv2_banner_first_box_background(); ?>">
                                                <div class="first">
                                                    <h5>PICK UP</h5>
                                                    <div class="stm_filled_pickup_location"><?php echo !empty($pick_up_location) ? $pick_up_location : '--'; ?></div>
                                                    <div class="stm_filled_pickup_date"><?php echo !empty($pick_up_date) ? $pick_up_date->format($date_format) : '--'; ?></div>
                                                </div>
                                                <div class="second">
                                                    <h5 class="second">RETURN</h5>
                                                    <div class="stm_filled_pickup_location"><?php echo !empty($return_location) ? $return_location : '--'; ?></div>
                                                    <div class="stm_filled_pickup_date"><?php echo !empty($return_date) ? $return_date->format($date_format) : '--'; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="stm_nav_wizard_step stm_nav_wizard_step_2">
                                        <div class="inner">
                                            <a class="top heading-font">
                                                <div class="number"> <span>2</span></div>
                                                <label>Vehicle/Prices</label>
                                            </a>
                                            <div class="content <?php echo hq_rental_wpv2_banner_second_box_background(); ?>">
                                                <div class="first">
                                                    <h5>Class</h5>
                                                    <div><?php echo !empty($selected_car) ? $selected_car->name : '--' ;?></div>
                                                </div>
                                                <div class="second">
                                                    <h5>Base Price</h5>
                                                    <div><?php echo !empty($prices->base_price->amount_for_display) ? $prices->base_price->amount_for_display : '--'; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="stm_nav_wizard_step stm_nav_wizard_step_3">
                                        <div class="inner ">
                                            <a class="top heading-font">
                                                <div class="number"> <span>3</span></div>
                                                <label>Reserve Your Vehicle</label>
                                            </a>
                                            <div class="content <?php echo hq_rental_wpv2_banner_third_box_background(); ?>">
                                                <div class="first">
                                                    <h5>Your information</h5>
                                                    <div><?php echo !empty($client->label) ? $client->label : '--'; ?></div>
                                                </div>
                                                <div class="second">
                                                    <h5>Email </h5>
                                                    <div><?php echo !empty($client->email) ? $client->email : '--'; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
