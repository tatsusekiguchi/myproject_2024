<?php
/* common
*************************************************** */ ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php if(is_page(array( 'new-adult' , 'mansion'))): ?>
  <script src="/wp/wp-content/themes/original_theme/js/lightbox.js"></script>
<?php endif; ?>

<?php
/* ##############################################################################

    TOP

############################################################################## */
if ( is_home() || is_front_page() || is_page(array('about')) || is_page(array('new-adult')) ) : ?>

  <script src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.min.js"></script>

  <script>
  /* slick
  ********************************************** */

  $(document).ready(function(){
    $('.hero-image-slider').slick({
      autoplay: true,
      arrows: true,
      dots: true,
      fade: true
    });
  });

  $(document).ready(function(){
    $('.new-adult-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: true,
      arrows: false
    });
  });

  $(document).ready(function(){
    $('.new-adult-slider-sp').slick({
      autoplay: true,
      arrows: false,
    });
  });


    /* wapoint
    ********************************************** */
    $('.waypoint').waypoint(function(direction){
        var activePoint = $(this.element);
        if (direction === 'down') {
            activePoint.addClass('active');
        }
        else{ //scroll up
            activePoint.removeClass('active');
        }
    },{offset : '80%'});


  </script>
<?php endif; ?>

<script>

  $(function(){

    <?php
    /* ##############################################################################

        COMMON

    ############################################################################## */
    ?>

    /* telタグ例外処理
    ********************************************** */
      var ua = navigator.userAgent;
      if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
        $('a[href ^= "tel:"]').each(function(){
           $(this).css({'pointerEvents':'none','display':'inline-block'}).removeAttr('onclick');
        });
      }

    /* スムーススクロール
    ********************************************** */
      $('a.smooth[href^="#"]').on('click',function(){
        var speed = 400;
        var href= $(this).attr('href');
        var target = $(href == '#' || href == '' ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
      });

    /* gnav_btnクリックでheaderにactive付与
    ********************************************** */
      $('.gnav_btn').on('click',function(){
        $(this).closest('header').toggleClass('active');
      })

    /* read_moreにactive付与
    ********************************************** */
      $('.read_more').on('click',function(){
        $(this).closest('.salon_pricelist').toggleClass('active');
      })

    /* 成人式ページactive付与
    ********************************************** */
      $('.read_more').on('click',function(){
        $(this).closest('.open').toggleClass('active');
      })

    /* スマホ開閉ボタンactive付与
    ********************************************** */
      $('.open-icon').on('click',function(){
        $(this).closest('.sub-nav li').toggleClass('active');
      })

    <?php
    /* ##############################################################################

        TOP

    ############################################################################## */
    if ( is_home() || is_front_page() ) :
    ?>
      var movies = [];
      var movies_w = [];
      var movies_h = [];
      var images = [];
      $('.youtube iframe').each(function(index, element) {
        //属性を取得
        var movie_src = $(this).attr('src');
        var movie_width = $(this).attr('width');
        var movie_height = $(this).attr('height');
        //配列へ
        movies[index] = movie_src
        movies_w[index] = movie_width
        movies_h[index] = movie_height
        //サムネイルを取得
        images[index] = '/wp/wp-content/themes/original_theme/images/top-movie-image.jpg'
        //置き換え
        $(this).after('<div class="youtube_play"><img src="' + images[index] + '" width="' + movies_w[index] + '" alt="MOVIE"><div class="youtube_btn_txt"></div></div>').remove();
      });

      $('.youtube_play').each(function(index, element) {
        $(this).click(function(){
          //クリックで置き換え
          $(this).after('<iframe src="' + movies[index] + '&amp;autoplay=1" width="' + movies_w[index] + '" height="' + movies_h[index] + '" frameborder="0"></iframe>').remove();
        });
      });
    <?php endif; ?>

    <?php
    /* ##############################################################################

        SINGLE

    ############################################################################## */
    if( is_single() ): ?>

      /* 記事詳細エディタのスマホ対応
      ********************************************** */
        $('.mce-content-body table').each(function() {
          var mce_content_body_width = $(this).closest('.mce-content-body').width();
          var tableWidth = $(this).width();
          if( mce_content_body_width < tableWidth - 2) {
            $(this).wrap('<div class="scroll" />');
            $(this).closest('.scroll').before('<p class="scroll--cap">横にスクロールできます→</p>');
          }
        });
    <?php endif; ?>

    <?php
    /* ##############################################################################

        SINGLE ＆ARCHIVE

    ############################################################################## */
    if( is_single() || is_archive() ): ?>

      /* click時にactiveをtoggle処理
      ********************************************** */
        $archive_list = '.archive_list--ttl,.archive_list';
        function class_remove() {
          $($archive_list).removeClass('active');
        }
        $($archive_list).on('click',function(){
          if ( !$(this).hasClass('active') ) {
            class_remove();
          }
          $(this).toggleClass('active');
          $(this).siblings('.archive_month').slideToggle(400);
        });
        $(document).on('click',function(){
          if(!$(event.target).closest($archive_list).length) {
            class_remove();
          }
        });
    <?php endif; ?>

  });

  <?php
  /* ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

      $(window).on('load')の処理

  ★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★ */
  ?>
</script>
