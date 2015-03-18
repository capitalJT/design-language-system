$(document).foundation();

$(document).ready(function () {
	smoothScroll.init();
});//end ready


// Scroll to top function 1/2
$(function(){
  $(window).scroll(function(){
    var $scrollTop = $(window).scrollTop();
      if( $scrollTop > 70){
          $('#scroll-to-top').fadeIn();
      } else {
          $('#scroll-to-top').fadeOut();
      }
  });   
});

// Scroll to top function 2/2
$('#scroll-to-top').click(function(){
	console.log('scrolled');
  var body = $("html, body");
  body.animate({scrollTop:0}, '500', 'swing');
});

// Navigation hovering
$('.has-submenu').hover(function(event){
  event.preventDefault();
  $(this).children('ul').stop(true).slideToggle();
});

//Navigation toggle in mobile
$('.ajmn-menu').click(function(){
  $('.header nav').stop(true).slideToggle();
});
