$(document).foundation();

$(document).ready(function () {
	smoothScroll.init();
});//end ready

// calculating some values
var header = $('.header'), 
  header_height = header.outerHeight(),
  hero = $('.hero'),
  hero_height = hero.outerHeight(),
  scroll_top_icon = $('#scroll-to-top'),
  nav = $('.item-nav'),
  sections = $('.section'),
  container_margin_top = $('.container').css('margin-top').replace("px", ""),
  cmt = parseInt(container_margin_top), 
  combined_height = header_height + hero_height;

// Scroll to top function 1/2
$(function(){
  $(window).scroll(function(){
    var $scrollTop = $(window).scrollTop();
    
    if( $scrollTop > header_height ){
        scroll_top_icon.fadeIn();
    } else {
        scroll_top_icon.fadeOut();
    }
    
    if( $scrollTop > combined_height + cmt ){
      nav.addClass( 'sticky-sidebar' );
    } else {
      nav.removeClass( 'sticky-sidebar' );
    }
  });   
});

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();

  sections.each(function() {
    var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('active');
      sections.removeClass('active');
      
      $(this).addClass('active');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
    }
    if (cur_pos < combined_height) {
      nav.find('a').removeClass('active');
    }

  });
});

nav.find('a').on('click', function () {
  var $el = $(this), 
       id = $el.attr('href');
  
  $('html, body').animate({
    scrollTop: $(id).offset().top + 1
  }, 500);
  
  return false;
});

// Scroll to top function 2/2
scroll_top_icon.click(function(){
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


