;(function($, window, undefined) {

    $.fn.galeria = function(prev, sig) {
        return this.each(function(){
            var $container = $(this).children().eq(0);

            if($container){
                var $fotos = $container.children();
                var cantidad = $fotos.length;
                var incremento = $fotos.outerWidth(true);
                var visible = Math.floor(incremento/incremento)
                console.log(visible);
                var primerElemento = 1;
                var estaMoviendo = false;
                var tiempo = 3000;
                var $pause = false
            }

            $container.css('width', (cantidad + visible) * incremento);
            for(var i = 0; i < visible; i++){
                $container.append($fotos.eq(i).clone());
            }


            $(sig).click(function(e){
                e.preventDefault();

                if(!estaMoviendo){
                    if(primerElemento > cantidad){
                        primerElemento = 2;
                        $container.css("left", "0px")
                    }else{
                        primerElemento++;
                    }
                    estaMoviendo = true
                    $container.animate({
                        left: "-=" + incremento,
                    },'swing', function(){
                        estaMoviendo = false
                    })
                }
            })

            if($pause == false){
                 setInterval(function(){
                    if(!estaMoviendo){
                        if(primerElemento > cantidad){
                            primerElemento = 2;
                            $container.css("left", "0px")
                        }else{
                            primerElemento++;
                        }
                        estaMoviendo = true
                        $container.animate({
                            left: "-=" + incremento,
                        },'swing', function(){
                            estaMoviendo = false
                        })
                    }
                },tiempo);
            }

            $(prev).click(function(e){
                e.preventDefault();

                if(!estaMoviendo){
                     if(primerElemento == 1){
                        $container.css("left", cantidad * incremento * -1)
                        primerElemento = cantidad
                    }else{
                        primerElemento--;
                    }
                    estaMoviendo = true
                    $container.animate({
                        left: "+=" + incremento,
                    },'swing', function(){
                        estaMoviendo = false
                    })
                }
            })
        });
    }

})(jQuery, window)