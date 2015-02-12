
$(function(){
	$(".edit").click(function(){
		puerto = window.location.port;
		ruta = "http://" + window.location.hostname + ":" + puerto;
		var user=$(this).parent().parent().attr("id");
		console.log(user);
		getUser(user);
		$("#form-edit").show(100);
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
	.done(
		function(){
			alert("Exito");
		}
	)
	.error(function(){alert("Error")});
}


