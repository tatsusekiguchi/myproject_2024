<?php get_header(); ?>
    <div class="kvBnr"><a href="https://yamaichi1965.com/" target="_blank" rel="noopener"><img class="switch" src="./assets/img/top/top_kv_bnr_pc.png" alt=""></a></div>
    <section class="top__topbox1">
      <div class="txtbox fadedown">
        <h2 class="ttl ffG">“<span>STORIA</span>”of <span>Y</span>our <span>L</span>ife</h2>
        <span class="txt">人生の物語に寄り添う宝石店</span>
      </div>
      <div class="slideimage">&nbsp;</div>
    </section>
    <?php
$args = array(
	'post_type' => 'fair_event',
	'tax_query' => array(
		array(
				'taxonomy' => 'fe_cat',
				'field' => 'slug',
				'terms' => 'tohome',
				'operator' => 'IN',
				),
		array( //終了イベントを除く
				'taxonomy' => 'fe_cat',
				'field' => 'slug',
				'terms' => 'end_fair',
				'operator' => 'NOT IN',
				),
		'relation' => 'AND'
		)
	);
?>
<?php
$my_posts = get_posts($args);
if (!empty($my_posts)) :
?>
    <section class="top_topbox_fair">
          <div class="innerbox">
            <h3 class="ttl">
              <span class="en ffG">FAIR &amp; EVENT</span>
              <span class="jp">フェア・イベント</span>
            </h3>
            <ul class="list">

