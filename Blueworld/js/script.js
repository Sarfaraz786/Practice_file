// JavaScript Document
$(document).ready(function() {
						   
	ctwcomment);
				$.ajax({
				url: "mail.php",	
				type: "GET",
				data: data,		
				cache: false,
				success: function (html) {				
				 if (html==1) {					
					$('#cmail_success').slideDown(200);
						$('#contform form').slideUp(200);
						$('#cloader').hide();
						$('#csend_message').show();
				 }  
				 else { 
				 $('#cmail_fail').slideDown(200);
						$('#contform form').slideUp(200);
                        $('#csend_message').removeAttr('disabled').attr('value', 'Send The Message');
						$('#cloader').hide();
				 };				
			    }
		      });