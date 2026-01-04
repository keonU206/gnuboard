<?php
//모듈정보 불러오기
$md_id = $row_mod['md_id']; //현재 모듈 ID
$rb_skin = sql_fetch (" select * from {$rb_module_table} where md_id = '{$md_id}' "); //모듈설정 테이블 조회
$md_subject = $rb_skin['md_title']; //모듈 타이틀   
$rb_widget_url = G5_URL.'/rb/'.$rb_skin['md_widget'];
?>
<link rel="stylesheet" href="<?php echo $rb_widget_url ?>/css/style.css?ver=<?php echo G5_SERVER_TIME ?>">

<div>

    <!-- { -->
    <ul class="bbs_main_wrap_tit" style="display:<?php echo (isset($rb_skin['md_title_hide']) && $rb_skin['md_title_hide'] == '1') ? 'none' : 'block'; ?>">

        <li class="bbs_main_wrap_tit_l">
            <!-- 타이틀 { -->
            <a href="<?php echo $links_url; ?>">
                <h2 class="<?php echo isset($rb_skin['md_title_font']) ? $rb_skin['md_title_font'] : 'font-B'; ?>" style="color:<?php echo isset($rb_skin['md_title_color']) ? $rb_skin['md_title_color'] : '#25282b'; ?>; font-size:<?php echo isset($rb_skin['md_title_size']) ? $rb_skin['md_title_size'] : '20'; ?>px; "><?php echo $md_subject ?></h2>
            </a>
            <!-- } -->
        </li>

        <li class="bbs_main_wrap_tit_r">
            <button type="button" class="more_btn" onclick="location.href='#';">더보기</button>
        </li>

        <div class="cb"></div>
    </ul>
    <!-- } -->

</div>

<div class="rb_wz_swap1_wrap">


    <div class="rb_swiper" id="rb_swiper_1" 
        data-pc-w="2" 
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
                <div class="rb_swiper_list">
                    <ul>
                        <li class="font-B font-20 text-center">슬라이드1</li>
                        <li class="font-R font-16 opacity-50 mt-5 text-center">슬라이드1의 서브워딩을 입력하세요.<br>슬라이드1 입니다.</li>
                    </ul>
                    <ul class="rb_wz_swap1_con">
                        "그누보드 리빌더는, 그누보드의 기능을 모두 그대로 사용하면서 폴더의 추가만으로 손쉽게 웹사이트를 완성하고 다양한 편의기능을 사용할 수 있습니다. 고도화는 계속 진행됩니다."
                    </ul>
                </div>
                <!-- } -->

                <!-- for { -->
                <div class="rb_swiper_list">
                    <ul>
                        <li class="font-B font-20 text-center">슬라이드2</li>
                        <li class="font-R font-16 opacity-50 mt-5 text-center">슬라이드2의 서브워딩을 입력하세요.<br>슬라이드2 입니다.</li>
                    </ul>
                    <ul class="rb_wz_swap1_con">
                        "그누보드 리빌더는, 그누보드의 기능을 모두 그대로 사용하면서 폴더의 추가만으로 손쉽게 웹사이트를 완성하고 다양한 편의기능을 사용할 수 있습니다. 고도화는 계속 진행됩니다."
                    </ul>
                </div>
                <!-- } -->

                <!-- for { -->
                <div class="rb_swiper_list">
                    <ul>
                        <li class="font-B font-20 text-center">슬라이드3</li>
                        <li class="font-R font-16 opacity-50 mt-5 text-center">슬라이드3의 서브워딩을 입력하세요.<br>슬라이드3 입니다.</li>
                    </ul>
                    <ul class="rb_wz_swap1_con">
                        "그누보드 리빌더는, 그누보드의 기능을 모두 그대로 사용하면서 폴더의 추가만으로 손쉽게 웹사이트를 완성하고 다양한 편의기능을 사용할 수 있습니다. 고도화는 계속 진행됩니다."
                    </ul>
                </div>
                <!-- } -->

                <!-- for { -->
                <div class="rb_swiper_list">
                    <ul>
                        <li class="font-B font-20 text-center">슬라이드4</li>
                        <li class="font-R font-16 opacity-50 mt-5 text-center">슬라이드4의 서브워딩을 입력하세요.<br>슬라이드4 입니다.</li>
                    </ul>
                    <ul class="rb_wz_swap1_con">
                        "그누보드 리빌더는, 그누보드의 기능을 모두 그대로 사용하면서 폴더의 추가만으로 손쉽게 웹사이트를 완성하고 다양한 편의기능을 사용할 수 있습니다. 고도화는 계속 진행됩니다."
                    </ul>
                </div>
                <!-- } -->

            </div>
        </div>


        <div class="rb_swiper_paging_btn">
            <!-- 좌우 페이징 { -->
            <button type="button" class="swiper-button-prev rb-swiper-prev">
                <img src="<?php echo G5_THEME_URL ?>/rb.img/icon/arr_prev.svg">
            </button>
            <button type="button" class="swiper-button-next rb-swiper-next">
                <img src="<?php echo G5_THEME_URL ?>/rb.img/icon/arr_next.svg">
            </button>
            <!-- } -->
        </div>

    </div>

    <div class="swap1_btn_wrap">
        <button type="button" class="main_rb_bg font-B" onclick="location.href='<?php echo G5_URL ?>';">리빌더 사용해보기</button>
    </div>

</div>