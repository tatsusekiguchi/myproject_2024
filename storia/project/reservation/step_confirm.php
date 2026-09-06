<?php
session_start();
ob_start();
include_once(dirname(__DIR__) . '/app_config.php');
if(empty($_POST['actionFlag']) && empty($_SESSION['statusFlag'])) header('location: '.APP_URL);

$gtime = time();

//always keep this
$actionFlag       = (!empty($_POST['actionFlag'])) ? htmlspecialchars($_POST['actionFlag']) : '';
$reg_url          = (!empty($_POST['url'])) ? htmlspecialchars($_POST['url']) : '';
//end always keep this

//お問い合わせフォーム内容
// $reg_name         = (!empty($_POST['nameuser'])) ? htmlspecialchars($_POST['nameuser']) : '';
// $reg_name1        = (!empty($_POST['nameuser1'])) ? htmlspecialchars($_POST['nameuser1']) : '';
// $reg_email        = (!empty($_POST['email'])) ? htmlspecialchars($_POST['email']) : '';
// $reg_check01      = (!empty($_POST['check01'])) ? $_POST['check01'] : array();
// $reg_checkAll01   = (!empty($_POST['checkAll01'])) ? htmlspecialchars($_POST['checkAll01']) : '';
// $reg_rdo          = (!empty($_POST['purpose'])) ? htmlspecialchars($_POST['purpose']) : '';
// $reg_content      = (!empty($_POST['content'])) ? htmlspecialchars($_POST['content']) : '';
// $br_reg_content   = nl2br($reg_content);
$reg_name         = (!empty($_POST['nameuser'])) ? htmlspecialchars($_POST['nameuser']) : '';
$reg_namekana         = (!empty($_POST['namekana'])) ? htmlspecialchars($_POST['namekana']) : '';
$reg_name1        = (!empty($_POST['nameuser1'])) ? htmlspecialchars($_POST['nameuser1']) : '';
$reg_email        = (!empty($_POST['email'])) ? htmlspecialchars($_POST['email']) : '';
$reg_check01      = (!empty($_POST['check01'])) ? $_POST['check01'] : array();
$reg_checkAll01   = (!empty($_POST['checkAll01'])) ? htmlspecialchars($_POST['checkAll01']) : '';
$reg_dateMonth    = (!empty($_POST['dateMonth'])) ? htmlspecialchars($_POST['dateMonth']) : '';
$reg_dateDay      = (!empty($_POST['dateDay'])) ? htmlspecialchars($_POST['dateDay']) : '';
$reg_dateTime     = (!empty($_POST['dateTime'])) ? htmlspecialchars($_POST['dateTime']) : '';
$reg_dateMinute   = (!empty($_POST['dateMinute'])) ? htmlspecialchars($_POST['dateMinute']) : '';
$reg_content      = (!empty($_POST['content'])) ? htmlspecialchars($_POST['content']) : '';
$br_reg_content   = nl2br($reg_content);
$strCheckbox = implode(', ', $reg_check01);

