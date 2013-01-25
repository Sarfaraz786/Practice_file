// JavaScript Document
$(function(){
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
	$('#webbg img').load(function(){
		$(this).fadeIn();
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
		'bottom':'5%'
	});
	$('#nav').animate({
		'top':'2%'
	});
	$('#whatsnew ul li a img').each(function(){
		$(this).load(function(){
			$(this).fadeIn();
		});
	});
});