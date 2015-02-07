$(".button-new-post").click(function(){
		$(".form-add-post").slideToggle();
});
$(".form-add-post .cerrar").click(function(){
	$(".form-add-post").slideToggle()
})

$(".button-new-category").click(function(){
		$(".form-add-category").show();
});
$(".form-add-category .cerrar").click(function(){
	$(".form-add-category").hide()
})

$("#control-account").click(function(){
	$(".show-content-user").slideToggle()
})
