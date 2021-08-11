<!DOCTYPE html>
<html lang="en" id="detail_html">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title>GO CAMP</title>

  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/APIcamp/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/APIcamp/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/APIcamp/img/favicon.ico">

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">

  <!-- Main Style Link -->
  <link rel="stylesheet" href="/APIcamp/css/style.css">

  <!-- Animation Style Link -->
  <link rel="stylesheet" href="/APIcamp/css/animation.css">
</head>
<body id="detail_page">
  <div class="wrap">

    <!-- Header include -->
    <?php
      include $_SERVER ["DOCUMENT_ROOT"].'/APIcamp/include/header.php';
    ?>

    <div class="details">
      <div class="detail_bg">
        <img src="img/ex.jpg" alt="">
        <span class="radi_bar"></span>
      </div>
      <div class="detail_contents">
        <div class="detail_wrap">
          <h2 class="detail_tit">캠핑장 이름</h2>
          <span class="line"></span>
          <div class="detail_info">
            <p>
              <span class="info_ico"><i class="fa fa-map-marker"></i></span>
              <span class="info_txt">서울시 서초구 양재로 80번길 아트빌 5동</span>
            </p>
            <p>
              <span class="info_ico"><i class="fa fa-dog"></i></span>
              <span class="info_txt">서울시 서초구 양재로 80번길 아트빌 5동</span>
            </p>
            <p>
              <span class="info_ico"><i class="fa fa-cutlery"></i></span>
              <span class="info_txt">서울시 서초구 양재로 80번길 아트빌 5동</span>
            </p>
            <p>
              <span class="info_ico"><i class="fa fa-clock"></i></span>
              <span class="info_txt">서울시 서초구 양재로 80번길 아트빌 5동</span>
            </p>
          </div>
          <span class="line"></span>
          <h2 class="detail_tit">캠핑장 소개</h2>
          <span class="line"></span>
          <div class="info_desc">
            헌법재판소 재판관의 임기는 6년으로 하며, 법률이 정하는 바에 의하여 연임할 수 있다. 국민경제자문회의의 조직·직무범위 기타 필요한 사항은 법률로 정한다.한 회계연도를 넘어 계속하여 지출할 필요가 있을 때에는 정부는 연한을 정하여 계속비로서 국회의 의결을 얻어야 한다. 모든 국민은 자기의 행위가 아닌 친족의 행위로 인하여 불이익한 처우를 받지 아니한다.
          </div>
          <span class="line"></span>
          <h2 class="detail_tit">위치 지도</h2>
          <div class="detail_map"></div>
        </div>
      </div>
    </div>
    <!-- end of details -->

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/APIcamp/js/main.js"></script>
  <script src="/APIcamp/js/detail_position.js"></script>
  <script>
    window.addEventListener('scroll', function(){
      const header = document.querySelector('header');
      if(window.pageYOffset > 0){
        header.classList.add('sticky');
      } else {
        header.classList.remove('sticky');
      }
    });
  </script>
</body>
</html>