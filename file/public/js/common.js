/* Javascript */

window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload();
  }
};

$(function () {
  // ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
  $(
    'a:not([href^="#"]):not([target]):not([href^="tel:"]):not([href^="mailto:"]):not([data-lightbox]):not(.disabled):not(.lb-close)'
  ).on("click", function (e) {
    e.preventDefault(); // ナビゲートをキャンセル
    url = $(this).attr("href"); // 遷移先のURLを取得
    if (url !== "") {
      $("body").addClass("fadeout"); // bodyに class="fadeout"を挿入
      setTimeout(function () {
        window.location = url; // 0.8秒後に取得したURLに遷移
      }, 800);
    }
    return false;
  });
});

/* 切り替え幅 */
var replaceWidth = 1025;

//pc、sp判定
function reseHeaderMenu() {
  if (parseInt($(window).width()) >= replaceWidth) {
    $("body").removeClass("sp");
    $("body").addClass("pc");
    $("nav").attr("style", "");
    $(".navBox .pulldown").removeClass("active");
    $(".navBox .pulldown + .ul").attr("style", "");
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
  pageScroll();

  //ページ内リンクのスクロールアニメーション
  scrollAnim(
    ".menuMain .pagingList a, .showroomMain .pagingList a, .formMain .pagingList a"
  );

  //キービジュアルのスライダー設定
  keyvSlider();

  if (
    $(
      ".contactMain, .naturalfoodworksMain, .furnitureworksMain, .menuMain, .partnerMain, .productMain .blogPanel--list"
    ).length === 0
  ) {
    $(".header .language").hide();
  }

  var topBtn = $(".pagetop");
  //スクロールが100に達したらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  $(".sideNavPanel .subList").hide();
  $(".pulldownBox .pulldown").click(function () {
    var $subList = $(this).next(".subList");
    // すでに開いている場合は閉じる
    if ($subList.is(":visible")) {
      $subList.stop(true, true).slideUp();
      $(this).removeClass("active");
    } else {
      // 他の開いているサブリストを閉じる
      $(".pulldownBox .subList").stop(true, true).slideUp();
      $(".pulldownBox .pulldown").removeClass("active");
      // クリックされたものを開く
      $subList.stop(true, true).slideDown();
      $(this).addClass("active");
    }
  });

  if ($(".blogMain .blogPanel--detail").length > 0) {
    $(".slider .li").each(function (index, element) {
      if (!$(element).find(".webgene-item-main-image").length) {
        $(element).remove();
      }
    });

    //上部画像の設定
    $(".thumb-item").slick({
      infinite: true, //スライドをループさせるかどうか。初期値はtrue。
      fade: true, //フェードの有効化
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".thumb-item-nav",
    });

    //選択画像の設定
    $(".thumb-item-nav").slick({
      infinite: true, //スライドをループさせるかどうか。初期値はtrue。
      slidesToShow: 7, //表示させるスライドの数
      focusOnSelect: true, //フォーカスの有効化
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".thumb-item", //連動させるスライドショーのクラス名
    });
  }

  $(".webgene-pagination .prev a").addClass("js-hover-r");
  $(".webgene-pagination .next a").addClass("js-hover");
  $(".webgene-pagination .prev a").html('<div class="arrows"><</div>');
  $(".webgene-pagination .next a").html('<div class="arrows">></div>');

  if ($(".newsMain .blogPanel--list").length > 0) {
    // URLからクエリパラメータを取得
    var urlParams = new URLSearchParams(window.location.search);

    var categoryParam = urlParams.get("wg[wgc-1710405386740_cate]");

    // クエリパラメータの値に基づいて該当するaタグにクラスを追加
    if (categoryParam) {
      $(
        ".webgene-item > a[href*='wg%5Bwgc-1710405386740_cate%5D=" +
          categoryParam +
          "']"
      ).addClass("active");
    }
  }

  if ($(".worksMain .blogPanel--list").length > 0) {
    // URLからクエリパラメータを取得
    var urlParams = new URLSearchParams(window.location.search);

    var categoryParam = urlParams.get("wg[wgc-1710409586196_cate]");

    // クエリパラメータの値に基づいて該当するaタグにクラスを追加
    if (categoryParam) {
      $(
        ".webgene-item > a[href*='wg%5Bwgc-1710409586196_cate%5D=" +
          categoryParam +
          "']"
      ).addClass("active");
    }
  }

  if ($(".productMain .blogPanel--list").length > 0) {
    // URLからクエリパラメータを取得
    var urlParams = new URLSearchParams(window.location.search);

    var categoryParam = urlParams.get("wg[wgc-1710409884083_cate]");

    // クエリパラメータの値に基づいて該当するaタグにクラスを追加
    if (categoryParam) {
      $(
        ".webgene-item > a[href*='wg%5Bwgc-1710409884083_cate%5D=" +
          categoryParam +
          "']"
      ).addClass("active");
    }
  }

  if ($(".productMainEn .blogPanel--list").length > 0) {
    // URLからクエリパラメータを取得
    var urlParams = new URLSearchParams(window.location.search);

    var categoryParam = urlParams.get("wg[wgc-1710485054088_cate]");

    // クエリパラメータの値に基づいて該当するaタグにクラスを追加
    if (categoryParam) {
      $(
        ".webgene-item > a[href*='wg%5Bwgc-1710485054088_cate%5D=" +
          categoryParam +
          "']"
      ).addClass("active");
    }
  }

  //文章を指定の文字数でカット
  if ($(".blogPanel--list").length > 0) {
    var count = 35;
    $(".webgene-item .title p").each(function () {
      var thisText = $(this).text();
      var textLength = thisText.length;
      if (textLength > count) {
        var showText = thisText.substring(0, count);
        var insertText = (showText += "…");
        $(this).html(insertText);
      }
    });
  }

  if ($(".caseSliderPanel").length > 0) {
    $(".caseSlider").on(
      "init reInit afterChange",
      function (event, slick, currentSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        var formattedNumber = i.toString().padStart(2, "0");
        $(".slick-num").text(formattedNumber);
      }
    );
    $(".caseSlider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      fade: false,
      infinite: true,
      autoplay: true,
      cssEase: "ease-in-out",
      speed: 800,
      useCSS: true,
      arrows: false,
      focusOnSelect: true,
      autoplaySpeed: 3000,
      centerMode: false,
      // centerPadding: "25%",
      responsive: [
        {
          breakpoint: 1050,
          settings: {
            slidesToShow: 1,
            centerPadding: "12%",
          },
        },
        {
          breakpoint: 800,
          settings: {
            centerMode: false,
            arrows: true,
            centerPadding: "0",
          },
        },
      ],
    });
    const $slider = $(".caseSlider");
    $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
      $slider.find(".slick-slide").each((index, el) => {
        const $this = $(el),
          slickindex = $this.attr("data-slick-index");
        if (nextSlide == slick.slideCount - 1 && currentSlide == 0) {
          // 現在のスライドが最初のスライドでそこから最後のスライドに戻る場合
          if (slickindex == "-1") {
            // 最後のスライドに対してクラスを付与
            $this.addClass("is-active-next");
          } else {
            // それ以外は削除
            $this.removeClass("is-active-next");
          }
        } else if (nextSlide == 0) {
          // 次のスライドが最初のスライドの場合
          if (slickindex == slick.slideCount) {
            // 最初のスライドに対してクラスを付与
            $this.addClass("is-active-next");
          } else {
            // それ以外は削除
            $this.removeClass("is-active-next");
          }
        } else {
          // それ以外は削除
          $this.removeClass("is-active-next");
        }
      });
    });
  }

  if ($(".photoLightBoxList .photoList .li").length > 0) {
    $(".photoLightBoxList .photoList .li").each(function () {
      var imgSrc = $(this).find(".photo img").attr("src");
      $(this).find("a").attr("href", imgSrc);
    });
  }

  // チェック状態のチェックとクラスの切り替えを行う関数
  function toggleCheckedClass(checkbox) {
    var $label = $(checkbox).parent("label");
    if ($(checkbox).is(":checked")) {
      $label.addClass("checked");
    } else {
      $label.removeClass("checked");
    }
  }

  // 全てのチェックボックスに対して、ページ読み込み時に状態を確認
  $(".property_facility_cd").each(function () {
    toggleCheckedClass(this);
  });

  // チェックボックスの状態が変更されたときにクラスを切り替える
  $(".property_facility_cd").change(function () {
    toggleCheckedClass(this);
  });
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
    $(".header .navBox").toggleClass("active");
    $(".header .navBox").fadeToggle();
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
  $(".accord .dd").hide();
  $(".accord .dt").click(function () {
    $(this).toggleClass("active");

    $(this).next(".dd").slideToggle();
  });
  $(".navBox .pulldown").click(function () {
    $(this).toggleClass("active");

    $(this).next(".ul").slideToggle();
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

//======================================================================================================
// keyvSlider( )
// 機能  ：キービジュアルのスライダー設定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function keyvSlider() {
  if ($(".topKv").length) {
    var HEADER_ELEM = $(".topKv");
    var FADE_SPEED = 2500;
    var SWITCH_DELAY = 8000;

    // 要素作成
    if (!HEADER_ELEM.children().hasClass("kvBox")) {
      var keyBoxElem = "";
      keyBoxElem += '<div class="kvBox">';
      keyBoxElem += '<div class="kvBg kv01"></div>';
      keyBoxElem += '<div class="kvBg kv02"></div>';
      keyBoxElem += '<div class="kvBg kv03"></div>';
      keyBoxElem += "</div>";
      HEADER_ELEM.append(keyBoxElem);
    }

    var keyBox = ".kvBox";
    $(keyBox + " .kvBg").css({ opacity: "0" });
    $(keyBox + " .kvBg:first")
      .stop()
      .animate({ opacity: "1" }, FADE_SPEED);
    setInterval(function () {
      $(keyBox + " .kvBg:first")
        .animate({ opacity: "0" }, FADE_SPEED)
        .nextAll(".kvBg:first")
        .animate({ opacity: "1" }, FADE_SPEED)
        .end()
        .appendTo(keyBox);
    }, SWITCH_DELAY);
  }
}
