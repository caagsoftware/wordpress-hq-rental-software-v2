<?php
$locations = $data;
?>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <h2 class="vc_custom_heading hq-reservation-title">RESERVE YOUR VEHICLE</h2>
            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-9 col-md-9">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="stm_rent_car_form_wrapper style_2 text-left ">
                    <div class="stm_rent_car_form">
                        <form action="/reservation-step-2" method="post">
                            <input type="hidden" name="brand_id" value="<?php echo $locations[0]->brand_id; ?>">
                            <h4>Pick Up</h4>
                            <div class="stm_rent_form_fields">
                                <h4 class="stm_form_title">Place to pick up the Car*</h4>
                                <div class="stm_pickup_location">
                                    <i class="stm-service-icon-pin"></i>
                                    <select id="pick_up_location" name="pick_up_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required placeholder="Choose Location">
                                        <?php foreach ($locations as $location): ?>
                                            <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <label>
                                    <div class=""><span class="checked"><input type="checkbox" id="return_same_location" name="return_same" checked="">Return to the same location</span></div>

                                </label>
                                <div class="stm_date_time_input">
                                    <h4 class="stm_form_title">Pick-up Date/Time*</h4>
                                    <div class="stm_date_input">
                                        <input type="text" id="hq-rental-pick-up-date-time" value="" name="pick_up_date_time" placeholder="Pickup Date" required readonly="readonly" /> <i class="stm-icon-date"></i>
                                    </div>
                                </div>
                            </div>
                            <h4>Return</h4>
                            <div class="stm_rent_form_fields stm_rent_form_fields-drop">
                                <div class="stm_same_return ">
                                    <h4 class="stm_form_title">Place to drop the Car*</h4>
                                    <div class="stm_pickup_location stm_drop_location">
                                        <i class="stm-service-icon-pin"></i>
                                        <select id="return_location" name="return_location" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                            <?php foreach ($locations as $location): ?>
                                                <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="stm_date_time_input">
                                    <h4 class="stm_form_title">Drop Date/Time*</h4>
                                    <div class="stm_date_input">
                                        <input type="text" id="hq-rental-return-date-time" name="return_date_time" value="" placeholder="Return Date" required="" readonly="readonly" /><i class="stm-icon-date"></i>
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
