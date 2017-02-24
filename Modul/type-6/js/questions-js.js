$(document).ready(function()
{
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
});