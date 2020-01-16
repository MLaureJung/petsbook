

var app = {
    init: function() {
      console.log('init');

    
    $('.scroll_fallen_objects').scrollex({
        mode: "top",
        top: "-70vh",
        enter: function() {
            $(this).addClass('scroll_fallen_objects_animate');     
        },
        leave: function() {
            $(this).removeClass('scroll_fallen_objects_animate');  
        }
    }); 

    $('.scroll_right_side_objects').scrollex({
        scroll: function(progress) {
        $(this).css('transform', 'translate3d('+progress*-$(this).data('speed')+'px,0,0)');
        }
    });

    $('.scroll_link_side_objects').scrollex({
        scroll: function(progress) {
        $(this).css('transform', 'translate3d('+progress*$(this).data('speed')+'px,0,0)');
        }
    });

    $('.scroll_expand_objects').scrollex({
        mode: "top",
        top: "-70vh",
        enter: function() {
            $(this).addClass('scroll_expand_objects_animate');     
        },
        leave: function() {
            $(this).removeClass('scroll_expand_objects_animate');  
        }
    }); 

    $('.scroll_door_open').scrollex({
        mode: "top",
        top: "-40vh",
        enter: function() {
            $(this).addClass('scroll_door_open_animate');     
        },
        leave: function() {
            $(this).removeClass('scroll_door_open_animate');  
        }
    }); 

    //marche du raccoon
    $(window).on('scroll', onScroll);
    
    function onScroll() {
        bgPosition = Math.floor(($(window).scrollTop()%(2*100))/100)*-$('#timeline__raccoon').height();
        $("#timeline__raccoon").css('background-position-y',bgPosition+'px');
    }

    // animation des séquences en boucles(abeilles, cerf, renard)
    // pour chaque animation on récupère les valeurs propres à chacune (height = hauteur d'une étape, step= nombre d'étapes, animation_speed=vitesse à laquelle on veut que ça s'anime).
    $('.sequence_png').each(function( index ) {
        height = parseInt($(this).data('height'));
        step = parseInt($(this).data('step'));
        animation_speed = parseInt($(this).data('animation_speed'));
        backgroundPosition = 0;
        animateSequencePNG($(this), height, step, animation_speed, backgroundPosition);
    });
    // ensuite on ajoute à backgroundPosition, la hauteur de l'élément, et on fait une condition : SI  backgroundPosition est > à step-1 x height c'est qu'on a passé la dernière étape. ça boucle. 
    function animateSequencePNG(el, height, step, animation_speed,             backgroundPosition){
        setInterval(function() {
            backgroundPosition += height;
            if(backgroundPosition > (step-1)*height){
                backgroundPosition = 0;
            }
            // on soustrait la hauteur de l'élément à background-position-y pour que notre élément se place au bon endroit
            el.css('background-position-y','-'+backgroundPosition+'px');
        }, animation_speed);
    }
 
  }

};

$(app.init);