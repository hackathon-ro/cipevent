<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<script>
			var map = null;
			var geocoder = null;
			var markersArray = [];

			function initialize() {
				geocoder = new google.maps.Geocoder();
				var mapOptions = {
					zoom: 16,
					center: new google.maps.LatLng(-34.397, 150.644),
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			}

			//load async
			function loadScript() {
			  var script = document.createElement("script");
			  script.type = "text/javascript";
			  script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAUYJIShEWrd_pCdaO5gXjmBILyDRhzUHU&sensor=false&callback=initialize";
			  document.body.appendChild(script);
			}
	
			function getCoordinates(str, id_location) {			    
				geocoder.geocode( { 'address': str}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);

						document.getElementById(id_location + '_latitude').value = results[0].geometry.location.Ya;
						document.getElementById(id_location + '_longitude').value = results[0].geometry.location.Za; 

						//Delete all markers
						for (var i = 0; i < markersArray.length; i++ ) {
   							markersArray[i].setMap(null);
						}

						//Draw new marker
						var marker = new google.maps.Marker({
							map: map,
							position: results[0].geometry.location
						});

						markersArray.push(marker);

					} else {
						alert("Geocode(" + str + ") was not successful for the following reason: " + status);
					}
				});
			}

			window.onload = loadScript;
		</script>
		<style>
			#map_canvas{
				width: 300px;
				height: 200px;
			}
		</style>
	</head>

	<body>	

		<div id="map_canvas"></div>
		<table>
			<tr>
				<th>Name</th>
				<th>Location</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Actions</th>
			</tr>

			<?php
			if(count($events)>0){ 
				foreach($events as $event){ ?>
				<form method="POST">
					<tr>
						<td><?php echo $event['event_name'];?></td>
						<td><?php echo $event['location_name'];?></td>
						<td>
							<input type="text" id="<?php echo $event['id_location'];?>_latitude" name="latitude" value="<?php echo $event['latitude'];?>"/>
						</td>
						<td>
							<input type="text" id="<?php echo $event['id_location'];?>_longitude" name="longitude" value="<?php echo $event['longitude'];?>"/>
						</td>
						<td>
							<input type="hidden" name="location" value="<?php echo $event['id_location'];?>" />
							<input type="button" value="Get Coordinates" onclick="getCoordinates('Romania, <?php echo $event['city'].', '.$event['location_name'];?>', <?php echo $event['id_location'];?>)" />
							<input type="submit" value="save"/>
						</td>
					</tr>
				</form>
			<?php 
				}
			} ?>
		</table>
	</body>
</html>