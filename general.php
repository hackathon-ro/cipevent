<!DOCTYPE html>
<html>
	<head>
		<title>Experiment</title>
	</head>

	<body>
		<script>
			
			var position = null;
			const DOMAIN = 'http://cip-cirip.ro';

			function accept(p){
				console.log(p);
				position = p;
				//p.coords.latitude
				//p.coords.longitude
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
			    xhr.open("POST", DOMAIN + "/events/", true);

			    xhr.onreadystatechange = function() {
			        if (xhr.readyState === 4) {
						alert(xhr.responseText);					
			        }
			    };

		    	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		    	
		    	var data = "data=" + encodeURIComponent(canvas.toDataURL("image/png"));
		    	xhr.send(data);
			}

			getAccess();
		</script>
	</body>
</html>