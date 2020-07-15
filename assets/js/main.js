$(function () {
		
		

		   	 $('.menu-icon').on('click',function(){
		   	 	$(this).toggleClass('close-icon');
		   	 	$('.bulb').toggleClass('rotate');


		   	 	$('.bulb').delay(3300).toggleClass('big');
		   	 	$('.menu-section').toggleClass('open');
		   	 	$('body').toggleClass('overflow-hidden');


				// $('.bulb.big:after').css('box-shadow','10px 6px 1007px 504px #FFC107, -27px 94px 1007px 1009px rgba(243, 167, 29, 0.75)'); 	 	$('body').css('overflow','hidden');



		   	 });


		   	 	$("#footer_contact").validate({
		           submitHandler: function(form) {
		    form.submit();
		  }
		});
		
		   	 		 	 	$("#contact_contact").validate({
					           submitHandler: function(form) {
					   return false;
					  }
		});


	});	