<?php foreach ( $my_posts as $post ) : setup_postdata($post); ?>
<li class="Gridbox Grid-pc1_2sp1_2">
<div class="imgbox">
<?php if ( get_field('sp_url') ) { ?>
<a href="<?php the_field('sp_url'); ?>" title="<?php the_title() ?>">
<?php } else { ?>
<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
<?php } ?>
<?php if (has_post_thumbnail()) { ?>
<?php the_post_thumbnail('thumbnail'); ?>
<?php } else if ( get_field('thumbnail_img') || get_field('eve_img') ) { ?>
<?php
if ( get_field('thumbnail_img')){
	$image = get_field('thumbnail_img');
} else {
	$image = get_field('eve_img');
}
$image_attributes = wp_get_attachment_image_src( $image, 'thumbnail' );
?>
<img src="<?php echo $image_attributes[0]; ?>" alt="<?php the_title() ?>" />
<?php } else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/img/nophoto.png" alt="<?php the_title(); ?>" />
<?php } ?>
</a>
</div>
<div class="txtbox">
<h3 class="tit">
<?php if ( get_field('sp_url') ) { ?>
<a href="<?php the_field('sp_url'); ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
<?php } else { ?>
<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
<?php } ?>
</h3>
<div class="exp">期間：
<?php if ( get_field('eve_start') || get_field('eve_end') ) { ?>
<?php if ( get_field('eve_start') ) { ?>
<?php $date = date_create(''.get_field('eve_start').''); echo date_format($date,'Y/m/d'); ?>
<?php } ?>
<?php if ( get_field('eve_end') ) { ?>
～<?php $date = date_create(''.get_field('eve_end').''); echo date_format($date,'Y/m/d'); ?>まで
<?php } ?>
<?php } else { ?>
開催中！期間は店頭にお問い合わせください。
<?php } ?>
</div>
<div class="evecom">
<?php if (get_field('eve_com')) { ?><div class="excerpt"><?php the_field('eve_com'); ?></div><?php } ?>
</div>
</div>
</li>
<?php endforeach; wp_reset_postdata(); ?>
          </ul>
            <div class="btnmore dnone">
              <a href="https://storia1965.co.jp/fair_event/"><span class="ffG">MORE</span></a>
            </div>
          </div>
        </section>
        <?php endif; ?>
    <div class="topBnrList">
      <ul>
        <li>
          <a href="https://www.instagram.com/riaco_storia/" rel="noopener" target="_blank"><img src="./assets/img/top/top_bnr_riaco.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://www.instagram.com/storia_1965/" rel="noopener" target="_blank"><img src="./assets/img/top/top_bnr_storia.jpg" alt=""></a>
        </li>
        <li>
          <a href="https://lin.ee/NfFQ1zEB"" rel="noopener" target="_blank"><img src="./assets/img/top/top_bnr_line.jpg" alt=""></a>
        </li>
      </ul>
    </div>
    <section class="top__topbox2">
      <div class="innerbox clearfix">
        <div class="box1">
          <h3 class="ttl sp"><span class="txt1">物語<label>の</label>1ページ<label>に</label></span><span class="txt2">ふさわしい栞<label>を</label>。</span></h3>
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" class="js_lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-top1.png">
        </div>
        <div class="box2">
          <h3 class="ttl pc"><span class="txt1">物語<label>の</label>1ページ<label>に</label></span><span class="txt2">ふさわしい栞<label>を</label>。</span></h3>
          <div class="txtbox">
            特別な人への贈りもの、<br class="pc">
            頑張った自分へのプレゼント。<br class="pc">
            指輪やジュエリーは<br class="pc">
            その瞬間を心に留めておく栞のような存在。<br class="pc"><br>
            STORIAでは、お客様の大切な瞬間に寄り添う<br class="pc">
            信頼できるブランドを取り扱っています。
          </div>
          <div class="btn__common btn__common1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>brand/" class="ffG">BRAND</a>
          </div>
        </div>
      </div>
    </section>
    <section class="top__topbox3">
      <div class="innerbox clearfix">
        <div class="box1 pc">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" class="js_lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-top2.png">
        </div>
        <div class="box2">
          <h3 class="ttl"><span class="txt1">あなた<label>に</label>寄<label>り</label>添<label>う</label></span><span class="txt2">宝石店<label>でありたい。</label></span></h3>
          <p class="img sp">
            <img src="<?php echo APP_ASSETS ?>img/top/img-top2.png" alt="">
          </p>
          <div class="txtbox">
            1965年の開業から、さらにお客様と共に歩んでいくため、<br class="pc">
            宝石の山一は2020年、「STORIA」として生まれ変わりました。<br class="pc"><br>
            50年以上積み上げてきたサービスと品揃え、<br class="pc">
            新しくなった店舗で、<br class="pc">
            お世話になってきたお客様はもちろん、<br class="pc">
            新しいお客様にも寄り添うお店であり続けます。
          </div>
          <div class="btn__common btn__common2">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>shop/" class="ffG">SHOP</a>
          </div>
        </div>
      </div>
    </section>
    <section class="top__topbox4">
      <div class="inner">
        <p class="img1 pc">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" class="js_lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-top3-pc.png">
        </p>
        <div class="innerbox clearfix">
          <h3 class="ttl">大切<span>な</span>ジュエリー<span>を</span><br>末長<span>く</span>愛用<span>いただくために。</span></h3>
          <p class="img sp">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" class="js_lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-top3-sp.png">
          </p>
          <div class="txt">
            STORIAは、婚約指輪・結婚指輪に関する専門知識の豊富なスタッフが、<br class="pc">
            ご予算やご希望を踏まえた上で、<br class="pc">
            お客様に寄り添った最適な提案を行います。<br>
            また、購入後に末長く愛用いただくためのアフターサポートも充実しています。
          </div>
          <div class="btn__common btn__common3">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>quality/" class="ffG">QUALITY</a>
          </div>
        </div>
        <p class="img2 pc">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" class="js_lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-top4-pc.png">
        </p>
      </div>
    </section>
    <section class="top__topbox5">
      <div class="innerbox">
        <div class="box1">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>staff/">
            <h3 class="ttl">
              <span class="en ffG">STAFF</span>
              <span class="jp">スタッフ<br class="sp">紹介</span>
            </h3>
            <div class="img">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="STAFFスタッフ紹介" class="js_lazy" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-top5-pc.jpg" data-srcsp="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-top5-sp.jpg">
            </div>
          </a>
        </div>
        <div class="box2">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">
            <div class="txtbox clearfix">
              <h3 class="ttl">
                <span class="en ffG">FAQ</span>
                <span class="jp">よくある<br class="sp">質問</span>
              </h3>
              <div class="txt">ご来店前に<br class="sp">不安なことが<br class="sp">ある方はこちら</div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <?php
      $param = array(
        'post_type'         => 'column',
        'post_status'       => 'publish',
        'posts_per_page'    => '4',
        'orderby'           => 'post_date',
        'order'             => 'desc',
      );
      $columnQuery = get_posts($param);
      if( $columnQuery ){
    ?>
        <section class="top__topbox6">
          <div class="innerbox">
            <h3 class="ttl">
              <span class="en ffG">NEWS</span>
              <span class="jp">お知らせ</span>
            </h3>
            <ul class="list">
              <?php
                foreach($columnQuery as $post) {
                  $thisId = $post->ID;
                  $thisTitle = get_the_title($thisId);
                  $thisURL = get_the_permalink($thisId);
                  $post_date = get_the_date( 'Y.m.d' );
                  $terms = get_the_terms($thisId, 'columncat');
              ?>
                  <li>
                    <a href="<?php echo $thisURL; ?>">
                      <!-- <span class="date ffG"><?php echo $post_date; ?></span> -->
                      <?php
                        if($terms) {
                          foreach( $terms as $term ) {
                      ?>
                            <span class="cate"><?php echo $term->name; ?></span>
                      <?php
                          }
                        }
                      ?>
                      <h3 class="ttlpost"><?php echo $thisTitle; ?></h3>
                    </a>
                  </li>
              <?php } ?>
            </ul>
            <div class="btnmore">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>column/"><span class="ffG">MORE</span></a>
            </div>
          </div>
        </section>
    <?php } wp_reset_postdata();?>
    <div class="top__instaContainer">
      <div class="instaPanel">
        <div class="instaTitle"><img src="https://storia1965.co.jp/assets/img/top/top_insta_title_riaco.png" alt=""></div>
        <ul class="instaList instaList01"></ul>
        <div class="instaBtn"><a href="https://www.instagram.com/riaco_storia/" target="_blank" rel="noopener">view more</a></div>
      </div>
      <div class="instaPanel">
        <div class="instaTitle"><img src="https://storia1965.co.jp/assets/img/top/top_insta_title_storia.png" alt=""></div>
        <ul class="instaList instaList02"></ul>
        <div class="instaBtn"><a href="https://www.instagram.com/storia_1965/" target="_blank" rel="noopener">view more</a></div>
      </div>
    </div>
