$(document).ready(function () {
    $(".menu-icon").click(function () {
        $(".menu-nav").slideToggle("1000");
    });
    $(window).bind("scroll", function () {
        parallax();
        navi();
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
    $('.fluid-question-li-1').click(function () {
        $('.fluid-question li').removeClass('active-li');
        $(this).addClass('active-li');
        $('.text-li1').slideDown();
        $('.text-li2').slideUp();
    });
    $('.fluid-question-li-2').click(function () {
        $('.fluid-question li').removeClass('active-li');
        $(this).addClass('active-li');
        $('.text-li2').slideDown();
        $('.text-li1').slideUp();
    });

    $('.fluid-titles-panel').click(function () {
        if (!$(this).find('p').is(':visible'))
        {
            $('.fluid-titles-panel p').slideUp();
        }

        $('.fluid-titles-panel').find('h4').removeClass('active-titles-panel');

        $('.fluid-titles-panel').find('.titles-panel-i').removeClass('fa-minus');
        $('.fluid-titles-panel').find('.titles-panel-i').addClass('fa-plus');

        $(this).find('h4').addClass('active-titles-panel');
        $(this).find('p').slideDown();
        $(this).find('h4').find('.titles-panel-i').addClass('fa-minus');
    });

    function slideNext() {
        $('.people-text').eq(1).css({"transform": "translate(1141px)"});
        $('.people-text').eq(0).addClass('active-slide');
        $('.people-text').eq(1).removeClass('active-slide');

        $('.flex-btn i').eq(0).addClass('active-flex-btn');
        $('.flex-btn i').eq(1).removeClass('active-flex-btn');
    }
    function slidePre() {
        $('.people-text').eq(0).css({"transform": "translate(-1141px)"});
        $('.people-text').eq(1).addClass('active-slide');
        $('.people-text').eq(0).removeClass('active-slide');

        $('.flex-btn i').eq(1).addClass('active-flex-btn');
        $('.flex-btn i').eq(0).removeClass('active-flex-btn');
    }
    $('.people-slide .flex-btn i').eq(0).click(function () {
        slideNext();
    });
    $('.people-slide .flex-btn i').eq(1).click(function () {
        slidePre();
    });
    $('.people-pic .fa-chevron-left').click(function () {
        slideNext();
    });
    $('.people-pic .fa-chevron-right').click(function () {
        slidePre();
    });
    var tranfX = 35;
    function logoslide(x) {

        $('.logo-slide').css({"left": x});
        if (x <= -661)
        {
            $('.logo-sliderow .fa-circle').eq(0).removeClass('fa-active');
            $('.logo-sliderow .fa-circle').eq(1).addClass('fa-active');
        } else {
            $('.logo-sliderow .fa-circle').eq(0).addClass('fa-active');
            $('.logo-sliderow .fa-circle').eq(1).removeClass('fa-active');
        }
    }
    $('.logo-sliderow .fa-chevron-right').click(function () {
        tranfX = tranfX - $('.logo-item').width();
        if (tranfX <= -1160)
            tranfX = 35;
        logoslide(tranfX);
    });
    $('.logo-sliderow .fa-chevron-left').click(function () {
        tranfX = tranfX + $('.logo-item').width();
        if (tranfX >= 35)
            tranfX = -1160;
        logoslide(tranfX);
    });
    $('.flex-btn-logo .fa-two').eq(0).click(function () {
        tranfX = 35;
        logoslide(tranfX);
    });
    $('.flex-btn-logo .fa-two').eq(1).click(function () {
        tranfX = -1160;
        logoslide(tranfX);
    });

    $('.flex-btn-logo i').click(function () {
        //tranfX = tranfX + 
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