if($actionFlag == "confirm") {
  $thisPageName = 'reservation';
  include(APP_PATH.'libs/head.php');
  $_SESSION['ses_from_step2'] = true;
  if(!isset($_SESSION['ses_gtime_step2'])) $_SESSION['ses_gtime_step2'] = $gtime;
?>
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css">
  <!-- Anti spam part1: the contact form start -->

  <?php if(GOOGLE_RECAPTCHA_KEY_API != '' && GOOGLE_RECAPTCHA_KEY_SECRET != '') { ?>
    <script src="https://www.google.com/recaptcha/api.js?hl=ja" async defer></script>
    <script>function onSubmit(token) { document.getElementById("confirmform").submit(); }</script>
    <style>.grecaptcha-badge {display: none}</style>
  <?php } ?>

  </head>

  <body id="contact" class="reservation">

    <!-- HEADER -->
    <?php include(APP_PATH.'libs/header.php'); ?>
    <div id="wrap">
      <main>
        <div class="mainvisual-common">
          <h2 class="ttl">
            <span class="en">Reservation</span>
            <span class="jp">来店予約</span>
          </h2>
        </div>
        <div class="breadcrumb">
          <ul class="list">
            <li><a href="<?php echo APP_URL; ?>">ホーム</a></li>
            <li><span class="txt">来店予約</span></li>
          </ul>
        </div>
        <div class="formBlock">
          <p class="txten ffG">FORM</p>
          <h3 class="ttl">予約フォーム</h3>
          <div class="stepImg">
            <img src="<?php echo APP_ASSETS; ?>img/contact/step02.png" alt="Step2" class="pc">
            <img src="<?php echo APP_ASSETS; ?>img/contact/step02-sp.png" alt="Step2" class="sp">
          </div>

          <form method="post" class="confirmform" action="../complete/?g=<?php echo $gtime ?>" name="confirmform" id="confirmform">
            <p class="hid_url">Leave this empty: <input type="text" name="url" value="<?php echo $reg_url ?>"></p><!-- Anti spam part1: the contact form -->
            <table class="tableContact tableContact-step2" cellspacing="0">
              <tr>
                <th>お名前</th>
                <td><?php echo $reg_name; ?></td>
              </tr>
              <tr>
                <th>フリガナ</th>
                <td><?php echo $reg_namekana; ?></td>
              </tr>
              <tr>
                <th>お電話番号</th>
                <td><?php echo $reg_name1; ?></td>
              </tr>
              <?php if( !empty($reg_email) ) { ?>
                <tr>
                  <th>メールアドレス</th>
                  <td><?php echo $reg_email; ?></td>
                </tr>
              <?php } ?>
              <tr>
                <th>ご検討されている商品</th>
                <td>
                  <?php
                    echo $strCheckbox;
                  ?>
                </td>
              </tr>
              <tr>
                <th>予約希望日時</th>
                <td>
                  <?php echo $reg_dateMonth; ?>月 <?php echo $reg_dateDay; ?>日 <?php echo $reg_dateTime; ?>時<?php echo $reg_dateMinute; ?>分
                </td>
              </tr>
              <?php if( !empty($reg_content) ) { ?>
              <tr>
              <th>ご要望・ご質問</th>
                <td><?php echo $br_reg_content; ?></td>
              </tr>
            <?php } ?>
            </table>
            <input type="hidden" name="nameuser" value="<?php echo $reg_name; ?>">
            <input type="hidden" name="namekana" value="<?php echo $reg_namekana; ?>">
            <input type="hidden" name="nameuser1" value="<?php echo $reg_name1; ?>">
            <input type="hidden" name="email" value="<?php echo $reg_email; ?>">
            <input type="hidden" name="dateMonth" value="<?php echo $reg_dateMonth; ?>">
            <input type="hidden" name="dateDay" value="<?php echo $reg_dateDay; ?>">
            <input type="hidden" name="dateTime" value="<?php echo $reg_dateTime; ?>">
            <input type="hidden" name="dateMinute" value="<?php echo $reg_dateMinute; ?>">
            <input type="hidden" name="checkAll01" value="<?php echo $strCheckbox ?>">
            <input type="hidden" name="content" value="<?php echo $reg_content ?>">
            <!-- always keep this -->
            <input type="hidden" name="url" value="<?php echo $reg_url ?>">
            <!-- end always keep this -->

            <p class="txtback">
              <a href="javascript:history.back()">
              入力内容を修正する
              </a>
            </p>
            <div class="btb-box">
              <?php if(GOOGLE_RECAPTCHA_KEY_API != '') { ?>
                <button name="actionFlag" class="btnCm" value="send" class="g-recaptcha" data-size="invisible" data-sitekey="<?php echo GOOGLE_RECAPTCHA_KEY_API ?>" data-callback="onSubmit"><span>この内容で送信する</span></button>
              <?php } else { ?>
                <button id="btnSend" class="btnCm"><span>この内容で送信する</span></button>
              <?php } ?>
              <input type="hidden" name="actionFlag" value="send">
            </div>
          </form>
        </div>
      </main>
    </div>

    <!-- FOOTER -->
    <?php include(APP_PATH.'libs/footer.php'); ?>

  </body>
  </html>
<?php } ?>