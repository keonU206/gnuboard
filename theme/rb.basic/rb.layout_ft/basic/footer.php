<?php
if (!defined('_GNUBOARD_')) exit;

$WIDGET_CSS = G5_URL . "/rb/rb.widget/rb.card_list2/css/style.css";

// ✅ 수정 포인트
$COMPANY_NAME = "에스켐텍";
$CEO_NAME     = "김찬민";
$EMAIL        = "htlim@schemtec.co.kr";
$ADDRESS      = "(18468) 경기도 화성시 동탄순환대로 830, SK V1 1215호";

$PHONE_LABEL  = "대표번호";
$PHONE_NUMBER = "031-630-2054";

$COPYRIGHT_YEAR = "2025";
$COPYRIGHT_TEXT = "NewChem. All rights reserved.";

// 로고 이미지(있으면 사용), 없으면 텍스트 로고로 표시
$LOGO_IMG = ""; 
// 예: $LOGO_IMG = G5_THEME_URL . "/img/footer_logo.png";
?>

<link
  rel="stylesheet"
  href="<?php echo G5_THEME_URL; ?>/rb.layout_ft/basic/style.css?v=<?php echo time(); ?>"
/>

<footer class="kw-footer">
  <div class="kw-footer__inner">
    <div class="kw-footer__left">
      <div class="kw-footer__brand">
        <?php if($LOGO_IMG): ?>
        <img
          class="kw-footer__logo"
          src="<?php echo htmlspecialchars($LOGO_IMG, ENT_QUOTES); ?>"
          alt="SCHEMTEC"
        />
        <?php else: ?>
        <!-- 텍스트 로고 (시안 느낌) -->
        <div class="kw-footer__brandText">
          <span class="kw-footer__mark" aria-hidden="true">▣</span>
          <div class="kw-footer__brandName">SCHEMTEC</div>
          <div class="kw-footer__brandSub">
            (주)
            <?php echo htmlspecialchars($COMPANY_NAME, ENT_QUOTES); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>

      <div class="kw-footer__meta">
        법인명(상호) :
        <?php echo htmlspecialchars($COMPANY_NAME, ENT_QUOTES); ?>
        <span class="sep">|</span>
        대표자 :
        <?php echo htmlspecialchars($CEO_NAME, ENT_QUOTES); ?>
        <span class="sep">|</span>
        이메일 :
        <a
          class="kw-footer__link"
          href="mailto:<?php echo htmlspecialchars($EMAIL, ENT_QUOTES); ?>"
          ><?php echo htmlspecialchars($EMAIL, ENT_QUOTES); ?></a
        >
      </div>

      <div class="kw-footer__meta">
        <?php echo htmlspecialchars($ADDRESS, ENT_QUOTES); ?>
      </div>

      <div class="kw-footer__policy">
        <a class="kw-footer__policyLink" href="#">개인정보취급방침</a>
      </div>

      <div class="kw-footer__copy">
        Copyright<?php echo htmlspecialchars($COPYRIGHT_YEAR, ENT_QUOTES); ?>
        ©
        <?php echo htmlspecialchars($COPYRIGHT_TEXT, ENT_QUOTES); ?>
      </div>
    </div>

    <div class="kw-footer__right">
      <div class="kw-footer__phoneLabel">
        <?php echo htmlspecialchars($PHONE_LABEL, ENT_QUOTES); ?>
      </div>
      <div class="kw-footer__phoneNumber">
        <?php echo htmlspecialchars($PHONE_NUMBER, ENT_QUOTES); ?>
      </div>
    </div>
  </div>
</footer>
