$(function() {
    $.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error has-feedback');
            $(element).siblings('.glyphicon').addClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').addClass('has-success has-feedback').removeClass('has-error');
            $(element).siblings('.glyphicon').addClass('glyphicon-ok').removeClass('glyphicon-remove');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $('#admForm').validate({
        rules: {
            fName: {
                rangelength: [3, 20]
            },
            lName: {
                rangelength: [3, 20]
            },
            pincode: {
                rangelength: [6, 6]
            },
            mobNo: {
                rangelength: [10, 10]
            }
        },
        messages: {
            mobNo: {
                rangelength: 'Mobile number has to be exactly {0} digits long'
            }
        }
    });

    $('.digits').rules('add', 'digits');

    $('.sscMks').keyup(function() {
        $('#sscObtMks').text(parseInt($('#sscEng').val()) + parseInt($('#sscMat').val()) + parseInt($('#sscSci').val()));
        $('#sscPer').text(parseFloat(parseInt($('#sscObtMks').text()) * 100 / parseInt($('#sscTotMks').text())).toFixed(2));
    });

    $('.hscMks').keyup(function() {
        $('#hscObtMks').text(parseInt($('#hscEng').val()) + parseInt($('#hscMat').val()) + parseInt($('#hscPhy').val()) + parseInt($('#hscChe').val()) + parseInt($('#hscVoc').val()));
        $('#hscPer').text(parseFloat(parseInt($('#hscObtMks').text()) * 100 / parseInt($('#hscTotMks').text())).toFixed(2));
    });

    $('.jeeMks').keyup(function() {
        $('#jeeObtMks').text(parseInt($('#jeePhy').val()) + parseInt($('#jeeChe').val()) + parseInt($('#jeeMat').val()));
    });
});
