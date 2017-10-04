records = {
	api:function(data){
		return $.ajax({
			url:"/api",
			data:data,
			contentType:false,
			processData:false,
			type:"POST",
		})
	},
	get_loader:function(){
		img = $("<img>",{class:"img-responsive records-official-loader",src:"/img/Ripple.svg"});
		return img;
	}
}

