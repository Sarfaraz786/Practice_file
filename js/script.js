// JavaScript Document
$(document).ready(function(){
	$('#menu ul li a').hover(function(){
		var offset = $(this).parent().offset();
		var tw = $(this).parent().width();
		var th = $(this).parent().height();
		$('#abc').stop().animate({
			width:tw,
			height:th,
			top:offset.top-10,
			left:offset.left-10
		},1000, 'easeOutBack');
		return false;
	});
});