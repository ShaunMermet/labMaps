<?php

?>
<!DOCTYPE html>
<html style="width:100%;height:100%;">
	<body style="width:98%;height:98%;">

	<div id="googleMap" style="width:100%;height:100%;"></div>

	<script>
		function myMap() {
			var myCenter = new google.maps.LatLng(35.854665, 139.517731);
			var copterPos = new google.maps.LatLng(35.854665, 139.517731);
			var planePos = new google.maps.LatLng(35.854631, 139.517508);
			var roverPos = new google.maps.LatLng(35.854599, 139.517964);
			var mapProp= {
			    center:myCenter,
			    zoom:18,
			    mapTypeId:google.maps.MapTypeId.HYBRID
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var copterMarker = new google.maps.Marker({
			    position: copterPos,
			    icon: "copter.png"
			  });
			var planeMarker = new google.maps.Marker({
			    position: planePos,
			    icon: "plane.png"
			  });
			var roverMarker = new google.maps.Marker({
			    position: roverPos,
			    icon: "rover.png"
			  });
			copterMarker.setMap(map);
			planeMarker.setMap(map);
			roverMarker.setMap(map);

			google.maps.event.addListener(copterMarker,'click',function() {
			    //map.setZoom(18);
			    map.setCenter(copterMarker.getPosition());
			    window.open("http://ergc",'_blank');
			});
			google.maps.event.addListener(planeMarker,'click',function() {
			    //map.setZoom(18);
			    map.setCenter(planeMarker.getPosition());
			    window.open("http://labVR/7",'_blank');
			});
			google.maps.event.addListener(roverMarker,'click',function() {
			    map.setZoom(9);
			    map.setCenter(roverMarker.getPosition());
			});
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUabB007mdkmQVbOD0oFcRakntnn9Snqw&callback=myMap"></script>

	</body>
</html>
