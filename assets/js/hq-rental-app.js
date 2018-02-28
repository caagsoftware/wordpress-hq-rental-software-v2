(function($) {
    "use strict";
    $(document).ready(function(){
        $('input[name="return_same"]').on('change', function(){
            if($(this).prop('checked')) {
                $('.stm_same_return').slideUp();
            } else {
                $('.stm_same_return').slideDown();
            }
        });
        $('input[name="pick_up_location"]').change(function(){
            if($(this).prop('checked')) {
                $('input[name="return_location"]').val($('input[name="pick_up_location"]').val());
            }
        });
        $('.stm_pickup_location select').on('select2:open', function() {
            $('body').addClass('stm_background_overlay');
            $('.select2-container').css('width', $('.select2-dropdown').outerWidth());
        });

        $('.stm_pickup_location select').on('select2:close', function(){
            $('body').removeClass('stm_background_overlay');
        });
        $('#hq_rental_pick_up_location').change(function(){
            $('#hq_rental_return_location').val($('#hq_rental_pick_up_location').val());
        });
/*      $()
        $('.stm_date_time_input input').on('change', function(){
            if($(this).val() == '') {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }
        });*/
/*
        $(document).on('mouseover', '.stm_rent_location .select2-results__options li', function(){
            var currentLi = ($(this).index()) - 1;
            $('.stm_rent_location .stm_locations_description').remove();
            $('.stm_rent_location').append(contents[currentLi]);
        });*/


        /*Timepicker*/
        var stmToday = new Date();
        var stmTomorrow = new Date(+new Date() + 86400000);
        var stmStartDate = false;
        var stmEndDate = false;
        var startDate = false;
        var endDate = false;
        var dateTimeFormat = 'Y-m-d H:i';



        $('#hq-rental-pick-up-date-time').stm_datetimepicker({
            format: dateTimeFormat,
            defaultDate: stmToday,
            defaultSelect: false,
            closeOnDateSelect: true,
            timeHeightInTimePicker: 40,
            fixed: true,
            lang: stm_lang_code,
            onShow: function( ct ) {
                $('body').addClass('stm_background_overlay stm-lock');
                var stmEndDate = $('.stm-date-timepicker-end').val() ? $('.stm-date-timepicker-end').val() : false;
                if(stmEndDate) {
                    stmEndDate = stmEndDate.split(' ');
                    stmEndDate = stmEndDate[0];
                }

                this.setOptions({
                    minDate: new Date(),
                    maxDate: stmEndDate
                });

                $(".xdsoft_time_variant").css('margin-top', '-600px');
            },
            onSelectDate: function( ) {
                if($('.stm-date-timepicker-start').val() != '' && $('.stm-date-timepicker-end').val() != '') {
                    checkDate($('.stm-date-timepicker-start').val(), $('.stm-date-timepicker-end').val());
                }
                $('.stm-date-timepicker-start').stm_datetimepicker('close');
            },
            onClose: function( ) {
                $('body').removeClass('stm_background_overlay stm-lock');
            }
        });
        /*Datepicker Init*/
        $('#hq-rental-return-date-time').stm_datetimepicker({
            format:dateTimeFormat,
            defaultDate: stmTomorrow,
            defaultSelect: false,
            closeOnDateSelect: true,
            timeHeightInTimePicker: 40,
            fixed: false,
            lang: stm_lang_code,
            onShow:function( ct ){
                $('body').addClass('stm_background_overlay stm-lock');
                var stmStartDate = $('.stm-date-timepicker-start').val() ? $('.stm-date-timepicker-start').val() : false;
                if(stmStartDate) {
                    stmStartDate = stmStartDate.split(' ');
                    stmStartDate = new Date(stmStartDate[0]);
                } else {
                    stmStartDate = new Date();
                }

                stmStartDate.setDate(stmStartDate.getDate() + 1);

                //if($('.stm-date-timepicker-end').val()) stmStartDate = new Date($('.stm-date-timepicker-end').val().split(' ')[0]);
                this.setOptions({
                    minDate: stmStartDate
                })
            },
            onSelectDate: function( ) {
                if($('.stm-date-timepicker-start').val() != '' && $('.stm-date-timepicker-end').val() != '') {
                    checkDate($('.stm-date-timepicker-start').val(), $('.stm-date-timepicker-end').val());
                }

                $('.stm-date-timepicker-end').stm_datetimepicker('close');
            },
            onClose: function( ) {
                $('body').removeClass('stm_background_overlay stm-lock');
            }
        });

    });

    $('#caag-pick-up-date').change(function(){
        var newDate = moment($('#caag-pick-up-date').val(),'YYYY-MM-DD HH:mm');
        console.log(newDate);
        $('#caag-return-date').val(newDate.add(7, 'days').format('YYYY-MM-DD HH:mm'));
    });
    $('.xdsoft_current').css('background-color','#1184bf !important');

})(jQuery);

function checkDate ($start, $end) {
    var locationId = $('select[name="pickup_location"]').select2("val");
    var stm_timeout_rental;
    if(locationId != '') {
        jQuery.ajax({
            url: ajaxurl,
            type: "GET",
            dataType: 'json',
            context: this,
            data: 'startDate=' + $start + '&endDate=' + $end + '&action=stm_ajax_check_is_available_car_date',
            success: function (data) {
                console.log(data);
                $("#select-vehicle-popup").attr("href", $("#select-vehicle-popup").attr('href').split("?")[0] + "?pickup_location=" + locationId);
                if (data != '') {
                    clearTimeout(stm_timeout_rental);
                    $('.choose-another-class').addClass('single-add-to-compare-visible');
                    $(".choose-another-class").addClass('car-reserved');
                    $(".choose-another-class").find(".stm-title.h5").html(data);
                    stm_timeout_rental = setTimeout(function () {
                        $('.choose-another-class').removeClass('single-add-to-compare-visible').removeClass('car-reserved');
                    }, 10000);
                }
            }
        });
    }
}