$(function() {
	"use strict";

    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: true
    }),
    $('.timepicker').pickatime()



        $('#date-time').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD HH:mm'
        });
        $('#delivery').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            time: false
        });
        $('#construction_Date').bootstrapMaterialDatePicker({
            time: false,
            format: 'YYYY-MM-DD',
        });
        $('#time').bootstrapMaterialDatePicker({
            date: false,
            format: 'HH:mm'
        });



});
