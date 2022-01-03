$ = jQuery.noConflict();

$("a").attr("target","_parent");

/*=============================================
BANNER
=============================================*/

$(".fade-slider").jdSlider({

	isSliding: false,
	isAuto: true,
	isLoop: true,
	isDrag: false,
	interval:5000,
	isCursor: false,
	speed:3000

});

var alturaBanner = $(".fade-slider").height();

$(".bannerEstatico").css({"height":alturaBanner+"px"})

/*=============================================
ANIMACIONES SCROLL
=============================================*/

$(window).scroll(function(){

	var posY = window.pageYOffset;
	
	if(posY > alturaBanner){

		$("header").css({"background":"white"})

		$("header .logotipo").css({"filter":"invert(100%)"})

		$(".fa-search, .fa-bars").css({"color":"black"})

	}else{

		$("header").css({"background":"rgba(0,0,0,.5)"})

		$("header .logotipo").css({"filter":"invert(0%)"})

		$(".fa-search, .fa-bars").css({"color":"white"})

	}

})

/*=============================================
MENÚ
=============================================*/

$(".fa-bars").click(function(){

	$(".menu").fadeIn("fast");

})

$(".btnClose").click(function(){

	$(".menu").fadeOut("fast");

})

/*=============================================
GRID CATEGORÍAS
=============================================*/

$(".grid figure, .gridFooter figure").mouseover(function(){

	$(this).css({"background-position":"right bottom"})

})

$(".grid figure, .gridFooter figure").mouseout(function(){

	$(this).css({"background-position":"left top"})

})

$(".grid figure, .gridFooter figure").click(function(){

	var vinculo = $(this).attr("vinculo");

	window.location = vinculo;

})

/*=============================================
PAGINACIÓN
=============================================*/
$(".pagination .page-numbers").before('<li class="page-item">');

var pageNumber = $(".pagination .page-numbers");
var pageItem = $(".pagination .page-item");

for(var i = 0; i < pageItem.length; i++){
	$(pageNumber[i]).appendTo($(pageItem[i]));
	$(pageNumber[i]).addClass("page-link");
}

$(".pagination .page-numbers.current").parent().addClass("active");
$(".pagination .page-numbers.next").html('<i class="fas fa-angle-right"></i>');
$(".pagination .page-numbers.prev").html('<i class="fas fa-angle-left"></i>');



/*=============================================
SCROLLORAMA
=============================================*/

var controller = $.superscrollorama();

controller.addTween(".contenidoInicio .container", TweenMax.from(

	$(".contenidoInicio .container"), .5, {css:{opacity: 0}}

));

/*=============================================
SCROLL UP
=============================================*/

$.scrollUp({
	scrollText:"",
	scrollSpeed: 2000,
	easingType: "easeOutQuint"
})

/*=============================================
PRELOAD
=============================================*/

$("body").css({"overflow-y":"hidden"});

var cargarImg = $("img");
var cargarScript = $("script");
var cargarCSS = $("link");
var cargarVideos = $("video");
var cargarAudios = $("audio");
var totalObjetos = [];
var numItem = 0;
var valorPorcentaje = 0;
var incremento = 0;
var numCarga = 0;

totalObjetos.push(cargarImg, cargarScript, cargarCSS, cargarVideos, cargarAudios);

totalObjetos.forEach(funcionForEach);

function funcionForEach(item, index){
	
	for(var i = 0; i < item.length; i++){

		numItem++;

		valorPorcentaje = 100/numItem;

	}

	for(var i = 0; i < item.length; i++){

		preload(i, item);	
		
	}

}

function preload(i, item){

	setTimeout(function(){

		$(item[i]).ready(function(){

				numCarga++

				incremento = Math.floor(numCarga * valorPorcentaje);
				
				$("#porcentajeCarga").html(incremento+"%");

				$("#rellenoCarga").css({"width":incremento+"%"})

				if(incremento >= 100){

					$("#preload").delay(350).fadeOut("slow");
					$("body").delay(350).css({"overflow-y":"scroll"})
				}

			})

	},i*100)

}

/*=============================================
DESLIZADOR DE ARTÍCULOS
=============================================*/
var longitudDeslizador = $(".deslizadorArticulos .slide-area li").length;
var slideShow = 1;
var slideToScroll = 1;

if(longitudDeslizador > 3){

	slideShow = 3;
	slideToScroll = 3;

}else if(longitudDeslizador > 2 && longitudDeslizador == 3){

	slideShow = 2;
	slideToScroll = 2;

}else{

	slideShow = 1;
	slideToScroll = 1;
}

$(".deslizadorArticulos").jdSlider({
	wrap: ".slide-inner",
	slideShow: slideShow,
	slideToScroll: slideToScroll,
	isLoop: true,
	responsive: [{
		viewSize: 320,
		settings:{
			slideShow: 1,
			slideToScroll: 1
		}

	}]

})


