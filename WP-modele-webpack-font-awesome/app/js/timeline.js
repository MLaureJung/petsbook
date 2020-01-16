

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
 
  }

};

$(app.init);