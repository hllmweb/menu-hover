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


$(".pesquisar").css("display","none");
//Abrir pesquisar
$(".icon-pesquisar").click(function(){
	$("body").addClass("mascara");
	$(".pesquisar").css("display","block");
});


//Fechar pesquisar
$(".icon-busca-close").click(function(){
	$("body").removeClass("mascara");
	$(".pesquisar").css("display","none");
});

//Fechar pesquisar quando clicar no esc
$(document).keydown(function(e){
	if(e.keyCode == 27){
		$("body").removeClass("mascara");
		$(".pesquisar").css("display","none");

		$(".menu").removeClass("ativa-menu");
		$(".icon-close").css("display","none");		
	}
});


//Fechar pesquisar quando clicar na mascara
/*$(document).click(function(e) {
	$(".modal_medio:not(.nao-fechar)").hide();
});

$(".mascara").click(function(e) {
	e.stopPropagation();
});*/