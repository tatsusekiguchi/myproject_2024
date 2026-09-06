<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ja"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="ja"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="ja"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ja">
<!--<![endif]-->

<head>
  <?php
  $head_top = get_the_author_meta('head_top', 2);
  $head_bottom = get_the_author_meta('head_bottom', 2);
  $body_top = get_the_author_meta('body_top', 2);
  ?>
  <?php if (!is_user_logged_in()) : ?>
  <?php if ($head_top) {
      echo $head_top;
    } ?>
  <?php endif; ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script>
  if (navigator.userAgent.match(/(iPhone|Android.*Mobile)/)) {
    document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0">');
  } else {
    document.write('<meta name="viewport" content="width=1180,maximum-scale=2.0,user-scalable=1">');
  };
  </script>
  <meta name="format-detection" content="telephone=no">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <?php if (is_home() || is_front_page() || is_page(array('new-adult'))) : ?>
  <link rel="stylesheet" href="/wp/wp-content/themes/original_theme/css/slick.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="/wp/wp-content/themes/original_theme/css/slick-theme.css">
  <?php endif; ?>
  <link rel="stylesheet" href="/wp/wp-content/themes/original_theme/css/reset.css">
  <link rel="stylesheet" href="/wp/wp-content/themes/original_theme<?php latest_cache('/css/common.css'); ?>">
  <link rel="stylesheet" href="/wp/wp-content/themes/original_theme<?php latest_cache('/css/main.css'); ?>">
  <link rel="stylesheet" href="/wp/wp-content/themes/original_theme<?php latest_cache('/css/mce.css'); ?>">
  <link rel="stylesheet" media="print" href="/wp/wp-content/themes/original_theme/css/print.css">
  <link rel="shortcut icon" href="/wp/wp-content/themes/original_theme/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/wp/wp-content/themes/original_theme/apple-touch-icon.png">
  <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
  <?php if (is_page(array('services/new-adult', 'mansion'))) : ?>
  <link rel="stylesheet" href="/wp/wp-content/themes/original_theme/css/lightbox.css">
  <link rel="stylesheet" href="https://use.typekit.net/sfc1xze.css">
  <?php endif; ?>

  <?php if (is_home() || is_front_page()) : ?>
  <link rel="stylesheet" href="/wp/wp-content/themes/original_theme/css/animate.css">
  <?php endif; ?>

  <script>
  (function(d) {
    var config = {
        kitId: 'gsh8jvy',
        scriptTimeout: 3000,
        async: true
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || a && a != "complete" && a != "loaded") return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config)
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
  })(document);
  </script>

  <?php if (!is_user_logged_in()) : ?>
  <?php if ($head_bottom) {
      echo $head_bottom;
    } ?>
  <?php endif; ?>
</head>

