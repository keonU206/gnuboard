<?php
//모듈정보 불러오기
$md_id = $row_mod['md_id']; //현재 모듈 ID
$rb_skin = sql_fetch (" select * from {$rb_module_table} where md_id = '{$md_id}' "); //모듈설정 테이블 조회
$md_subject = $rb_skin['md_title']; //모듈 타이틀   
$rb_widget_url = G5_URL.'/rb/'.$rb_skin['md_widget'];
?>
<link
  rel="stylesheet"
  href="<?php echo $rb_widget_url ?>/css/style.css?ver=<?php echo G5_SERVER_TIME ?>"
/>

<div>
  <!-- { -->
  <ul
    class="bbs_main_wrap_tit"
    style="display:<?php echo (isset($rb_skin['md_title_hide']) && $rb_skin['md_title_hide'] == '1') ? 'none' : 'block'; ?>"
  >
    <li class="bbs_main_wrap_tit_l">
      <!-- 타이틀 { -->
      <a href="<?php echo $links_url; ?>">
        <h2
          class="<?php echo isset($rb_skin['md_title_font']) ? $rb_skin['md_title_font'] : 'font-B'; ?>"
          style="color:<?php echo isset($rb_skin['md_title_color']) ? $rb_skin['md_title_color'] : '#25282b'; ?>; font-size:<?php echo isset($rb_skin['md_title_size']) ? $rb_skin['md_title_size'] : '20'; ?>px; "
        >
          <?php echo $md_subject ?>
        </h2>
      </a>
      <!-- } -->
    </li>

    <li class="bbs_main_wrap_tit_r">
      <button type="button" class="more_btn" onclick="location.href='#';">
        더보기
      </button>
    </li>

    <div class="cb"></div>
  </ul>
  <!-- } -->
</div>

<div class="rb_wz_swap1_wrap">
  <div
    class="rb_swiper"
    id="rb_swiper_1"
    data-pc-w="1"
    data-pc-h="1"
    data-mo-w="1"
    data-mo-h="1"
    data-pc-gap="30"
    data-mo-gap="20"
    data-autoplay="1"
    data-autoplay-time="4000"
    data-pc-swap="1"
    data-mo-swap="1"
  >
    <div class="rb_swiper_inner">
      <div class="rb-swiper-wrapper swiper-wrapper">
        <!-- for { -->
        <div class="rb_swiper_list hero_slide hero_1">
          <div class="hero_inner">
            <div class="hero_left">
              <h2 class="hero_title font-B">에스켐텍</h2>
              <p class="hero_sub font-R">
                기초 장비부터 첨단 자동화 시스템까지, 실험실을 위한 토탈 솔루션
              </p>
            </div>
          </div>
        </div>
        <!-- } -->

        <div class="rb_swiper_list hero_slide hero_2">
          <div class="hero_inner">
            <div class="hero_left">
              <h2 class="hero_title font-B">제품소개</h2>
              <p class="hero_sub font-R">
                연구 환경에 최적화된 장비 라인업을 확인하세요.
              </p>
            </div>
          </div>
        </div>

        <div class="rb_swiper_list hero_slide hero_3">
          <div class="hero_inner">
            <div class="hero_left">
              <h2 class="hero_title font-B">온라인문의</h2>
              <p class="hero_sub font-R">빠른 상담과 견적 문의를 지원합니다.</p>
            </div>
          </div>
        </div>

        <div class="rb_swiper_list hero_slide hero_4">
          <div class="hero_inner">
            <div class="hero_left">
              <h2 class="hero_title font-B">고객센터</h2>
              <p class="hero_sub font-R">설치/유지보수/기술지원까지 한 번에.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="rb_swiper_paging_btn">
      <!-- 좌우 페이징 { -->
      <button type="button" class="swiper-button-prev rb-swiper-prev">
        <img src="<?php echo G5_THEME_URL ?>/rb.img/icon/arr_prev.svg" />
      </button>
      <button type="button" class="swiper-button-next rb-swiper-next">
        <img src="<?php echo G5_THEME_URL ?>/rb.img/icon/arr_next.svg" />
      </button>
      <!-- } -->
    </div>
  </div>

  <div class="swap1_btn_wrap">
    <button
      type="button"
      class="main_rb_bg font-B"
      onclick="location.href='<?php echo G5_URL ?>';"
    >
      리빌더 사용해보기
    </button>
  </div>
</div>
