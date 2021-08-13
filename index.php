<!DOCTYPE html>
<html lang="en">
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

  <!-- Main Style Link -->
  <link rel="stylesheet" href="/APIcamp/css/style.css">

  <!-- Animation Style Link -->
  <link rel="stylesheet" href="/APIcamp/css/animation.css">
</head>
<body>
  <div class="wrap">
    <!-- Main Background Image -->
    <img src="/APIcamp/img/gocamp_bg.png" alt="" class="bg">

    <!-- Header include -->
    <?php
      include $_SERVER ["DOCUMENT_ROOT"].'/APIcamp/include/header.php';
    ?>
    <!-- Search and Select Bar -->
    <div class="contents_bar">
      <div class="center">
        <div class="search_bar">
          <input type="text" placeholder="검색할 키워드를 입력해 주세요.">
          <button><img src="/APIcamp/img/gocamp_icon.png" alt=""></button>
        </div>
        <div class="drop_bar">
          <div class="dropdown">
            <div class="select">
              <span>내 주변 캠핑장 검색</span>
              <i class="fa fa-chevron-down"></i>
            </div>
            <ul class="dropdown_menu">
              <li><a href="/APIcamp/search_position.php?radi=10000">반경 10km 검색</a></li>
              <li><a href="/APIcamp/search_position.php?radi=20000">반경 20km 검색</a></li>
              <li><a href="/APIcamp/search_position.php?radi=30000">반경 30km 검색</a></li>
              <li><a href="/APIcamp/search_position.php?radi=40000">반경 40km 검색</a></li>
              <li><a href="/APIcamp/search_position.php?radi=50000">반경 50km 검색</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php
    $cookie_name = "start";
    $cookie_value = "started";
    setcookie($cookie_name, $cookie_value, time() + 30, "/"); //setcookie (쿠키명, 쿠키값, 만료시간, 경로, 도메인, 보안, httponly);
  ?>
  <div id="landing" class="<?php if(!isset($_COOKIE[$cookie_name])){echo "start";} else {echo "started";} ?>">
    <div class="landing_logo">
      <img src="/APIcamp/img/gocamp_logo.png" alt="">
    </div>
    <h2>GO CAMP BE FREE</h2>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/APIcamp/js/main.js"></script>
  <!-- <script src="/APIcamp/js/current_position.js"></script> -->
  <script>
    //검색기능 세팅
    const keyBtn = document.querySelector('.search_bar button');
    keyBtn.addEventListener('click',function(){
      const key_val = document.querySelector('.search_bar input').value;
      location.href=`/APIcamp/key_position.php?key_val=${key_val}`; //검색값을 주소창 값(key_val)으로 넘긴다
    });

    //javascript로 쿠키 생성하는 코드
    // function setCookie(value, min){
    //   const exdate = new Date(); //현재 날짜 객체 호출 (식별자 함수)
    //   exdate.setMinutes(exdate.getMinutes() + 3); //날짜 정보 중 분 정보만 추출
    //   const cookie_value = escape(value) + ((min == null) ? '' : '; expires=' + exdate.toUTCString());
    //   document.cookie = cookie_value;
    // }
    // window.onload = function(){

    // }->윈도우 로드 시 실행하는 함수

    // setCookie('start',1);
  </script>
</body>
</html>