<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<body class="<?php echo $body_class; ?>" id="top">
  <?php if (!is_user_logged_in()) : ?>
  <?php if ($body_top) {
      echo $body_top;
    } ?>
  <?php endif; ?>

  <header class="header">
    <h1 class="header--logo"><a href="/"><img src="/wp/wp-content/themes/original_theme/images/logo.jpg"
          alt="<?php echo wp_title(); ?>"></a></h1>
    <nav class="header--nav">
      <div class="gnav_btn pc-none-flex flex-j-ctr flex-a-ctr">
        <div class="gnav_btn--lines">
          <span></span><span></span>
        </div>
      </div>
      <div class="gnav">
        <ul class="gnav--list">
          <li><a href="/">TOP</a></li>
          <li><a href="/about">ABOUT</a></li>
          <li><a href="/salon-list">SALON</a>
            <ul class="child-nav">
              <li class="utatane">
                <a href="https://utatane-hair.jp/" target="_blank">utatane</a>
              </li>
              <li class="utut">
                <a href="https://utut-hair.jp/" target="_blank">utut</a>
              </li>
              <?php
              $cats = get_terms('salon_category', array(
                'hide_empty' => true,
                'parent' => 0,
              ));
              foreach ($cats as $cat) :
              ?>
              <li class="<?php echo $cat->slug; ?>">
                <?php if ($cat->slug == 'vitamin-k') { ?>
                <a href="#"><?php echo $cat->name; ?></a>
                <?php } else { ?>
                <a href="/salon/<?php echo $cat->slug; ?>/"><?php echo $cat->name; ?></a>
                <?php } ?>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li><a href="https://pastone.recxit.jp" target="_blank">RECRUIT</a></li>
          <li><a href="/news">NEWS</a></li>
          <!-- <li><a href="/column">COLUMN</a></li> -->
          <li><a href="/services">SERVICES</a>
            <?php
            $page_ID = get_page_by_path('services'); //親ページ
            $children = wp_list_pages(array(
              'title_li' => '',
              'child_of' => $page_ID->ID,
              'echo' => '0'
            ));
            if ($children) {
              echo '<ul class="child-nav">';
              echo $children;
              echo '</ul>';
            } ?>
          </li>
          <li><a href="/mansion">MANSION</a></li>
          <li><a href="/movie">MOVIE</a></li>
          <li><a href="/contact">CONTACT</a></li>
          <li><a href="https://vancouncil.subsc-beauty.jp/" target="_blank">ONLINE SHOP</a></li>
        </ul>
        <div class="secondary-nav">
          <div class="sub-nav">
            <ul class="gnav--list flex-j-between">
              <li><a href="/">TOP</a></li>
              <li><a href="/about">ABOUT</a></li>
              <li><a href="/salon-list">SALON</a><span class="open-icon"></span>
                <ul class="child-nav">
                  <li class="utatane">
                  <a href="https://utatane-hair.jp/" target="_blank">utatane</a>
                  </li>
                  <li class="utut">
                    <a href="https://utut-hair.jp/" target="_blank">utut</a>
                  </li>
                  <?php
                  $cats = get_terms('salon_category', array(
                    'hide_empty' => true,
                    'parent' => 0,
                  ));
                  foreach ($cats as $cat) :
                  ?>
                  <li class="<?php echo $cat->slug; ?>">
                    <?php if ($cat->slug == 'vitamin-k') { ?>
                    <a href="#"><?php echo $cat->name; ?></a>
                    <?php } else { ?>
                    <a href="/salon/<?php echo $cat->slug; ?>/"><?php echo $cat->name; ?></a>
                    <?php } ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </li>
              <li><a href="https://pastone.recxit.jp" target="_blank">RECRUIT</a></li>
              <li><a href="/news">NEWS</a></li>
              <!-- <li><a href="/column">COLUMN</a></li> -->
              <li><a href="/services">SERVICES</a><span class="open-icon"></span>
                <?php
                $page_ID = get_page_by_path('services'); //親ページ
                $children = wp_list_pages(array(
                  'title_li' => '',
                  'child_of' => $page_ID->ID,
                  'echo' => '0'
                ));
                if ($children) {
                  echo '<ul class="child-nav">';
                  echo $children;
                  echo '</ul>';
                }
                ?>
              </li>
              <li><a href="/mansion">MANSION</a></li>
              <li><a href="/movie">MOVIE</a></li>
              <li><a href="/contact">CONTACT</a></li>
              <li><a href="https://vancouncil.subsc-beauty.jp/">ONLINE SHOP</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="copy-right Ropa-Sans">COPYRIGHT &#169; PASTONE GROUP ALL RIGHT RESERVED.</div>

  <?php if (wp_is_mobile()) { ?>
  <div class="bottom-button">
    <div class="top-vitamin01" style="display:none;">
      <a href="/recruit/">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-vitamin02.png"
          srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-vitamin02.png 1x, <?php echo esc_url(get_template_directory_uri()); ?>/images/top-vitamin02@2x.png 2x"
          alt="VITAMINオープン">
      </a>
    </div>
    <div class="top-utut01" style="display:none;">
      <a href="https://www.pastone.jp/salon-list/">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-utatane03.png" alt="うたたねオープン"
          style="width:50%;">
      </a>
    </div>
    <div class="reserve-block">
      <a href="/reserve/" class="reserve-btn">
        <p class="Ropa-Sans large">RESERVE</p><span>
          ご予約はこちら</span>
      </a>
    </div>
  </div>
  <!-- /.bottom-button -->
  <?php } else { ?>
  <div class="reserve-block">
    <a href="/reserve/" class="reserve-btn">
      <p class="Ropa-Sans large">RESERVE</p><span>
        ご予約はこちら</span>
    </a>
  </div>
  <?php } ?>