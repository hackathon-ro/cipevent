<!DOCTYPE html>
<html>
	<head>
		<title>Experiment</title>
		<script>
			const DOMAIN = 'http://cip-cirip.ro/beta';
			
			//Get user position		
			var position = null;
			var ev = null; //Main event

			function accept(p){
				console.log(p);
				position = p;
				document.getElementById('intro').style.display = "none";
				getEvents();
				//Call for Google maps API
				loadScript();
			}

			function exception(str){
				alert(str);
				console.log(str);
			}

			function getAccess(){				
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(accept, exception);
				} else {
					error('not supported');
				}
			}

			function getEvents(){
				var xhr = new XMLHttpRequest;
			    xhr.open("POST", DOMAIN + "/events.php", true);

			    xhr.onreadystatechange = function() {
			        if (xhr.readyState === 4) {
						if(xhr.responseText.charAt(0) != "#"){
							ev = JSON.parse(xhr.responseText);

							console.log(ev);

							var text = ev.event_name + " starts in " + ev.time;
							document.getElementById("message").innerHTML = text;
						}else{
							alert(xhr.responseText);
						}										
			        }
			    };

		    	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		    	
		    	var data = "latitude=" + encodeURIComponent(position.coords.latitude) + "&longitude=" + encodeURIComponent(position.coords.longitude);
		    	xhr.send(data);
			}

			//Maps...
			var map = null;
			var geocoder = null;
			var markersArray = [];
			var directionsService = null;
			var start = null;
			var end = null;

			function initialize() {
				directionsService = new google.maps.DirectionsService();
				directionsDisplay = new google.maps.DirectionsRenderer();

				start = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
				end   = new google.maps.LatLng(ev.latitude, ev.longitude);
				//geocoder = new google.maps.Geocoder();
				var mapOptions = {
					zoom: 16,
					center: new google.maps.LatLng(44.431447, 26.0974538),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);				
				directionsDisplay.setMap(map);
				showRoute();
			}

			//load async
			function loadScript() {
			  var script = document.createElement("script");
			  script.type = "text/javascript";
			  script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAUYJIShEWrd_pCdaO5gXjmBILyDRhzUHU&sensor=false&callback=initialize";
			  document.body.appendChild(script);

			}

			function showRoute() {
				var request = {
					origin:start,
					destination:end,
					travelMode: google.maps.TravelMode.DRIVING
				};
				directionsService.route(request, function(result, status) {
					if (status == google.maps.DirectionsStatus.OK) {
						directionsDisplay.setDirections(result);
					}
				});
			}

			window.onload = getAccess();
		</script>
		<LINK href="style.css" rel="stylesheet" type="text/css">

		<style>
			#continer{
				position:relative;
				width:100%;
				height:100%;
				min-height: 100%;
				background-color: black;
				background:url(<?php echo $bg;?>) center center;
			}
		</style>
	</head>

	<body>
		<div id="continer">
			<div id="intro">
				Please enable geolocation for your browser.
			</div>
			<div id="main">
				<div id="message"></div>
				<div id="map_canvas"></div>
			</div>
			<div id="footer">
				<a href="#">about</a>
			<div>
		</div>
	</body>
</html>