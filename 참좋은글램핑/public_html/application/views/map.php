<link rel="stylesheet" href="/css/map.css" type="text/css">
<link rel="stylesheet" href="/css/default.css" type="text/css">
<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=gpm890y3wy"></script>
<script>
	var mapOptions = {
		center: new naver.maps.LatLng(37.1814532, 128.081036),
		zoom: 15
	};

	var map = new naver.maps.Map('map', mapOptions);

</script>
<div class="mapwrap">
	<div class="bg09">
		<img src="/images/main/bg09.png" alt="">
	</div>
	<div class="bg10">
		<img src="/images/main/bg10.png" alt="">
	</div>
	<div class="bg11">
		<img src="/images/main/bg11.png" alt="">
	</div>
	<div class="bg11-m">
		<img src="/images/main/m/bg11.png" alt="">
	</div>
	<div class="photowrap">
		<div class="title">
			<img src="images/common/textdeco1.png" alt="">
			<h1>MAP <span>충청북도 제천시 봉양읍 옥전길 303</span></h1>
		</div>
		<div class="title-m">
			<img src="images/common/m/textdeco1.png" alt="">
			<h1>MAP</h1>
			<p>충청북도 제천시 봉양읍 옥전길 303</p>
		</div>
		<div class="flex">
			<img src="/images/map/img01.jpg" alt="">
			<div id="map" style="width:33%;height:auto"></div>
			<script type="text/javascript">
				var map = null;

				function initMap() {
					map = new naver.maps.Map('map', {
						center: new naver.maps.LatLng(37.1814532, 128.081036),
						zoom: 15
					});
				}
				var map = new naver.maps.Map('map', mapOptions);
				var marker = new naver.maps.Marker({
					position: new naver.maps.LatLng(37.1814532, 128.081036),
					map: map
				});

			</script>
			<img src="/images/map/img02.jpg" alt="" id="photo2">
		</div>

	</div>
	<div class="underline">
	</div>
</div>