<style>
.kvBnr {
  position: fixed;
  top: 250px;
  right: 0;
  width: 160px;
  z-index: 99;
}
.kvBnr a {
  display: block;
}
.topBnrList {
  max-width: 940px;
  margin: 50px auto 0;
}
.topBnrList ul {
  display: flex;
  justify-content: space-between;
}
.topBnrList ul li {
  width: calc((100% / 3) - 10px);

}
.topBnrList ul li a {
  display: block;
}
@media (max-width: 767px) {
  .kvBnr {
    display: block;
    position: fixed;
    top: auto;
    left: 0;
    right: 0;
    bottom: 0;
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
    z-index: 99;
  }
  .topBnrList {
    max-width: 300px;
  }
  .topBnrList ul {
    display: block;
  }
  .topBnrList ul li {
    width: 100%;
  }
  .topBnrList ul li + li {
    margin: 15px 0 0;
  }
}
.top__instaContainer {
  display: flex;
  justify-content: space-between;
  padding: 50px 100px;
}
.top__instaContainer .instaPanel {
  width: calc(50% - 10px);
}
.top__instaContainer  .instaTitle {
  max-width: 200px;
  margin: 0 auto 40px;
}
.top__instaContainer .instaList {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}
.top__instaContainer .instaList li {
  position: relative;
  width: calc((100% - 100px) / 3);
}
.top__instaContainer .instaList li:before {
  content: "";
  display: block;
  padding-top: 100%;
}
.top__instaContainer .instaList li a {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
}
.top__instaContainer .instaList li img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.top__instaContainer .instaBtn {
  background-color: #000;
  padding: 0.5em 1em;
  width: fit-content;
  margin: 20px auto 0;
  cursor: pointer;
  transition: 0.3s;
}
.top__instaContainer .instaBtn a {
  color: #fff;
  text-decoration: none;
}
.top__instaContainer .instaBtn:hover {
  background-color: #999;
}

