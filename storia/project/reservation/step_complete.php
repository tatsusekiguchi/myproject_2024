<?php
include_once(dirname(__FILE__) . '/step_confirm.php');
if($actionFlag == 'send') {
  require(APP_PATH."libs/form/utf8phpmailer.php");
  $aMailto = $aMailtoContact;
  if(count($aBccToContact)) $aBccTo = $aBccToContact;
  $from = $fromContact;
  $fromname = "STORIA";
  $subject_admin = "ホームページからお問い合わせがありました";
  $subject_user = "お問い合わせありがとうございます。";
  $email_head_ctm_admin = "ホームページからお問い合わせがありました。";
  $email_head_ctm_user = "この度は、ホームページよりお問い合わせをいただき、誠にありがとうございます。
お問い合わせフォームに入力いただいた内容を確認の上、2〜3営業日以内に担当者よりご連絡いたします。
ご連絡がない場合は、お問い合わせのお手続きが正しく行えていない可能性がございますので、お手数ですが再度お手続きいただくか、お電話くださいますようお願い申し上げます。

＜以下、お問い合わせ内容です＞";
  $email_body_footer = "
STORIA
〒470-0373愛知県豊田市四郷町千田63
TEL. 0565-45-1357
Mail. j-yamaichi@vanilla.ocn.ne.jp
  ";

  $entry_time = gmdate("Y/m/d H:i:s",time()+9*3600);
  $entry_host = gethostbyaddr(getenv("REMOTE_ADDR"));
  $entry_ua = getenv("HTTP_USER_AGENT");

$msgBody = "

■お名前
$reg_name

■フリガナ
$reg_namekana

■お電話番号
$reg_name1
";
if(isset($reg_email) && $reg_email != '') $msgBody .= "
■メールアドレス
$reg_email
";
$msgBody .= "
■ご検討されている商品
$reg_checkAll01

■予約希望日時
$reg_dateMonth 月 $reg_dateDay 日 $reg_dateTime 時 $reg_dateMinute 分
";
if(isset($reg_content) && $reg_content != '') $msgBody .= "
■ご要望・ご質問
$reg_content
";



//お問い合わせメッセージ送信
  $body_admin = "
登録日時：$entry_time
ホスト名：$entry_host
ブラウザ：$entry_ua


$email_head_ctm_admin


$msgBody


";


//お客様用メッセージ
  $body_user = "
$reg_name 様

$email_head_ctm_user

---------------------------------------------------------------

$msgBody

---------------------------------------------------------------
".$email_body_footer."
---------------------------------------------------------------";

  // ▼ ▼ ▼ START Detect SPAMMER ▼ ▼ ▼ //
  try {
    $allow_send_email = 1;
    // Anti spam advanced version 3 start: Verify by google invisible reCaptcha
    if(GOOGLE_RECAPTCHA_KEY_SECRET != '') {
      $response = $_POST['g-recaptcha-response'];
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "secret=".GOOGLE_RECAPTCHA_KEY_SECRET."&response={$response}");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $returnJson = json_decode(curl_exec ($ch));
      curl_close ($ch);
      if( !empty($returnJson->success) ) {} else throw new Exception('Protect by Google Invisible Recaptcha');
    }

    // Anti spam advanced version 3 start: Verify by google invisible reCaptcha
    if(empty($_SESSION['ses_from_step2'])) throw new Exception('Step confirm must be display');

    // Anti spam advanced version 2 start: Don't send blank emails
    //if(empty($reg_name) || empty($reg_email)) {
    if( empty($reg_name) ) {
      throw new Exception('Miss reg_name or reg_email');
    }

    // Anti spam advanced version 1 start: The preg_match() is there to make sure spammers can’t abuse your server by injecting extra fields (such as CC and BCC) into the header.
    /*if(preg_match( "/[\r\n]/", $reg_email)) {
      throw new Exception('Email\'s not correct');
    }*/

    // Anti spam: the contact form start
    if($reg_url != "") {
      throw new Exception('Url request must be empty');
    }

  } catch (Exception $e) {
    $returnE = '<pre class="preanhtn">';
    $returnE .= $e->getMessage().'<br>';
    $returnE .= 'File: '.$e->getFile().' at line '.$e->getLine();
    $returnE .= '</pre>';
    $allow_send_email = 0;
    // die($returnE);
  }
  // ▲ ▲ ▲ END Detect SPAMMER ▼ ▼ ▼ //


  if($allow_send_email) {
    //////// メール送信
    mb_language("ja");
    mb_internal_encoding("UTF-8");

    //////// お客様受け取りメール送信
    $email = new JPHPmailer();
    $email->addTo($reg_email);
    $email->setFrom($from,$fromname);
    $email->setSubject($subject_user);
    $email->setBody($body_user);

    if($email->send()) { /*Do you want to debug somthing?*/ }

    //////// メール送信
    $email->clearAddresses();
    for($i = 0; $i < count($aMailto); $i++) $email->addTo($aMailto[$i]);
    for($i = 0; $i < count($aBccTo); $i++) $email->addBcc($aBccTo[$i]);
    $email->setSubject($subject_admin);
    $email->setBody($body_admin);

    if($email->Send()) { /*Do you want to debug somthing?*/ }

    $_SESSION['ses_step3'] = true;
  }

  $_SESSION['statusFlag'] = 1;
  header("Location: ".APP_URL."reservation/complete/");
  exit;
}

if(!empty($_SESSION['statusFlag'])) unset($_SESSION['statusFlag']);
else header('location: '.APP_URL);

$thisPageName = 'reservation';
include(APP_PATH."libs/head.php");

unset($_SESSION['ses_gtime_step2']);
unset($_SESSION['ses_from_step2']);
unset($_SESSION['ses_step3']);
?>
<meta http-equiv="refresh" content="15; url=<?php echo APP_URL ?>">
<script type="text/javascript">
history.pushState({ page: 1 }, "title 1", "#noback");
window.onhashchange = function (event) {
  window.location.hash = "#noback";
};
</script>
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/contact.min.css">
</head>
<body id="contact" class="indexThx">

  <?php include(APP_PATH."libs/header.php") ?>


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
        <div class="stepImg">
          <img src="<?php echo APP_ASSETS; ?>img/contact/step03.png" alt="Step3" class="pc">
          <img src="<?php echo APP_ASSETS; ?>img/contact/step03-sp.png" alt="Step3" class="sp">
        </div>

        <p class="txten ffG">COMPLETELY</p>
        <h3 class="ttl">来店予約<br class="sp">ありがとうございました。</h3>
        <div class="txtThx">
          来店予約フォームに入力いただいた内容を確認の上、<br class="pc">
          2〜3営業日以内に担当者よりご連絡いたします。<br>
          ご連絡がない場合は、お問い合わせのお手続きが正しく行えていない可能性がございますので、<br class="pc">
          お手数ですが再度お手続きいただくか、お電話くださいますようお願い申し上げます。
        </div>
        <div class="btb-box">
          <a href="<?php echo APP_URL; ?>" class="btnCm"><span>トップページに戻る</span></a>
        </div>
      </div>
    </main>
  </div>

  <?php include(APP_PATH.'libs/footer.php') ?>

  </body>
</html>
