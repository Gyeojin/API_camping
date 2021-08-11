


navigator.geolocation.getCurrentPosition((position) => {
  const lat = position.coords.latitude;
  const lon = position.coords.longitude;
  const queryDom = document.querySelector("#query_val");
  const contentsBox = document.querySelector("#contents_box");
  const loca = window.location.href; //주소값 받아옴
  const radiVal = loca.split('=')[1]; //주소에서 =을 기준으로 문자열을 잘라 2번째[1] 값을 저장
  const kmVal = radiVal.slice(0,2); //radiVal 값을 잘라 0번째부터 2개 값을 저장


  queryDom.innerHTML = `${kmVal} km 반경 캠핑장`;
  

  ajax : //비동기 데이터 리딩 형식
  $.ajax({
    url: `/APIcamp/php/location.php?lat=${lat}&lon=${lon}&radi=${radiVal}`,
    type:'GET',
    dataType : "json",
    success: function(result){
      const item = result.body.items.item;
      let currentItems = "";

      item.forEach(function(data){ //데이터들을 각각 뽑아오는 과정
        console.log(data);
        currentItems = `
          <div class="carousel_item">
            <div class="item_card">
              <a href="/APIcamp/detail_position.php?lon=${data.mapX}&lat=${data.mapY}">
                <div class="sl_img">
                  <img src="${data.firstImageUrl}" alt="" onerror="this.src='/APIcamp/img/no_image.png'">
                </div>
              </a>
              <div class="sl_txt">
                <h2>${data.facltNm}</h2>
                <p>${data.addr1}</p>
              </div>
              <div class="sl_icons">
                <img src="img/ico_mart.png" alt="">
                <em>${data.sbrsCl}</em>
              </div>
            </div>
          </div>
        `;
        contentsBox.innerHTML += currentItems;
      });

      currentItems = ``;
      //console.log(item);



      // google map logics
      var map;

      function initMap() {
        var centerTarget = { lat: Number(lat) ,lng: Number(lon)};
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
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
    }
  });
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