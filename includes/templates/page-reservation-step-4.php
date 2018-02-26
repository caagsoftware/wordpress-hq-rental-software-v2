<?php
    if(hq_rental_wpv2_is_coming_from_step_3($_POST)){
        $clients = hq_rental_wpv2_get_clients_step_4($_POST);
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
                               <form method="post" class="checkout woocommerce-checkout" action="/reservation-step-5">
                                   <?php echo $hidden_inputs; ?>
                                  <div class="row" id="customer_details">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 stm_woocommerce_checkout_billing">
                                        <div class="woocommerce-billing-fields">
                                           <h4>Billing Details</h4>
                                           <div class="stm-billing-fields woocommerce-billing-fields__field-wrapper">
                                              <p class="form-row validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="heading-font">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="hq_rental_clients_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus"></p>
                                               <p class="form-row validate-required" id="billing_first_name_field" data-priority="10"><label for="billing_first_name" class="heading-font">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="hq_rental_clients_last_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus"></p>
                                               <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Proceed to PayPal" data-value="Place order">
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