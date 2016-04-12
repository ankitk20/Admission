var pages = ['personal', 'academic', 'documents'],
    curPage,
    nextPage,
    formRequest;

function submitForm() {
    if (formRequest) formRequest.abort();

    var result;
    var sdata = new FormData(document.getElementById('form'));
    formRequest = $.ajax({
        url: 'backend/databaseEntry.php',
        type: 'POST',
        data: sdata,
        processData: false,
        contentType: false
    });

    formRequest.done(function(response, status, xhr) {
        console.log(response, status);
        result = true;
    });

    formRequest.fail(function(xhr, status, err) {
        console.error("Error occurred: " + status + ": " + err);
        result = false;
    });

    return result;
}

function optimizeForm() {
    $('select.ui.dropdown').dropdown();

    $(':file').change(function() {
        $(this).next().children('input').val($(this).val());
    });
    $('#dob').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        format: 'YYYY-MM-DD',
        minDate: moment().subtract(24, 'years').format('YYYY-MM-DD')
    });
}

function setPage(page) {
    if (page === 3)
        alert('Success!');
    else {
        curPage = page;
        $.ajax({
            url: "form-pages/" + pages[page] + '.php',
            success: function(data) {
                $(".page-content").html(data);
                var cur = $("#" + pages[page]);
                cur.addClass("active").removeClass("disabled");
                cur.prevAll().addClass("completed").removeClass("active disabled");
            },
            error: function() { alert("Couldn't read file"); }
        });
        nextPage = page + 1;
        setTimeout(optimizeForm, 500);
    }
}

function calcMarks() {

    var sscTotal = parseInt($('#sscEng').val()) + parseInt($('#sscMat').val()) + parseInt($('#sscSci').val());

    $('#sscObtMks').val(
        isNaN(sscTotal) ? 0 : sscTotal
    );

    $('#sscPer').val((parseFloat(parseInt($('#sscObtMks').val()) * 100) / 400).toFixed(2));

    var hscTotal = parseInt($('#hscEng').val()) + parseInt($('#hscMat').val()) + parseInt($('#hscPhy').val()) + parseInt($('#hscChe').val()) + parseInt($('#hscVoc').val());

    $('#hscObtMks').val(
        isNaN(hscTotal) ? 0 : hscTotal
    );

    $('#hscPer').val((parseFloat(parseInt($('#hscObtMks').val()) * 100) / 600).toFixed(2));

    var jeeTotal = parseInt($('#hscEng').val()) + parseInt($('#hscMat').val()) + parseInt($('#hscPhy').val()) + parseInt($('#hscChe').val()) + parseInt($('#hscVoc').val());

    $('#jeeObtMks').val(
        isNaN(jeeTotal) ? 0 : jeeTotal
    );

    $('#jeePer').val((parseFloat(parseInt($('#jeeObtMks').val()) * 100) / 360).toFixed(2));

}

$(function() {
    setPage(1);
    var i;
    $('#btnValidate').click(function() {
        if (curPage === 1) calcMarks();
        else if (curPage === 2)
            $(this).html('Submit <i class="send outline icon"></i>');

        i = validate();
        if (i === true) {
            if (submitForm() === true)
                setPage(nextPage);
        }
    });
});
