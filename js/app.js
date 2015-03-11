$(document).foundation();

$(document).ready(function () {
	smoothScroll.init();
});//end ready


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

$('#scroll-to-top').click(function(){
	console.log('scrolled');
  var body = $("html, body");
  body.animate({scrollTop:0}, '500', 'swing');
});