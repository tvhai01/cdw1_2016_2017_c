
$(document).ready(function(){
   // alert($('.post .post-content').height()+20);
    $('.post').load(function(){
       var height = $(this).height()+20;
       $(this).find('.post-time').height(height);
        alert(height);
    });
});