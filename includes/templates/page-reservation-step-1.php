<?php
    global $post;
    get_header();
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_app_init');
    ?>
    <div id="main">
        <div class="container stm-reservation-archive hq-rental-reservation-wrapper">
            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -221.5px; box-sizing: border-box; width: 1583px;">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class=" vc_custom_1485249035889">
                                <div class="stm-fullwidth-with-parallax-bg" style=" background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>); ">
                                    <div class="container">
                                        <div class="stm_wizard_title heading-font"> Reservation</div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <div class="stm_nav_wizard_step stm_nav_wizard_step_1">
                                                    <div class="inner  current">
                                                        <a href="http://motors.stylemixthemes.com/rent-a-car/date-reservation/" class="top heading-font">
                                                            <div class="number"> <span>1</span></div>
                                                            <label>Your Itinerary</label>
                                                        </a>
                                                        <div class="content">
                                                            <div class="first">
                                                                <h5>Pick up</h5>
                                                                <div class="stm_filled_pickup_location">--</div>
                                                                <div class="stm_filled_pickup_date">--</div>
                                                            </div>
                                                            <div class="second">
                                                                <h5 class="second">Drop off</h5>
                                                                <div class="stm_filled_return_location">--</div>
                                                                <div class="stm_filled_return_date">--</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="stm_nav_wizard_step stm_nav_wizard_step_2">
                                                    <div class="inner ">
                                                        <a href="http://motors.stylemixthemes.com/rent-a-car/reservation/" class="top heading-font">
                                                            <div class="number"> <span>2</span></div>
                                                            <label>Select Vehicle/Add-ons</label>
                                                        </a>
                                                        <div class="content">
                                                            <div class="first">
                                                                <h5>Type</h5>
                                                                <div>--</div>
                                                            </div>
                                                            <div class="second">
                                                                <h5>Addons</h5>
                                                                <div>--</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <div class="stm_nav_wizard_step stm_nav_wizard_step_3">
                                                    <div class="inner ">
                                                        <a href="http://motors.stylemixthemes.com/rent-a-car/checkout/" class="top heading-font">
                                                            <div class="number"> <span>3</span></div>
                                                            <label>Reserve Your Vehicle</label>
                                                        </a>
                                                        <div class="content">
                                                            <div class="first">
                                                                <h5>Your information</h5>
                                                                <div>--</div>
                                                            </div>
                                                            <div class="second">
                                                                <h5>Payment information</h5>
                                                                <div> Estimated Total - $0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style></style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width"></div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <h2 style="font-size: 26px;color: #2a4045;line-height: 31px;text-align: left" class="vc_custom_heading vc_custom_1485249076121">RESERVE YOUR VEHICLE</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1484737305124">
                <div class="wpb_column vc_column_container vc_col-sm-7 col-md-7">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="stm_rent_car_form_wrapper style_2 text-left ">
                                <div class="stm_rent_car_form">
                                    <form action="/reservation-step-1/" method="get">
                                        <h4>Pick Up</h4>
                                        <div class="stm_rent_form_fields">
                                            <h4 class="stm_form_title">Place to pick up the Car*</h4>
                                            <div class="stm_pickup_location">
                                                <i class="stm-service-icon-pin"></i>
                                                <select name="pickup_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option value="">Choose office</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pickup_location-wo-container"><span class="select2-selection__rendered" id="select2-pickup_location-wo-container" title="Choose office">Choose office</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <label>
                                                <div class="checker"><span class="checked"><input type="checkbox" name="return_same" checked=""></span></div>
                                                Return to the same location
                                            </label>
                                            <div class="stm_date_time_input">
                                                <h4 class="stm_form_title">Pick-up Date/Time*</h4>
                                                <div class="stm_date_input"> <input type="text" id="hq-rental-pick-up-date" value="" class="stm-date-timepicker-start" name="pickup_date" placeholder="Pickup Date" required="" readonly=""> <i class="stm-icon-date"></i></div>
                                            </div>
                                        </div>
                                        <h4>Return</h4>
                                        <div class="stm_rent_form_fields stm_rent_form_fields-drop">
                                            <div class="stm_same_return ">
                                                <h4 class="stm_form_title">Place to drop the Car*</h4>
                                                <div class="stm_pickup_location stm_drop_location">
                                                    <i class="stm-service-icon-pin"></i>
                                                    <select name="drop_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                        <option value="">Choose office</option>
                                                    </select>
                                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-drop_location-38-container"><span class="select2-selection__rendered" id="select2-drop_location-38-container" title="Choose office">Choose office</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="stm_date_time_input">
                                                <h4 class="stm_form_title">Drop Date/Time*</h4>
                                                <div class="stm_date_input"> <input type="text" class="stm-date-timepicker-end" id="hq-rental-return-date" name="return_date" value="" placeholder="Return Date" required="" readonly=""> <i class="stm-icon-date"></i></div>
                                            </div>
                                        </div>
                                        <button type="submit">Continue reservation</button>
                                    </form>
                                </div>
                            </div>
                            <script></script>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-5 col-md-5">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="">
                                <div class="stm_rent_order_info">
                                    <div class="title">
                                        <h4>Car</h4>
                                        <div class="subtitle heading-font">Please select your vehicle</div>
                                    </div>
                                    <div class="image image-placeholder">
                                        <a href="http://motors.stylemixthemes.com/rent-a-car/reservation/">
                                            <div class="placeholder"> <span class="plus"></span> <i class="stm-icon-car-relic"></i></div>
                                            <div class="clearfix"></div>
                                            <span class="button"> Find a vehicle <i class="fa fa-arrow-right"></i> </span>
                                        </a>
                                    </div>
                                    <div class="stm_rent_table">
                                        <div class="heading heading-font">
                                            <h4>Rate</h4>
                                        </div>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td colspan="3" class="divider"></td>
                                            </tr>
                                            <tr>
                                                <td>--</td>
                                                <td>--</td>
                                                <td>--</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="divider"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="stm_rent_table">
                                        <div class="heading heading-font">
                                            <h4>Add-ons</h4>
                                        </div>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td colspan="3" class="divider"></td>
                                            </tr>
                                            <tr>
                                                <td>--</td>
                                                <td>--</td>
                                                <td>--</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="divider"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="stm-rent-total heading-font">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>Estimated total</td>
                                                <td>--</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php
    get_footer();