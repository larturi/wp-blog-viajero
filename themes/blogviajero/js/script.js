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

/*=============================================
FORMULARIO COMENTARIOS
=============================================*/
$('.comment-notes').hide();
$('.comment-reply-title').html('');
$('.comment-reply-title').append('<label class="text-muted lead">¿Qué tal te pareció el artículo?</label>');
$('p[class*="comment"] label, .comment-form-url').hide();
$('p[class*="comment"] input, p[class*="comment"] textarea').css({
	'width': '100%',
	'border-radius': '3px',
	'padding': '22px',
});
$('p[class*="comment"] input, p[class*="comment"] textarea').addClass('form-control');


$('#email').attr('placeholder', 'Correo electrónico');
$('#author').attr('placeholder', 'Tu nombre');
$('#comment').attr('placeholder', 'Escribe aqui tu comentario');

$('#submit').attr('class', 'btn btn-dark btn-block');
$('#submit').attr('value', 'Enviar');

$('#wp-comment-cookies-consent').hide();

$('#commentform').attr('class', 'd-flex flex-column');
$('.comment-form-author').addClass('order-1');
$('.comment-form-email').addClass('order-2');
$('.comment-form-comment').addClass('order-3');
$('.form-submit').addClass('order-4');

/*=============================================
VISTA COMENTARIOS
=============================================*/

var avatar = $(".avatar");
var nombre = $(".comment-author cite");
var fecha = $(".comment-meta a");
var comentario = $(".comment-body p");
var vcard = $(".vcard");

$(".comment-author cite, .comment-author span").hide();
$(".comment-meta a").hide();
$(".comment").attr('class', 'comment d-flex flex-column');
$(".comment-body").addClass('d-flex');

$(".vcard").addClass("order-1");
$(".vcard").css({"width":"250px"});
$(".comment-body p").addClass("order-2");
$(".comment-body p").addClass("flex-fill");

$(".children .vcard").addClass("order-3");
$(".children .comment-body p").addClass("order-1");

$(".comment-author").css({"padding":"5px"});
$(".comment-body p").css({"padding":"5px 20px"});

$(".children .comment-body p").css({"text-align":"right"});
$(".children .comment-body p span").css({"font-size":"12px"});

$(".comment-author .avatar").addClass("order-1");
$(".comment-author cite, .comment-author span").addClass("order-3");

for(var i = 0; i < avatar.length; i++){
	$(avatar[i]).addClass("img-thumbnail");
	$(avatar[i]).css({"width":"100%"});
	$(avatar[i]).removeAttr('height');
	$(avatar[i]).removeAttr('width');

	$(comentario[i]).append('<br><span class="small text-secondary">'+$(nombre[i]).html()+' | '+$(fecha[i]).html()+'</span>');

	$(vcard[0]).css({"width":"98px"});
}