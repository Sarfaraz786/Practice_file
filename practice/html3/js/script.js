$(function(){
	Cufon.replace('.header .nav ul li a, #whatsnew ul li div.captiondiv, #whatsnew h1', {hover: true}, { fontFamily: 'Myriad Pro' });
	Cufon.replace('.footerright', {hover: true}, { fontFamily: 'Calibri' });
	$('#whatsnew ul li a img').each(function(){
		var thsrc = $(this).attr('src')+'?'+new Date().getTime();
		$(this).attr('src',thsrc);
		$(this).load(function(){
			$(this).fadeIn();
		});
	});
	$('.updateheader img').toggle(function(){
		$('#whatsnew').stop(true, true).animate({
			height:'450px'
		});
	}, function(){
		$('#whatsnew').stop(true, true).animate({
			height:'0px'
		});
	});
	$('li.image.new1').hover(function(){
		$('li.caption.new1 div.captiondiv').stop(true, true).fadeIn();
	}, function(){
		$('li.caption.new1 div.captiondiv').stop(true, true).fadeOut();
	});

	$('li.image.new2').hover(function(){
		$('li.caption.new2 div.captiondiv').stop(true, true).fadeIn();
	}, function(){
		$('li.caption.new2 div.captiondiv').stop(true, true).fadeOut();
	});

	$('li.image.new3').hover(function(){
		$('li.caption.new3 div.captiondiv').stop(true, true).fadeIn();
	}, function(){
		$('li.caption.new3 div.captiondiv').stop(true, true).fadeOut();
	});

	$('li.image.new4').hover(function(){
		$('li.caption.new4 div.captiondiv').stop(true, true).fadeIn();
	}, function(){
		$('li.caption.new4 div.captiondiv').stop(true, true).fadeOut();
	});

	$('li.image.new5').hover(function(){
		$('li.caption.new5 div.captiondiv').stop(true, true).fadeIn();
	}, function(){
		$('li.caption.new5 div.captiondiv').stop(true, true).fadeOut();
	});
});