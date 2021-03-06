<?php
$locations = $data;
?>
<style>
    .hq-airport-input{
        background-color:#fff !important;
        border-color: #fff !important;
        padding-left:35px !important;
    }
    .hq-airport-title{
        display: block;
        font-size: 12px;
        margin-bottom: 5px;
        letter-spacing: -0px;
    }
    #hq-airport-fields-wrapper{
        display: none;
    }
</style>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <h2 class="vc_custom_heading hq-reservation-title" style="margin-bottom: 35px">RESERVE YOUR VEHICLE</h2>
            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-7 col-md-7">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="stm_rent_car_form_wrapper style_2 text-left">
                    <div class="stm_rent_car_form">
                        <form action="/reservation-step-2" method="post" id="hq-rentals-first-step-form">
                            <input type="hidden" name="brand_id" value="<?php echo $locations[0]->brand_id; ?>">
                            <input type="hidden" id="pick_up_location_hidden" name="pick_up_location_hidden" value="" />
                            <input type="hidden" id="return_location_hidden" name="return_location_hidden" value="" />
                            <h4>Pick Up</h4>
                            <div class="stm_rent_form_fields">
                                <h4 class="stm_form_title">Place to pick up the Car*</h4>
                                <div class="stm_pickup_location">
                                    <i class="stm-service-icon-pin"></i>
                                    <select id="pick_up_location" name="pick_up_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required="required" placeholder="Choose Location">
                                        <option value="">Select Location</option>
                                        <?php foreach ($locations as $location): ?>
                                            <option value="<?php echo $location->id; ?>" data-is-airport="<?php echo $location->is_airport; ?>"><?php echo $location->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <label>
                                    <div class=""><span class="checked"><input type="checkbox" id="return_same_location" name="return_same" checked="">Return to the same location</span></div>

                                </label>
                                <div id="hq-rental-book-form-pick-up-date-wrapper" class="stm_date_time_input">
                                    <h4 class="stm_form_title">Pick-up Date/Time*</h4>
                                    <div class="stm_date_input">
                                        <input type="text" id="hq-rental-pick-up-date-time" value="" name="pick_up_date_time" placeholder="Pickup Date" required="required" readonly="readonly" /> <i class="stm-icon-date"></i>
                                    </div>
                                </div>
                                <div id="hq-airport-fields-wrapper">
                                    <div class="stm_date_time_input">
                                        <h4 class="stm_form_title">Flight Date</h4>
                                        <div class="stm_date_input">
                                            <input type="text" id="hq-rental-airport-date-time-book-form" value="" name="flight_arrival_date_date" placeholder="Pickup Date" required="required" />
                                            <i class="stm-icon-date"></i>
                                        </div>
                                    </div>
                                    <div class="stm_date_time_input">
                                        <h4 class="stm_form_title">Flight Number</h4>
                                            <div class="stm_date_input">
                                                <input type="text" value="" name="flight_number" placeholder="Flight Number" required="required" />
                                                <i class="stm-icon-date"></i>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Return</h4>
                            <div class="stm_rent_form_fields stm_rent_form_fields-drop">
                                <div class="stm_same_return ">
                                    <h4 class="stm_form_title">Place to drop the Car*</h4>
                                    <div class="stm_pickup_location stm_drop_location">
                                        <i class="stm-service-icon-pin"></i>
                                        <select id="return_location" name="return_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" required="required" aria-hidden="true">
                                            <option value="">Select Location</option>
                                            <?php foreach ($locations as $location): ?>
                                                <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="stm_date_time_input">
                                    <h4 class="stm_form_title">Drop Date/Time*</h4>
                                    <div class="stm_date_input">
                                        <input type="text" id="hq-rental-return-date-time" name="return_date_time" placeholder="Return Date" required="required" readonly="readonly"><i class="stm-icon-date"></i>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">Continue Reservation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wpb_column vc_column_container vc_col-sm-5 col-sm-5 col-md-5">
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
<style>
    .hq-reservation-title{
        font-size: 26px;
        color: #2a4045;
        line-height: 31px;
        text-align: left;
        margin-bottom:35px;
    }
</style>
