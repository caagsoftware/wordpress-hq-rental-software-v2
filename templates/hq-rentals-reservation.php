<?php

<form method="POST" action="" accept-charset="UTF-8" id="save-reservation-form" class="prevent-submit-by-enter loading-bar-on-submit AVAST_PAM_nonloginform">
   <input name="_token" type="hidden" value="eWYy6e88NCJa5OYq1F07mMSK8Gpb4HyOzFvyopJ4">
   <input name="next_step" type="hidden" value="2">
   <div class="col-md-12 real-estate-process-container">
      <div class="col-md-12 text-left">
         <ol id="car-rental-step-navigator">
            <li class="car-rental-reservation-steps-1 current ">
               <span class="car-rental-step-number">1</span>
               <div class="car-rental-step-name display-inline">
Dates
               </div>
            </li>
            <li class="car-rental-reservation-steps-2  ">
               <span class="car-rental-step-number">2</span>
               <div class="car-rental-step-name display-inline">
Cars
               </div>
            </li>
            <li class="car-rental-reservation-steps-3  ">
               <span class="car-rental-step-number">3</span>
               <div class="car-rental-step-name display-inline">
Extras
               </div>
            </li>
            <li class="car-rental-reservation-steps-4  ">
               <span class="car-rental-step-number">
4
               </span>
               <div class="car-rental-step-name display-inline">
Customer
               </div>
            </li>
            <li class="car-rental-reservation-steps-5  ">
               <span class="car-rental-step-number">
5
               </span>
               <div class="car-rental-step-name display-inline">
Confirm
               </div>
            </li>
            <li class="car-rental-reservation-steps-6  ">
               <span class="car-rental-step-number">
6
               </span>
               <div class="car-rental-step-name display-inline">
Payments
               </div>
            </li>
         </ol>
         <div class="pull-right-except-xs text-center">
            <button type="submit" name="action" value="previous" class="car-rental-nav-btn disabled">
            <i class="fa fa-chevron-left" id="return-to-step-0"></i>
            </button>
            <button type="submit" name="action" id="go-to-step-2" value="next" class="car-rental-nav-btn disabled">
            <i class="fas fa-chevron-right"></i>                    </button>
         </div>
      </div>
   </div>
   <div class="osections section-edit section-visible">
      <div class="appform container-fluid">
         <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
               <div class="hidden-lg hidden-md hidden-sm">
                  <select id="currency" name="currency">
                     <option value="ang">Netherlands Antillean Guilder</option>
                     <option value="eur">Euro</option>
                     <option value="usd" selected="selected">United States Dollar</option>
                  </select>
               </div>
               <div class="row">
                  <div class="col-xs-12">
                  </div>
               </div>
               <input name="brand" type="hidden" value="45359cec-fef8-4a46-9782-487216d45398">
               <div class="box box-open res-date_time_select">
                  <div class="box-summary">
                     <h2>Date &amp; Time</h2>
                  </div>
                  <div class="box-fields">
                     <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12 ">
                           <label for="pick_up_date" class="control-label">
Pickup Date
</label>
                           <div class="input-group">
                              <span class="input-group-addon hidden-xs"><i class="fas fa-calendar-alt"></i></span>
                              <input class="datepicker form-control" data-date-start-date="2018-02-21" id="pick_up_date" name="pick_up_date" type="text" value="2018-02-22">
                           </div>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12 ">
                           <label for="pick_up_time" class="control-label">
Pickup Time
</label>
                           <div class="input-group">
                              <span class="input-group-addon hidden-xs"><i class="far fa-clock"></i></span>
                              <input class="timepicker form-control ui-timepicker-input" id="pick_up_time" name="pick_up_time" type="text" value="08:00" autocomplete="off">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12 ">
                           <label for="return_date" class="control-label">
                           Return Date
                               </label>
                           <div class="input-group">
                              <span class="input-group-addon hidden-xs"><i class="fas fa-calendar-alt"></i></span>
                              <input class="datepicker form-control" data-date-start-date="2018-02-21" id="return_date" name="return_date" type="text" value="2018-02-23">
                           </div>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12 ">
                           <label for="return_time" class="control-label">
                           Return Time
                               </label>
                           <div class="input-group">
                              <span class="input-group-addon hidden-xs"><i class="far fa-clock"></i></span>
                              <input class="timepicker form-control ui-timepicker-input" id="return_time" name="return_time" type="text" value="08:00" autocomplete="off">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                           <label for="pick_up_location" class="control-label">Pickup Location</label>
                           <div class="form-group">
                              <label class="radio-inline checkbox-item-per-row">
                              <input class="unselect-radio" checked="checked" name="pick_up_location" type="radio" value="2" id="pick_up_location">
    Office
                              </label>
                              <label class="radio-inline checkbox-item-per-row">
                              <input class="unselect-radio" name="pick_up_location" type="radio" value="1" id="pick_up_location">
    Airport
                              </label>
                           </div>
                        </div>
                        <div id="airport-pick-up-location" style="display: none;">
                           <div class="form-group col-md-3 col-sm-6 col-xs-12 ">
                              <label for="flight_arrival_date_date" class="control-label">
Flight Arrival Date
</label>
                              <div class="input-group">
                                 <span class="input-group-addon hidden-xs"><i class="fas fa-calendar-alt"></i></span>
                                 <input class="datepicker form-control" id="flight_arrival_date_date" name="flight_arrival_date_date" type="text" value="2018-02-21">
                              </div>
                           </div>
                           <div class="form-group col-md-3 col-sm-6 col-xs-12 ">
                              <label for="flight_arrival_date_time" class="control-label">
Flight Arrival Time
</label>
                              <div class="input-group">
                                 <span class="input-group-addon hidden-xs"><i class="far fa-clock"></i></span>
                                 <input class="timepicker form-control ui-timepicker-input" id="flight_arrival_date_time" name="flight_arrival_date_time" type="text" value="14:08" autocomplete="off">
                              </div>
                           </div>
                           <div class="form-group col-md-3 col-sm-6 col-xs-12 ">
                              <label for="flight_number" class="control-label">
Flight Number
</label>
                              <input class=" form-control" id="flight_number" name="flight_number" type="text">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div id="custom-pickup-location" style="display: none;">
                           <div class="form-group col-md-6 col-sm-6 col-xs-12 ">
                              <label for="pick_up_location_custom" class="control-label">
Pickup Location
</label>
                              <input class=" form-control" id="pick_up_location_custom" name="pick_up_location_custom" type="text">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <input type="hidden" name="airports_ids" id="airports_ids" value="[1]">
                     </div>
                     <div class="row">
                     </div>
                  </div>
               </div>
               <div class="finalbuttons">
                  <button type="submit" class="btn btn-primary" name="action" value="next">Next Step</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</form>