/* Javascript */

/* 切り替え幅 */
var replaceWidth = 1025;

//pc、sp判定
function reseHeaderMenu() {
  if (parseInt($(window).width()) >= replaceWidth) {
    $("body").removeClass("sp");
    $("body").addClass("pc");
    $("nav").attr("style", "");
    $(".hamburger").removeClass("is-open");
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

$(window).on("load", function () {
  setTimeout(function () {
    $("#loading").fadeOut("slow", function () {});
  }, 1500);
});

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
  pageScroll();

  //ページ内リンクのスクロールアニメーション
  scrollAnim(
    ".header .logo a, .leftSection__category a, .nav__category__list a, .footer__category a, .pagetop a"
  );

  $(".header a").click(function () {
    if ($(".hamburger").hasClass("is-open")) {
      $(".hamburger").click();
    }
  });

  $(window).scroll(function () {
    var windowScroll = $(window).scrollTop();

    $(".scaleImage img").each(function () {
      var elementOffset = $(this).offset().top;
      var scroll = windowScroll - elementOffset;

      // スクロールに応じてスケール値を減らしていく
      var scale = 0.5 - scroll / 1000; // 1000 は調整可能な係数
      // スケール値が1未満にならないようにする
      if (scale < 1) scale = 1;

      $(this).css("transform", "scale(" + scale + ")");
    });
  });

  $(".areaPanel ul li").hover(
    function () {
      // マウスオーバー時の処理
      var index = $(this).index();
      $(".areaMap img").attr(
        "src",
        "https://www.pastone.jp/wp/wp-content/themes/original_theme/asset/image/top/about_map_hover_0" +
          (index + 1) +
          ".png"
      );
    },
    function () {
      // マウスアウト時の処理
      $(".areaMap img").attr(
        "src",
        "https://www.pastone.jp/wp/wp-content/themes/original_theme/asset/image/top/about_map_hover_00.png"
      );
    }
  );

  $(".areaPanel ul li").click(function () {
    // 現在のウィンドウ幅を取得
    var currentWidth = $(window).width();

    // ウィンドウ幅が replaceWidth 未満の場合のみ画像を切り替える
    if (currentWidth < replaceWidth) {
      var index = $(this).index();
      $(".areaMap img").attr(
        "src",
        "https://www.pastone.jp/wp/wp-content/themes/original_theme/asset/image/top/about_map_hover_0" +
          (index + 1) +
          ".png"
      );
    }
  });

  if ($(".section__people").length > 0) {
    $(".interviewSlider").slick({
      // autoplay: true,
      infinite: true,
      fade: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
    });
  }

  $(".recruitModalOpen").on("click", function () {
    const modalId = $(this).data("modal-id");
    const targetModal = $(`.recruitItemModal[data-modal="${modalId}"]`);
    targetModal.css("display", "flex");
    $(".recruitItemOverlay").show();
  });

  $(".recruitItemModal .modalClose, .recruitItemOverlay").on(
    "click",
    function () {
      $(".recruitItemModal").hide();
      $(".recruitItemOverlay").hide();
    }
  );
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
  $(".header .hamburger").click(function () {
    $(this).toggleClass("is-open");
    $(".header  nav").fadeToggle();
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
  $(".accord .dt").click(function () {
    $(this).toggleClass("active");

    $(this).next(".dd").slideToggle();
  });
}

//======================================================================================================
// pageScroll( )
// 機能  ：ページ内リンクのスクロール設定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function pageScroll() {
  $(".linkList .li[data-target],.linkBtn[data-target]").on(
    "click",
    function (e) {
      e.preventDefault();
      var headH = $(".header").innerHeight();
      var cls = "." + $(this).data("target");
      var pos = $(cls).offset().top - headH;
      $("body,html").stop().animate(
        {
          scrollTop: pos,
        },
        1000
      );
    }
  );
}

//======================================================================================================
// scrollAnim( )
// 機能  ：ページ内リンクのスクロールアニメーション
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function scrollAnim(elem) {
  var speed = 1000;
  var NAV_ELEM = $(".header");

  $(elem).click(function () {
    var href = "";
    if ($(this).attr("href")) {
      href = $(this).attr("href");
    }
    var target = $("html");
    if (href == "") {
      target = $("article");
    } else if (href == "#") {
      target = $("html");
    } else {
      target = $(href);
    }
    var position = target.offset().top;

    // position - (ナビゲーション高さ)
    var navHeight = NAV_ELEM.innerHeight();
    position = position - navHeight;

    $("html, body").stop().animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  //URLのハッシュ値を取得
  var urlHash = location.hash;
  //ハッシュ値があればページ内スクロール
  if (urlHash) {
    //スクロールを0に戻す
    $("body,html").animate({ scrollTop: 0 }, 10);
    setTimeout(function () {
      //ロード時の処理を待ち、時間差でスクロール実行
      scrollToAnker(urlHash);
    }, 100);
  }

  // 指定したアンカー(#ID)へアニメーションでスクロール
  function scrollToAnker(hash) {
    var target = $(hash);
    var position = target.offset().top;
    // position - (ナビゲーション高さ)
    var navHeight = NAV_ELEM.innerHeight();
    position = position - navHeight;

    $("body,html").stop().animate({ scrollTop: position }, 1000);
  }
}
