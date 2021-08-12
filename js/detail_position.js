const mapXparam = new URLSearchParams(location.search).get('lon');//주소로 넘어오는 위도, 경도값을 받아오는 과정
const mapYparam = new URLSearchParams(location.search).get('lat');
const numMapx = Number(mapXparam); //문자열로 반환
const numMapY = Number(mapYparam);
const detailBox = document.querySelector('.detail_contents');
const imgBox = document.querySelector('.detail_bg');

ajax : //비동기 데이터 리딩 형식
$.ajax({
  url: `/APIcamp/php/detail.php?lat=${numMapY}&lon=${numMapx}`,
  type:'GET',
  dataType : "json",
  success: function(result){
    const item = result.body.items.item;
    console.log(item);
    let imgItem = "";
    let detailItem = "";

    imgItem = `<img src="${item.firstImageUrl}" alt="" onerror="this.src='/APIcamp/img/no_image.png'"><span class="radi_bar"></span>`;
    imgBox.innerHTML = imgItem;

    detailItem = `
      <div class="detail_wrap">
        <h2 class="detail_tit">${item.addr2}</h2>
        <span class="line"></span>
        <div class="detail_info">
          <p>
            <span class="info_ico"><i class="fa fa-map-marker"></i></span>
            <span class="info_txt">${item.addr1}</span>
          </p>
          <p>
            <span class="info_ico"><i class="fa fa-dog"></i></span>
            <span class="info_txt">${item.animalCmgCl}</span>
          </p>
          <p>
            <span class="info_ico"><i class="fa fa-cutlery"></i></span>
            <span class="info_txt">${item.sbrsCl}</span>
          </p>
          <p>
            <span class="info_ico"><i class="fa fa-clock"></i></span>
            <span class="info_txt">${item.operDeCl} / ${item.operPdCl}</span>
          </p>
        </div>
        <span class="line"></span>
        <h2 class="detail_tit">캠핑장 소개</h2>
        <span class="line"></span>
        <div class="info_desc">
          ${item.intro}
        </div>
        <span class="line"></span>
        <h2 class="detail_tit">위치 지도</h2>
        <div class="detail_map" id="map"></div>
      </div>
    `;
    detailBox.innerHTML = detailItem;
    // google map logics
    var map;

    function initMap() {
      var centerTarget = {lat: numMapY ,lng: numMapx};
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

