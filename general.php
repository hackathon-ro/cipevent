<!DOCTYPE html>
<html>
	<head>
		<title>Experiment</title>
		<script>			
			var position = null;
			const DOMAIN = 'http://cip-cirip.ro/beta';

			function accept(p){
				console.log(p);
				position = p;
				document.getElementById('intro').style.display = "none";
				getEvents();
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
							var ev = JSON.parse(xhr.responseText);

							console.log(ev);

							var text = ev.event_name + " starts in " + ev.time;
							document.getElementById("main").innerHTML = text;
						}else{
							alert(xhr.responseText);
						}										
			        }
			    };

		    	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		    	
		    	var data = "latitude=" + encodeURIComponent(position.coords.latitude) + "&longitude=" + encodeURIComponent(position.coords.longitude);
		    	xhr.send(data);
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
			<div id="main"></div>
			<div id="footer">
				<a href="#">about</a>
			<div>
		</div>
	</body>
</html>