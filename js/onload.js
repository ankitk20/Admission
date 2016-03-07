$(function() {
    $('.datepicker').datepicker({
        format: "dd-mm-yyyy",
        autoclose: true,
        startDate: 0
    });

    $('input[type=file]').click().change(function() {
        $(this).parent().next().children().first().val($(this).val());
    });

    $('.btnFile').click(function() {
        $(this).parent().prev().children().click();
    })
});
