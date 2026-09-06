<?php get_header(); ?>

<?php
// STYLE GUIDE
// ==================================================
if (is_page('style_guide')) {
  include(TEMPLATEPATH . '/pages/page-style_guide.php');

  // ABOUT
  // ==================================================
} elseif (is_page('about')) {
  include(TEMPLATEPATH . '/pages/page-about.php');

  // SALON親ページ
  // ==================================================
} elseif (is_page('salon-list')) {
  include(TEMPLATEPATH . '/pages/page-salon-list.php');

  // STAFF一覧
  // ==================================================
} elseif (is_page('staff-list')) {
  include(TEMPLATEPATH . '/pages/page-staff-list.php');

  // SERVICES
  // ==================================================
} elseif (is_page('services')) {
  include(TEMPLATEPATH . '/pages/page-services.php');

  // 成人式
  // ==================================================
} elseif (is_page('new-adult')) {
  include(TEMPLATEPATH . '/pages/page-new-adult.php');

  // 託児所
  // ==================================================
} elseif (is_page('kids-room')) {
  include(TEMPLATEPATH . '/pages/page-kids-room.php');

  // MANSION
  // ==================================================
} elseif (is_page('mansion')) {
  include(TEMPLATEPATH . '/pages/page-mansion.php');

  // MOVIE
  // ==================================================
} elseif (is_page('movie')) {
  include(TEMPLATEPATH . '/pages/page-movie.php');

  // COUPON
  // ==================================================
} elseif (is_page('coupon')) {
  include(TEMPLATEPATH . '/pages/page-coupon.php');

  // RESERVE
  // ==================================================
} elseif (is_page('reserve')) {
  include(TEMPLATEPATH . '/pages/page-reserve.php');

  // CONTACT
  // ==================================================
} elseif (is_page('contact')) {
  include(TEMPLATEPATH . '/pages/page-contact.php');

  // SITEMAP
  // ==================================================
} elseif (is_page('sitemap')) {
  include(TEMPLATEPATH . '/pages/page-sitemap.php');

  // THANKS
  // ==================================================
} elseif (is_page('thanks')) {
  include(TEMPLATEPATH . '/pages/page-thanks.php');

  // recruit
  // ==================================================
} elseif (is_page('recruit')) {
  include(TEMPLATEPATH . '/pages/page-recruit.php');

  // campaign
  // ==================================================
} elseif (is_page('campaign')) {
  include(TEMPLATEPATH . '/pages/page-campaign.php');

  // COMPANY
  // ==================================================
} elseif (is_page('company')) {
  include(TEMPLATEPATH . '/pages/page-company.php');
} ?>

<?php get_footer(); ?>