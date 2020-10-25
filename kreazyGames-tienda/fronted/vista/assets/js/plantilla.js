/*=============================================
=               PALNTILLA                    =
===============================================*/

var rutaOculta = $("#rutaOculta").val();

// Herramienta TOOLTIP
$('[data-toggle="tooltip"]').tooltip(); 

$.ajax({

	url:rutaOculta + "ajax/plantilla.ajax.php",
	success:function (respuesta){


		var colorTexto = (JSON.parse(respuesta).colorTexto);
		
		var colorFondo = (JSON.parse(respuesta).colorFondo);

		var barraSuprior = (JSON.parse(respuesta).barraSuprior);

		var textoSuprior = (JSON.parse(respuesta).textoSuprior);

		$(".backColor").css({"background": colorFondo});

		$(".backColor a").css({"color": colorTexto});
		
		$(".barraSuperior").css({"background": barraSuprior});

		$(".textoSperior a").css({"color": textoSuprior});	





	}

})
/*=============================================
   PRODUCTOS	CUADRICULA O LISTA
===============================================*/
var btnList = $(".btnList");

for(var i = 0; i < btnList.length; i++){

	$("#btnGrid"+i).click(function(){

		var numero = $(this).attr("id").substr(-1);

		$(".list"+numero).hide();
		$(".grid"+numero).show();

		$("#btnGrid"+numero).addClass("backColor");
		$("#btnList"+numero).removeClass("backColor");

	})

	$("#btnList"+i).click(function(){

		var numero = $(this).attr("id").substr(-1);

		$(".list"+numero).show();
		$(".grid"+numero).hide();

		$("#btnGrid"+numero).removeClass("backColor");
		$("#btnList"+numero).addClass("backColor");

	})

}
/*=============================================
EFECTO CON SCROLL
===============================================*/
$(window).scroll(function(){

	var scrollY = window.pageYOffset;

	if(window.matchMedia("(min-width:768px)").matches){

		if(scrollY < ($(".banner").offset().top)-150){

			$(".banner img").css({"margin-top":-scrollY/6+"px"})

		}else{

			scrollY = 0;
		}

	}	
	
})
$.scrollUp({
	scrollText:"",
	scrollSpeed: 2000,
	easingType:"easeOutQuint"
});
/*=============================================
		MIGAS DE PAN
===============================================*/

var pagActiva = $(".pagActiva").html();

if (pagActiva != null ){

		var regPagActiva = pagActiva.replace(/-/g, " ");

		$(".pagActiva").html(regPagActiva);
}
/*=============================================
	ENLACES PAGINACION
===============================================*/

var url = window.location.href;

var indice = url.split("/");



$("#item"+indice.pop()).addClass("active");

