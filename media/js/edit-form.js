
$(function(){
	$(".edit").click(function(){
		ruta = "http://" + window.location.hostname + ":8888";
		var user=$(this).parent().attr("id");
		getUser(user);
		$("#form-edit").show(100);
	});	

	$("#cancelar").click(function(){
		$("#form-edit").hide();
	});

});




function getUser(user){
	$.ajax(
		{
			type: "POST",
	        url: ruta + "/edit-user/select",
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


