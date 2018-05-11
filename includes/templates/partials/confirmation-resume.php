<?php
    //
//$pick_up_date = $data[''      ]
?>
<style type="text/css">
    .stm-fullwidth-with-parallax-bg {
        background-image: url('http://hqwptwo.test/wp-content/uploads/2017/01/placeholder.gif');
    }
</style>
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
                                <p class="form-row form-row-first">
                                    <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                                </p>
                                <p class="form-row form-row-last">
                                    <input type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                </p>
                                <div class="clear"></div>
                            </form>
                        </div>
                        <script type="text/javascript">
                            (function($){
                                $(document).ready(function(){
                                    var $coupon = $('.stm_checkout_coupon .input-text');
                                    $coupon.on('focus', function(){
                                        $('.stm_checkout_coupon').addClass('active');
                                    });

                                    $coupon.on('focusout', function(){
                                        $('.stm_checkout_coupon').removeClass('active');
                                    })
                                });
                            })(jQuery)
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="stm_rent_order_info">
                            <div class="title">
                                <h4>Minivan</h4>
                                <div class="subtitle heading-font">Ford Fusion or Similar</div>
                            </div>
                            <div class="image">
                                <img src="http://hqwptwo.test/wp-content/uploads/2017/01/placeholder-350x181.gif">
                            </div>
                            <!--Car rent-->
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
                                        <td>4 Days</td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>1,180.00</span></td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>4,720.00</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="divider"></td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="heading-font">
                                    <tr>
                                        <td colspan="2">Rental Charges Rate</td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>4,720.00</span></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!--Add-ons-->
                            <div class="stm-rent-total heading-font">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>Estimated total</td>
                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>4,720.00</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="stm_custom_rental_checkout">
                            <div class="woocommerce">
                                <div class="woocommerce-order">
                                    <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received heading-font">
                                        <i class="fa fa-check"></i>
                                        Thank you. Your order has been received.							<a href="http://hqwptwo.test/checkout/" style="color: #1bc744;">Return to account</a>
                                    </p>
                                    <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details heading-font">
                                        <li class="woocommerce-order-overview__order order">
                                            <span>Order number:</span>
                                            <strong class="heading-font">#489</strong>
                                        </li>
                                        <li class="woocommerce-order-overview__date date">
                                            Date:					<strong>May 11, 2018</strong>
                                        </li>
                                        <li class="woocommerce-order-overview__total total">
                                            Total:					<strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>4,720.00</span></strong>
                                        </li>
                                        <li class="woocommerce-order-overview__payment-method method">
                                            <span>Payment method:</span>
                                            <strong>Cash on delivery</strong>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                    <h4 class="rental_title">Summary</h4>
                                    <div class="stm_rental_order_success">
                                        <div class="single_order_info">
                                            <h4 class="title">Pick Up</h4>
                                            <div class="content">1230 E Springs Rd, Los Angeles,  CA, USA 2018/05/14 17:13</div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Drop off</h4>
                                            <div class="content">1230 E Springs Rd, Los Angeles,  CA, USA 2018/05/18 17:13</div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Vehicle Type</h4>
                                            <div class="content">Minivan Ford Fusion or Similar</div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Your Information</h4>
                                            <div class="content">Miguel Faggioni</div>
                                        </div>
                                        <div class="single_order_info">
                                            <h4 class="title">Payment information</h4>
                                            <div class="content">Estimated Total - <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>4,720.00</span></div>
                                        </div>
                                    </div>
                                    <div class="stm_order_print">
                                        <a href="javascript:window.print()" class="button">
                                            Print        <i class="fa fa-print"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    (function($){

                        $(window).load(function(){
                            var fields = '.stm_woocommerce_checkout_billing .form-row input, ' +
                                '.stm_woocommerce_checkout_billing .form-row select';

                            $(fields).each(function(){
                                if($(this).val() == '') {
                                    $(this).closest('.form-row').removeClass('woocommerce-validated');
                                }
                            });

                            $(document).on('focusout', fields, function(){
                                if($(this).val() == '') {
                                    $(this).closest('.form-row').removeClass('woocommerce-validated');
                                }
                            })
                        });

                    })(jQuery)
                </script>
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
                <script type="text/javascript">
                    (function($) {
                        "use strict";

                        var stm_single_filter_link = false;
                        var stmIsotope;
                        var $container = $('.stm-isotope-sorting');

                        $(document).ready(function () {
                            /*Terms and conditions rental*/
                            $(document).on("click", '.stm-template-car_rental .form-row.terms a', function (event) {
                                event.preventDefault();
                                $('.stm_terms_popup_dismiss, .stm_terms_popup').addClass('active');
                            });

                            $(document).on("click", '.stm_terms_popup_dismiss, .stm_terms_popup .fa-close', function (event) {
                                event.preventDefault();
                                $('.stm_terms_popup_dismiss, .stm_terms_popup').removeClass('active');
                            });
                        })
                    })(jQuery);
                </script>
            </div>
        </div>
        <!--row-->
    </div>
    <!--container-->
</div>
