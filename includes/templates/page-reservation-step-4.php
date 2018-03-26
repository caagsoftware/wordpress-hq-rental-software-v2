<?php
    if(hq_rental_wpv2_is_coming_from_step_3($_POST)){
        $step_3_fields = hq_rental_wpv2_post_data_from_step_3($_POST);
        $clients = hq_rental_wpv2_get_clients_form_fields_step_4();
        $clients_fields = $clients->fields;
        $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($_POST);
        $hidden_inputs_array = hq_rental_wpv2_get_inputs_from_last_step_arrays('charges', $_POST['charges']);
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
       <div class="stm-fullwidth-with-parallax-bg">
          <div class="container">
             <div class="stm_wizard_title heading-font">Reservation</div>
             <div class="row">
                <div class="col-md-4 col-sm-12">
                   <div class="stm_nav_wizard_step stm_nav_wizard_step_1">
                      <div class="inner passed">
                         <a href="http://motors.stylemixthemes.com/rent-a-car/date-reservation/" class="top heading-font">
                            <div class="number"> <span>1</span></div>
                            <label>Your Itinerary</label>
                         </a>
                         <div class="content">
                            <div class="first">
                               <h5>Pick up</h5>
                               <div class="stm_filled_pickup_location">208 Manhattan St. Downtown, FL 33823</div>
                               <div class="stm_filled_pickup_date">2018/03/02 13:50</div>
                            </div>
                            <div class="second">
                               <h5 class="second">Drop off</h5>
                               <div class="stm_filled_return_location">208 Manhattan St. Downtown, FL 33823</div>
                               <div class="stm_filled_return_date">2018/03/08 13:50</div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-sm-12">
                   <div class="stm_nav_wizard_step stm_nav_wizard_step_2">
                      <div class="inner  passed">
                         <a href="http://motors.stylemixthemes.com/rent-a-car/reservation/" class="top heading-font">
                            <div class="number"> <span>2</span></div>
                            <label>Select Vehicle/Add-ons</label>
                         </a>
                         <div class="content">
                            <div class="first">
                               <h5>Economy Type</h5>
                               <div>Mini Cooper 3 or Similar</div>
                            </div>
                            <div class="second">
                               <a class="h5" href="http://motors.stylemixthemes.com/rent-a-car/product/economy/">Addons</a>
                               <div>Handicap controls</div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4 col-sm-12">
                   <div class="stm_nav_wizard_step stm_nav_wizard_step_3">
                      <div class="inner current">
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
                               <div> Estimated Total - $600</div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <style></style>
       <div class="stm-reservation-archive">
          <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <div class="row stm_rental_archive_top">
                      <div class="col-md-7 col-sm-7">
                         <h2 class="title">Checkout</h2>
                      </div>
                      <div class="col-md-5 col-sm-5">
                         <div class="stm_rental_coupon">
                            <form class="stm_checkout_coupon" method="post">
                               <p class="form-row form-row-first"> <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value=""></p>
                               <p class="form-row form-row-last"> <input type="submit" class="button" name="apply_coupon" value="Apply coupon"></p>
                               <div class="clear"></div>
                            </form>
                         </div>
                         <script></script>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-md-5">
                         <div class="stm_rent_order_info">
                            <div class="title">
                               <h4>Economy</h4>
                               <div class="subtitle heading-font">Mini Cooper 3 or Similar</div>
                            </div>
                            <div class="image"> <img src="http://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/economy-300x181.png"></div>
                            <div class="stm_rent_table">
                               <div class="heading heading-font">
                                  <h4>Rate</h4>
                               </div>
                               <table>
                                  <thead class="heading-font">
                                     <tr>
                                        <td>QTY</td>
                                        <td>Rate</td>
                                        <td>Subtotal</td>
                                     </tr>
                                  </thead>
                                  <tbody>
                                     <tr>
                                        <td colspan="3" class="divider"></td>
                                     </tr>
                                     <tr>
                                        <td>6 Days</td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>100</span></td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>600</span></td>
                                     </tr>
                                     <tr>
                                        <td colspan="3" class="divider"></td>
                                     </tr>
                                  </tbody>
                                  <tfoot class="heading-font">
                                     <tr>
                                        <td colspan="2">Rental Charges Rate</td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>600</span></td>
                                     </tr>
                                  </tfoot>
                               </table>
                            </div>
                            <div class="stm_rent_table">
                               <div class="heading heading-font">
                                  <h4>Add-ons</h4>
                               </div>
                               <table>
                                  <thead class="heading-font">
                                     <tr>
                                        <td>QTY</td>
                                        <td>Rate</td>
                                        <td>Subtotal</td>
                                     </tr>
                                  </thead>
                                  <tbody>
                                     <tr>
                                        <td colspan="3" class="divider"></td>
                                     </tr>
                                     <tr>
                                        <td>0.16666666666667 x Handicap controls for 6 day(s)</td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0</span></td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0</span></td>
                                     </tr>
                                     <tr>
                                        <td colspan="3" class="divider"></td>
                                     </tr>
                                  </tbody>
                                  <tfoot class="heading-font">
                                     <tr>
                                        <td colspan="2">Add-ons Charges Rate</td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0</span></td>
                                     </tr>
                                  </tfoot>
                               </table>
                            </div>
                            <div class="stm_rent_table stm_rent_tax_table">
                               <div class="heading heading-font">
                                  <h4>Taxes &amp; Fees</h4>
                               </div>
                               <table>
                                  <tbody>
                                     <tr>
                                        <td colspan="3" class="divider"></td>
                                     </tr>
                                     <tr class="cart-tax tax-car-rental-sales-tax-1-1">
                                        <td>Car Rental Sales Tax (1%)</td>
                                        <td>&nbsp;</td>
                                        <td>$6</td>
                                     </tr>
                                     <tr class="cart-tax tax-sales-tax-2-2">
                                        <td>Sales Tax (2%)</td>
                                        <td>&nbsp;</td>
                                        <td>$12</td>
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
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>600</span></td>
                                     </tr>
                                  </tbody>
                               </table>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-7">
                         <div class="stm_custom_rental_checkout">
                            <div class="woocommerce">
                               <div class="woocommerce-info"><i class="fa fa-info-circle"></i><span>Informational.</span> Returning customer? <a href="#" class="showlogin">Click here to login</a></div>
                               <form class="woocommerce-form woocommerce-form-login login" method="post" style="display:none;">
                                  <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                  <p class="form-row form-row-first"> <label for="username">Username or email <span class="required">*</span></label> <input type="text" class="input-text" name="username" id="username"></p>
                                  <p class="form-row form-row-last"> <label for="password">Password <span class="required">*</span></label> <input class="input-text" type="password" name="password" id="password"></p>
                                  <div class="clear"></div>
                                  <p class="form-row">
                                     <input type="hidden" id="_wpnonce" name="_wpnonce" value="a6379a4096"><input type="hidden" name="_wp_http_referer" value="/rent-a-car/checkout/"> <input type="submit" class="button" name="login" value="Login"> <input type="hidden" name="redirect" value="http://motors.stylemixthemes.com/rent-a-car/checkout/">
                                     <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                  <div class="checker" id="uniform-rememberme"><span><input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"></span></div> <span>Remember me</span> </label></p>
                                  <p class="lost_password"> <a href="http://motors.stylemixthemes.com/rent-a-car/my-account/lost-password/">Lost your password?</a></p>
                                  <div class="clear"></div>
                               </form>
                               <div class="woocommerce-info"><i class="fa fa-info-circle"></i><span>Informational.</span> Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>
                               <form class="checkout_coupon" method="post" style="display:none">
                                  <p class="form-row form-row-first"> <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value=""></p>
                                  <p class="form-row form-row-last"> <input type="submit" class="button" name="apply_coupon" value="Apply coupon"></p>
                                  <div class="clear"></div>
                               </form>
                               <form method="post" class="checkout woocommerce-checkout" action="/reservation-step-5">
                                   <?php echo $hidden_inputs; ?>
                                   <?php echo $hidden_inputs_array; ?>
                                   <input type="hidden" name="category_id" value="<?php echo $clients->contact_category_id; ?>">
                                  <div class="row" id="customer_details">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 stm_woocommerce_checkout_billing">
                                        <div class="woocommerce-billing-fields">
                                           <h4>Client Information</h4>
                                           <div class="stm-billing-fields woocommerce-billing-fields__field-wrapper">
                                               <?php foreach ($clients_fields as $field): ?>
                                                   <?php if($field->type == 'text'): ?>
                                                       <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                           <label for="billing_first_name" class="heading-font"><?php echo $field->label; ?> <abbr class="required" title="required">*</abbr></label>
                                                           <input type="text" cla`ss="input-text " name="<?php echo 'field_'.$field->id; ?>" id="billing_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                                                       </p>
                                                   <?php endif; ?>

                                                   <?php if($field->type == 'countries' and $field->field_settings->type == 'country'): ?>
                                                       <?php
                                                            $countries = hq_rental_wpv2_get_countries_for_dropdown()->countries;
                                                            $default_country = $field_settings->default_country;
                                                       ?>
                                                       <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                           <label for="billing_first_name" class="heading-font"><?php echo $field->label; ?> <abbr class="required" title="required">*</abbr></label>
                                                           <select id="hq-countries" name="<?php echo 'field_'.$field->id; ?>" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required placeholder="Choose Location">
                                                               <?php foreach ($countries as $country): ?>
                                                                    <?php if($country->code2 == $default_country): ?>
                                                                       <option value="<?php echo $country->code2; ?>" selected><?php echo $country->label; ?></option>
                                                                    <?php else: ?>
                                                                       <option value="<?php echo $country->code2; ?>"><?php echo $country->label; ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                           </select>
                                                       </php>
                                                    <?php endif; ?>
                                                   <?php if($field->type == 'countries' and $field->field_settings->type == 'nationality'): ?>
                                                       <?php $countries = hq_rental_wpv2_get_countries_for_dropdown()->countries; ?>
                                                       <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                           <label for="billing_first_name" class="heading-font"><?php echo $field->label; ?> <abbr class="required" title="required">*</abbr></label>
                                                           <select id="hq-countries" name="<?php echo 'field_'.$field->id; ?>" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required placeholder="Choose Location">
                                                               <?php foreach ($countries as $country): ?>
                                                                   <option value="<?php echo $country->code2; ?>"><?php echo $country->nationality; ?></option>
                                                               <?php endforeach; ?>
                                                           </select>
                                                       </p>
                                                   <?php endif; ?>

                                                   <?php if($field->type == 'textarea'): ?>
                                                       <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                           <label for="billing_first_name" class="heading-font"><?php echo $field->label; ?> <abbr class="required" title="required">*</abbr></label>
                                                           <textarea name="<?php echo 'field_'.$field->id; ?>" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="" style="height: auto;"></textarea>
                                                       </p>
                                                   <?php endif; ?>

                                                    <?php if($field->type == 'identification'): ?>
                                                       <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                           <label for="billing_first_name" class="heading-font"><?php echo $field->label; ?> <abbr class="required" title="required">*</abbr></label>
                                                           <div class="row">
                                                                <div class="col-md-4">
                                                                   <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                                        <label for="billing_first_name" class="heading-font">Type <abbr class="required" title="required">*</abbr></label>
                                                                        <select id="hq-countries" name="<?php echo 'field_'.$field->id.'[items][1][type]'; ?>" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required placeholder="Choose Location">
                                                                            <option value="national_id">ID Card</option>
                                                                            <option value="drivers_license" selected="">Drivers License</option>
                                                                            <option value="passport">Passport</option>
                                                                        </select>
                                                                    </p>
                                                                </div>
                                                               <div class="col-md-4">
                                                                   <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                                       <label for="billing_first_name" class="heading-font">ID Number <abbr class="required" title="required">*</abbr></label>
                                                                       <input type="text" class="input-text " name="<?php echo 'field_'.$field->id; ?>" id="billing_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus">
                                                                   </p>
                                                               </div>
                                                                <?php if($field->field_settings->show_expiration == 'yes'): ?>
                                                                       <div class="col-md-4">
                                                                           <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                                               <label for="billing_first_name" class="heading-font">Expiration Date <abbr class="required" title="required">*</abbr></label>
                                                                               <input type="text" class="stm-date-timepicker-end" id="hq-datepicker" name="<?php echo 'field_'.$field->id; ?>" value="" required="" readonly=""> <i class="stm-icon-date"></i>
                                                                           </p>
                                                                       </div>
                                                                <?php endif; ?>
                                                            </div>
                                                       </p>
                                                    <?php endif; ?>

                                                    <?php if($field->type == 'date'): ?>
                                                       <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                           <label for="billing_first_name" class="heading-font"><?php echo $field->label; ?> <abbr class="required" title="required">*</abbr></label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                     <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                                         <label for="billing_first_name" class="heading-font">Day <abbr class="required" title="required">*</abbr></label>
                                                                         <select id="hq-countries" name="<?php echo 'field_'.$field->id.'[day]'; ?>" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required placeholder="Choose Location">
                                                                             <option value="" selected="selected"></option>
                                                                             <option value="1">1</option>
                                                                             <option value="2">2</option>
                                                                             <option value="3">3</option>
                                                                             <option value="4">4</option>
                                                                             <option value="5">5</option>
                                                                             <option value="6">6</option>
                                                                             <option value="7">7</option>
                                                                             <option value="8">8</option>
                                                                             <option value="9">9</option>
                                                                             <option value="10">10</option>
                                                                             <option value="11">11</option>
                                                                             <option value="12">12</option>
                                                                             <option value="13">13</option>
                                                                             <option value="14">14</option>
                                                                             <option value="15">15</option>
                                                                             <option value="16">16</option>
                                                                             <option value="17">17</option>
                                                                             <option value="18">18</option>
                                                                             <option value="19">19</option>
                                                                             <option value="20">20</option>
                                                                             <option value="21">21</option>
                                                                             <option value="22">22</option>
                                                                             <option value="23">23</option>
                                                                             <option value="24">24</option>
                                                                             <option value="25">25</option>
                                                                             <option value="26">26</option>
                                                                             <option value="27">27</option>
                                                                             <option value="28">28</option>
                                                                             <option value="29">29</option>
                                                                             <option value="30">30</option>
                                                                             <option value="31">31</option>
                                                                         </select>
                                                                     </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                                        <label for="billing_first_name" class="heading-font">Day <abbr class="required" title="required">*</abbr></label>
                                                                        <select id="hq-countries" name="<?php echo 'field_'.$field->id.'[month]'; ?>" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required placeholder="Choose Location">
                                                                            <option value="" selected="selected"></option>
                                                                            <option value="1">January</option>
                                                                            <option value="2">February</option>
                                                                            <option value="3">March</option>
                                                                            <option value="4">April</option>
                                                                            <option value="5">May</option>
                                                                            <option value="6">June</option>
                                                                            <option value="7">July</option>
                                                                            <option value="8">August</option>
                                                                            <option value="9">September</option>
                                                                            <option value="10">October</option>
                                                                            <option value="11">November</option>
                                                                            <option value="12">December</option>
                                                                        </select>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                                    <label for="billing_first_name" class="heading-font">Day <abbr class="required" title="required">*</abbr></label>
                                                                    <select id="hq-countries" name="<?php echo 'field_'.$field->id.'[year]'; ?>" data-class="stm_rent_location" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" required placeholder="Choose Location">
                                                                        <option value=""></option>
                                                                        <option value="2100">2100</option>
                                                                        <option value="2099">2099</option>
                                                                        <option value="2098">2098</option>
                                                                        <option value="2097">2097</option>
                                                                        <option value="2096">2096</option>
                                                                        <option value="2095">2095</option>
                                                                        <option value="2094">2094</option>
                                                                        <option value="2093">2093</option>
                                                                        <option value="2092">2092</option>
                                                                        <option value="2091">2091</option>
                                                                        <option value="2090">2090</option>
                                                                        <option value="2089">2089</option>
                                                                        <option value="2088">2088</option>
                                                                        <option value="2087">2087</option>
                                                                        <option value="2086">2086</option>
                                                                        <option value="2085">2085</option>
                                                                        <option value="2084">2084</option>
                                                                        <option value="2083">2083</option>
                                                                        <option value="2082">2082</option>
                                                                        <option value="2081">2081</option>
                                                                        <option value="2080">2080</option>
                                                                        <option value="2079">2079</option>
                                                                        <option value="2078">2078</option>
                                                                        <option value="2077">2077</option>
                                                                        <option value="2076">2076</option>
                                                                        <option value="2075">2075</option>
                                                                        <option value="2074">2074</option>
                                                                        <option value="2073">2073</option>
                                                                        <option value="2072">2072</option>
                                                                        <option value="2071">2071</option>
                                                                        <option value="2070">2070</option>
                                                                        <option value="2069">2069</option>
                                                                        <option value="2068">2068</option>
                                                                        <option value="2067">2067</option>
                                                                        <option value="2066">2066</option>
                                                                        <option value="2065">2065</option>
                                                                        <option value="2064">2064</option>
                                                                        <option value="2063">2063</option>
                                                                        <option value="2062">2062</option>
                                                                        <option value="2061">2061</option>
                                                                        <option value="2060">2060</option>
                                                                        <option value="2059">2059</option>
                                                                        <option value="2058">2058</option>
                                                                        <option value="2057">2057</option>
                                                                        <option value="2056">2056</option>
                                                                        <option value="2055">2055</option>
                                                                        <option value="2054">2054</option>
                                                                        <option value="2053">2053</option>
                                                                        <option value="2052">2052</option>
                                                                        <option value="2051">2051</option>
                                                                        <option value="2050">2050</option>
                                                                        <option value="2049">2049</option>
                                                                        <option value="2048">2048</option>
                                                                        <option value="2047">2047</option>
                                                                        <option value="2046">2046</option>
                                                                        <option value="2045">2045</option>
                                                                        <option value="2044">2044</option>
                                                                        <option value="2043">2043</option>
                                                                        <option value="2042">2042</option>
                                                                        <option value="2041">2041</option>
                                                                        <option value="2040">2040</option>
                                                                        <option value="2039">2039</option>
                                                                        <option value="2038">2038</option>
                                                                        <option value="2037">2037</option>
                                                                        <option value="2036">2036</option>
                                                                        <option value="2035">2035</option>
                                                                        <option value="2034">2034</option>
                                                                        <option value="2033">2033</option>
                                                                        <option value="2032">2032</option>
                                                                        <option value="2031">2031</option>
                                                                        <option value="2030">2030</option>
                                                                        <option value="2029">2029</option>
                                                                        <option value="2028">2028</option>
                                                                        <option value="2027">2027</option>
                                                                        <option value="2026">2026</option>
                                                                        <option value="2025">2025</option>
                                                                        <option value="2024">2024</option>
                                                                        <option value="2023">2023</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018" selected="selected">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2000">2000</option>
                                                                        <option value="1999">1999</option>
                                                                        <option value="1998">1998</option>
                                                                        <option value="1997">1997</option>
                                                                        <option value="1996">1996</option>
                                                                        <option value="1995">1995</option>
                                                                        <option value="1994">1994</option>
                                                                        <option value="1993">1993</option>
                                                                        <option value="1992">1992</option>
                                                                        <option value="1991">1991</option>
                                                                        <option value="1990">1990</option>
                                                                        <option value="1989">1989</option>
                                                                        <option value="1988">1988</option>
                                                                        <option value="1987">1987</option>
                                                                        <option value="1986">1986</option>
                                                                        <option value="1985">1985</option>
                                                                        <option value="1984">1984</option>
                                                                        <option value="1983">1983</option>
                                                                        <option value="1982">1982</option>
                                                                        <option value="1981">1981</option>
                                                                        <option value="1980">1980</option>
                                                                        <option value="1979">1979</option>
                                                                        <option value="1978">1978</option>
                                                                        <option value="1977">1977</option>
                                                                        <option value="1976">1976</option>
                                                                        <option value="1975">1975</option>
                                                                        <option value="1974">1974</option>
                                                                        <option value="1973">1973</option>
                                                                        <option value="1972">1972</option>
                                                                        <option value="1971">1971</option>
                                                                        <option value="1970">1970</option>
                                                                        <option value="1969">1969</option>
                                                                        <option value="1968">1968</option>
                                                                        <option value="1967">1967</option>
                                                                        <option value="1966">1966</option>
                                                                        <option value="1965">1965</option>
                                                                        <option value="1964">1964</option>
                                                                        <option value="1963">1963</option>
                                                                        <option value="1962">1962</option>
                                                                        <option value="1961">1961</option>
                                                                        <option value="1960">1960</option>
                                                                        <option value="1959">1959</option>
                                                                        <option value="1958">1958</option>
                                                                        <option value="1957">1957</option>
                                                                        <option value="1956">1956</option>
                                                                        <option value="1955">1955</option>
                                                                        <option value="1954">1954</option>
                                                                        <option value="1953">1953</option>
                                                                        <option value="1952">1952</option>
                                                                        <option value="1951">1951</option>
                                                                        <option value="1950">1950</option>
                                                                        <option value="1949">1949</option>
                                                                        <option value="1948">1948</option>
                                                                        <option value="1947">1947</option>
                                                                        <option value="1946">1946</option>
                                                                        <option value="1945">1945</option>
                                                                        <option value="1944">1944</option>
                                                                        <option value="1943">1943</option>
                                                                        <option value="1942">1942</option>
                                                                        <option value="1941">1941</option>
                                                                        <option value="1940">1940</option>
                                                                        <option value="1939">1939</option>
                                                                        <option value="1938">1938</option>
                                                                        <option value="1937">1937</option>
                                                                        <option value="1936">1936</option>
                                                                        <option value="1935">1935</option>
                                                                        <option value="1934">1934</option>
                                                                        <option value="1933">1933</option>
                                                                        <option value="1932">1932</option>
                                                                        <option value="1931">1931</option>
                                                                        <option value="1930">1930</option>
                                                                        <option value="1929">1929</option>
                                                                        <option value="1928">1928</option>
                                                                        <option value="1927">1927</option>
                                                                        <option value="1926">1926</option>
                                                                        <option value="1925">1925</option>
                                                                        <option value="1924">1924</option>
                                                                        <option value="1923">1923</option>
                                                                        <option value="1922">1922</option>
                                                                        <option value="1921">1921</option>
                                                                        <option value="1920">1920</option>
                                                                        <option value="1919">1919</option>
                                                                        <option value="1918">1918</option>
                                                                        <option value="1917">1917</option>
                                                                        <option value="1916">1916</option>
                                                                        <option value="1915">1915</option>
                                                                        <option value="1914">1914</option>
                                                                        <option value="1913">1913</option>
                                                                        <option value="1912">1912</option>
                                                                        <option value="1911">1911</option>
                                                                        <option value="1910">1910</option>
                                                                        <option value="1909">1909</option>
                                                                        <option value="1908">1908</option>
                                                                        <option value="1907">1907</option>
                                                                        <option value="1906">1906</option>
                                                                        <option value="1905">1905</option>
                                                                        <option value="1904">1904</option>
                                                                        <option value="1903">1903</option>
                                                                        <option value="1902">1902</option>
                                                                        <option value="1901">1901</option>
                                                                        <option value="1900">1900</option>
                                                                    </select>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </p>
                                                    <?php endif; ?>

                                                    <?php if($field->type == 'radio'): ?>
                                                           <p class="form-row validate-required" id="billing_first_name_field" data-priority="10">
                                                               <label for="billing_first_name" class="heading-font"><?php echo $field->label; ?> <abbr class="required" title="required">*</abbr></label>
                                                               <div class="stm_date_input">
                                                                    <?php foreach ($field->field_settings->items as $options): ?>
                                                                        <?php $item_values = explode(' :: ',$options) ?>
                                                                        <label for="billing_first_name" class="heading-font"><?php echo $item_values[1]; ?>
                                                                            <input type="radio" name="<?php echo 'field_'.$field->id; ?>" value="<?php echo $item_values[0]; ?>">
                                                                        </label>
                                                                    <?php endforeach; ?>
                                                               </div>
                                                           </p>
                                                    <?php endif; ?>
                                               <?php endforeach; ?>
                                               <div class="hq-submit-button-wrapper">
                                                       <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Proceed to PayPal" data-value="Place order">
                                               </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </form>
                            </div>
                         </div>
                      </div>
                   </div>
                   <script></script>
                   <div class="stm_terms_popup_dismiss"></div>
                   <div class="stm_terms_popup">
                      <i class="fa fa-close"></i>
                      <div class="vc_row wpb_row vc_row-fluid vc_custom_1485323418627">
                         <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                               <div class="wpb_wrapper">
                                  <h2 style="font-size: 26px;line-height: 34px;text-align: left" class="vc_custom_heading">TERMS AND CONDITIONS</h2>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">1. Introduction</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p><span style="color: #2a4045;">These Website Standard Terms and Conditions written on this webpage shall manage your use of this website. These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</span></p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">2. Intellectual Property Rights</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p><span style="color: #2a4045;">Other than the content you own, under these Terms, Motors and/or its licensors own all the intellectual property rights and materials contained in this Website. </span></p>
                                        <p><span style="color: #2a4045;">You are granted limited license only for purposes of viewing the material contained on this Website.</span></p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">3. Restrictions</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p style="line-height: 20px;"><span style="color: #2a4045;">You are specifically restricted from all of the following </span></p>
                                        <p><span style="color: #2a4045;">• Publishing any Website material in any other media; </span></p>
                                        <p><span style="color: #2a4045;">• Selling, sublicensing and/or otherwise commercializing any Website material; </span></p>
                                        <p><span style="color: #2a4045;">• Publicly performing and/or showing any Website material; </span></p>
                                        <p><span style="color: #2a4045;">• Using this Website in any way that is or may be damaging to this Website; </span></p>
                                        <p><span style="color: #2a4045;">• Using this Website in any way that impacts user access to this Website;</span></p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">4. Your content</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p><span style="color: #2a4045;">In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Motors a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</span></p>
                                        <p><span style="color: #2a4045;">Your Content must be your own and must not be invading any third-party’s rights. Motors reserves the right to remove any of Your Content from this Website at any time without notice.</span></p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">5. No warranties</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>This Website is provided “as is,” with all faults, and Motors express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">6. Limitation of liability</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>In no event shall Motors, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract. Motors, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">7. Indemnification</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>You hereby indemnify to the fullest extent Motors from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">8. Severability</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.</p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">9. Variation of Terms</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>Motors is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.</p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">10. Assignment</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>The Motors is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">11. Entire Agreement</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>These Terms constitute the entire agreement between Motors and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>
                                     </div>
                                  </div>
                                  <h4 style="font-size: 16px;line-height: 24px;text-align: left" class="vc_custom_heading">12. Governing Law &amp; Jurisdiction</h4>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>These Terms will be governed by and interpreted in accordance with the laws of the State of New York, and you submit to the non-exclusive jurisdiction of the state and federal courts located in New York for the resolution of any disputes.</p>
                                     </div>
                                  </div>
                                  <div class="wpb_text_column wpb_content_element ">
                                     <div class="wpb_wrapper">
                                        <p>These terms and conditions have been generated at <a href="http://termsandcondiitionssample.com" target="_blank">termsandcondiitionssample.com</a>.</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <script></script>
                </div>
                <div class="stm-shop-sidebar-area"></div>
             </div>
          </div>
       </div>
    </div>
    <?php
    get_footer();
