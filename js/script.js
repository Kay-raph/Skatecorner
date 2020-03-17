$(document).ready(function () {
    $("#ule").hide();
    $("#lip").click(function () {
        $(".link #lip").toggle(1000);
        $(".link #ule").slideDown(1000).show(1000);
    });
});