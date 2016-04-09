var setPage = function(page) {
    var pageURL;
    var progress;

    if (page === 1) {
        progress = "personal";
        pageURL = "personal.php";
    } else if (page === 2) {
        progress = "academic";
        pageURL = "academic.php";
    } else if (page === 3) {
        progress = "misc";
        pageURL = "misc.php";
    } else if (page === 4) {
        progress = "documents";
        pageURL = "documents.php";
    }

    $.ajax({
        url: "form-pages/" + pageURL,
        async: false,
        success: function(data) {
            $(".page-content").html(data);
            var cur = $("#" + progress);
            cur.addClass("active").removeClass("disabled");
            cur.siblings().not(cur.nextAll()).addClass("completed");
        },
        error: function() { alert("Couldn't read file"); }
    });
};

$(function() {
    setPage(1);
    $("#jqpagination").jqPagination({
        max_page: 4,
        paged: function(page) {
            setPage(page);
            validate(page);
        }
    });
});
