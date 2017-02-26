$(document).ready(function () {
    //===========================SLIDE SHOW 1==============================//
    $(window).bind("scroll", function () {
        parallax();
    });
    var stt;
    var imgfirst = $('.slide > ul > li:first').attr('stt');
    var imglast = $('.slide > ul > li:last').attr('stt');
    $('.slide li').each(function () {
        if ($(this).is(':visible')) {
            stt = $(this).attr('stt');
        }
    });
    var width = 0;
    function time() {
        if ($('.time-banner').width() > $('.slide').width())
        {
            width = 0;
            $('.time-banner').css("width", "0");
            setTimeout(next(stt), 500);
        } else {
            width = width + 0.125;
            $('.time-banner').css("width", width + "%");
        }
    }
    var myvar = setInterval(time, 10);
    $('.fa-angle-left').bind("click", function () {
        clearInterval(myvar);
        pre(stt);
        $('.time-banner').css("width", 0 + "%");
    });
    $('.fa-angle-right').bind("click", function () {
        clearInterval(myvar);
        next(stt);
        $('.time-banner').css("width", 0 + "%");
    });
    function next(id)
    {
        $('.slide li').each(function () {
            if ($(this).is(':visible')) {
                id = $(this).attr('stt');
            }
        });
        if (id >= imglast)
        {
            id = imglast;
            pre(id);
        } else {
            $(".slide li").eq(id + 1).find('.bg').fadeOut(100);
            $(".slide li").eq(id + 1).css("z-index", "4");
            $(".slide li").eq(id + 1).slideDown(500);
            var select = ".text" + id;
            $(select).slideUp(700);
            $(".slide li").eq(id).find('.bg').fadeOut();
            $(".slide li").eq(id).css("z-index", "3");
            $(".slide li").eq(id).animate({top: 1000}, 1500);
            stt = id++;
            $(".slide li").eq(id).find('.bg').fadeIn(1000, function () {
                var select = ".text" + id;
                $(select).slideDown(500);
            });
        }
    }
    function pre(id)
    {
        $('.slide li').each(function () {
            if ($(this).is(':visible')) {
                id = $(this).attr('stt');
            }
        });
        if (id <= imgfirst)
        {
            id = imgfirst;
            next(id);
        } else
        {
            $('.slide li').eq(id).find('.bg').fadeOut();
            $('.slide li').eq(id).css("z-index", "3");
            $('.slide li').eq(id).slideUp(1500);
            var select = ".text" + id;
            $(select).slideUp(700);
            stt = id--;
            $('.slide li').eq(id).css({"top": "700", "display": "block", "z-index": "4"});
            $('.slide li').eq(id).animate({top: 0}, 500);
            $('.slide li').eq(id).find('.bg').fadeIn(1000, function () {
                var select = ".text" + id;
                $(select).slideDown(500);
            });
        }
    }
   //==========================END SLIDESHOW 1===================================//
});
function parallax() {
    var scrollpos = $(window).scrollTop();
    $(".slide > ul > .img-slide").css("top", (0 + (0.7 * scrollpos)) + "px");
}