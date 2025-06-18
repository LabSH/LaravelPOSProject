<html lang="ko"><head>
  <!-- CUSTOM TAGS -->
  <!-- canonical -->



  <!-- META -->
  <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">



  <!-- TITLE -->
  <title>PHP_Farmework</title>

  <!-- ICON -->
  


  <!-- CSS -->
  <link href="https://ozarena.com/assets/core/common/css/xe-common.css?1630978661" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/assets/core/xe-ui-component/xe-ui-component.css?1630978661" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/assets/core/icon/xeicon.min.css?1715925652" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/Banners/OzMainVisualSlideBanner/assets/css/banner.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/Htmls/OzMainEventSkin/assets/css/widget.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/Htmls/OzMainMissionSkin/assets/css/widget.css?1697960140" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/src/Skins/CustomTab/OzMarketProductCustomTab/assets/css/output.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/Commerces/Products/CommonOzMarketProductWidgetSkin/assets/css/commerce_widget.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xecommerce/assets/css/shopping/commerces/commerces.css?1690852991" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/Commerces/Products/CommonOzMarketProductWidgetSkin/assets/css/output.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/assets/css/swiper10.min.css?1697959373" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/Banners/OzMainHorizontalBanner/assets/css/banner.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/Banners/OzMainHorizontalBannerMobile/assets/css/banner.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/Htmls/OzMainGameSkin/assets/css/widget.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/ArticleLists/OzMainNewsListTypeArticleList/assets/css/widget.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Skins/Widgets/ArticleLists/OzMainCustomerCenter/assets/css/html.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/assets/core/xe-ui/css/xe-ui-without-base.css?1620030785" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/assets/core/user/setting.css?1630978661" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/lib/swiper/css/swiper.min.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/lib/bootstrap/bootstrap.min.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/css/jquery.scrollbar.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/css/style.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/css/widget.css?1697959374" type="text/css" rel="stylesheet" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- JS at head.prepend -->
  <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-2B3W5YECEF&amp;cx=c&amp;_slc=1"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script>
      var xeBaseURL = 'https://ozarena.com'; // @DEPRECATED
  </script>
  <script src="https://ozarena.com/assets/vendor.js?1630978661"></script>
<script src="https://ozarena.com/assets/common.js?1630978661"></script>
<script src="https://ozarena.com/assets/core/common/js/xe.bundle.js?1630978661"></script><style type="text/css">a[data-v-82963a40]{cursor:pointer}</style>

<style>
/* 기본적으로 애니메이션을 적용할 요소들에 대한 스타일 */
.animated-up {
    opacity: 0;  /* 처음에는 투명 */
    transform: translateY(80px);  /* 아래로 20px 위치에 배치 */
    animation: slideUp 0.8s ease-out forwards; /* 애니메이션 적용 */
}

/* 애니메이션 정의 */
@keyframes slideUp {
    to {
        opacity: 1;  /* 애니메이션이 끝날 때 완전히 불투명 */
        transform: translateY(0);  /* 원래 위치로 이동 */
    }
}
</style>

  <script>
      if (window.XE) {
          XE.setup({
              baseURL: 'https://ozarena.com',
              assetsURL: 'https://ozarena.com',
              userToken: 'Bj0U4xD9ngar3u5uyr2EfVJ6KQR0DxOV6OgLDwFG',
              loginUserId: '', // @DEPRECATED
              user: {
                  id: '',
                  rating: 'guest'
              },
              useXeSpinner: true, // @DEPRECATED
              locale: 'ko',
              defaultLocale: 'ko',
              fixedPrefix: 'plugin',
                              routes: {"xehub_custom::food.currentmall":{"uri":"currentmall","methods":["POST"],"params":[]},"xehub_custom::food.changemall":{"uri":"changemall","methods":["POST"],"params":[]}},
              ruleSet: [],
              translation: {"locales":[{"code":"ko","nativeName":"\ud55c\uad6d\uc5b4"},{"code":"en","nativeName":"English"}],"terms":[]},
              passwordRules: 'min:6|numeric|alpha|special_char'
          });
      }
      if (jQuery) {
          jQuery.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': 'Bj0U4xD9ngar3u5uyr2EfVJ6KQR0DxOV6OgLDwFG'
              }
          });
      }
  </script>

  <!-- JS at head.append -->
  <script src="https://ozarena.com/plugins/xehub_custom_develop/assets/js/swiper10.min.js?1697959373"></script>


  <!-- CUSTOM TAGS -->
  

</head>

<body class="">

<!-- JS at body.prepend -->


<!-- CUSTOM TAGS -->


<meta name="format-detection" content="telephone=no">
<meta http-equiv="content-script-type" content="text/javascript">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link href="https://fonts.cdnfonts.com/css/ds-digital" rel="stylesheet">













<div id="wrap" class="wrap-layout xe-theme ">
  <p class="skip"><a href="#content">메뉴 건너뛰기</a></p>

<!--   <div class="xf-section-go-top xf-wide-display-block">
      <div class="xf-go-top-btn-box">
          <button class="xf-go-top-btn">
              <img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets//img/angle-up.svg" class="xf-go-top-btn__img" alt="위로 가기 버튼">
              <span class="xf-go-top-btn__text">TOP</span>
          </button>
      </div>
  </div> -->

  <header class="header-layout">
    
      <style>
  .btn-primary-action {
      margin-left:10px;
      border-radius: 27px;
      background-color: #f5332b;
      /*background-color: #5384ed;*/
      font-size: 18px;
      font-weight: 500;
      line-height: 10px;
      letter-spacing: -0.8px;
      color: #fff;
      text-decoration: none;
      padding: 16px 32px;
      display: inline-block;
      -webkit-transition: 0.3s;
      transition: 0.3s;
      white-space: nowrap;
  }

  .mall-name {
      font-size: 12px;
      color: #aaa;
      margin:0;
      padding:0;
      line-height: 20px;
  }

  .login-white {
      color: black !important;
      border: 1px solid #e0e0e0 !important;
      background-color: white !important;
  }

  .section-header .search-store-list .search-store-item .search-store-btn.bookmark-on {
      color: #ffd000;
  }
</style>


<div id="header" class="header section-header">
  <!-- header pc 노출 영역 -->
  <div class="section-header-container section-header-pc">
      <span class="blind">PC 헤더영역</span>
      <div class="xf-section-ad-box">
          <!-- 구글 애드센스 광고 영역 -->

              <div class="xf-header-banner-box xf-header-left-banner-box">

              </div>

                          <div class="xf-header-banner-box xf-header-right-banner-box">
                  
              </div>
                  <!-- //구글 애드센스 광고 영역 -->
      </div>

      <div class="section-header-inner">
          <div class="header-sitemap ">
              

          <style>
              .site-sns-box {
                  display: flex;
                  align-items: center;
              }

              .site-sns-box > li .sns-link {
                  display: flex;
              }

              .sns-link.youtube-wrap {
                  display: inline-flex;
                  align-items: start;
              }

              .sns-link.youtube-wrap .youtube-icon {
                  display: flex;
                  width: 21px;
                  fill: #D9D9D9;
              }

              .sns-link.youtube-wrap .youtube-icon:hover {
                  fill: #484848;
                  transition: all .2s ease-in-out;
              }

              .site-img--sns .sns-link.youtube-wrap .youtube-icon {
                  width: 24px;
              }

              .site-img--sns a:last-child::after {
                  content: none;
              }

              .site-img--sns {
                  display: flex;
                  align-items: center;
                  width: 100%;
                  justify-content: center;
              }
              .site-img--sns a {
                  display: flex;
              }

              .site-img--sns a:after {
                  top: 50%;
                  transform: translateY(-50%);
              }

              .mobile-site-link img {
                  display: inline;
              }
          </style>

          <script>
              $(function() {
                  /* 헤더 상단 관련 사이트 로고 hover시  */
                  $(".site-logo .logo-list-sub-link").mouseenter(function(){
                      $(this).find('img').get(0).src = $(this).find('img').get(0).src.replace('-off', '-on');
                  });
                  $(".site-logo .logo-list-sub-link").mouseleave(function(){
                      $(this).find('img').get(0).src = $(this).find('img').get(0).src.replace('-on', '-off');
                  });
              });
          </script>



          <div class="xf-header-info" id="xf-header-info">
               <div class="xf-header-info-inner">
                  <!-- 모바일 gnb , 버튼 -->
                  <div class="xf-header-gnb-mobile">
                      <div class="xf-header-gnb__menu-btn">
                          <span class="blind">모바일 메뉴버튼</span>
                          <img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/img/mobile-menu.svg" class="xf-header-gnb__menu-btn-img" alt="모바일 메뉴 버튼">
                      </div>
                      <div class="page_cover" onclick="history.back();"></div>
                      <!-- 모바일 메뉴 레이어 -->
                      <div class="xf-header-gnb__inner-box">
                          <!-- 로그인 영역 박스 -->
                          <div class="xf-header-info-login-content">
                                                                  <!-- 비로그인 -->
                                  <div class="xf-header-info-login-box">
                                      <div class="xf-header-info-login-inner">
                                          <a href="https://ozarena.com/auth/login" class="xf-header-info-login__link base-a">
                                           
                                              <p class="xf-header-info-login-text">
                                                  PC방 최초의 멤버십 서비스 <br>
                                                  <span class="login-text-point xf-text-underline">로그인</span>후 이용하세요!
                                              </p>
                                          </a>
                                      </div>
                                  </div>
                                  <!-- // 비로그인 -->
                                                          </div>
                          <!-- //로그인 영역 박스 -->
                          <!-- 모바일 GNB -->
                          <nav class="xf-header-gnb">
  <ul class="xf-gnb-list base-list">
                                                                              <li class="xf-gnb-item  open  ">
              <a href="https://ozarena.com/home4" class="xf-gnb-list__link  active  " target="_self">
                  <span class="xf-gnb-list__text">오즈홈 <i class="xi-external-link"></i>
                  
                  
                  
              </span></a>

              
              
              

                                                                                      </li>
                              <li class="xf-gnb-item  ">
              <a href="https://ozarena.com/event?category_item_id=4" class="xf-gnb-list__link  " target="_self">
                  <span class="xf-gnb-list__text">이벤트 <i class="xi-external-link"></i>
                  
                  
                  
              </span></a>

              
              
              

                                                          
                      <ul class="xf-gnb-list-depth">
                          <li class="xf-gnb-depth-item">
                              <a href="https://ozarena.com/event?category_item_id=4" class="xf-gnb-list-depth__link   " target="_self">
                                  <span class="xf-gnb-list__text">진행중인 이벤트 <i class="xi-external-link"></i></span>
                              </a>
                              
                          </li>
                      </ul>
                                          
                      <ul class="xf-gnb-list-depth">
                          <li class="xf-gnb-depth-item">
                              <a href="https://ozarena.com/event?category_item_id=5" class="xf-gnb-list-depth__link   " target="_self">
                                  <span class="xf-gnb-list__text">종료된 이벤트 <i class="xi-external-link"></i></span>
                              </a>
                              
                          </li>
                      </ul>
                                          
                      <ul class="xf-gnb-list-depth">
                          <li class="xf-gnb-depth-item">
                              <a href="https://ozarena.com/winner" class="xf-gnb-list-depth__link   " target="_self">
                                  <span class="xf-gnb-list__text">당첨자 발표 <i class="xi-external-link"></i></span>
                              </a>
                              
                          </li>
                      </ul>
                                              </li>
                              <li class="xf-gnb-item  ">
              <a href="https://ozarena.com/missions-home?main=Y" class="xf-gnb-list__link  " target="_self">
                  <span class="xf-gnb-list__text">미션 <i class="xi-external-link"></i>
                  
                  
                  
              </span></a>

              
              
              

                          </li>
                                          <li class="xf-gnb-item  ">
              <a href="https://ozarena.com/store" class="xf-gnb-list__link  " target="_self">
                  <span class="xf-gnb-list__text">매장찾기 <i class="xi-external-link"></i>
                  
                  
                  
              </span></a>

              
              
              

                                                          
                      <ul class="xf-gnb-list-depth">
                          <li class="xf-gnb-depth-item">
                              <a href="https://ozarena.com/store" class="xf-gnb-list-depth__link   " target="_self">
                                  <span class="xf-gnb-list__text">매장찾기 <i class="xi-external-link"></i></span>
                              </a>
                              
                          </li>
                      </ul>
                                                                      </li>
                                                      <li class="xf-gnb-item  ">
              <a href="https://ozarena.com/market-home" class="xf-gnb-list__link  " target="_self">
                  <span class="xf-gnb-list__text">마켓 <i class="xi-external-link"></i>
                  
                  
                  
              </span></a>

              
                  </li></ul>
