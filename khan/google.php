<!DOCTYPE html>
<html>
<head>
<title>Golf score keeper</title>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
</head>
<body>
	<script>
		navigator.geolocation.getCurrentPosition(
			function(pos) {
				var newmap = $('<iframe style="width:100%; height:400px" src="http://maps.google.com/maps?q=san+francisco&amp;ie=UTF8&amp;hq=&amp;ll='+pos.coords.latitude+','+pos.coords.longitude+'&amp;spn=0.005907,0.010568&amp;t=m&amp;z=14&amp;vpsrc=6&amp;output=embed" />');
				$('#mymap').html(newmap);
			}
		);
	</script>
<div id="mymap" style="width:100%; height:400px;"></div>
</body>
</html>
