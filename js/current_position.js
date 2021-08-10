


navigator.geolocation.getCurrentPosition((position) => {
  const lat = position.coords.latitude;
  const lon = position.coords.longitude;

  const queryDom = document.querySelector("#query_val");
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
      console.log(item);

      // script.js
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