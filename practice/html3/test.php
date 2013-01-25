<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<META NAME="AUTHOR" CONTENT="Hamid Raza">
<title>M R Fedge &amp; Asscoiates</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.vegas.css">
<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_400-Myriad_Pro_600.font.js" type="text/javascript"></script>
<script src="js/Calibri_400.font.js" type="text/javascript"></script>
<script src="js/jquery.vegas.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
    $.vegas('slideshow', {
	  backgrounds:[
		{ src:'bg_slider/1.jpg', fade:1000 },
		{ src:'bg_slider/2.jpg', fade:1000 },
		{ src:'bg_slider/3.jpg', fade:1000 },
		{ src:'bg_slider/4.jpg', fade:1000 },
		{ src:'bg_slider/5.jpg', fade:1000 },
		{ src:'bg_slider/6.jpg', fade:1000 },
		{ src:'bg_slider/7.jpg', fade:1000 },
		{ src:'bg_slider/8.jpg', fade:1000 },
		{ src:'bg_slider/9.jpg', fade:1000 },
		{ src:'bg_slider/10.jpg', fade:1000 }
	  ]
	})('overlay', {
		src:'overlays/01.png'
	});
	$('#action').toggle(function(){
		$.vegas('overlay', { src:'overlays/02.png' });
		$(this).text('02');
	}, function(){
		$.vegas('overlay', { src:'overlays/03.png' });
		$(this).text('03');
	}, function(){
		$.vegas('overlay', { src:'overlays/04.png' });
		$(this).text('04');
	}, function(){
		$.vegas('overlay', { src:'overlays/05.png' });
		$(this).text('05');
	}, function(){
		$.vegas('overlay', { src:'overlays/06.png' });
		$(this).text('06');
	}, function(){
		$.vegas('overlay', { src:'overlays/07.png' });
		$(this).text('07');
	}, function(){
		$.vegas('overlay', { src:'overlays/08.png' });
		$(this).text('08');
	}, function(){
		$.vegas('overlay', { src:'overlays/09.png' });
		$(this).text('09');
	}, function(){
		$.vegas('overlay', { src:'overlays/10.png' });
		$(this).text('10');
	}, function(){
		$.vegas('overlay', { src:'overlays/11.png' });
		$(this).text('11');
	}, function(){
		$.vegas('overlay', { src:'overlays/12.png' });
		$(this).text('12');
	}, function(){
		$.vegas('overlay', { src:'overlays/13.png' });
		$(this).text('13');
	}, function(){
		$.vegas('overlay', { src:'overlays/14.png' });
		$(this).text('14');
	}, function(){
		$.vegas('overlay', { src:'overlays/15.png' });
		$(this).text('15');
	}, function(){
		$.vegas('destroy', 'overlay');
		$(this).text('None');
	}, function(){
		$.vegas('overlay', { src:'overlays/01.png' });
		$(this).text('01');
	});
});
</script>
</head>
<body>
<div id="wrap">
	<button id="action">1</button>
	<div class="header">
		<div class="headerwrap">
			<div class="logo"><a href="#">M R Fedge &amp; Associates</a></div>
			<div class="nav">
				<ul>
					<li class="selected"><a href="#">Main Page</a></li>
					<li><a href="#">About MRF</a></li>
					<li><a href="#">MRF Projects</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="whatsnew">
		<h1>What's New</h1>
		<ul>
			<li class='new1 image'><a href="#"><img src="img/thumb-1.jpg" alt=""></a></li>
			<li class='new1 caption'>
				<div class="captiondiv">Interior<br>
					or<br>
					Architect</div>
			</li>
			<li class='new2 caption'>
				<div class="captiondiv">Interior<br>
					or<br>
					Architect</div>
			</li>
			<li class='new2 image'><a href="#"><img src="img/thumb-2.jpg" alt=""></a></li>
			<li class='new3 image'><a href="#"><img src="img/thumb-3.jpg" alt=""></a></li>
			<li class='new3 caption'>
				<div class="captiondiv">Interior<br>
					or<br>
					Architect</div>
			</li>
			<li class='new4 caption'>
				<div class="captiondiv">Interior<br>
					or<br>
					Architect</div>
			</li>
			<li class='new4 image'><a href="#"><img src="img/thumb-4.jpg" alt=""></a></li>
			<li class='new5 image'><a href="#"><img src="img/thumb-5.jpg" alt=""></a></li>
			<li class='new5 caption'>
				<div class="captiondiv">Interior<br>
					or<br>
					Architect</div>
			</li>
		</ul>
	</div>
	<div class="footer">
		<div class="leftbox1"></div>
		<div class="updateheader"><img src="img/lates_update_text.png" alt="Latest Updates Projects"></div>
		<div class="footerright">
			<div class="left">&copy; <a href="#">M R Fege &amp; Associates</a> 2011.</div>
			<div class="left">Powered By <a href="#">Neotrix</a></div>
			<div class="right">
				<ul>
					<li class="fb-ico"><a href="#">Facebook</a></li>
					<li class="tw-ico"><a href="#">Twitter</a></li>
					<li class="ft-email"><a href="mailto:info@fegde-architects.in">info@fegde-architects.in</a></li>
					<li class="ft-phone"><a href="tel:+912532022060">+91 (253) 2022-060</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>