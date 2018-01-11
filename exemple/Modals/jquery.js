$("button").click(function(){
	if($(this).attr("data-type")=="open-modal") {
		$("#parent-modals").css("display", "block");
		$("body").css("overflow", "hidden");
		var modalTarget =  $(this).attr("data-target");
		setTimeout(function(){
			$("#parent-modals").css("opacity", "1");
			$("#"+ modalTarget).css("top", "20%");
		},100);
	}
});

$("body").click(function(targetDiv){
	if($(targetDiv.target).attr("id") == "parent-modals"){
		$("#parent-modals").css("opacity", "0");
		$("body").css("overflow", "visible");
		$(".modal-window").css("top", "100%");
		setTimeout(function(){
			$("#parent-modals").css("display", "none");
		},1100);
	}
});