</nav>
                          <!-- //모바일 GNB -->
                      </div>
                      <!-- //모바일 메뉴 레이어 -->
                  </div>
                  <!-- // 모바일 gnb , 버튼 -->
                  <div class="xf-header-user-box">
                              @if(session('rank') == 1)
                              <div class="xf-total-login-wrap">
                                  <a class="total-login-btn login-white" href="{{url('/main_one')}}">관리자</a>
                              </div>
                              @endif
                  </div>





                  <!-- pc gnb -->
                  <style>
  /*.section-header .xf-header-info .xf-header-gnb .xf-gnb-list {justify-content:left;}*/
</style>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Lora:wght@400;700&family=Poppins:wght@400;700&family=Merriweather:wght@400;700&family=Pacifico&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Cabin:wght@400;700&family=Righteous&family=Oswald:wght@400;700&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lemon:wght@400;700" rel="stylesheet">

<style>
  body {
    font-family: 'Lemonada', cursive;
  }
</style>



  <nav class="xf-header-gnb xf-header-gnb-pc">
      <ul class="xf-gnb-list base-list">
                                                                                          
      <li class="home4">
  <a href="" class="xf-gnb-list__link active">
    <span class="xf-gnb-list__text" style="font-size: 40px; font-weight: bold; font-family: 'Lemon', sans-serif;">Menu & Orders</span>
  </a>