@media (max-width: 767px) {
  .top__instaContainer {
    display: block;
    padding: 50px 25px;
  }
  .top__instaContainer .instaPanel {
    width: 100%;
  }
  .top__instaContainer  .instaTitle {
    max-width: 200px;
    margin: 0 auto 30px;
  }
  .top__instaContainer .instaPanel + .instaPanel {
    margin: 50px 0 0;
  }
  .top__instaContainer .instaList {
    gap: 5px;
  }
  .top__instaContainer .instaList li {
    width: calc((100% - 10px) / 3);
  }
}
</style>
<script>
$(window).on("scroll resize", function () {
  var windowWidth = $(window).width();
  var scrollTop = $(window).scrollTop();
  if (windowWidth < 768) {
    if (scrollTop > 100) {
      $(".kvBnr").fadeOut(500);
    } else {
      $(".kvBnr").fadeIn(500);
    }
  } else {
    $(".kvBnr").show();
  }
});
$(window).on("load resize", ReLayout);
function ReLayout() {
  var _width = $(window).width();
  if (_width >= 768) {
    changeImg(".switch");
  } else {
    changeImg(".switch");
  }
}
function changeImg(target) {
  var $setElem = $(target),
    pcName = "_pc",
    spName = "_sp",
    replaceWidth = 768;

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
$(function() {
  $.ajax({
    type: 'GET',
    url: 'https://graph.facebook.com/v21.0/17841452956707519?fields=name%2Cmedia.limit(9)%7Bcaption%2Clike_count%2Cmedia_url%2Cpermalink%2Ctimestamp%2Cthumbnail_url%2Cmedia_type%2Cusername%7D&access_token=EAA2AlhkCXi4BO8ebTGCyBpZAR7upHBbIaXZA1M4R2uJY9LMCqNYwfr1jud7eq4IVrpZAzAzaJlABWevFZBJlM68ZC1AhMtimXg79ld89cymExjShEJG11Yy7wGXvahwOIchqc9E4nxrB9UYZClIkHNBtmcVjaNmUdomBDhHmEsyZCtZCRf1svZCtfKR4KwriaEmKj',
    dataType: 'json',
    success: function(json) {

      var html = '';
      var insta = json.media.data;
      for (var i = 0; i < insta.length; i++) {
        var media_type = insta[i].media_type;
        if (insta[i].media_type == "IMAGE" || insta[i].media_type == "CAROUSEL_ALBUM") {
          html += '<li><a href="' + insta[i].permalink + '" target="_blank" rel="noopener noreferrer"><span class="square-content"><img src="' + insta[i].media_url + '"></span></a></li>';
        } else if (media_type == "VIDEO") {
          html += '<li><a href="' + insta[i].permalink + '" target="_blank" rel="noopener noreferrer"><span class="square-content"><img src="' + insta[i].thumbnail_url + '"></span></a></li>';
          var media_type = '';
        }
      }
      $(".instaList01").append(html);
    },
    error: function() {

      //エラー時の処理
    }
  });
  $.ajax({
    type: 'GET',
    url: 'https://graph.facebook.com/v22.0/17841432968282975?fields=name%2Cmedia.limit(9)%7Bcaption%2Clike_count%2Cmedia_url%2Cpermalink%2Ctimestamp%2Cthumbnail_url%2Cmedia_type%2Cusername%7D&access_token=EAAX76tCssswBOZBamM538OtdTes6PcILFF7ecxahkqUurUjaqGaORlmjmY6kvJ4hKPWBmuwXLSsZBzZAwf98ZBGZAISZAO1EnxBZCuZBf6nsx23bfCkcTsGlRIZAHo9Tikz3q61fvW4lFNssZAqf8Mvojwj4dZBF2KidJooRd7oKReEZC6xtzgUqj4wdyfnx9bnNFOcB',
    dataType: 'json',
    success: function(json) {

      var html = '';
      var insta = json.media.data;
      for (var i = 0; i < insta.length; i++) {
        var media_type = insta[i].media_type;
        if (insta[i].media_type == "IMAGE" || insta[i].media_type == "CAROUSEL_ALBUM") {
          html += '<li><a href="' + insta[i].permalink + '" target="_blank" rel="noopener noreferrer"><span class="square-content"><img src="' + insta[i].media_url + '"></span></a></li>';
        } else if (media_type == "VIDEO") {
          html += '<li><a href="' + insta[i].permalink + '" target="_blank" rel="noopener noreferrer"><span class="square-content"><img src="' + insta[i].thumbnail_url + '"></span></a></li>';
          var media_type = '';
        }
      }
      $(".instaList02").append(html);
    },
    error: function() {

      //エラー時の処理
    }
  });
});
</script>
<?php get_footer(); ?>