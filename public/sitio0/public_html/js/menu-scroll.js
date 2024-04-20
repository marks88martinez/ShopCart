//$(function(){
	// var header = document.getElementById('header');
	// var headroom = new Headroom(header); //instancia
	// headroom.init();
	
	
	//Responsive 
	//Calculamos el aancho de la pagina
	
	// var ancho = $(window).width(),
	// 	enlaces = $('#enlaces'),
	// 	btnMenu = $('#btn-menu'),
	// 	icono = $('#btn-menu .icono');
	
	// if(ancho < 769){
	// 	enlaces.hide();
	// 	icono.addClass('icon-bars');
	// }
	
	// btnMenu.on('click', function(e){
	// 	enlaces.slideToggle();
	// 	icono.toggleClass('icon-bars');
	// 	icono.toggleClass('icon-close');
	// });
	
	
	// $(window).on('resize', function(){
	// 	if($(this).width() > 769){
	// 		enlaces.show();
	// 		icono.addClass('icon-close');
	// 		icono.removeClass('fa-bars');
	// 	}else{
	// 		enlaces.hide();
	// 		icono.addClass('icon-bars');
	// 		icono.addClass('icon-close');
	// 	}
	// });
	
//});

$(window).scroll(function(){
    // var header = document.getElementById('header');
	if( $(this).scrollTop() > 0){
		$('header').addClass('header2');
	} else {
		$('header').removeClass('header2');
	}
});