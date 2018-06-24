;(function(){

			// Menu settings
			$('#menuToggle, .menu-close').on('click', function(){
				$('#menuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toleft');
				$('#theMenu').toggleClass('menu-open');
			});


})(jQuery)


$(document).ready(function(){
    $(".scroll").click(function(event){
 
                    //bloqueamos la función del anchor original
                    event.preventDefault();
 
                    //dirigimos de manera animada al id del anchor
                    $('html,body').animate({
                                            //le indicamos al scroll vertical que se dirija al objeto con el id
                                            //guardado en el anchor a su posición top.
                                            scrollTop:$(this.hash).offset().top
                                            },1000);
 
    });
 
});
