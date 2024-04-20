//header que cambia de color
$(window).scroll(function(){
   var header = document.getElementById('header');
	if( $(this).scrollTop() > 0){
		$('header').addClass('header2');
	} else {
		$('header').removeClass('header2');
	}
});
