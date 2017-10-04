$(function(){
	useravailability=$(".username-availability");
	loader_image =records.get_loader()[0].outerHTML;
	$("form.register").submit(function(e){
		e.preventDefault();
		error= 0;
		inputs = $("form.register input,form.register select").get();
		$.map(inputs,function(el){
			val = $(el).val();
			
			if(val==="" && $(el).attr("required")!=undefined){
				$(el).addClass('error');
				error++;
			}
			
			$(el).keyup(function(){

				if($(this).val()==""){
					$(this).addClass('error');
				}else{
					$(this).removeClass('error');
				}
			})
		})

	if(error == 0 ){
		// console.log(error);
	if(useravailability.attr('available')=="false"){
		return false;
	}
	    data = new FormData(this);
		data.append("action","user_registration");
		
		$(this).find('button.register').html(loader_image + "Registering Leader");
		$(this).find('button.register').attr("disable");
		
		records.api(data)
		.done(function(e){
			// console.log(e);
			if(e.result=="success"){
				$(".overlay-popup").fadeIn();
				$(".overlay-popup .message").html('user is '+e.username+" successfully registered!");
			}
		})
	}
	})

	var istyping;
	$("input.username").keyup(function(){
		_this = $(this)
	clearTimeout(istyping);
	istyping = setTimeout(function(){
		useravailability.html(loader_image + 'checking availability...');
		data = new FormData();
		data.append('username',_this.val());
		data.append('action',"check_username");
		records.api(data)
		.done(function(e){
			console.log(e.result);
			if(e.result=="available"){
				useravailability.attr('available','true');
			}else{
				useravailability.attr('available','false');
			}

			useravailability.html(e.message);
			
		})
	},1000);
	});


	$(".overlay-popup").click(function(e){
		// e.stopImmediatePropagation();
		$(this).fadeOut();
	})
})
