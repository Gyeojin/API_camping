const mapXparam = new URLSearchParams(location.search).get('lon');//주소로 넘어오는 위도, 경도값을 받아오는 과정
const mapYparam = new URLSearchParams(location.search).get('lat');
console.log(mapXparam); //문자열로 반환
console.log(mapYparam);

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

