// JavaScript Document
$(function(){
	Cufon.replace('h1, #nav ul li a, #whatsnew ul li div.captiondiv, #tagline', {hover: true});
	$('#nav ul li a').prepend('<span>');
	$('#nav ul li').not('.active').hover(function(){
		$('a span', this).stop(true, true).animate({
			height:'100%'
		},'fast');
	}, function(){
		$('a span', this).stop(true, true).animate({
			height:'2px'
		},'fast');
	});
	$('#whatsnew ul li a').prepend('<span>');
	$('#whatsnew ul li a span').css('opacity','0.4');
	$('#whatsnew ul li').hover(function(){
		$('a span',this).stop(true, true).fadeIn();
	}, function(){
		$('a span',this).stop(true, true).fadeOut();
	});
	$('a').click(function(){
		if($(this).attr('href')=='#') return false;
	});
	$('.social-ico li').hover(function(){
		$('.social-ico li').stop(true, true).not(this).animate({
			'opacity':0.4
		});
	}, function(){
		$('.social-ico li').stop(true, true).animate({
			'opacity':1
		});
	});
	$('.footer').animate({
		'bottom':'3%'
	});
	$('#nav').animate({
		'top':'2%'
	});
	/*$('#whatsnew ul li a img').each(function(){
		$(this).load(function(){
			$(this).fadeIn();
		});
	});*/
	$('#whatsnew ul li a img').each(function(){
		var thsrc = $(this).attr('src')+'?'+new Date().getTime();
		$(this).attr('src',thsrc);
		$(this).load(function(){
			$(this).fadeIn();
		});
	});
	var thsrc = $('#webbg img').attr('src')+'?'+new Date().getTime();
	$('#webbg img').attr('src',thsrc);
	$('#webbg img').load(function(){
		$(this).fadeIn();
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