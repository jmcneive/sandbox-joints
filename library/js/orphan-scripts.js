/*********************
 ORPHAN SCRIPTS
*********************/



/************************
 In-page scrolling 
 ***********************/

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


/************************
 Top-of-page scrolling 
 ***********************/

 $(document).ready(function() {
     var offset = 220;
     var duration = 500;
     jQuery(window).scroll(function() {
         if (jQuery(this).scrollTop() > offset) {
             jQuery('.back-to-top').fadeIn(duration);
         } else {
             jQuery('.back-to-top').fadeOut(duration);
         }
     });
     
     jQuery('.back-to-top').click(function(event) {
         event.preventDefault();
         jQuery('html, body').animate({scrollTop: 0}, duration);
         return false;
     })
 });


 /************************
  Menu icon animation 
  ***********************/

 $(document).ready(function() {
 	var active;

 	active = true;

 	$('#navicon').click(function() {
 	  if (active === true) {
 	    $('#navicon').removeClass('inactive').addClass('active');
 	    active = false;
 	    return console.log(active);
 	  } else {
 	    $('#navicon').removeClass('active').addClass('inactive');
 	    active = true;
 	    return console.log(active);
 	  }
 	});
});


 // $(document).ready(function(){
 // 	$('#hamburger').click(function(){
 // 		$(this).toggleClass('open');
 // 	});
 // });

 $(document).ready(function() {
	$('.menu-icon').click(function(){
	  $('body').toggleClass('menu-open');
	});
 });


 /************************
  Waypoints Scroller
  ***********************/

 $(document).ready(function() {
  var $head = $( '#ha-header' );
  $( '.ha-waypoint' ).each( function(i) {
    var $el = $( this ),
      animClassDown = $el.data( 'animateDown' ),
      animClassUp = $el.data( 'animateUp' );

    $el.waypoint( function( direction ) {
      if( direction === 'down' && animClassDown ) {
        $head.attr('class', 'ha-header ' + animClassDown);
      }
      else if( direction === 'up' && animClassUp ){
        $head.attr('class', 'ha-header ' + animClassUp);
      }
    }, { offset: '100%' } );
   });
  });

