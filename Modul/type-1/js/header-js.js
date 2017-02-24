$(document).ready(function () {
    $(".menu-icon").click(function () {
        $(".menu-nav").slideToggle("1000");
    });
    $(window).bind("scroll", function () {
        parallax();
        navi();
    });
});
function parallax() {
    var scrollpos = $(window).scrollTop();
    $(".slide > ul > .img-slide").css("top", (0 + (0.7 * scrollpos)) + "px");
}
function navi() {
    var scrollpos = $(window).scrollTop();
    if (scrollpos >= 38) {
        $(".header-navigator").css({"position": "fixed", "top": "0", "width": "100%", "padding-bottom": "10px", "transition": "all 1s"});
        $(".logo").css("margin-top", "10px");
        $(".menu-nav").css("margin-top", "20px");
        $(".home-cta").css("margin-top", "10px");
    } else {
        $(".home-cta").css("margin-top", "30px");
        $(".logo").css("margin-top", "30px");
        $(".menu-nav").css("margin-top", "40px");
        $(".header-navigator").css({"position": "relative", "padding-bottom": "30px", "paddding-top": "30px"});
        //alert(scrollpos);
    }
}