<?php
    if(hq_rental_wpv2_is_coming_from_step_3($_POST)){
        $clients = hq_rental_wpv2_get_clients_step_4($_POST);
        //$selected_car = hq_rental_wpv2_get_available_charges_step_4($_POST)->price->rack_rate_details[0]->vehicleClass;
        $hidden_inputs = hq_rental_wpv2_inputs_from_last_step($_POST);
    }else{
        wp_redirect('/reservation-step-1');
    }
    get_header();
    wp_enqueue_style('hq_rental_wpv2_styles_steps_styles');
    wp_enqueue_script('hq_rental_wpv2_app_init');
    global $post;
    ?>
    <div id="main">
       <div class="stm-fullwidth-with-parallax-bg">
          <div class="container">
             <div class="stm_wizard_title heading-font"> Reservation</div>
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
                               <form name="checkout" method="post" class="checkout woocommerce-checkout" action="http://motors.stylemixthemes.com/rent-a-car/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                                   <?php echo $hidden_inputs; ?>
                                  <div class="row" id="customer_details">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 stm_woocommerce_checkout_billing">
                                        <div class="woocommerce-billing-fields">
                                           <h4>Billing Details</h4>
                                           <div class="stm-billing-fields woocommerce-billing-fields__field-wrapper">
                                              <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="heading-font">First name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus"></p>
                                              <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20"><label for="billing_last_name" class="heading-font">Last name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" autocomplete="family-name"></p>
                                              <p class="form-row form-row-first" id="billing_driver_license_field" data-priority=""><label for="billing_driver_license" class="heading-font">Driver license</label><input type="text" class="input-text " name="billing_driver_license" id="billing_driver_license" placeholder="" value="" autocomplete="driver_license"></p>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 stm_woocommerce_checkout_shipping">
                                        <div class="woocommerce-shipping-fields">
                                           <h4 id="ship-to-different-address">
                                              <label for="ship-to-different-address-checkbox" class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">Ship to a different address?</label>
                                              <div class="checker" id="uniform-ship-to-different-address-checkbox"><span><input id="ship-to-different-address-checkbox" class="input-checkbox" type="checkbox" name="ship_to_different_address" value="1"></span></div>
                                           </h4>
                                           <div class="shipping_address" style="display: none;">
                                              <div class="stm-billing-fields woocommerce-shipping-fields__field-wrapper">
                                                 <p class="form-row form-row-first validate-required" id="shipping_first_name_field" data-priority="10"><label for="shipping_first_name" class="heading-font">First name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus"></p>
                                                 <p class="form-row form-row-last validate-required" id="shipping_last_name_field" data-priority="20"><label for="shipping_last_name" class="heading-font">Last name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder="" value="" autocomplete="family-name"></p>
                                                 <p class="form-row form-row-wide" id="shipping_company_field" data-priority="30"><label for="shipping_company" class="heading-font">Company name</label><input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="" value="" autocomplete="organization"></p>
                                                 <p class="form-row form-row-wide address-field update_totals_on_change woocommerce-validated" id="shipping_country_field" data-priority="40">
                                                    <label for="shipping_country" class="heading-font">Country</label>
                                                    <select name="shipping_country" id="shipping_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
                                                       <option value="">Select a country…</option>

                                                    </select>
                                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-shipping_country-container" role="combobox"><span class="select2-selection__rendered" id="select2-shipping_country-container" role="textbox" aria-readonly="true" title="Venezuela">Venezuela</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                 <noscript>&lt;input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /&gt;</noscript>
                                                 </p>
                                                 <p class="form-row form-row-wide address-field" id="shipping_address_1_field" data-priority="50"><label for="shipping_address_1" class="heading-font">Street address</label><input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="House number and street name" value="" autocomplete="address-line1"></p>
                                                 <p class="form-row form-row-wide address-field" id="shipping_address_2_field" data-priority="60"><input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2"></p>
                                                 <p class="form-row form-row-wide address-field" id="shipping_city_field" data-priority="70" data-o_class="form-row form-row-wide address-field"><label for="shipping_city" class="heading-font">Town / City</label><input type="text" class="input-text " name="shipping_city" id="shipping_city" placeholder="" value="" autocomplete="address-level2"></p>
                                                 <p class="form-row form-row-wide address-field validate-state" id="shipping_state_field" data-priority="80" data-o_class="form-row form-row-wide address-field validate-state"><label for="shipping_state" class="heading-font">State / County</label><input type="text" class="input-text " value="" placeholder="" name="shipping_state" id="shipping_state" autocomplete="address-level1"></p>
                                                 <p class="form-row form-row-wide address-field validate-postcode" id="shipping_postcode_field" data-priority="90" data-o_class="form-row form-row-wide address-field validate-postcode"><label for="shipping_postcode" class="heading-font">Postcode / ZIP</label><input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="" value="" autocomplete="postal-code"></p>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="woocommerce-additional-fields">
                                           <div class="stm-billing-fields">
                                              <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments" class="heading-font">Order notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></p>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div id="order_review" class="woocommerce-checkout-review-order">
                                     <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden">
                                           <div class="colored-separator text-left">
                                              <div class="first-long"></div>
                                              <div class="last-short"></div>
                                           </div>
                                           <h4 id="order_review_heading">Your order</h4>
                                           <table class="shop_table woocommerce-checkout-review-order-table heading-font">
                                              <tbody>
                                                 <tr class="table_heading">
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                 </tr>
                                                 <tr class="cart_item">
                                                    <td class="product-name">
    Handicap controls&nbsp;							 <span class="product-quantity">× 1</span>
                                                    </td>
                                                    <td class="product-total">
                                                       <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>0</span>
                                                    </td>
                                                 </tr>
                                                 <tr class="cart_item">
                                                    <td class="product-name">
    Economy&nbsp;							 <span class="product-quantity">× 6</span>
                                                    </td>
                                                    <td class="product-total">
                                                       <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>600</span>
                                                    </td>
                                                 </tr>
                                                 <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>600</span></strong></td>
                                                 </tr>
                                                 <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td data-title="Shipping">
        Flat Rate <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="flat_rate:1" class="shipping_method">
                                                    </td>
                                                 </tr>
                                                 <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>600</span></strong> <small class="includes_tax">(includes <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>17</span> VAT)</small></td>
                                                 </tr>
                                              </tbody>
                                           </table>
                                        </div>
                                        <script></script>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 stm_rental_payment_methods stm_single_method_available">
                                           <div class="colored-separator text-left">
                                              <div class="first-long"></div>
                                              <div class="last-short"></div>
                                           </div>
                                           <h4 id="payment_heading">Payment</h4>
                                           <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('.stm_rental_payment_methods').addClass('stm_single_method_available');
        })
                                           </script>
                                           <div id="payment" class="woocommerce-checkout-payment">
                                              <ul class="payment_methods methods">
                                                 <li class="wc_payment_method payment_method_paypal">
                                                    <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" checked="checked" data-order_button_text="Proceed to PayPal" style="display: none;">
                                                    <label for="payment_method_paypal">
    Pay now <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal acceptance mark"><a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a>	</label>
                                                    <div class="payment_box payment_method_paypal">
                                                       <p>Pay now via PayPal</p>
                                                    </div>
                                                 </li>
                                              </ul>
                                              <div class="form-row place-order">
                                                 <noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;</noscript>
                                                 <input type="hidden" id="_wpnonce" name="_wpnonce" value="bf57035ecb"><input type="hidden" name="_wp_http_referer" value="/rent-a-car/?wc-ajax=update_order_review">
                                                 <p class="form-row terms">
                                                    <label for="terms" class="checkbox">I’ve read and accept the <a href="http://motors.stylemixthemes.com/rent-a-car/terms/" target="_blank">terms &amp; conditions</a></label>
                                                    <input type="checkbox" class="input-checkbox" name="terms" id="terms">
                                                 </p>
                                                 <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Proceed to PayPal" data-value="Place order">
                                              </div>
                                              <div class="clear"></div>
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