
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