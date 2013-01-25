/*!
 * Hamid form Validation Plugin
 * http://hamidraza.com/
 *
 * Author : Hamid Raza
 * hasis.raj@gmail.com
 */

(function($){
$.fn.hamidval = function(){
	$(this).append('<div class="result"></div>');
	$(this).submit(function(){
		var err = 0;
		$('.field.required', this).each(function(){
			var thisval = $(this).val();
			thisval = $.trim(thisval);
			if(thisval==''){
				$(this).addClass('error');
				err = 1;
			}else{
				if($(this).hasClass("email")){
					var rege = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
					if(!rege.test(thisval)){
						err = 1;
						$(this).addClass('error');
					}else{
						$(this).removeClass('error');
					}
				}else{
					$(this).removeClass('error');
				}
			}
		});
		if(err==0){
			$('.result', this).fadeOut().removeClass('error').addClass('success').text('Please Wait...').fadeIn();
			return true;
		}else{
			$('.result', this).fadeOut().removeClass('success').addClass('error').text('Please fill the red field(s) Properly').fadeIn();
			return false;
		}
	});
	$('.field.required').blur(function() {
		var thisval = $(this).val();
		thisval = $.trim(thisval);
		if(thisval==''){
			$(this).addClass('error');
		}else{
			if($(this).hasClass("email")){
				var rege = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				if(!rege.test(thisval)){
					$(this).addClass('error');
				}else{
					$(this).removeClass('error');
				}
			}else{
				$(this).removeClass('error');
			}
		}
	});
};
})(jQuery);