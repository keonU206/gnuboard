<?php
if (!defined('_GNUBOARD_')) exit;

$items = [
  [
    "title" => "Heidolph",
    "desc"  => "혁신적이고 글로벌한 기업으로서, 프리미엄 실험실 장비 생산의 선두주자입니다.",
    "img"   => G5_THEME_URL . "/img/heidolph.jpg",
    "active"=> true,
    "link"  => "#"
  ],
  [
    "title" => "NORMAG",
    "desc"  => "독일 NORMAG는 화학 및 제약 산업의 실험실부터 생산용 scale까지 유리 반응기 및 부품을 제조/판매하는 회사입니다.",
    "img"   => G5_THEME_URL . "/img/normag.jpg",
    "active"=> false,
    "link"  => "#"
  ],
  [
    "title" => "CINC",
    "desc"  => "미국 CINC는 액체-액체 원심분리기를 설계, 제조 및 공급하는 기업으로서 세계의 석유,화학,광업,제약,식품,항공,인쇄 및 환경 산업 분야의 연구를 수행하는 고객들 신뢰를 받고 있습니다.",
    "img"   => G5_THEME_URL . "/img/cinc.jpg",
    "active"=> false,
    "link"  => "#"
  ],
  [
    "title" => "Flow reactor",
    "desc"  => "반응물을 튜브나 파이프 형태의 반응기에 연속적으로 주입하고, 흐르는 과정에서 화학 반응이 일어나 결과물이 배출되도록 설계된 장치입니다.",
    "img"   => G5_THEME_URL . "/img/flow.jpg",
    "active"=> false,
    "link"  => "#"
  ],
];
?>

<link rel="stylesheet" href="/gnuboard/rb/rb.widget/rb.card_list2/css/style.css?v=<?php echo time(); ?>">

<section class="kw-product">
  <div class="kw-product__inner">

    <!-- <div class="kw-product__rail" aria-hidden="true">
      <span class="dot"></span>
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div> -->

    <header class="kw-product__head">
      <div class="kw-product__kicker">PRODUCT</div>
      <h2 class="kw-product__title">제품소개</h2>
    </header>

    <div class="kw-product__grid">
      <?php foreach ($items as $it): ?>
        <?php
          $title = htmlspecialchars($it["title"], ENT_QUOTES);
          $desc  = htmlspecialchars($it["desc"], ENT_QUOTES);
          $img   = htmlspecialchars($it["img"], ENT_QUOTES);
          $link  = htmlspecialchars($it["link"], ENT_QUOTES);
          $activeClass = !empty($it["active"]) ? " is-active" : "";
        ?>
        <a class="kw-card<?php echo $activeClass; ?>" href="<?php echo $link; ?>">
          <div class="kw-card__content">
            <h3 class="kw-card__title"><?php echo $title; ?></h3>
            <p class="kw-card__desc"><?php echo $desc; ?></p>
          </div>

          <div class="kw-card__media" style="background-image:url('<?php echo $img; ?>');"></div>
        </a>
      <?php endforeach; ?>
    </div>

  </div>
</section>
