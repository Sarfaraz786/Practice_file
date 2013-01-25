<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<META NAME="AUTHOR" CONTENT="Hamid Raza">
<title>M R Fedge &amp; Asscoiates</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="js/effects.core.js"></script>
<script src="js/effects.slide.js"></script>
<script src="js/supersized.3.0.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
    $.fn.supersized.options = {
        startwidth: 640,
        startheight: 480,
        vertical_center: 1,
        slideshow: 1,
        navigation: 0,
        thumbnail_navigation: 0,
        transition: 1,
        pause_hover: 0,
        slide_counter: 0,
        slide_captions: 0,
        slide_interval: 3000,
        slides: [{
            image: 'bg_slider/1.jpg',
            title: 'City Clock Tower',
            url: '#'
        }, {
            image: 'bg_slider/2.jpg',
            title: 'Canal Park Fence',
            url: '#'
        }, {
            image: 'bg_slider/3.jpg',
            title: 'Old Train Tracks',
            url: '#'
        }]
    };
    $('#bgimg').supersized();
	alert('1');
});
</script>
</head>
<body>
<div id="supersized"></div>
<div id="loading">&nbsp;</div>
<div id="wrap">
	<div class="header">
		<div class="headerwrap">
			<div class="logo"><a href="#">M R Fedge &amp; Associates</a></div>
			<div class="nav">
				<ul>
					<li><a href="#">Main Page</a></li>
					<li><a href="#">About MRF</a></li>
					<li><a href="#">MRF Projects</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>