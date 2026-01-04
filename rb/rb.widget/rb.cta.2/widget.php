<?php
if (!defined('_GNUBOARD_')) exit;

/**
 * ✅ 더미데이터 (수정 포인트)
 * - img: 배경 이미지 (권장 1600x900 이상)
 * - link: 이동 링크
 */
$WIDGET_BASE_URL = G5_URL . '/rb/rb.widget/rb.cta.2';

$cta_items = [
  [
    "kicker" => "INQUIRY",
    "title"  => "견적&기술 문의",
    "img"    => $WIDGET_BASE_URL . "/img/banner1.jpg",
    "link"   => "#"
  ],
  [
    "kicker" => "DEMO",
    "title"  => "Demo 요청",
    "img"    => $WIDGET_BASE_URL . "/img/banner2.jpg",
    "link"   => "#"
  ],
];
?>

<!-- ✅ CSS (네가 쓰는 rb 경로 기준으로 고정) -->
<link rel="stylesheet" href="/gnuboard/rb/rb.widget/rb.cta.2/css/style.css?v=<?php echo time(); ?>">

<section class="kw-cta">
  <div class="kw-cta__inner">
    <?php foreach ($cta_items as $it): ?>
      <?php
        $kicker = htmlspecialchars($it["kicker"], ENT_QUOTES);
        $title  = htmlspecialchars($it["title"], ENT_QUOTES);
        $img    = htmlspecialchars($it["img"], ENT_QUOTES);
        $link   = htmlspecialchars($it["link"], ENT_QUOTES);
      ?>
      <a class="kw-cta__tile" href="<?php echo $link; ?>" style="background-image:url('<?php echo $img; ?>');">
        <span class="kw-cta__overlay" aria-hidden="true"></span>

        <div class="kw-cta__content">
          <div class="kw-cta__kicker"><?php echo $kicker; ?></div>
          <div class="kw-cta__title"><?php echo $title; ?></div>
          <span class="kw-cta__line" aria-hidden="true"></span>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</section>
