function displaythumb(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#prodthumb').attr('src', e.target.result).height(52);
		};
		reader.readAsDataURL(input.files[0]);
	}
}
$(function(){
	$('[href=#]').click(function(){
		return false;
	});
	$('.partners li a').css('opacity',0.4);
	$('.partners li a').hover(function(){
		$(this).stop(true, true).animate({'opacity':'1'}, 'fast');
	}, function(){
		$(this).stop(true, true).animate({'opacity':'0.4'}, 'fast');
	});
	$('table.dealstable td.deletedeal a').click(function(){
		$(this).parent().parent().remove();
		return false;
	});
	$('.removeimg').click(function(){
		$('#photo').val('');
		$('#prodthumb').attr('src','img/blankthumb.jpg');
		return false;
	});
	$('form').HVal({
		errorClass: 'error',
		errorMessage: 'Their is some error with our server Please shoot a direct mail to <a class="heightlight" href="#">hello@website.com</a>.',
		successMessage: 'Thank You.',
		displayOutput: false,
		disableOnSubmit: true,
		showResult: true
	});
});