$(function () {
    $('.page-top-icon').on('click',function(){
        $( 'html,body' ).animate( {scrollTop:0} , 'fast' ) ;
    });

    $(window).on('scroll load',function() {
        if ($(window).scrollTop() > 200) {
            $('.page-top-icon').fadeIn('fast');
        }
        else {
            $('.page-top-icon').fadeOut('fast');
        }

    });
});