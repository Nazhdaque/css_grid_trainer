$(".btn").click(function (e) {
    let x = $(this).attr("data-btn");
    $("html, body").animate(
        {
            scrollTop: $(`#num_${x}`).offset().top,
        },
        250
    );
});

$(".num div").click(function (e) {
    $("html, body").animate(
        {
            scrollTop: 0,
        },
        250
    );
});
