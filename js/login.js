$(function(){
	$("form.login").submit(function(e){
		e.preventDefault();
		loader = records.get_loader();
		image =loader[0].outerHTML;
		$(this).find("button").html(image+" loggin in...")
		data = new FormData();
		data.append("username",$(this).find('input[name=username]').val());
		data.append("password",$(this).find('input[name=password]').val());
		data.append("action","login");
		records.api(data).done(function(e){
			console.log(e);
		})
	})

})