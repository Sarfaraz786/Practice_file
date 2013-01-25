// JavaScript Document
$(document).ready(function(){
			$('.menu ul li a').bind("mouseover", highlight);
			$('.menu ul li a').bind("mouseleave", highlight);
		});
		function highlight(evt) {
			$('.menu ul li a').toggleClass("highlighted")
		}
	
