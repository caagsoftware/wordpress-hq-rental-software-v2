<?php

function hq_rental_wpv2_check_availability_shortcode()
{
	$api = hq_rental_wpv2_api_check_availability();
	var_dump($api);
	?>
		<form method="POST" action="" accept-charset="UTF-8" id="availability-check-form" class="prevent-submit-by-enter AVAST_PAM_nonloginform">
		   <input name="_token" type="hidden" value="2Bw5xlV8czff7jFzH7KWr88lydAVhexfrDQcUsEf">
		   <div class="osections section-edit" style="display:block">
		      <div class="appform container-fluid">
		         <div class="row">
		            <div class="col-md-9 col-sm-9 col-xs-12">
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
		                              <input class="datepicker form-control" id="pick_up_date" name="pick_up_date" type="text" value="2018-02-21">
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
		                              <input class="datepicker form-control" id="return_date" name="return_date" type="text" value="2018-02-22">
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
		                  </div>
		               </div>
		               <div class="finalbuttons">
		                  <button type="submit" class="btn btn-primary" name="action" value="next">
		                  Check Availability        </button>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</form>
	<?php
}
add_shortcode('hq_rental_wp_availability','hq_rental_wpv2_check_availability_shortcode');