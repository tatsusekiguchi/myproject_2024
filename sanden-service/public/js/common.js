/* Javascript */

/* 切り替え幅 */
var replaceWidth = 1025;

$(window).load(function () {
    if($('.topMain').length > 0) {
        $(".splash").delay(11000).fadeOut(800);
    }
});


//pc、sp判定
function reseHeaderMenu(){

    if(parseInt($(window).width()) >= replaceWidth) {

        $("body").removeClass("sp");
        $("body").addClass("pc");
        $("nav").attr("style","");

    } else {

        $("body").removeClass("pc");
        $("body").addClass("sp");

    }

}

//幅変更時pc、sp判定
$(window).resize(function(){reseHeaderMenu();});

//リサイズもしくはロードされた時にReLayout呼び出し
$(window).on("load resize", ReLayout);

function ReLayout() {
    var _width = $(window).width(); //画面サイズ取得
     
    if(_width >= 1025) {
        //幅に応じて読み込む画像を変更する
        changeImg('.switch');
    }
     
    else {
        changeImg('.switch');
    }

}

$(document).ready(function(){

    //pc、sp判定
    reseHeaderMenu();

    //スマホメニュー
    dispObj();

    //telリンクをスマートフォン端末以外では無効にする
    setTelLink();

    //アコーディオン
    setAccord();
    
    //ページ内リンクのなめらかスクロール
    pageScroll();

    // if($('.topMain').length > 0) {
    //     setTimeout(function(){
    //         $(".splash").fadeOut();
    //     }, 11000);
    // }

    //カウントアップ
    if($('.aboutMain').length > 0) {
        $('.count').counterUp({
            delay: 10,
            time: 1000
        });
    }

});

//======================================================================================================
// changeImg( )
// 機能  ：幅に応じて読み込む画像を変更する
// 引数  ：target→image
// 戻り値：なし
//======================================================================================================
function changeImg(target) {

    var $setElem = $(target),
    pcName = '_pc',
    spName = '_sp',
    replaceWidth = 1025;

    $setElem.each(function(){
        var $this = $(this);
        function imgSize(){
            var windowWidth = parseInt($(window).width());
            if(windowWidth >= replaceWidth) {
                $this.attr('src',$this.attr('src').replace(spName,pcName));
            } else if(windowWidth < replaceWidth) {
               $this.attr('src',$this.attr('src').replace(pcName,spName));
            }
        }
        $(window).resize(function(){imgSize();});
        imgSize();
    });
}

//======================================================================================================
// dispObj( )
// 機能  ：スマホメニュー
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function dispObj(){
    
    $('.header .humberger').click(function() {
        $(this).toggleClass('is-open');
        $('.header .navBox').toggleClass('active');
        return false;
    });

}

//======================================================================================================
// setTelLink( )
// 機能  ：telリンクをスマートフォン端末以外では無効にする
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setTelLink() {
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);

    if (!isMobile) {
        $('a[href^="tel:"]').on('click', function(e) {
            e.preventDefault();
        });
    }
}

//======================================================================================================
// setAccord( )
// 機能  ：アコーディオン
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setAccord() {

 
    $('.accordBtn').click(function(){

        $(this).toggleClass('active');

        $(this).next('.accordBody').slideToggle();

    });

}

//======================================================================================================
// pageScroll( )
// 機能  ：ページ内リンクのスクロール設定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function pageScroll() {

    $('.linkList .li[data-target],.linkBtn[data-target]').on('click',function(e){
        e.preventDefault();
        var headH = $('.header').innerHeight();
        var cls = '.' + $(this).data('target');
        var pos = $(cls).offset().top - headH;
        $('body,html').stop().animate({
            scrollTop: pos
        }, 1000);
    });

}
