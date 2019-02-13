(function($) {
    $(document).ready(function(){
        //FUNCION PARA INICIAR EL VIDEO
    	$('#playVideo').click(function(){
            $('.video__container').css('display','initial');
            $('.panoramika__video').trigger('play');


        });

        //FUNCION PARA PAUSAR EL VIDEO

        $('.close__video').click(function(){
            $('.panoramika__video').trigger('pause');
            $('.video__container').css('display','none');
        });
            
        

    });
})( jQuery );