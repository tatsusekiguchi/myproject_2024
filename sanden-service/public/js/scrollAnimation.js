// JavaScript Document

/*===================================================
    スクロールアニメーション用 JS
    一定のコンテンツまでスクロールしたら、
    animate.cssを使用してアニメーション表示
===================================================*/

/*////////////////////////////////////////////////////////////
    TOP
/////////////////////////////////////////////////////////////*/
$(function(){
    
    if($('.main').length > 0) {
        $('.fadeUp').css('opacity','0');
        $('.fadeLeft .li').css('opacity','0');
        $(window).on('load scroll',function (){
            $('.fadeUp').each(function(){
                var imgPos = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > imgPos - windowHeight + windowHeight/3){
                    $(this).addClass('animated fadeInUp');
                }
            });
            $('.light').each(function(){
                var imgPos = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > imgPos - windowHeight + windowHeight/3){
                    $(this).addClass('animated swing').css('animation-delay','0.6s');
                }
            });
            $(".fadeLeft .li").each(function(){
                var imgPos = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll > imgPos - windowHeight + windowHeight/3){
                    $(".fadeLeft .li:nth-child(1)").addClass('animated fadeInLeft');
                    $(".fadeLeft .li:nth-child(2)").addClass('animated fadeInLeft').css('animation-delay','0.2s');
                }
            });
        });
    }
    
});