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
		<style>
			#intro{
				background-color:red;
				color:white;
				text-align:center;
				width:300px;
				height:100px;
				margin:auto;
				border-radius:5px;
			}

			#main{
				color:#222222;
				font-family: Verdana;
				font-size: 16px;
				text-align:center;
			}
		</style>
	</head>

	<body>
		<div id="intro">
			Please enable geolocation for your browser.
		</div>
		<div id="main"></div>
	</body>
</html>