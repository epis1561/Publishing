<link rel="stylesheet" href="/css/map.css">
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=4f1j6asybh"></script>
<script>
	var mapOptions = {
		center: new naver.maps.LatLng(37.3807573, 128.006897),
		zoom: 15
	};

	var map = new naver.maps.Map('map', mapOptions);

</script>
<div class="map1">
<h2>MAP & LOCATION</h2>
<p>강원특별자치도 원주시 소초면 상초구길 35-17(지번주소 : 흥양리 738번지)<br>070-4464-7881</p>
<div id="map"></div>
			<script type="text/javascript">
				var map = null;

				function initMap() {
					map = new naver.maps.Map('map', {
						center: new naver.maps.LatLng(37.3807573, 128.006897),
						zoom: 5
					});
				}
				var map = new naver.maps.Map('map', mapOptions);
				var marker = new naver.maps.Marker({
					position: new naver.maps.LatLng(37.3807573, 128.006897),
					map: map
				});

			</script>
</div>