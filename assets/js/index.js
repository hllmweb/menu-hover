$(".icon-close").css("display","none");
//Abrir menu
$(".icon-menu").click(function(){
 	$(".menu").addClass("ativa-menu");
 	$("body").addClass("mascara");
 	$(".icon-close").css("display","block");
});


//Fechar menu
$(".icon-close").click(function(){
	$(".menu").removeClass("ativa-menu");
	$("body").removeClass("mascara");
	$(".icon-close").css("display","none");
});

