//key_position.php에서 주소를 통해 받아온 ${key_val} 값을 쪼개어 ajax로 통신하는 과정


const key_val = document.location.href.split('=')[1];
//console.log(key_val); //결과:%EC%84%9C%EC%B4%88 ->인코딩 된 문자열로 찍힘 / 디코딩 필요
const decord_val = decodeURI(key_val);
//console.log(decord_val); //결과 : 서초 ->디코딩 완료!
const contentsBox = document.querySelector("#contents_box");


ajax : //비동기 데이터 리딩 형식
$.ajax({
  url: `/APIcamp/php/key.php?key=${decord_val}`, //결과->'서초(검색값=value)'를 key.php에 보낼것임.
  type:'GET',
  dataType : "json",
  success: function(result){
    const item = result.body.items.item;
    let currentItems = "";
    //console.log(Array.isArray(item)); //Array.isArray(); 배열인지 아닌지를 판별해서 true,false 로 얘기해준다.

    function itemDOM(el){
      currentItems = `
        <div class="carousel_item">
          <div class="item_card">
            <a href="/APIcamp/detail_position.php?lon=${el.mapX}&lat=${el.mapY}">
              <div class="sl_img">
                <img src="${el.firstImageUrl}" alt="" onerror="this.src='/APIcamp/img/no_image.png'">
              </div>
            </a>
            <div class="sl_txt">
              <h2>${el.facltNm}</h2>
              <p>${el.addr1}</p>
            </div>
            <div class="sl_icons">
              <img src="img/ico_mart.png" alt="">
              <em>${el.sbrsCl}</em>
            </div>
          </div>
        </div>
      `;
      contentsBox.innerHTML += currentItems; //반드시 누적해서 찍어줘야함 (+=)
    }

    if(Array.isArray(item)){
      item.forEach(function(data){
        console.log(data);
        itemDOM(data); //data를 itemDOM 함수 안으로 파라미터 전달

        // google map logics HERE!
        var map;
        function initMap() {
          var centerTarget = { lat: Number(item[0].mapY) ,lng: Number(item[0].mapX)};
          map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: centerTarget
          });

          for(let i= 0; i < item.length; i++){
            new google.maps.Marker({
              position: new google.maps.LatLng(Number(item[i].mapY), Number(item[i].mapX)),
              map: map,
              icon: '/APIcamp/img/marker.png'
            });
          }
        }
        initMap();
      });
    } else {
      itemDOM(item); //item을 itemDOM 함수 안으로 파라미터 전달
      contentsBox.innerHTML += currentItems; //반드시 누적해서 찍어줘야함 (+=)
    }

    // google map logics HERE!
    function initMap() {
      var centerTarget = {lat: Number(item.mapY) ,lng: Number(item.mapX)};
      map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: centerTarget
        });

        new google.maps.Marker({
          position: centerTarget,
          map: map,
          icon: '/APIcamp/img/marker.png'
        });
      }
    initMap();
  }
});

//carousel slide
$(document).ajaxComplete(function(){ //ajax 데이터가 DOM으로 모두 로드된 이후 실행되는 함수
  let slider = $('.owl-carousel');
  slider.each(function () {
    $(this).owlCarousel({
      loop:false,
      margin: 5,
      autoHeight: false,
      responsive:{
        0:{
          items: 1, 
          stagePadding: 20,
          margin: 15,
        }
      }
    });
  });
});