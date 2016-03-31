var setPage = function(page) {
    var pageURL;
    var progress;
    if (page === 1) {
        progress = 0;
        pageURL = "personal.txt";
    } else if (page === 2) {
        progress = 25;
        pageURL = "academic.txt";
    } else if (page === 3) {
        progress = 50;
        pageURL = "misc.txt";
    } else if (page === 4) {
        progress = 75;
        pageURL = "documents.txt";
    }

    $.ajax({
        url: "form-pages/" + pageURL,
        success: function(data) {
            $(".page-content").html(data);
            $(".progress-bar").css("width", progress + "%");
            $(".progress-bar>span").text(progress + "% complete");
        },
        error: function() { alert("Couldn't read file"); }
    });
};

$(function() {
    $(".pagination").twbsPagination({
        totalPages: 4,
        onPageClick: function(event, page) {
            console.log(page);
            setPage(page);
        }
    });
});
