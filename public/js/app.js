
// SIDE MENU EVENTS

function toggleMenu() {
    $("#sideMenuBarSemi").toggleClass("w-1/2");
    $("#sideMenuBarSemi").toggleClass("w-full");
    if ($("#sideMenuContainer").css("transform") == "matrix(1, 0, 0, 1, 0, 0)") {
        $("#sideMenuContainer").css("transform", "translateX(-100%)");
    } else {
        $("#sideMenuContainer").css("transform", "translateX(0%)");
    }
    $('#sideMenuBlack').toggle();
}

$("#sideMenuBtn").click(function () {
    toggleMenu();
});

$('#sideMenuBlack').on('click', function(e) {
    toggleMenu();
});


// MODAL EVENTS

$(".modal-open").click(function () {
    $("#" + $(this).attr("modal")).slideDown();
});

$(".modal-close").click(function () {
    $(".modal").slideUp();
});

// COLOR PICKER

$(".color-picker").click(function () {
    $("input[type=color]").click();
});

$("input[type=color]").change(function (e) { 
    let color = e.target.value;
    $(".color-picker").css("background-color", color);
});