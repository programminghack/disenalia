$(function(){
	$(".edit").click(function(){
		puerto = window.location.port;
		ruta = "http://" + window.location.hostname + ":" + puerto;
		var user=$(this).parent().parent().attr("id");
		getUser(user);
		$("#form-edit").show(400);
	});	

	$("#cancelar").click(function(){
		$("#form-edit").hide();
	});

});




function getUser(user){
	puerto = window.location.port;
	ruta = "http://" + window.location.hostname + ":" + puerto;
	$.ajax(		
		{
			type: "POST",
	        url: ruta + "/user/edit/",
	        data:{
	        	name : user
	        },
	        async: true,
	        dataType: 'json',
		}
	)
	.done(function(data){
			$("#name").val(data[0].name_user);
			$("#facebook").val(data[0].facebook_user);
			$("#twitter").val(data[0].twitter_user);
			$("#email").val(data[0].email_user);

		}
	)
	.error(function(){alert("Error")});
}

