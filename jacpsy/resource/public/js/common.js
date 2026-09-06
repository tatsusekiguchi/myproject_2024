/* Javascript */

/* 切り替え幅 */
var replaceWidth = 1025;

//pc、sp判定
function reseHeaderMenu() {
  if (parseInt($(window).width()) >= replaceWidth) {
    $("body").removeClass("sp");
    $("body").addClass("pc");
    $("#slideBtn,#closeBtn,nav").attr("style", "");
  } else {
    $("body").removeClass("pc");
    $("body").addClass("sp");
  }
}

//幅変更時pc、sp判定
$(window).resize(function () {
  reseHeaderMenu();
});

//リサイズもしくはロードされた時にReLayout呼び出し
$(window).on("load resize", ReLayout);

function ReLayout() {
  var _width = $(window).width(); //画面サイズ取得

  if (_width >= 1025) {
    //幅に応じて読み込む画像を変更する
    changeImg(".switch");
  } else {
    changeImg(".switch");
  }
}

$(document).ready(function () {
  //pc、sp判定
  reseHeaderMenu();

  //スマホメニュー
  dispObj();

  //telリンクをスマートフォン端末以外では無効にする
  setTelLink();

  //アコーディオン
  setAccord();

  //ページ内リンクのなめらかスクロール
  pageScroll("#pagetop a,#infoBox a");

  //ページトップの設定
  setPageTop();

  //ページネーション表示制御
  setPagenationDisp();
});

//======================================================================================================
// changeImg( )
// 機能  ：幅に応じて読み込む画像を変更する
// 引数  ：target→image
// 戻り値：なし
//======================================================================================================
function changeImg(target) {
  var $setElem = $(target),
    pcName = "_pc",
    spName = "_sp",
    replaceWidth = 1025;

  $setElem.each(function () {
    var $this = $(this);
    function imgSize() {
      var windowWidth = parseInt($(window).width());
      if (windowWidth >= replaceWidth) {
        $this.attr("src", $this.attr("src").replace(spName, pcName));
      } else if (windowWidth < replaceWidth) {
        $this.attr("src", $this.attr("src").replace(pcName, spName));
      }
    }
    $(window).resize(function () {
      imgSize();
    });
    imgSize();
  });
}

//======================================================================================================
// dispObj( )
// 機能  ：スマホメニュー
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function dispObj() {
  $("header #slideBtn").click(function () {
    $("#closeBtn").show();
    $("#closeBtn").fadeIn();
    $("nav").slideDown();
    $("#slideBtn").hide();
  });
  $("#closeBtn").click(function () {
    $("#closeBtn").hide();
    $("nav").slideUp();
    $("#slideBtn").show();
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
  var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

  if (!isMobile) {
    $('a[href^="tel:"]').on("click", function (e) {
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
  $(".accordBtn").click(function () {
    if ($("body").hasClass("sp")) {
      $(this).toggleClass("active");

      $(this).next().slideToggle();
    }
  });

  //幅変更時
  function reseAccrd() {
    if (parseInt($(window).width()) >= replaceWidth) {
      $(".accordBtn").removeClass("active");
      $(".accordBtn + *").removeAttr("style");
    }
  }

  $(window).resize(function () {
    reseAccrd();
  });

  reseAccrd();
}

//======================================================================================================
// pageScroll( )
// 機能  ：ページ内リンクのスクロール速度設定
// 引数  ：target→対象リンクオブジェクト
// 戻り値：なし
//======================================================================================================
function pageScroll(target) {
  $(target).click(function () {
    var speed = 1000;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    if (href != "#") {
      position = position - 10;
    }

    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
}

//======================================================================================================
// setPageTop( )
// 機能  ：一定量スクロールするとページトップへのリンクを表示させる設定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setPageTop() {
  var objBtnTop = $("#pagetop");
  objBtnTop.hide();

  //スクロールが100に達したらボタン表示
  $(window).scroll(function () {
    //スクロール量が100pxより多い場合
    if ($(this).scrollTop() > 100) {
      objBtnTop.fadeIn();

      //スクロール量が100px以下の場合
    } else {
      objBtnTop.fadeOut();
    }
  });
}

//======================================================================================================
// setPagenationDisp( )
// 機能  ：ページネーション表示制御
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setPagenationDisp() {
  var index = $(".pagination li").index($(".current"));

  if (index == 2) {
    $(".pagination li:nth-child(-n+2)").hide();
  }
}
