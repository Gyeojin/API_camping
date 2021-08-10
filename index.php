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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/APIcamp/js/main.js"></script>
  <!-- <script src="/APIcamp/js/current_position.js"></script> -->
</body>
</html>