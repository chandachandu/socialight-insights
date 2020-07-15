$(function () {
	$("#closedeye").hide();
	$("#openeye").click(function(){
		$("#openeye").hide();
		$("#closedeye").show();
		$("#loginpwd").attr("type","text");

	})
	$("#closedeye").click(function(){
		$("#closedeye").hide();
		$("#openeye").show();
		$("#loginpwd").attr("type","password");

	})

	$(".close-error").click(function(){
			$(".error_page").removeClass('show');
			$(".login-half").addClass('scroll-y');
	})
	$("#loginform").submit(function(e){
		$("input").removeClass('error');

		e.preventDefault();
		var user=$("#uname").val();
		var password=$("#loginpwd").val();
		if($.trim(user) != ''){
			if($.trim(password) != ''){
				 $.ajax({
            type: 'post',
            url: 'post',
            data: $(this).serialize(),
            success: function (result) {
             	if(result == 'error'){
             		$(".error_page").addClass('show');
			$(".login-half").removeClass('scroll-y');

             	}else{
             		window.location.href=result;
             	}
            }
          });
			}else{
			$("#loginpwd").addClass('error');

			}
		}else{
			$("#uname").addClass('error');
		}
	});

	$("#insertform").submit(function(e){
		$("input").removeClass('error');
		e.preventDefault();
		var user=$("#clientname").val();
		var password=$("#loginpwd").val();
		var url=$("#clienturl").val();

		if($.trim(user) != ''){
			if($.trim(password) != ''){
				if($.trim(url) != ''){

				 $.ajax({
            type: 'post',
            url: 'insert',
            data: $(this).serialize(),
            success: function (result) {
            
             	if(result == 'notadmin'){
             		$(".error_page").addClass('show');
					$(".login-half").removeClass('scroll-y');

             	}else if(result == 'error'){
             		$(".error_message").html('<span class="text-danger">Error in Inserting Record</span>');
             	}else{
             		$(".error_message").html('<span class="text-success">New Record is Inserted</span>');
             		$("#insertform")[0].reset();

             		// window.location.href=result;
             	}
            }
          });
			}
			else{
			$("#clienturl").addClass('error');

			}

		}
			else{
			$("#loginpwd").addClass('error');

			}
		}else{
			$("#clientname").addClass('error');
		}
	});


});