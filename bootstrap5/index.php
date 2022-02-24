<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta property="og:site_name" content="정유미_부트스트랩5" />
        <meta property="og:url" content="//jym0415.cafe24.com/bootstrap5/"/>
        <meta property="og:type" content="website" />
        <meta property="og:title" content="정유미_부트스트랩5" />
        <meta property="og:description" content="하루10분 v라인완성" />
        <meta property="og:image" content="//jym0415.cafe24.com/bootstrap5/img/og_img.jpg" />

        <title>정유미_PWA 프론트엔드 개발 6개월 양성과정</title>
   
        <!-- Favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="/bootstrap5/img/favicon.ico" />
	    <link rel="apple-touch-icon" href="/bootstrap5/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" href="/bootstrap5/img/apple-touch-icon.png">
        <meta name="msapplication-TileImage" content="/bootstrap5/img/favicon.png" size="270x270" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
       

        <!--Naver,cafe24 web font-->
        <link href="/bootstrap5/css/origin/font.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/bootstrap5/css/styles.css" rel="stylesheet" />
        <!--Custem CSS-->
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <link href="/bootstrap5/css/yumi.min.css?ver=<?php echo time(); ?>" rel="stylesheet" />
        <script>
        window.onload= function(){
            const reivewSwiper = new Swiper('#reviewSlider .reviewSection', {
                autoplay: {
                    delay: 2000,
                },
                slidesPerView: 3,
                slidesPerGroup :1,
        
                // If we need pagination                    
                spaceBetween: 100,
                // Navigation arrows
                navigation: {
                    nextEl: '.reviewBtnNext',
                    prevEl: '.swiper-button-prev.reviewBtnPrev',
                },
        
               // And if we need scrollbar
                scrollbar: {
                    el: '#reviewSlider .swiper-scrollbar',
                },
        });
        }
    </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php //echo G5_URL; ?>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
            <?php echo latest('logo','logo',1,10); ?>

                <!-- <a class="navbar-brand" href="#page-top"><img src="/bootstrap5/img/logo.png" alt="..." /></a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0"> 
                        
                    

                        <!-- <li class="nav-item"><a class="nav-link" href="#product">제품안내</a></li>
                        <li class="nav-item"><a class="nav-link" href="#brand">브랜드소개</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">리뷰</a></li>
                        <li class="nav-item"><a href="//www.yaksoncosmetic.com/index.html" target="_blank" >약손명가코스메틱</a></li> -->

                        <?php
				            $menu_datas = get_menu_db(0, true);
				            $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                             $i = 0;
                            foreach( $menu_datas as $row ){
                                if( empty($row) ) continue;
                                $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                         ?>
                <li class="nav-item">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="nav-link"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<span class="bg"></span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                    ?>
                        <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul></div>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>






                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="">


        <?php
            echo latest('swiper_card', 'banner', 3, 23);        // 
        ?>



            <!-- <div id="carouselExampleControls" class="carousel slide visually-hidden" data-bs-ride="carousel"> -->
                <!-- <div class="carousel-inner">
                    <div class="carousel-item active d-block w-100">
                    <?php //echo latest('banner','banner',3,100) ?>
                    </div> -->
                  <!-- <div class="carousel-item active">
                    <img src="/bootstrap5/img/banner/banner1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/bootstrap5/img/banner/banner2.jpg" class="d-block w-100" alt="..." href="#wedding">
                  </div>
                  <div class="carousel-item">
                    <img src="/bootstrap5/img/banner/banner3.jpg" class="d-block w-100" alt="...">
                  </div> -->
                <!-- </div> -->
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button> -->
              <!-- </div> -->
               
        </header>
        <!--tab-->
        <ul id="tab" class="nav nav-pills nav-justified z-index : 1000">
            <li class="nav-item ">
              <a class="tabs text-light" aria-current="page" href="#wedding">웨딩 이벤트</a>
            </li>
            <li class="nav-item ">
              <a class="tabs text-light" href="#coupon">보너스 쿠폰</a>
            </li>
            <li class="nav-item">
              <a class="tabs text-light" href="#contact">체험단 모집</a>
            </li>
          </ul>
        <!-- 제품소개-->
        <section class="page-section" id="product">
            <div class="container">
                <div class="text-center ">
                    <h2 class="section-heading ">
                        <?php echo $list[$i][subject] ?> 
                    </h2>
                    <h3 class="section-subheading">노하우로 검증된 10개의 지압점을 자극해 피부속부터 표면까지</h3>
                </div>

                
            <div class="row">
            <div class="col-md-6">
                <div>
                    <img src="/bootstrap5/img/product/band.jpg" class='img-fluid mb-4' alt="..." />
                </div>
                <div class="text-center">
        
                    <ul class="d-flex"> 
                        <li>
                            <img src="/bootstrap5/img/product/sagak.jpg" class='img-fluid' alt="..." />
                            <h4 class="my-3 PinkNanum ">#사각턱</h4>
                        </li>
                        <li>
                            <img src="/bootstrap5/img/product/ezhong.jpg" class='img-fluid' alt="..." />
                            <h4 class="my-3 PinkNanum">#이중턱</h4>
                        </li>
                        <li>
                            <img src="/bootstrap5/img/product/line.jpg" class='img-fluid' alt="..." />
                            <h4 class="my-3 PinkNanum">#얼굴라인</h4>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                   <blockquote class="instagram-media" 
                   data-instgrm-permalink="https://www.instagram.com/tv/CT30tuTJOpp/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/tv/CT30tuTJOpp/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Instagram에서 이 게시물 보기</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/tv/CT30tuTJOpp/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">아밍제이🕊 워킹맘 Life(@amming_j)님의 공유 게시물</a></p></div></blockquote> 
                   <script async src="//www.instagram.com/embed.js"></script>
            </div>
            </div>
            <?php echo latest("product","product",4,30)?>
            <p class="text-center">*밴드 하루 15~20분 사용시, 평균연령 49세 여성대상/ 2주간 사용으로
               상기 항목에 대한 개선효과를 보임 </p>
            </div>
        </section>
        <!--쿠폰-->
        <section class="page-section" id="coupon">
            <div class="container">
                <div class="text-center">
                    <h2 class="">#Benefit Only</h2>
                    <h3 class="section-subheading">#신규회원 #쇼핑전 꿀혜택 #즉시할인</h3>
                </div>
                <div class="">
                    <?php echo latest('coupon','coupon',3,10); ?>
                    <!-- <ul class="d-flex">
                        <li><img src="/bootstrap5/img/coupon/5000.jpg" class="img-fluid" alt="오천원쿠폰">
                        </li>
                        <li class="mx-1"><img src="/bootstrap5/img/coupon/5.jpg" class="img-fluid" alt="오천원쿠폰">
                        </li>
                        <li><img src="/bootstrap5/img/coupon/free.jpg" class="img-fluid" alt="오천원쿠폰">
                        </li>
                    </ul> -->
                 </div>
                <!-- <div class="couponbtn d-grid gap-2 col-6 mx-auto mb-4">
                    <button class="btn btn-secondary" type="button">쿠폰 받기</button>
                </div>
                <div class="couponbtn d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-secondary" type="button">어플다운로드</button>
                </div> -->
            </div>
        </section>
        <!--brandstory-->

        <section class="" id="brand">
            <div class="container" >
                <div class="text-center">
                    <h2 class="mb-5">명가의 손끝에서 만들어진 화장품
                        약손명가 코스메틱 <br>
                        <span> 간절한 마음 '손'으로 전하겠습니다.</span></h2>
                        </div>   
                        <div class="mb-3 d-flex " >
                            <div class="row g-0">
                              <div class="col-md-7">
                                <img src="/bootstrap5/img/brand/brand1.jpg " class="" alt="...">
                              </div>
                              <div class="col-md-5 align-self-center" >
                                  <h4 class="monospace">300명이 넘는 관리사가 10만명이 넘는 고객의 피부를 책임져왔습니다.<h4>
                                  <h6 class="text-muted">누구보다 고객의 피부를 소중히 생각하는 전 지점 원장들이
                                      모여 직접 고객과 소통하는 그들의 의견이 제품 하나하나에 그대로 반영되어 나옵니다.
                                  </h6>
                              </div>
                            </div>
                          </div>
                          <div class="mb-3 d-flex" >
                            <div class="row g-0">
                              <div class="col-md-5 order-md-2">
                                <img src="/bootstrap5/img/brand/brand2.jpg" class="img-fluid" alt="...">
                              </div>
                              <div class="col-md-7 align-self-center order-md-1">
                                <div class="">
                                  <h4 class="monospace">사람의 몸을 이해하면 해답이 나옵니다.<h4>
                                  <h6 class=" text-muted">약손명가 코스메틱은 이미 '골기테라피'라는 신개념
                                      건강미용 관리요법을 개발,한국을 비롯한 일본,미국,동남아 까지 그 효과를 인정받았습니다.
                                      뼈와 근육의 움직임,장기의 기능처럼 인체내부에서 피부를 공격하는 요인 뿐 아니라 환경적인 
                                      요인까지 다스리는 조화로운 스킨케어로 이제껏 단 한번도 고객의 피부관리에 실패한 적이
                                      없습니다.

                                  </h6>
                                </div>
                              </div>
                            </div>
                          </div>
            </div>
        </section>
            <!-- 웨딩관리-->
            <section class="page-section" id="wedding" >
                <img src="/bootstrap5/img/wedding/event.jpg" class="img-fluid" alt="웨딩이벤트">
                
             </section>
    
        <!--review-->
        <div class="text-center" id="review">
        <h2 class="">진짜 리뷰</h2>
        <p class="star"><img src="https://tocobo.cafe24.com/wib/img/icon/star.png" alt="별" class="pc_icon"><img src="https://tocobo.cafe24.com/wib/img/mo/icon/star.png" alt="별" class="mo_icon"></p>	
        </div>
        <section id="reviewSlider">
            <div class="swiper  reviewSection">
             
                <div class="swiper-wrapper">              
                    <div class="swiper-slide">
                        <h4 class="text-center">“사각턱 고민”</h4>
                        <p class="text-center">
                            턱이완전쪼이는게 벌써부터 브이라인이 된거같아요<br>
							열심히 관리해보려고 합니다!<br>
							좋은제품 감사합니다^^
                        </p>
                        <p class="">kiss****</p>
                    </div>
                    <div class="swiper-slide">
                        <h4 class="text-center">“양악 수술 후 관리중”</h4>
                        <p class="text-center">
                            약손명가에서 나온제품이라 믿고 구매했어요<br>
								돌기형이 윤곽관리에 좋다고해서 붓기도 뺄겸 쓰고있어요<br>
								세척도 용이 하고 좋네요!
                        </p>
                        <p class="">tnrw****</p>
                    </div>
                    <div class="swiper-slide">
                        <h4 class="text-center">“어느덧 4년째 애정템!”</h4>
                        <p class="text-center">
                            쓴지 거의4년째 되가네요 혈자리를 눌러줘서 좋아요<br>
                            술먹고 다음날 얼굴부을때도 잘빼줘서 여행갈때도 꼭 챙겨가요!<br>
                            이거쓰고 얼굴작단 소리 많이 들었습니다ㅎㅎㅎㅎ
                        </p>
                        <p class="">bnmf****</p>
                    </div> 
                    <div class="swiper-slide">
                        <h4 class="text-center">“40대 리프팅 관리”</h4>
                        <p class="text-center">
                            저녁에 팩과함께 사용중 입니다.<br>
                            나이드니 턱이쳐지기 시작해 구매했는데 너무 자극적이지 않고 좋습니다.<br>
                            주변친구들도 저 보고 따라 구매했어요^^

                        </p>
                        <p class="">eun-****</p>
                    </div>
                    <div class="swiper-slide">
                        <h4 class="text-center">“다각형 얼굴의 소유자ㅠㅠ”</h4>
                        <p class="text-center">
                            지금까지 다양한 상품을 구매했습니다.괄사마사지,롤러마사지 등...<br>
                            근데 가장중요한건 귀찮다는거였어요
                            근데 이건 착용만 해주면되니까 너무 편하고좋아요!!<br>
                        </p>
                        <p class="">0919*****</p>
                    </div>
                    <div class="swiper-slide">
                        <h4 class="text-center">“지압점 최고”</h4>
                        <p class="text-center">
                            다른제품과 달리 지압점이 있어서 구매해봤어요.<br>
                            한달정도 착용했는데 처음엔 10분하다가 점점시간을 늘리고있어요<br>
                            제가 느낄땐 확실히 효과가 있어요!!
                        </p>
                        <p class="">eun-****</p>
                    </div>
                    <div class="swiper-slide">
                        <h4 class="text-center">“자기관리템 끝판왕!!”</h4>
                        <p class="text-center">
                            헤드X사용했는데 별로 효과를 못봤거든요<br>
                            현재3개월차 매일 20분씩 사용하는데 <br>만나는사람마다 갸름해졌다고해요
                            돌기마사지 영상참고하니까 더 자극이오는거같아요 <br>
                        </p>
                        <p class="">al****</p>
                    </div>          
                </div>
                <div class="swiper-button-prev reviewBtnPrev"></div>
                <div class="swiper-button-next reviewBtnNext"></div>
                
              
            </div>
        </div>
        </section>
    
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
               <div class="row">
                   <div class="">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">체험단 모집</h2>
                        <h3 class="section-subheading text-muted">한달무료체험하고 새롭게 태어날 체험단을 모집합니다!</h3>

                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <div class="row align-items-stretch mb-5">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <!-- Name input-->
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="name:required">이름을 입력하세요.</div>
                                </div>
                                <div class="form-group">
                                    <!-- Email address input-->
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                    <div class="invalid-feedback" data-sb-feedback="email:required">이메일을 입력하세요.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">이메일이 올바르지 않습니다.</div>
                                </div>
                                <div class="form-group ">
                                    <!-- Phone number input-->
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">휴대폰번호를 입력하세요.</div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-group-textarea mb-md-0">
                                    <!-- Message input-->
                                    <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">메세지를 입력하세요.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center text-white mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <div class="text-center"><button class="btn btn-secondary btn-xl text-uppercase disabled" id="submitButton" type="submit">신청하기</button></div>
                    </form>
                </div>
                   </div>
               </div>
                </div>
             
        </section>
        <!-- Footer-->
        <?php echo latest('youtube','youtube',3, 100); ?>
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; 부트스트랩5</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="//github.com/jym0415"><i class="fab fa-github"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" >010-4145-2282</a>
                        <a class="link-dark text-decoration-none" >정유미</a>
                    </div>
                </div>
            </div>
        </footer>
     
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="js/yumi.js"></script>
    </body>
</html>