</li>

               
      </ul>
  </nav>

                      <div class="xf-header-user-box">
                            @if(!session('name'))
                            <div class="xf-total-login-wrap">
                            <a class="total-login-btn login-white" href="{{route('login_one.index')}}">로그인</a>
                            </div>
                            @else
                            <div class="xf-total-login-wrap">
                            <form id="logout-form" action="{{ route('login_one.logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                            <a class="total-login-btn login-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">로그아웃</a>
                            </div>
                            @endif
                      </div>


                      <!-- 모바일 마이페이지 버튼 -->
                                                  <div class="xf-header-profile-box xf-header-profile-mobile">
                              <a href="https://ozarena.com/auth/login" class="xf-header-info__link">
                                  <img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/img/icon-login.svg" alt="로그인아이콘">
                              </a>
                          </div>
                                      </div>
          </div>
      </div>

      <style>
  .alarm-noti-wrap {
      visibility: hidden;
      position: fixed;
      top: 0;
      right: -100%;
      width: 100%;
      height: 100%;
      padding: 16px;
      max-width: 100%;
      background-color: rgba(10, 13, 22, 0.85);
      overflow-y: auto;
      z-index: 110;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
  }

  .alarm-noti-wrap::after {
      content: '';
      display: block;
      width: 100%;
      height: 100%;
      -webkit-filter: blur(5px);
      filter: blur(5px);
      position: absolute;
      top: 0;
      left: 0;
      background-color: rgba(10, 13, 22, 0.6);
      z-index: -1;
  }

  .alarm-noti-wrap.open {
      visibility: visible;
      right: 0px;
  }

  .alarm-noti-wrap .noti-inner {
      position: relative;
      width: 100%;
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
  }

  .noti-header {
      position: relative;
      padding: 10px 6px 40px;
  }

  .noti-header::after {
      content: '';
      display: block;
      clear: both;
  }

  .noti-header .alarm_title {
      float: left;
      position: relative;
      line-height: 24px;
      padding-left: 32px;
  }

  .noti-header .alarm_title .alarm_icon {
      position: absolute;
      top: 0;
      left: 0;
      text-decoration: none;
      display: inline-block;
      width: 24px;
      height: 24px;
      background-image: url(https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/img/icon-alarm.png);
      background-size: 24px 24px;
      background-repeat: no-repeat;
  }

  .noti-header .alarm_title .alarm_title_text {
      color: #fff;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: -0.2px;
      display: inline-block;
  }

  .noti-header .alarm_title .alarm_active {
      width: 5px;
      height: 5px;
      background-color: #e62c25;
      display: block;
      border-radius: 50%;
      position: absolute;
      right: -5px;
      top: -5px;
  }

  .noti-header a + a {
      margin-right: 10px;
  }

  .noti-header .alarm_close_btn {
      float: right;
      display: block;
      text-decoration: none;
      line-height: 20px;
  }

  .noti-header .alarm_close_btn:hover .alarm_close_text {
      color: rgba(255, 255, 255, 0.8);
  }

  .noti-header .alarm_close_btn .alarm_close_text {
      font-size: 14px;
      -webkit-transition: 0.3s;
      transition: 0.3s;
      display: block;
      color: rgba(255, 255, 255, 0.5);
  }

  .noti-content {
      -webkit-box-flex: 5;
      -ms-flex: 5;
      flex: 5;
  }

  .noti-content .noti-list-wrap .noti-list {
      padding: 0;
      margin: 0;
      list-style: none;
      line-height: 24px;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item {
      padding: 8px 8px 8px 12px;
      background-color: rgba(255, 255, 255, 0.09);
      margin-bottom: 8px;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item.on {
      background-color: rgba(255, 255, 255, 0.05);
  }

  .noti-content .noti-list-wrap .noti-list .noti-item .noti-item-link {
      position: relative;
      display: block;
      text-decoration: none;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item .noti-item-link .noti-item-title {
      font-size: 13px;
      font-weight: 600;
      line-height: 30px;
      margin-right: 40px;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item .noti-item-link .noti-item-title.noti-1 {
      color: #7B9DBE;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item .noti-item-link .noti-item-title.noti-2 {
      color: #FF3F44;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item .noti-item-link .noti-item-title .noti-item-icon {
      display: inline-block;
      padding-right: 4px;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item .noti-item-link .noti-item-info {
      margin: 0;
      color: rgba(255, 255, 255, 0.8);
      font-size: 13px;
      margin-right: 40px;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item .noti-item-link .noti-item-date {
      color: rgba(255, 255, 255, 0.4);
      font-size: 12px;
      display: inline-block;
      position: absolute;
      right: 0;
      bottom: 0;
  }

  .noti-content .noti-list-wrap .noti-list .noti-item .noti-item-link .noti-item-close {
      position: absolute;
      display: inline-block;
      background-image: url(https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/img/noti-list-close.png);
      width: 18px;
      height: 18px;
      background-size: cover;
      top: 0;
      right: 0;
  }

  .noti-content .noti-alarm-no {
      text-align: center;
      color: rgba(255, 255, 255, 0.6);
  }

  @media (min-width: 992px) {
      .alarm-noti-wrap {
          width: 80%;
          max-width: 400px;
      }
  }
</style>
<!-- 알림 side -->
<div class="alarm-noti-wrap">
  <div class="noti-inner">

      <div class="noti-header">
          <div class="alarm_title">
                      <span class="alarm_icon">
                          
                          
                          
                          
                      </span>
              <span class="alarm_title_text">알림</span>
          </div>
          <a class="alarm_close_btn alarm_close" href="#"><span class="alarm_close_text">닫기</span> </a>
          <a class="alarm_close_btn alarm_list_close" href="#"><span class="alarm_close_text">전체삭제</span> </a>
      </div>

      <div class="noti-content">
          <div class="noti-list-wrap">
              <ul class="noti-list">
                              </ul></div>
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

      

  </div>
</div>
<!-- // 알림 side -->
<script>
  $(function () {
      $('.alarm_button').on('click', function() {
          $('.alarm-noti-wrap').addClass('open');
      });

      $('.alarm_close_btn.alarm_close').on('click', function (e) {
          $('.alarm-noti-wrap').removeClass('open');
      });

      $('.noti-item-close').on('click', function (e) {
          console.log('click')
          e.preventDefault();
          var self = $(this);
          jQuery.post($(this).data('url_delete')).then(function (res) {
              console.log($(this).closest('.noti-item'))
              self.closest('.noti-item').remove();
          }).catch(function(err){

          });
          // e.preventDefault();
      });

      $('.alarm_list_close .alarm_close_text').on('click', function (e) {
          e.preventDefault();
          var self = this;
          jQuery.get("https://ozarena.com/message/delete-all").then(function (res) {
              $('.noti-item').remove();
          }).catch(function(err){
              console.log(err)
          });
      });
  })
</script>
  </div>
  <!-- //header pc 노출 영역 -->



  <!-- 모바일 드롭메뉴  -->
  <div class="family-site-bg"></div>
  <div class="xf-mobile-drop-menu">
      
      <div class="mobile-family-site">
          <ul class="family-site-box">
              <li class="site-img">
                  <a href="https://battlica.com/" target="_blank" class="mobile-site-link battlica"><img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/img/battl-on.png" alt="배틀리카 로고"></a>
              </li>
              <li class="site-img">
                  <a href="https://foodcharge.co.kr/" target="_blank" class="mobile-site-link food"><img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/img/food-on.svg" alt="푸드차지로고"></a>
              </li>
              <li class="site-img">
                  <a href="https://ozpccafe.com/" target="_blank" class="mobile-site-link zone"><img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/img/zone-on.svg" alt="옵티멈존 로고"></a>
              </li>
              <li class="site-img site-img--sns">
                  <a target="_blank" href="https://www.instagram.com/ozpccafe/" class="sns-link"><i class="xi-instagram"></i></a>
                  <a target="_blank" href="https://www.facebook.com/ozpcbang/" class="sns-link"><i class="xi-facebook"></i> </a>
                  <a target="_blank" href="https://blog.naver.com/ozpccafe" class="sns-link"><i class="xi-naver-square"></i></a>
                  <a target="_blank" href="https://www.youtube.com/channel/UChFMCIlMODqN4XTcURWySsw" class="sns-link youtube-wrap">
                      <div class="youtube-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 28 21"><rect width="27.93" height="21" fill="" rx="2"></rect><g clip-path="url(#a)"><path fill="#fff" d="m19.793 10.056-8.79-4.847a.243.243 0 0 0-.232 0 .219.219 0 0 0-.115.191v9.693c0 .079.044.152.115.19a.244.244 0 0 0 .232 0l8.79-4.845a.22.22 0 0 0 .115-.191.22.22 0 0 0-.115-.191Z"></path></g><defs><clipPath id="a"><path fill="#fff" d="M9.962 5.18h10.64v10.133H9.962z"></path></clipPath></defs></svg>
                      </div>
                  </a>
                  
                  
              </li>
          </ul>
      </div>
      
      
      <div class="drop-menu-inner">
          <ul class="drop-menu-list">
              <li class="drop-menu-item">
                  <a class="drop-menu-link" href="javascript:;">
                      <div class="drop-menu-icon drop-menu-home"></div>
                      <span class="drop-menu-text">오즈아레나 홈</span>
                      <span class="drop-menu-arrow"><i class="xi-angle-right"></i></span>
                  </a>
              </li>
              <li class="drop-menu-item">
                  <a class="drop-menu-link" href="javascript:;">
                      <div class="drop-menu-icon drop-menu-event"></div>
                      <span class="drop-menu-text">이벤트</span>
                      <span class="drop-menu-arrow"><i class="xi-angle-right"></i></span>
                  </a>
              </li>
              <li class="drop-menu-item">
                  <a class="drop-menu-link" href="javascript:;">
                      <div class="drop-menu-icon drop-menu-mission"></div>
                      <span class="drop-menu-text">미션</span>
                      <span class="drop-menu-arrow"><i class="xi-angle-right"></i></span>
                  </a>
              </li>
              <li class="drop-menu-item">
                  <a class="drop-menu-link" href="javascript:;">
                      <div class="drop-menu-icon drop-menu-market"></div>
                      <span class="drop-menu-text">마켓</span>
                      <span class="drop-menu-arrow"><i class="xi-angle-right"></i></span>
                  </a>
              </li>
              <li class="drop-menu-item">
                  <a class="drop-menu-link" href="javascript:;">
                      <div class="drop-menu-icon drop-menu-community"></div>
                      <span class="drop-menu-text">커뮤니티</span>
                      <span class="drop-menu-arrow"><i class="xi-angle-right"></i></span>
                  </a>
              </li>
              <li class="drop-menu-item">
                  <a class="drop-menu-link" href="javascript:;">
                      <div class="drop-menu-icon drop-menu-cs"></div>
                      <span class="drop-menu-text">고객센터</span>
                      <span class="drop-menu-arrow"><i class="xi-angle-right"></i></span>
                  </a>
              </li>
          </ul>
      </div>
      
  </div>
          <script>
      // 매장에서 접속하지 않았고 매장을 선택하지 않은 상태에서 매장페이지 접근 시 오즈홈으로 이동
      
      $(function() {
          $('.family-site-mobile-btn').click(function(){
              $(this).toggleClass('active');

              if($(this).hasClass('active')) {
                  $('.family-site-bg').addClass('on');
                  $('.xf-mobile-drop-menu').slideDown(200);
              } else {
                  $('.family-site-bg').removeClass('on');
                  $('.xf-mobile-drop-menu').slideUp(200);
              }
          });

          $(".family-site-bg").click(function(){
              $('.family-site-mobile-btn').removeClass('active');
              $('.family-site-bg').removeClass('on');
              $('.xf-mobile-drop-menu').slideUp(200);
          });

          $(document).on('click', '#current-mall', function() {
              XE.post('https://ozarena.com/currentmall').then(function () {
                  location.replace('/franchise_home');
              });
          });

          $('.btn-primary-action').on('click', function (event) {
              event.preventDefault();
              location.replace($(this).attr('href'));
          });

          $(document).on('click', '.change-mall', function() {
              params = {
                  'select_mall': $(this).data('mall'),
                  'select_mall_name': $(this).data('mall-name'),
              };

              XE.post('xehub_custom::food.changemall', params).then(function () {
                  location.replace('/franchise_home');
              });
          });

      });
  </script>
</div>



<script>
  var logout = (function () {
      var _isLogout = false;
      console.log(_isLogout);

      return {
          exec: function () {
              if(_isLogout === false) {
                  _isLogout = true;
                  if(opener) {
                      opener.chrome.webview.hostObjects.launcher.refresh();
                      window.close();
                  }
                  XE.get('/auth/logout').then((res) => {
                      XE.toast('success', '로그아웃을 진행하고 있습니다 잠시만 기다려주세요.');
                      window.location.reload();
                  }).catch((err) => {
                      window.location.reload();
                  });

              }
          }
      }
  }());

  $(function () {
      $('.btn-logout').on('click', function () {
          logout.exec();
      })
  })
</script>


<script>
  $(function() {
      $('.search-store-btn').click(function () {
          type = $(this).attr('data-type');
          id = "#" + $(this).data('mall')
          params = {
              'mall_id': $(this).data('mall'),
              'type': type,
          };
          XE.ajax({
              url: 'https://ozarena.com/setfavorite',
              type: 'post',
              data: params,
              // dataType: 'json',
              success: function (response) {
                  if (type == 'add') {
                      $(id).attr('data-type', 'remove');
                      $(id).addClass('bookmark-on');
                  } else {
                      $(id).attr('data-type', 'add');
                      $(id).removeClass('bookmark-on');
                  }
              }
          });
      });
  });
</script>

<style>
  .family-site-mobile-btn.active {
      transform: rotate(180deg);
  }
</style>

  </header>
  <script>
  $(function () {
      $('.__header-chat-btn').on('click', function () {
          location.pathname = "/plugin/social_login/login";
      })
  })
  
</script>

  <main class="container-layout main-layout" style="padding-top: 0px;">
      <div id="content" class="content-layout">
          <!-- xehub_custom_develop.views.Themes.OzArenaTheme.main -->
          <div class="section-main">
  <div id="widgetbox-widgetpage-b07c6144">
          <div class="widgetbox-content">
      <div class="xe-row"><div class="xe-col-md-12"></div></div><div class="xe-row"><div class="xe-col-md-12"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer">

<section class="xf-main-slide-banner xf-widget-section">

  <div class="swiper-container main-visual-slide-banner swiper-container-fade swiper-container-initialized swiper-container-horizontal animated-up">
      <div class="swiper-wrapper xf-banner-slide" style="transition-duration: 1000ms;"><div class="swiper-slide banner-slide-item swiper-slide-duplicate swiper-slide-duplicate-next" style="background-color: rgb(166, 15, 48); width: 922px; transition-duration: 1000ms; opacity: 1; transform: translate3d(0px, 0px, 0px);" data-swiper-slide-index="6">
                  <a href="" target="_self" class="slide-inner" style="text-decoration: none;">
                      <!-- <div class="banner-img "  style="background-image:url(https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/fc/69/20221101100949b23472306a95b22c0b899c4b7d2f93202b41fd8c.png);" >
                      </div> -->
                      <div data-swiper-parallax="300" class="banner-img" style="transition-duration: 1000ms; transform: translate3d(300px, 0px, 0px);">
                          <img src="https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/fc/69/20221101100949b23472306a95b22c0b899c4b7d2f93202b41fd8c.png" alt="">
                      </div>     
                      <div class="xf-banner-slide-content " data-swiper-parallax="500" style="transition-duration: 1000ms; transform: translate3d(500px, 0px, 0px);">    
                          <h3 class="xf-slide-title">신규가입을<br>환영합니다!</h3>
                          <p class="xf-slide-content">홈페이지 신규가입 시<br>먹거리, 요금제 할인권 증정!</p>
                         <!--  <a  href="https://ozarena.com/event/%EC%98%A4%EC%A6%88%EC%95%84%EB%A0%88%EB%82%98-%EA%B0%80%EC%9E%85%EC%9D%84-%ED%99%98%EC%98%81%ED%95%A9%EB%8B%88%EB%8B%A4" class="xf-banner-detail-btn"  target="_self">자세히 보기</a> -->
                      </div> 
                  </a>
              </div>
                          
              <div class="swiper-slide banner-slide-item" style="background-color: rgb(0, 83, 131); width: 922px; transition-duration: 1000ms; opacity: 1; transform: translate3d(-922px, 0px, 0px);" data-swiper-slide-index="0">
                  <a href="" target="_self" class="slide-inner" style="text-decoration: none;">
                      <!-- <div class="banner-img "  style="background-image:url(https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/9d/d3/20240307185636e8920dec4672dc85fa0b582d04bb2948c60223ae.png);" >
                      </div> -->
                      <div data-swiper-parallax="300" class="banner-img" style="transition-duration: 1000ms; transform: translate3d(300px, 0px, 0px);">
                          <img src="https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/9d/d3/20240307185636e8920dec4672dc85fa0b582d04bb2948c60223ae.png" alt="">
                      </div>     
                      <div class="xf-banner-slide-content " data-swiper-parallax="500" style="transition-duration: 1000ms; transform: translate3d(500px, 0px, 0px);">    
                          <h3 class="xf-slide-title">꿀팁!<br>스팀 PC카페 이용 방법!</h3>
                          <p class="xf-slide-content">내 스팀 계정으로 공짜로 플레이를?!
<br>
이젠 모르면 손해입니다!
<br>
구매 전에 미리 체험도 가능한 스팀 PC카페</p>
                         <!--  <a  href="https://ozarena.com/event/%EA%BF%80%ED%8C%81-%EC%98%A4%EC%A6%88-%EC%8A%A4%ED%8C%80-PC%EC%B9%B4%ED%8E%98-%EC%A6%90%EA%B8%B0%EB%8A%94-%EB%B0%A9%EB%B2%95-%EB%AA%A8%EB%A5%B4%EB%A9%B4-%EC%86%90%ED%95%B4?category_item_id=4" class="xf-banner-detail-btn"  target="_self">자세히 보기</a> -->
                      </div> 
                  </a>
              </div>
                         
              <div class="swiper-slide banner-slide-item" style="background-color: rgb(10, 33, 115); width: 922px; transition-duration: 1000ms; opacity: 1; transform: translate3d(-1844px, 0px, 0px);" data-swiper-slide-index="1">
                  <a href="" target="_self" class="slide-inner" style="text-decoration: none;">
                    
                      <div data-swiper-parallax="300" class="banner-img" style="transition-duration: 1000ms; transform: translate3d(300px, 0px, 0px);">
                          <img src="https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/5a/3f/202403012251435c71543e997a09109c2616e183a053e396931129.png" alt="">
                      </div>     
                      <div class="xf-banner-slide-content " data-swiper-parallax="500" style="transition-duration: 1000ms; transform: translate3d(500px, 0px, 0px);">    
                          <h3 class="xf-slide-title">출석 GO! GO! <br> 매월 진행하는 출석체크 이벤트!</h3>
                          <p class="xf-slide-content">클릭 한번이면 출석 완료!<br>잊지 마세요!</p>
                      
                      </div> 
                  </a>
              </div>
                         
              <div class="swiper-slide banner-slide-item" style="background-color: rgb(17, 34, 51); width: 922px; transition-duration: 1000ms; opacity: 1; transform: translate3d(-2766px, 0px, 0px);" data-swiper-slide-index="2">
                  <a href="" target="_self" class="slide-inner" style="text-decoration: none;">
                      <!-- <div class="banner-img "  style="background-image:url(https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/30/6b/202308011414493e2eee6bbc5916e6899848e351be7da3c28c969e.png);" >
                      </div> -->
                      <div data-swiper-parallax="300" class="banner-img" style="transition-duration: 1000ms; transform: translate3d(300px, 0px, 0px);">
                          <img src="https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/30/6b/202308011414493e2eee6bbc5916e6899848e351be7da3c28c969e.png" alt="">
                      </div>     
                      <div class="xf-banner-slide-content " data-swiper-parallax="500" style="transition-duration: 1000ms; transform: translate3d(500px, 0px, 0px);">    
                          <h3 class="xf-slide-title">매일매일<br>랜덤박스!</h3>
                          <p class="xf-slide-content">포인트가 없어도 OK!<br>매일 도전하라!</p>
                         <!--  <a  href="https://ozarena.com/product/78da5198-a652-46e5-8a80-83bbf576009f" class="xf-banner-detail-btn"  target="_self">자세히 보기</a> -->
                      </div> 
                  </a>
              </div>
                         
                         
              <div class="swiper-slide banner-slide-item swiper-slide-prev" style="background-color: rgb(0, 42, 166); width: 922px; transition-duration: 1000ms; opacity: 1; transform: translate3d(-4610px, 0px, 0px);" data-swiper-slide-index="4">
                  <a href="" target="_self" class="slide-inner" style="text-decoration: none;">
                      <!-- <div class="banner-img "  style="background-image:url(https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/15/c8/202308011038051face389864046058a165b8919a7508d20cdec37.png);" >
                      </div> -->
                      <div data-swiper-parallax="300" class="banner-img" style="transition-duration: 1000ms; transform: translate3d(300px, 0px, 0px);">
                          <img src="https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/15/c8/202308011038051face389864046058a165b8919a7508d20cdec37.png" alt="">
                      </div>     
                      <div class="xf-banner-slide-content " data-swiper-parallax="500" style="transition-duration: 1000ms; transform: translate3d(500px, 0px, 0px);">    
                          <h3 class="xf-slide-title">포인트마켓<br>GRAND OPEN!</h3>
                          <p class="xf-slide-content">다양한 상품으로!<br>포인트마켓을 만나보세요!</p>
                         <!--  <a  href="https://ozarena.com/notice/%E2%98%85-%ED%8F%AC%EC%9D%B8%EB%A7%88%EC%BC%93-GRAND-OPEN-%E2%98%85" class="xf-banner-detail-btn"  target="_self">자세히 보기</a> -->
                      </div> 
                  </a>
              </div>
                         

                         
              <div class="swiper-slide banner-slide-item swiper-slide-next" style="background-color: rgb(166, 15, 48); width: 922px; transition-duration: 1000ms; opacity: 0; transform: translate3d(-6454px, 0px, 0px);" data-swiper-slide-index="6">
                  <a href="" target="_self" class="slide-inner" style="text-decoration: none;">
                      <!-- <div class="banner-img "  style="background-image:url(https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/fc/69/20221101100949b23472306a95b22c0b899c4b7d2f93202b41fd8c.png);" >
                      </div> -->
                      <div data-swiper-parallax="300" class="banner-img" style="transition-duration: 1000ms; transform: translate3d(-300px, 0px, 0px);">
                          <img src="https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/fc/69/20221101100949b23472306a95b22c0b899c4b7d2f93202b41fd8c.png" alt="">
                      </div>     
                      <div class="xf-banner-slide-content " data-swiper-parallax="500" style="transition-duration: 1000ms; transform: translate3d(-500px, 0px, 0px);">    
                          <h3 class="xf-slide-title">신규가입을<br>환영합니다!</h3>
                          <p class="xf-slide-content">홈페이지 신규가입 시<br>먹거리, 요금제 할인권 증정!</p>
                         <!--  <a  href="https://ozarena.com/event/%EC%98%A4%EC%A6%88%EC%95%84%EB%A0%88%EB%82%98-%EA%B0%80%EC%9E%85%EC%9D%84-%ED%99%98%EC%98%81%ED%95%A9%EB%8B%88%EB%8B%A4" class="xf-banner-detail-btn"  target="_self">자세히 보기</a> -->
                      </div> 
                  </a>
              </div>
           
      <div class="swiper-slide banner-slide-item swiper-slide-duplicate" style="background-color: rgb(0, 83, 131); width: 922px; transition-duration: 1000ms; opacity: 0; transform: translate3d(-7376px, 0px, 0px);" data-swiper-slide-index="0">
                  <a href="" target="_self" class="slide-inner" style="text-decoration: none;">
                      <!-- <div class="banner-img "  style="background-image:url(https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/9d/d3/20240307185636e8920dec4672dc85fa0b582d04bb2948c60223ae.png);" >
                      </div> -->
                      <div data-swiper-parallax="300" class="banner-img" style="transition-duration: 1000ms; transform: translate3d(-300px, 0px, 0px);">
                          <img src="https://ozarena.com/storage/app/public/plugin/banner/3f55b864-beb8-46c5-800f-0dd6ce57075a/9d/d3/20240307185636e8920dec4672dc85fa0b582d04bb2948c60223ae.png" alt="">
                      </div>     
                      <div class="xf-banner-slide-content " data-swiper-parallax="500" style="transition-duration: 1000ms; transform: translate3d(-500px, 0px, 0px);">    
                          <h3 class="xf-slide-title">꿀팁!<br>스팀 PC카페 이용 방법!</h3>
                          <p class="xf-slide-content">내 스팀 계정으로 공짜로 플레이를?!
<br>
이젠 모르면 손해입니다!
<br>
구매 전에 미리 체험도 가능한 스팀 PC카페</p>
                         <!--  <a  href="https://ozarena.com/event/%EA%BF%80%ED%8C%81-%EC%98%A4%EC%A6%88-%EC%8A%A4%ED%8C%80-PC%EC%B9%B4%ED%8E%98-%EC%A6%90%EA%B8%B0%EB%8A%94-%EB%B0%A9%EB%B2%95-%EB%AA%A8%EB%A5%B4%EB%A9%B4-%EC%86%90%ED%95%B4?category_item_id=4" class="xf-banner-detail-btn"  target="_self">자세히 보기</a> -->
                      </div> 
                  </a>
              </div></div>
      
      
      
      
      <!-- 페이지네이션 -->
      <div class="xf-slide-pagination-box">
           <div class="swiper-pagination xf-main-slider-pagination xf-main-slider-pagination2 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"><i></i><b></b></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"><i></i><b></b></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"><i></i><b></b></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"><i></i><b></b></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 5"><i></i><b></b></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"><i></i><b></b></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"><i></i><b></b></span></div>
          
      </div> 
      <!-- //페이지네이션 -->
  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
  <div class="main-banner-control"> 
      <div class="main-banner-btn">
          <div class=" main-banner-next2" tabindex="0" role="button" aria-label="Next slide"><i class="fas fa-chevron-right"></i></div>
          <div class=" main-banner-prev2" tabindex="0" role="button" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></div> 
      </div>
  </div>
</section>
<script>
  $(function(){

      var swiperA = new Swiper('.main-visual-slide-banner', {
          parallax:true,
          loop: true ,
          speed: 1000,
           effect:'fade', 
           autoplay: {
              delay: 3000,//animation과 시간 맞춰줘야함
              disableOnInteraction: false,
          }, 
         
          pagination: {
              el: '.swiper-pagination.xf-main-slider-pagination2',
              type: 'fraction',
         
          },
          navigation: {
              nextEl: '.main-banner-next2',
              prevEl: '.main-banner-prev2',
          }, 


           breakpoints: {
              992: {
                  pagination: {
                      el: '.swiper-pagination.xf-main-slider-pagination2',
                      clickable: 'true',
                      type: 'bullets',
                      renderBullet: function (index, className) {
                          return '<span class="' + className + '">' +  '<i></i>' + '<b></b>'  + '</span>';
                      },
                  
                  },
              },
          } 
      });

      
      swiperA.update();


      $('.xf-pause-icon').on('click',function (e) {
          if (!$(this).hasClass('on')) {
              $(this).addClass('on');
              swiperA.autoplay.stop();
              $('.xf-main-slider-pagination .swiper-pagination-bullet-active b').css('animation-play-state','paused')


          } else {
              $(this).removeClass('on');
              swiperA.autoplay.start();
              $('.xf-main-slider-pagination .swiper-pagination-bullet-active b').css('animation-play-state','running')
          } 
      });



     $(window).on('resize', function(){
           swiperA.update();
      }); 

     
  });
</script>
<!-- //PC 버전 -->

</div></div>


  
  <section class="xf-widget-section-main-mission-list xf-widget-section-main-list" style="display: block;">

  </section>
<style>
  .xf-widget-section {
      position: relative;
      z-index: 1;
  }
</style>

<div id="__custom-tab-ozmarket" class="relative xf-widget-section mt-[32px] commerce-product-tab animated-up">
  <div class="absolute top-0 right-0 bottom-0 w-[32px] min-w-[32px] z-[3] bg-gradient-to-r from-[#fff]/[0] to-[#fff]"></div>
  <div class="flex flex-row items-center justify-content-between pb-[20px] mb-[20px] border-t-0 border-x-0 border-b-[#eee] border-b-[1px] border-solid">
      <h1 class="flex text-[24px] text-[#111] font-bold">판매 음식 상품 🍜 </h1>
                  <div class="flex">
              
          </div>
          </div>


          <style>
    /* 특정 swiper 컨테이너에만 적용 */
#mobile-swiper-container .swiper-wrapper {
  flex-wrap: nowrap;
  overflow-x: auto;
}

#mobile-swiper-container .xf-widget-tab-item {
  flex: 0 0 auto;
  margin-right: 5px;
}

#mobile-search-form .form-inline {
  flex-direction: row; /* 한 줄로 배치 */
  align-items: center; /* 아이템 수직 정렬 */
  max-width: 400px; /* 폼의 최대 너비 제한 */
  margin: 0; /* 가운데 정렬 */
}

#mobile-search-form .form-control {
  margin-bottom: 0; /* 검색창 하단 여백 제거 */
  flex: 1; /* 검색창이 버튼 제외 남은 공간을 차지 */
  max-width: none; /* 검색창 너비 제한 제거 */
  min-width: 150px; /* 최소 길이 설정 */
  font-size: 0.9rem; /* 텍스트 크기 줄임 */
}

#mobile-search-form .input-group-append button {
  width: auto; /* 버튼 크기를 내용에 맞게 */
  flex-shrink: 0; /* 버튼이 줄어들지 않도록 */
  height: 40px; /* 버튼 높이 조정 */
  font-size: 0.8rem; /* 버튼 텍스트 크기 조정 */
}
</style>

<script>
  function find_text() {
    form1.action = "{{route('order_one.index')}}";
    form1.submit();
  }
</script>

<div id="mobile-swiper-container" class="swiper mb-[25px] swiper-container-initialized swiper-container-horizontal animated-up">
  <div class="swiper-wrapper xf-widget-tab-list">
    <div class="xf-widget-tab-item swiper-slide !w-auto on swiper-slide-active" style="margin-right: 10px;">
      <a href="{{route('order_one.index')}}" class="btn btn-danger text-white">
        <span class="chip--category__text text-white">전체</span>
      </a>
    </div>

    @foreach($gubuns_list as $gubuns_row)
    <div class="xf-widget-tab-item swiper-slide !w-auto swiper-slide-next" style="margin-right: 10px;">
      <a href="{{route('order_one.index', ['gubuns_row_id' => $gubuns_row->id])}}" class="btn btn-danger text-white">
        <span class="chip--category__text text-white">{{$gubuns_row->name}}</span>
      </a>
    </div>
    @endforeach
  </div>
</div>

<form id="mobile-search-form" name="form1" action="">
  <div class="form-inline animated-up" style="margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
    <input type="text" name="text1" value="{{$text1}}" class="form-control border-0 small"
      placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"
      style="flex: 1; min-width: 200px; font-size: 0.9rem;">

    <div class="input-group-append">
      <button class="btn btn-danger" type="button" onClick="find_text();" style="min-width: 50px;">
        <i class="fas fa-search fa-sm" style="font-size: 0.8rem;"></i>
      </button>
    </div>
  </div>
</form>


 

  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>




<div class="xf-widget-section __custom-tab-ozmarket-section __custom-tab-ozmarket-section-all animated-up" style="margin-top: 32px; display: block;">
  <!-- 컨텐츠 -->
  <section class="slide_product_widget xf-widget-section-main-product-list xepage-page !xe-pb-0">
      <!-- 위젯 타이틀 -->

                  <div class="relative mt-[32px] commerce-product-slider" style="display: block;">
                  <div id="product-51eb8083-aaca-46c6-a3e7-9b9e5a1c2c65" class="swiper mb-[25px] swiper-container-initialized swiper-container-horizontal">
                  <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

                  @foreach($list as $row)
      <?php
          $iname = $row->pic ? $row->pic : "";
          $pname = $row->name;
      ?>
                             <a class="swiper-slide !no-underline swiper-slide-active" href="" style="width: 208px; margin-right: 20px;" data-toggle="modal" data-target="#exampleModal" data-name="{{ $row->name }}" data-id="{{ $row->id }}" data-price="{{ $row->price }}" >
                              <div class="flex w-full flex-col">
                                  <div class="relative flex w-full aspect-[1/1] bg-contain bg-no-repeat bg-center border-[1px] border-solid border-[#000]/[0.05] rounded-[18px] overflow-hidden" style="background-image: url('{{ asset('/storage/product_img/thumb/'.$iname) }}')">

                                      
                                                                          </div>

                                  <h1 class="mb-0 mt-[18px] text-[18px] line-clamp-1 text-[#000]">{{$row->name}}</h1>

                                                                          <div class="flex flex-row mt-[8px] gap-x-[8px] min-h-[20px] h-[20px] max-h-[20px]">
                                          <span class="flex flex-row gap-x-[4px] text-[18px] font-bold text-[#000] leading-[20px]">

                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30">
                                            <!-- 빨간색 원 -->
                                            <circle cx="15" cy="15" r="14" fill="red" />
                                            <!-- 흰색 ₩ 기호 -->
                                            <text x="50%" y="50%" font-size="15" fill="white" text-anchor="middle" alignment-baseline="middle">₩</text>
                                          </svg>

                                              <span class="flex">{{$row->price}} 원</span>
                                          </span>
      
                                      </div>
                                  
                              </div>
                          </a>
                          @endforeach
                          
                          </div>
      

                       








              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              
          </div>

          <script defer="">
              $(function () {
                  if (window.targetSwipers === undefined) {
                      window.targetSwipers = [];
                  }
                  window.targetSwipers.push(new Swiper('#product-51eb8083-aaca-46c6-a3e7-9b9e5a1c2c65', {
                      direction: 'horizontal',
                      slidesPerView: '4',
                      spaceBetween: 20,
                      cssMode: false,
                      navigation: {
                          nextEl: '.product-list-next-51eb8083-aaca-46c6-a3e7-9b9e5a1c2c65',
                          prevEl: '.product-list-prev-51eb8083-aaca-46c6-a3e7-9b9e5a1c2c65',
                      },
                      breakpoints: {
                          // when window width is >= 320px
                          320: {
                              slidesPerView: 1.5,
                              spaceBetween: 20
                          },
                          // when window width is >= 480px
                          480: {
                              slidesPerView: 1.5,
                              spaceBetween: 20
                          },
                          // when window width is >= 640px
                          720: {
                              slidesPerView: 3,
                              spaceBetween: 20
                          },
                          920: {
                              slidesPerView: 4,
                              spaceBetween: 20
                          }
                      },
                      on: {
                          init: function () {
                              $(this.$el).closest('.commerce-product-slider').css('display', 'block');
                              this.update();
                          }
                      }
                  }));

                  //


                  $('body').on('swiper-update', function () {
                      window.targetSwipers.forEach(function (swiper) {
                          swiper.update();
                      })
                  })
                  $(window).on('resize', function () {
                      window.targetSwipers.forEach(function (swiper) {
                          swiper.update();
                      })
                  })

              })
          </script>
      
      <!-- 페이지네이션 -->
      
  </section>
</div>


<style>
  .section-xepage-paging {
      display: flex;
      justify-content: center;
  }
  .xepage-paging__box.xepage-paging__box--normal {
      display: flex;
      flex-direction: row;
  }
  .xepage-paging-item {
      display: flex;
      width: 28px;
      height: 28px;
      align-items: center;
      justify-content: center;
  }
  .xf-widget-section-main-product-list {
      border-bottom: unset;
  }
  .xf-widget-section-main-product-list .swiper-button-next,
  .xf-widget-section-main-product-list .swiper-button-prev {
      margin-top: -60px;
  }
</style>



<div class="xf-widget-section __custom-tab-ozmarket-section __custom-tab-ozmarket-section-market" style="margin-top: 32px; display: none;">
  <!-- 컨텐츠 -->
  <section class="slide_product_widget xf-widget-section-main-product-list xepage-page !xe-pb-0">
      <!-- 위젯 타이틀 -->
      
                  <div class="relative mt-[32px] commerce-product-slider" style="display: block;">
              <div id="product-071cc948-abea-4a8c-b627-fbfff8aa7af7" class="swiper mb-[25px] swiper-container-initialized swiper-container-horizontal">
                  <div class="swiper-wrapper" style="transition-duration: 0ms;">
                      
                                                  <a class="swiper-slide !no-underline" href="https://ozarena.com/product/62264329-7c69-4f4c-b638-62cd552b0ead">
                              <div class="flex w-full flex-col">
                                  <div class="relative flex w-full aspect-[1/1] bg-contain bg-no-repeat bg-center border-[1px] border-solid border-[#000]/[0.05] rounded-[18px] overflow-hidden" style="background-image: url('https://ozarena.com/storage/app/public/media/public/media_library/f1/8b/202304261611142e3d0ef7fa13166e6fcfb8ec1eb7163c865f6175.jpg')">

                                      
                                                                                  <div class="absolute left-[12px] bottom-[12px]">
                                              <div class="flex items-center gap-x-[8px] bg-[#E50213] rounded-[8px] h-[26px] py-[5px] pl-[10px] pr-[5px] box-border text-[#fff]">
                                                                                                          <span class="font-bold text-[13px]">남은재고</span>
                                                      <span class="bg-[#fff] rounded-[4px] px-[5px] box-border">
                                                                                                                          <span class="font-bold py-[3px] box-border items-center text-[13px] text-[#E50213]">품절</span>
                                                                                                                  </span>
                                                                                                  </div>
                                          </div>
                                                                          </div>

                                  <h1 class="mb-0 mt-[18px] text-[18px] line-clamp-1 text-[#000]">제닉스 NEW ARENA X ZERO</h1>

                                                                          <div class="flex flex-row items-baseline mt-[8px] gap-x-[8px]">
                                          <span class="flex text-[18px] font-bold text-[#000] leading-[20px]">₩99,000</span>
                                                                                          <span class="max-md:hidden flex text-[13px] text-[#999] leading-[13px] line-through">₩200,000</span>
                                              <span class="flex text-[18px] text-[#E50213] leading-[20px] font-bold">50%</span>
                                                                                  </div>
                                  
                              </div>
                          </a>
                                                  <a class="swiper-slide !no-underline" href="https://ozarena.com/product/ffd81534-cdea-4827-a6b6-b5a71771541e">
                              <div class="flex w-full flex-col">
                                  <div class="relative flex w-full aspect-[1/1] bg-contain bg-no-repeat bg-center border-[1px] border-solid border-[#000]/[0.05] rounded-[18px] overflow-hidden" style="background-image: url('https://ozarena.com/storage/app/public/media/public/media_library/3e/ff/20230515183132ee8c5ae7f9c522be498a1e88f29f4519dd7303ad.png')">

                                      
                                                                                  <div class="absolute left-[12px] bottom-[12px]">
                                              <div class="flex items-center gap-x-[8px] bg-[#E50213] rounded-[8px] h-[26px] py-[5px] pl-[10px] pr-[5px] box-border text-[#fff]">
                                                                                                          <span class="font-bold text-[13px]">남은재고</span>
                                                      <span class="bg-[#fff] rounded-[4px] px-[5px] box-border">
                                                                                                                          <span class="font-bold py-[3px] box-border items-center text-[13px] text-[#E50213]">품절</span>
                                                                                                                  </span>
                                                                                                  </div>
                                          </div>
                                                                          </div>

                                  <h1 class="mb-0 mt-[18px] text-[18px] line-clamp-1 text-[#000]">ZOWIE CELERITAS II 게이밍 키보드</h1>

                                                                          <div class="flex flex-row items-baseline mt-[8px] gap-x-[8px]">
                                          <span class="flex text-[18px] font-bold text-[#000] leading-[20px]">₩98,000</span>
                                                                                          <span class="max-md:hidden flex text-[13px] text-[#999] leading-[13px] line-through">₩200,000</span>
                                              <span class="flex text-[18px] text-[#E50213] leading-[20px] font-bold">51%</span>
                                                                                  </div>
                                  
                              </div>
                          </a>
                                                  <a class="swiper-slide !no-underline" href="https://ozarena.com/product/5e61f163-3d65-41c9-abcb-72b979519852">
                              <div class="flex w-full flex-col">
                                  <div class="relative flex w-full aspect-[1/1] bg-contain bg-no-repeat bg-center border-[1px] border-solid border-[#000]/[0.05] rounded-[18px] overflow-hidden" style="background-image: url('https://ozarena.com/storage/app/public/media/public/media_library/48/d1/20230426160836c035ac308c7a19aaf5a6c0c6d26a244f9d3307b1.png')">

                                      
                                                                                  <div class="absolute left-[12px] bottom-[12px]">
                                              <div class="flex items-center gap-x-[8px] bg-[#E50213] rounded-[8px] h-[26px] py-[5px] pl-[10px] pr-[5px] box-border text-[#fff]">
                                                                                                          <span class="font-bold text-[13px]">남은재고</span>
                                                      <span class="bg-[#fff] rounded-[4px] px-[5px] box-border">
                                                                                                                          <span class="font-bold py-[3px] box-border items-center text-[13px] text-[#E50213]">9</span>
                                                                                                                  </span>
                                                                                                  </div>
                                          </div>
                                                                          </div>

                                  <h1 class="mb-0 mt-[18px] text-[18px] line-clamp-1 text-[#000]">CORSAIR VOID RGB PRO USB WHITE 게이밍헤드셋</h1>

                                                                          <div class="flex flex-row items-baseline mt-[8px] gap-x-[8px]">
                                          <span class="flex text-[18px] font-bold text-[#000] leading-[20px]">₩89,000</span>
                                                                                          <span class="max-md:hidden flex text-[13px] text-[#999] leading-[13px] line-through">₩150,000</span>
                                              <span class="flex text-[18px] text-[#E50213] leading-[20px] font-bold">40%</span>
                                                                                  </div>
                                  
                              </div>
                          </a>
                                          </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              <div class="swiper-button-next product-list-next-071cc948-abea-4a8c-b627-fbfff8aa7af7" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
              <div class="swiper-button-prev product-list-prev-071cc948-abea-4a8c-b627-fbfff8aa7af7" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
          </div>

          <script defer="">
              $(function () {
                  if (window.targetSwipers === undefined) {
                      window.targetSwipers = [];
                  }
                  window.targetSwipers.push(new Swiper('#product-071cc948-abea-4a8c-b627-fbfff8aa7af7', {
                      direction: 'horizontal',
                      slidesPerView: '4',
                      spaceBetween: 20,
                      cssMode: false,
                      navigation: {
                          nextEl: '.product-list-next-071cc948-abea-4a8c-b627-fbfff8aa7af7',
                          prevEl: '.product-list-prev-071cc948-abea-4a8c-b627-fbfff8aa7af7',
                      },
                      breakpoints: {
                          // when window width is >= 320px
                          320: {
                              slidesPerView: 1.5,
                              spaceBetween: 20
                          },
                          // when window width is >= 480px
                          480: {
                              slidesPerView: 1.5,
                              spaceBetween: 20
                          },
                          // when window width is >= 640px
                          720: {
                              slidesPerView: 3,
                              spaceBetween: 20
                          },
                          920: {
                              slidesPerView: 4,
                              spaceBetween: 20
                          }
                      },
                      on: {
                          init: function () {
                              $(this.$el).closest('.commerce-product-slider').css('display', 'block');
                              this.update();
                          }
                      }
                  }));

                  //


                  $('body').on('swiper-update', function () {
                      window.targetSwipers.forEach(function (swiper) {
                          swiper.update();
                      })
                  })
                  $(window).on('resize', function () {
                      window.targetSwipers.forEach(function (swiper) {
                          swiper.update();
                      })
                  })

              })
          </script>
      
      <!-- 페이지네이션 -->
      
  </section>
</div>


<style>
  .section-xepage-paging {
      display: flex;
      justify-content: center;
  }
  .xepage-paging__box.xepage-paging__box--normal {
      display: flex;
      flex-direction: row;
  }
  .xepage-paging-item {
      display: flex;
      width: 28px;
      height: 28px;
      align-items: center;
      justify-content: center;
  }
  .xf-widget-section-main-product-list {
      border-bottom: unset;
  }
  .xf-widget-section-main-product-list .swiper-button-next,
  .xf-widget-section-main-product-list .swiper-button-prev {
      margin-top: -60px;
  }
</style>



<div class="xf-widget-section __custom-tab-ozmarket-section __custom-tab-ozmarket-section-coupon" style="margin-top: 32px; display: none;">
  <!-- 컨텐츠 -->
  <section class="slide_product_widget xf-widget-section-main-product-list xepage-page !xe-pb-0">
      <!-- 위젯 타이틀 -->
      
                  <div class="relative mt-[32px] commerce-product-slider" style="display: block;">
              <div id="product-02dec11c-5968-4da8-8668-1b1c674eef90" class="swiper mb-[25px] swiper-container-initialized swiper-container-horizontal">
                  <div class="swiper-wrapper" style="transition-duration: 0ms;">
                      
                                                  <a class="swiper-slide !no-underline" href="https://ozarena.com/product/7a3aaa4e-8087-4beb-ad98-ffdc56e229c1">
                              <div class="flex w-full flex-col">
                                  <div class="relative flex w-full aspect-[1/1] bg-contain bg-no-repeat bg-center border-[1px] border-solid border-[#000]/[0.05] rounded-[18px] overflow-hidden" style="background-image: url('https://ozarena.com/storage/app/public/media/public/media_library/d0/b3/2023080111091892e911bffd0c4a633cfb4e64fd31829437747cdb.png')">

                                      
                                                                          </div>

                                  <h1 class="mb-0 mt-[18px] text-[18px] line-clamp-1 text-[#000]">떴다떴어! 먹거리 1000원 할인쿠폰!</h1>

                                                                          <div class="flex flex-row mt-[8px] gap-x-[8px] min-h-[20px] h-[20px] max-h-[20px]">
                                          <span class="flex flex-row gap-x-[4px] text-[18px] font-bold text-[#000] leading-[20px]">
                                              <span class="relative flex justify-center items-center w-[20px] h-[20px] max-w-[20px] max-h-[20px] items-bottom rounded-full bg-[#E50213]">
                                                  <svg class="relative flex left-[1px]" xmlns="http://www.w3.org/2000/svg" width="8" height="10" fill="none"><path fill="#fff" d="M0 9.73V0h3.817c2.21 0 3.48 1.364 3.48 3.28 0 1.941-1.29 3.278-3.534 3.278H2.016V9.73H0Zm2.016-4.798H3.44c1.197 0 1.781-.672 1.774-1.653.007-.967-.577-1.62-1.774-1.626H2.016v3.28Z"></path></svg>
                                              </span>
                                              <span class="flex">800P</span>
                                          </span>
                                          <span class="flex flex-row items-baseline gap-x-[8px]">
                                                                                          <span class="max-md:hidden flex text-[13px] text-[#999] leading-[14px] line-through">1,000P</span>
                                              <span class="flex text-[18px] text-[#E50213] leading-[20px] font-bold">20%</span>
                                                                                      </span>
                                      </div>
                                  
                              </div>
                          </a>
                                                  <a class="swiper-slide !no-underline" href="https://ozarena.com/product/5f55286b-0256-4d47-ae26-7ee61720582f">
                              <div class="flex w-full flex-col">
                                  <div class="relative flex w-full aspect-[1/1] bg-contain bg-no-repeat bg-center border-[1px] border-solid border-[#000]/[0.05] rounded-[18px] overflow-hidden" style="background-image: url('https://ozarena.com/storage/app/public/media/public/media_library/c0/e5/20230801110403f088ba77a2be14823283643a471ffcfde17c5b70.png')">

                                      
                                                                          </div>

                                  <h1 class="mb-0 mt-[18px] text-[18px] line-clamp-1 text-[#000]">떴다떴어! 1시간 추가증정 쿠폰!</h1>

                                                                          <div class="flex flex-row mt-[8px] gap-x-[8px] min-h-[20px] h-[20px] max-h-[20px]">
                                          <span class="flex flex-row gap-x-[4px] text-[18px] font-bold text-[#000] leading-[20px]">
                                              <span class="relative flex justify-center items-center w-[20px] h-[20px] max-w-[20px] max-h-[20px] items-bottom rounded-full bg-[#E50213]">
                                                  <svg class="relative flex left-[1px]" xmlns="http://www.w3.org/2000/svg" width="8" height="10" fill="none"><path fill="#fff" d="M0 9.73V0h3.817c2.21 0 3.48 1.364 3.48 3.28 0 1.941-1.29 3.278-3.534 3.278H2.016V9.73H0Zm2.016-4.798H3.44c1.197 0 1.781-.672 1.774-1.653.007-.967-.577-1.62-1.774-1.626H2.016v3.28Z"></path></svg>
                                              </span>
                                              <span class="flex">1,000P</span>
                                          </span>
                                          <span class="flex flex-row items-baseline gap-x-[8px]">
                                                                                      </span>
                                      </div>
                                  
                              </div>
                          </a>
                                          </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              <div class="swiper-button-next product-list-next-02dec11c-5968-4da8-8668-1b1c674eef90" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
              <div class="swiper-button-prev product-list-prev-02dec11c-5968-4da8-8668-1b1c674eef90" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
          </div>

          <script defer="">
              $(function () {
                  if (window.targetSwipers === undefined) {
                      window.targetSwipers = [];
                  }
                  window.targetSwipers.push(new Swiper('#product-02dec11c-5968-4da8-8668-1b1c674eef90', {
                      direction: 'horizontal',
                      slidesPerView: '4',
                      spaceBetween: 20,
                      cssMode: false,
                      navigation: {
                          nextEl: '.product-list-next-02dec11c-5968-4da8-8668-1b1c674eef90',
                          prevEl: '.product-list-prev-02dec11c-5968-4da8-8668-1b1c674eef90',
                      },
                      breakpoints: {
                          // when window width is >= 320px
                          320: {
                              slidesPerView: 1.5,
                              spaceBetween: 20
                          },
                          // when window width is >= 480px
                          480: {
                              slidesPerView: 1.5,
                              spaceBetween: 20
                          },
                          // when window width is >= 640px
                          720: {
                              slidesPerView: 3,
                              spaceBetween: 20
                          },
                          920: {
                              slidesPerView: 4,
                              spaceBetween: 20
                          }
                      },
                      on: {
                          init: function () {
                              $(this.$el).closest('.commerce-product-slider').css('display', 'block');
                              this.update();
                          }
                      }
                  }));

                  //


                  $('body').on('swiper-update', function () {
                      window.targetSwipers.forEach(function (swiper) {
                          swiper.update();
                      })
                  })
                  $(window).on('resize', function () {
                      window.targetSwipers.forEach(function (swiper) {
                          swiper.update();
                      })
                  })

              })
          </script>
      
      <!-- 페이지네이션 -->
      
  </section>
</div>


<style>
  .section-xepage-paging {
      display: flex;
      justify-content: center;
  }
  .xepage-paging__box.xepage-paging__box--normal {
      display: flex;
      flex-direction: row;
  }
  .xepage-paging-item {
      display: flex;
      width: 28px;
      height: 28px;
      align-items: center;
      justify-content: center;
  }
  .xf-widget-section-main-product-list {
      border-bottom: unset;
  }
  .xf-widget-section-main-product-list .swiper-button-next,
  .xf-widget-section-main-product-list .swiper-button-prev {
      margin-top: -60px;
  }
</style>



<div class="xf-widget-section __custom-tab-ozmarket-section __custom-tab-ozmarket-section-box" style="margin-top: 32px; display: none;">
  <!-- 컨텐츠 -->
  <section class="slide_product_widget xf-widget-section-main-product-list xepage-page !xe-pb-0">
      <!-- 위젯 타이틀 -->
      
                  <div class="relative mt-[32px] commerce-product-slider" style="display: block;">
              <div id="product-d0c9160c-2f23-4a98-b8a6-fb76b642f30e" class="swiper mb-[25px] swiper-container-initialized swiper-container-horizontal">
                  <div class="swiper-wrapper" style="transition-duration: 0ms;">
                      
                                                  <a class="swiper-slide !no-underline" href="https://ozarena.com/product/84244d38-f035-44ad-b4d1-49a385715c65">
                              <div class="flex w-full flex-col">
                                  <div class="relative flex w-full aspect-[1/1] bg-contain bg-no-repeat bg-center border-[1px] border-solid border-[#000]/[0.05] rounded-[18px] overflow-hidden" style="background-image: url('https://ozarena.com/storage/app/public/media/public/media_library/65/b5/20230801114423ea0edf1ebdbaecce7e51845899531c5e7077f357.png')">

                                      
                                                                          </div>

                                  <h1 class="mb-0 mt-[18px] text-[18px] line-clamp-1 text-[#000]">포인트가 쿠폰으로! MAGIC BOX</h1>

                                                                          <div class="flex flex-row mt-[8px] gap-x-[8px] min-h-[20px] h-[20px] max-h-[20px]">
                                          <span class="flex flex-row gap-x-[4px] text-[18px] font-bold text-[#000] leading-[20px]">
                                              <span class="relative flex justify-center items-center w-[20px] h-[20px] max-w-[20px] max-h-[20px] items-bottom rounded-full bg-[#E50213]">
                                                  <svg class="relative flex left-[1px]" xmlns="http://www.w3.org/2000/svg" width="8" height="10" fill="none"><path fill="#fff" d="M0 9.73V0h3.817c2.21 0 3.48 1.364 3.48 3.28 0 1.941-1.29 3.278-3.534 3.278H2.016V9.73H0Zm2.016-4.798H3.44c1.197 0 1.781-.672 1.774-1.653.007-.967-.577-1.62-1.774-1.626H2.016v3.28Z"></path></svg>
                                              </span>
                                              <span class="flex">400P</span>
                                          </span>
                                          <span class="flex flex-row items-baseline gap-x-[8px]">
                                                                                          <span class="max-md:hidden flex text-[13px] text-[#999] leading-[14px] line-through">500P</span>
                                              <span class="flex text-[18px] text-[#E50213] leading-[20px] font-bold">20%</span>
                                                                                      </span>
                                      </div>
                                  
                              </div>
                          </a>
                                                  <a class="swiper-slide !no-underline" href="https://ozarena.com/product/78da5198-a652-46e5-8a80-83bbf576009f">
                              <div class="flex w-full flex-col">
                                  <div class="relative flex w-full aspect-[1/1] bg-contain bg-no-repeat bg-center border-[1px] border-solid border-[#000]/[0.05] rounded-[18px] overflow-hidden" style="background-image: url('https://ozarena.com/storage/app/public/media/public/media_library/8c/d3/20230801111442bb2634eba2b89a5bfc6c055e92f0d3cc43cbb691.png')">

                                      
                                                                          </div>

                                  <h1 class="mb-0 mt-[18px] text-[18px] line-clamp-1 text-[#000]">매일매일 도전하라! 초저가 랜덤박스!</h1>

                                                                          <div class="flex flex-row mt-[8px] gap-x-[8px] min-h-[20px] h-[20px] max-h-[20px]">
                                          <span class="flex flex-row gap-x-[4px] text-[18px] font-bold text-[#000] leading-[20px]">
                                              <span class="relative flex justify-center items-center w-[20px] h-[20px] max-w-[20px] max-h-[20px] items-bottom rounded-full bg-[#E50213]">
                                                  <svg class="relative flex left-[1px]" xmlns="http://www.w3.org/2000/svg" width="8" height="10" fill="none"><path fill="#fff" d="M0 9.73V0h3.817c2.21 0 3.48 1.364 3.48 3.28 0 1.941-1.29 3.278-3.534 3.278H2.016V9.73H0Zm2.016-4.798H3.44c1.197 0 1.781-.672 1.774-1.653.007-.967-.577-1.62-1.774-1.626H2.016v3.28Z"></path></svg>
                                              </span>
                                              <span class="flex">10P</span>
                                          </span>
                                          <span class="flex flex-row items-baseline gap-x-[8px]">
                                                                                      </span>
                                      </div>
                                  
                              </div>
                          </a>
                                          </div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              <div class="swiper-button-next product-list-next-d0c9160c-2f23-4a98-b8a6-fb76b642f30e" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
              <div class="swiper-button-prev product-list-prev-d0c9160c-2f23-4a98-b8a6-fb76b642f30e" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
          </div>

          <script defer="">
              $(function () {
                  if (window.targetSwipers === undefined) {
                      window.targetSwipers = [];
                  }
                  window.targetSwipers.push(new Swiper('#product-d0c9160c-2f23-4a98-b8a6-fb76b642f30e', {
                      direction: 'horizontal',
                      slidesPerView: '4',
                      spaceBetween: 20,
                      cssMode: false,
                      navigation: {
                          nextEl: '.product-list-next-d0c9160c-2f23-4a98-b8a6-fb76b642f30e',
                          prevEl: '.product-list-prev-d0c9160c-2f23-4a98-b8a6-fb76b642f30e',
                      },
                      breakpoints: {
                          // when window width is >= 320px
                          320: {
                              slidesPerView: 1.5,
                              spaceBetween: 20
                          },
                          // when window width is >= 480px
                          480: {
                              slidesPerView: 1.5,
                              spaceBetween: 20
                          },
                          // when window width is >= 640px
                          720: {
                              slidesPerView: 3,
                              spaceBetween: 20
                          },
                          920: {
                              slidesPerView: 4,
                              spaceBetween: 20
                          }
                      },
                      on: {
                          init: function () {
                              $(this.$el).closest('.commerce-product-slider').css('display', 'block');
                              this.update();
                          }
                      }
                  }));

                  //


                  $('body').on('swiper-update', function () {
                      window.targetSwipers.forEach(function (swiper) {
                          swiper.update();
                      })
                  })
                  $(window).on('resize', function () {
                      window.targetSwipers.forEach(function (swiper) {
                          swiper.update();
                      })
                  })

              })
          </script>
      
      <!-- 페이지네이션 -->
      
  </section>
</div>


<style>
  .section-xepage-paging {
      display: flex;
      justify-content: center;
  }
  .xepage-paging__box.xepage-paging__box--normal {
      display: flex;
      flex-direction: row;
  }
  .xepage-paging-item {
      display: flex;
      width: 28px;
      height: 28px;
      align-items: center;
      justify-content: center;
  }
  .xf-widget-section-main-product-list {
      border-bottom: unset;
  }
  .xf-widget-section-main-product-list .swiper-button-next,
  .xf-widget-section-main-product-list .swiper-button-prev {
      margin-top: -60px;
  }
</style>



</div></div><div class="xe-row"><div class="xe-col-md-12"><!-- PC 버전 -->
<div class="widget-section-horizontal-banner xf-pc-display-block">
  <div class="widget-section-horizontal-banner-bg" style="background-color:#ffd800;"></div>


</div>
<!-- // PC 버전 -->

<!-- 모바일 버전 -->

<!-- // 모바일 버전 -->



<!-- <section class="widget-section-horizontal-banner-mobile base-pc-display-none">
          <a href="https://ozarena.com/event/%EC%98%A4%EC%A6%88%EC%95%84%EB%A0%88%EB%82%98-%EA%B0%80%EC%9E%85%EC%9D%84-%ED%99%98%EC%98%81%ED%95%A9%EB%8B%88%EB%8B%A4?category_item_id=4" target="_self" class="xf-horizontal-banner">
          <img src="https://ozarena.com/storage/app/public/plugin/banner/b8e12716-bba7-4cae-9deb-3a72b42df9c7/84/13/202210271040140cd75af2f2e9666506fe58910b1a143fea6dfcd2.png" alt="오즈아레나 신규가입 할인권 지급 이벤트" class="xf-horizontal-banner-img">
      </a>
  </section>
-->
</div>

  
     





<script>
$(function(){
  $('.xf-game-tab-list li').click(function(){
      var tab_id = $(this).attr('data-tab');

      $('.xf-game-tab-list li').removeClass('on');
      $('.xf-game-tab-content').removeClass('on');

      $(this).addClass('on');
      $("#"+tab_id).addClass('on');
  });
});
</script>
</div></div>




<!-- PC 버전 -->
<!-- <div class="widget-section-customer-center xf-pc-display-block base-mt50 base-m-mt40 base-pt50">
  <div class="widget-section-customer-center-inner"></div>
  <div class="xf-section-line"></div>
  <p class="base-mb24 base-m-mb24 base-p xf-text">매장 이용중 궁금하거나 불편사항이 있으신가요</p>
  <div class="xf-branch-search-button-box xf-primary-btn-box">
      
      <a href="https://ozarena.com/customer_voice_board/create" class="base-a xf-branch-search-button xf-primary-btn base-primary-bg-color base-text-color-white">고객의 소리 접수하기</a>
  </div>
</div> -->
<!-- // PC 버전 -->
</div></div>
      </div>
          </div>




</div>

      </div>
  </main>

  <footer class="footer-layout">
      <!-- PC 버전 -->
<div class="section-footer-pc" style="display:none">
  <div class="section-footer-inner">
      <div class="xf-company-info-link-box base-mb18">
                          <ul class="xf-company-info-link-list base-list">
                                          <li class="xf-company-info-link-item">
                          <a href="/about-corp" target="_blank" class="xf-company-info-link base-a">회사소개</a>
                      </li>
                                                              <li class="xf-company-info-link-item">
                          <a href="/employment" target="_blank" class="xf-company-info-link base-a">채용</a>
                      </li>
                                                              <li class="xf-company-info-link-item">
                          <a href="/use-info" target="_blank" class="xf-company-info-link base-a">이용안내</a>
                      </li>
                                                              <li class="xf-company-info-link-item">
                          <a href="/terms" target="_blank" class="xf-company-info-link base-a">개인정보처리방침</a>
                      </li>
                                                              <li class="xf-company-info-link-item">
                          <a href="/terms" target="_blank" class="xf-company-info-link base-a">운영정책</a>
                      </li>
                                  </ul>
                                      <ul class="xf-company-sns-list base-list">
                                          <li class="xf-company-sns-item">
                          <a href="https://www.youtube.com/channel/UChFMCIlMODqN4XTcURWySsw" class="xf-company-sns-item-youtube xf-company-sns-item-link" target="_blank">
                              <span class="blind">유튜브</span>
                          </a>
                      </li>
                                                              <li class="xf-company-sns-item">
                          <a href="https://www.facebook.com/ozpcbang/" class="xf-company-sns-item-facebook xf-company-sns-item-link" target="_blank">
                              <span class="blind">페이스북</span>
                          </a>
                      </li>
                                                              <li class="xf-company-sns-item">
                          <a href="https://www.instagram.com/ozpccafe/" class="xf-company-sns-item-instagram xf-company-sns-item-link" target="_blank">
                              <span class="blind">인스타그램</span>
                          </a>
                      </li>
                                  </ul>
                  </div>
      <div class="xf-company-info-box base-mb20">
                          <ul class="xf-company-info-list clearfix base-list">
                                          <li class="xf-company-info-item">주식회사 PHP_Framework</li>
                                                              <li class="xf-company-info-item">대표: 김승현</li>
                                                              <li class="xf-company-info-item">주소: 인덕대학교</li>
                                                              <li class="xf-company-info-item">고객센터: 1234-1234</li>
                                                              <li class="xf-company-info-item">이메일: email@naver.com</li>
                                                              <li class="xf-company-info-item">사업자등록번호: 123-12-12345</li>
                                                                                                                  </ul>
          
              <div class="xf-apps-list-container base-m-mt20">
                  <ul class="base-list xf-apps-list">
                                                  
                          <li class="xf-apps-item">
                              <a href="https://play.google.com/store/apps/details?id=io.xehub.ozpccafe" class="base-a xf-apps-item__link" target="_blank">
                                  <img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets//img/app-google-icon.png" class="xf-apps-item__img" alt="구글앱 다운로드 아이콘">
                              </a>
                          </li>
                                                                          <li class="xf-apps-item">
                              <a href="https://apps.apple.com/kr/app/oz-arena/id1536860495" class="base-a xf-apps-item__link" target="_blank">
                                  <img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets//img/app-apple-icon.png" class="xf-apps-item__img" alt="애플앱 다운로드 아이콘">
                              </a>
                          </li>
                                          </ul>
              </div>
      </div>

                  <div class="xf-copyright-box">
                                                  <span class="xf-copyright-text">Copyright © OZARENA Co. All Rights Reserved.</span>
                          </div>
      
                  <div class="footer-info__family-site-box base-mt27">
              <div class="xu-form-group footer-info__family-site">
                  <div class="xu-form-group__box xu-form-group__box--icon-right">
                      <select class="xu-form-group__control" title="패밀리 사이트" onchange="window.open(this.value);">
                          <option disabled="disabled" selected="selected">패밀리 사이트</option>
                                                          <option value=" https://battlica.com/">배틀리카</option>
                                                  </select>
                      <span class="xu-form-group__icon">
                          <i class="xi-angle-down-min"></i>
                      </span>
                  </div>
              </div>
          </div>
          </div>
</div>
<!-- //PC 버전 -->



<!-- 모바일 버전 -->
<div class="section-footer-mobile">
  <!-- <div class="section-go-top-btn-box">
      <a class="xf-go-top-btn __go-top-link base-a" href="#">
          <span class="xf-go-top-btn-text base-m-mr08">TOP</span>
          <img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/img/angle-up.svg" class="xf-go-top-btn-img" alt="위로 가기 버튼">
      </a>
  </div> -->
  
  <div class="section-footer-inner">
      <div class="section-footer-content">
          <div class="xf-apps-list-container ">
              <ul class="base-list xf-apps-list">
                                          
                      <li class="xf-apps-item">
                          <a href="" class="base-a xf-apps-item__link" target="_blank">
                              <img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets//img/app-google-icon.png" class="xf-apps-item__img" alt="구글앱 다운로드 아이콘">
                          </a>
                      </li>
                                                              <li class="xf-apps-item">
                          <a href="" class="base-a xf-apps-item__link" target="_blank">
                              <img src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets//img/app-apple-icon.png" class="xf-apps-item__img" alt="애플앱 다운로드 아이콘">
                          </a>
                      </li>
                                  </ul>
          </div>
          <div class="xf-company-info-box ">
                                  <ul class="xf-company-info-list clearfix base-list">
                                    <li class="xf-company-info-item">주식회사 PHP_Framework</li>
                                    <li class="xf-company-info-item">대표: 김승현</li>
                                    <li class="xf-company-info-item">주소: 인덕대학교</li>
                                    <li class="xf-company-info-item">고객센터: 1234-1234</li>
                                    <li class="xf-company-info-item">이메일: email@naver.com</li>
                                    <li class="xf-company-info-item">사업자등록번호: 123-12-12345</li>
                                                                                                                                          </ul>
                          </div>

                          <div class="xf-copyright-box">
              <!--  <img class="xf-copyright-logo-img base-m-mb04" src=""
                      alt="오즈아레나 푸터 로고"> -->
                  
              </div>
          
          <div class="xf-company-info-link-box ">

              <ul class="xf-company-info-link-list base-list">
                  <li class="xf-company-info-link-item">
                      <a href="" target="_self" class="xf-company-info-link base-a">회사소개</a>
                  </li>
                  <li class="xf-company-info-link-item">
                      <a href="" target="_self" class="xf-company-info-link base-a">채용</a>
                  </li>
                  <li class="xf-company-info-link-item">
                      <a href="" target="_self" class="xf-company-info-link base-a">이용안내</a>
                  </li>
                  <li class="xf-company-info-link-item">
                      <a href="" target="_self" class="xf-company-info-link base-a">개인정보처리방침</a>
                  </li>
                  <li class="xf-company-info-link-item">
                      <a href="" target="_self" class="xf-company-info-link base-a">운영정책</a>
                  </li>
                  <li class="xf-company-info-link-item">
                      <a href="" target="_self" class="xf-company-info-link base-a">사업제휴문의</a>
                  </li>
              </ul>

                          </div>

          <div class="footer-btn-wrap">
              
                          </div>
      </div>
  </div>
</div>
<!-- //모바일 버전 -->
  </footer>

  <!-- 스크롤 탑 버튼 -->

      <div class="xf-scroll-top">
          <div class="xf-scroll-top-icon"></div>
      </div>

   

  <!-- 모바일 하단 메뉴 -->
  <div id="__mobileFooter" class="xf-bottom--menu">
      <ul class="xf-bottom--menu-box">

          <li class="xf-bottom-menu-list">
            
             @if(!session("name"))
              <a class="xf-bottom-menu-link menu-link1  " href="{{route('login_one.index')}}">
                  <div class="xf-bottom-menu-icon">
                      <span class="icon-img"></span>
                  </div>
                  <span class="xf-bottom-menu-text">로그인</span>
                  
              </a>
            @else
              <form id="logout-form" action="{{ route('login_one.logout') }}" method="POST" style="display: none;">
                     @csrf
                     
              </form>
                   
              <a class="xf-bottom-menu-link menu-link1  " href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">   
                  <div class="xf-bottom-menu-icon">
                      <span class="icon-img"></span>
                  </div>
                  <span class="xf-bottom-menu-text">로그아웃</span>
                  
              </a>
            @endif
          </li>
    
      
         

      </ul>

      
      <div class="xf-quick-my-page-area">
          <div class="quick-my-inner">
              <div class="quick-my-content">
                  <div class="quick-my-user">
                                                  <!-- 비로그인 -->
                          <div class="xf-quick-my-info-login-box">
                              <div class="xf-quick-my-info-login-inner">
                                  <a href="https://ozarena.com/auth/login" class="xf-header-info-login__link base-a">
                                  
                                      <p class="xf-header-info-login-text">
                                          PC방 최초의 멤버십 서비스 <br>
                                          <span class="login-text-point xf-text-underline">로그인</span>후 이용하세요!
                                      </p>
                                  </a>
                              </div>
                              <div class="qr-code-item" style="display:none;">
                                  <a href="javscript:;" class="qr-code-btn"></a>
                              </div>
                          </div>
                          <!-- // 비로그인 -->
                                          </div>

                  
                   

                  </div>
              </div>

          </div>

          <div class="my-page-banner">

          </div>
      </div>

  </div>


  <script>
      $(function() {
          $('.quick-my-menu-btn').on('click',function(){


              if (!$(this).hasClass('open')) {
                  $(this).addClass('open');
                  $('.xf-bottom--menu').addClass('active');
                  $('.xf-quick-my-page-area').addClass('active');
              }else {
                  $('.xf-quick-my-page-area').removeClass('active');
                  $(this).removeClass('open');
                  $('.xf-bottom--menu').removeClass('active');
              }

          });
      });
  </script>



</div>







<script>
      $(function() {
   /* 스크롤 top 버튼 */
   $('.xf-scroll-top').on('click',function(){
          $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
          return false;
      });

      var lastScrollTop = 0;
      var scroll_btn = $('.xf-scroll-top');

      btnScroll();

      $(window).on('scroll', function(e) {
          btnScroll();
      });

      function btnScroll() {
          st = $(this).scrollTop();
          lastScrollTop = st;

          if (st === 0) {
              scroll_btn.fadeOut();

          }else{
              $(scroll_btn).fadeIn();
          }
      }
  });
  </script>

<style>
  body, xe-content, .xe-content, .xe_content, .cke_editable {
      font-family: 'Noto Sans KR', sans-serif !important;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: auto;
  }
</style>


<!-- JS at body.append -->
<script src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/js/jquery.js?1697959374"></script>
<script src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/lib/touchflow/jquery.touchFlow.js?1697959374"></script>
<script src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/lib/swiper/js/swiper.min.js?1697959374"></script>
<script src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/lib/bootstrap/bootstrap.bundle.min.js?1697959374"></script>
<script src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/js/jquery.scrollbar.min.js?1697959374"></script>
<script src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/js/gnb.js?1697959374"></script>
<script src="https://ozarena.com/plugins/xehub_custom_develop/views/Themes/OzArenaTheme/assets/js/script.js?1697959374"></script>


<!-- CUSTOM TAGS -->
<!-- ga:tracking -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-184860101-1', 'auto');
ga('send', 'pageview');
</script>

<!-- widgetbox.preview -->

<script>
function previewWidgetBox(id, html) {
  $('#widgetbox-'+id).find('.widgetbox-content').html(html);
}
</script>






</body></html>

<style>
  .modal-content {
    border-radius: 20px; /* 모달 내용의 모서리 둥글게 */
  }

  .modal-dialog {
    border-radius: 20px; /* 모달 다이얼로그의 모서리 둥글게 */
  }
  .modal-header {
    border-top-left-radius: 15px; /* 윗왼쪽 모서리 둥글게 */
    border-top-right-radius: 15px; /* 윗오른쪽 모서리 둥글게 */
  }
</style>
<!-- 모달 -->

<div class="modal animated-up" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #e74a3b;">
        <h3 class="modal-title" style="color: white; font-weight: bold;"></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="form_order" id="form_order" method="post" action="{{route('order_one.store')}}">
          @csrf
          <input type="hidden" name="member_id" value="{{ session('id') }}">
          <input type="hidden" name="product_id" id="product_id">

          <div class="form-group">
            <h5><label for="recipient-name" class="col-form-label"><font color="red">*</font>수량</label></h5>
            <input type="text" class="form-control" name="count" id="count" min="1">
            <span id="count_error" style="color: red;"></span>
          </div>
          <div class="form-group">
            <h5><label for="message-text" class="col-form-label"><font color="red">*</font>요청사항</label></h5>
            <input type="text" class="form-control" name="coment" id="coment">
            <span id="coment_error" style="color: red;"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
        <button type="button" id="submitOrder" class="btn btn-success">주문</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // 클릭된 상품의 요소를 가져옴
    var name = button.data('name');
    var id = button.data('id');
    var price = button.data('price');

    // 모달의 제목과 입력 필드를 업데이트
    $(this).find('.modal-title').text(name);
    $(this).find('input[name="product_id"]').val(id);
    $(this).find('#count').val(1); // 기본 수량 설정
    $(this).find('#coment').val(''); // 기본 요청사항 비우기
    

    // 다른 필드나 요소 업데이트가 필요하면 추가로 설정

});


    document.getElementById('submitOrder').addEventListener('click', function () {
        const count = document.getElementById('count').value.trim();
        const errorSpan1 = document.getElementById('count_error');

        const coment = document.getElementById('coment').value.trim();
        const errorSpan2 = document.getElementById('coment_error');

        // 수량 유효성 검사
        if ((parseInt(count) < 1 || isNaN(count)) || coment.length > 30) {
          alert("수량은 1개 이상 요청사항은 30자 이내로 다시 입력해 주세요.");
          return; // 폼 제출 중단
        }

        document.getElementById('form_order').submit();
      });

      document.getElementById("submitOrder").addEventListener("click", function() {
        // 주문 처리 로직 (여기서는 팝업 메시지 띄우기)
        alert("주문이 완료되었습니다.");});
</script>

