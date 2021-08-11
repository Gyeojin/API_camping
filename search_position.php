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

  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="/APIcamp/css/owl.carousel.css">

  <!-- Main Style Link -->
  <link rel="stylesheet" href="/APIcamp/css/style.css">

  <!-- Animation Style Link -->
  <link rel="stylesheet" href="/APIcamp/css/animation.css">
</head>
<body>
  <div class="wrap">
    <!-- Main Background Image -->
    <!-- <img src="/APIcamp/img/gocamp_bg.png" alt="" class="bg"> -->

    <!-- Header include -->
    <?php
      include $_SERVER ["DOCUMENT_ROOT"].'/APIcamp/include/header.php';
    ?>

    <!-- Map Box -->
    <div class="map_img" id="map">
      <img src="img/gocamp_map.jpg" alt="">
    </div>
    <!-- Search and Select Bar -->
    <div class="contents_bar search_position">
      <div class="center">
        <!-- <div class="search_bar">
          <input type="text" placeholder="검색할 키워드를 입력해 주세요.">
          <button><img src="/APIcamp/img/gocamp_icon.png" alt=""></button>
        </div> -->
        <div class="drop_bar">
          <div class="dropdown">
            <div class="select">
              <span id="query_val">내 주변 캠핑장 검색</span>
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
    <!-- End of Contents_bar -->

    <div class="bt_box">
      <span><i class="fa fa-chevron-up"></i></span>
      <div class="bt_sl carousel_section">
        <div class="carousel_cont">
          <div class="owl-carousel owl-theme" id="contents_box">

            <!-- <div class="carousel_item">
              <div class="item_card">
                <div class="sl_img">
                  <img src="img/ex.jpg" alt="">
                </div>
                <div class="sl_txt">
                  <h2>청계산 캠핑장</h2>
                  <p>청계산 캠핑장은 청계산에서 어쩌구저쩌구...</p>
                </div>
                <div class="sl_icons">
                  <img src="img/ico_mart.png" alt="">
                  <em>운동시설, 샤워장</em>
                </div>
              </div>
            </div> -->
            <!-- end of carousel_item -- Looping item -->

          </div>
          <!-- end of owl-carousel -- wrap all items -->
        </div>
        <!-- end of carousel_cont -->
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGvhWDoOmKcxP8jEQDd9mqL3KPlM9zlZM&region=kr"></script>
  <script src="/APIcamp/js/owl.carousel.js"></script>
  <script src="/APIcamp/js/main.js"></script>
  <script src="/APIcamp/js/current_position.js"></script>
</body>
</html>