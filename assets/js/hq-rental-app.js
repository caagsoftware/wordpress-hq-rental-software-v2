(function($) {
    "use strict";
    $(document).ready(function(){
        /*Global Variables*/
        var stmToday = new Date();
        var stmTomorrow = new Date(+new Date() + 86400000);
        var stmStartDate = false;
        var stmEndDate = false;
        var startDate = false;
        var endDate = false;
        var dateTimeFormat = hqDateTimeFormatPickers;
        var dateTimeFormatMoment = 'YYYY-MM-DD HH:mm';

        /*Step 1 - Setup*/
        var step1DateTimePickerConfig = {
            format: dateTimeFormat,
            timepicker:true,
            defaultSelect: false,
            closeOnDateSelect: true,
            defaultDate: stmToday
        };
        $('#hq-rental-pick-up-date-time').stm_datetimepicker(step1DateTimePickerConfig);
        $('#hq-rental-return-date-time').stm_datetimepicker(step1DateTimePickerConfig);
        /*Setting the Same Locations CheckBox*/
        $('input[name="return_same"]').on('change', function(){
            if($(this).prop('checked')) {
                $('.stm_same_return').slideUp();
            } else {
                $('.stm_same_return').slideDown();
            }
        });
        /*Select a Week Reservations*/
        /*
        $('#hq-rental-pick-up-date-time').change(function(){
            var addAWeek = moment($('#hq-rental-pick-up-date-time').val(), dateTimeFormatMoment);
            $('#hq-rental-return-date-time').val(addAWeek.add(7,'days').format(dateTimeFormatMoment));
        });*/

        $('.stm_pickup_location select').on('select2:open', function() {
            $('body').addClass('stm_background_overlay');
            $('.select2-container').css('width', $('.select2-dropdown').outerWidth());
        });

        $('.stm_pickup_location select').on('select2:close', function(){
            $('body').removeClass('stm_background_overlay');
        });

        $('#pick_up_location').change(function(){
            if($('#return_same_location').is(':checked')) {
                $('#return_location').val($('#pick_up_location').val());
            }
        });
        /*Multiselect Setup*/
        $('.js-example-basic-multiple').each(function(){
            $(this).select2();
        });
        $('#hq-countries').select2();



        $('#hq-datepicker-identification-field').each(function(){
            $(this).stm_datetimepicker({
                format: 'Y-m-d',
                timepicker:false,
                defaultSelect: false,
                closeOnDateSelect: true
            });
        });



        $('#hq-datepicker').each(function(){
            $(this).stm_datetimepicker({
                format: 'm/d/Y',
                timepicker:false,
                defaultDate: stmToday,
                defaultSelect: false,
                closeOnDateSelect: true,
                timeHeightInTimePicker: 40,
                fixed: true,
                lang: stm_lang_code,
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
        });

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
    });

    $('.xdsoft_current').css('background-color','#1184bf !important');

    /*Change Return Location on PickUp Location Selection*/
    $('#pick_up_location').change(function(){
        $('#return_location').val($('#pick_up_location').val());
    });


    var phonePickerOptions = {
        preferrefCountries: ["us"],
        initialCountry: "us"
    };

    /*Telephone International Code Picker*/
    $('#hq-phone-picker').each(function(){
        $(this).intlTelInput(phonePickerOptions);
    });
    $('#hq-phone-picker').on("countrychange", function(e, currentCountry){
        $('#hq-phone-picker-cc').val(currentCountry.dialCode);
        $('#hq-phone-picker-country').val(currentCountry.iso2);
    });
    $('#pick_up_location').on("change", function(){
        $('#pick_up_location_hidden').val($('#pick_up_location option:selected').text());
    });
    $('#return_location').on("change", function(){
        $('#return_location_hidden').val($('#return_location option:selected').text());
    });
    $('#pick_up_location_hidden').val($('#pick_up_location option:selected').text());
    $('#return_location_hidden').val($('#return_location option:selected').text());
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
