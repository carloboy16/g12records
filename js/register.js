$(function(){
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
		console.log(error);
		data = new FormData(this);
		data.append("action","user_registration");
		image =records.get_loader()[0].outerHTML;
		$(this).find('button.register').html(image + "Registering Leader");
		$(this).find('button.register').attr("disable");
		$(" .overlay-popup").show();
		records.api(data)
		.done(function(e){
			console.log(e);
		})
	}
	})


	$("input.username").keyup(function(){
		setTimeout(function(){

		})
	});
})
