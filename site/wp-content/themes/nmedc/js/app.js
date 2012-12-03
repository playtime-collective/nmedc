jQuery(document).ready(function($) {
  
  $('.main-slider')
    .after('<div id="main-slider-nav">')
    .after('<a href="" class="prev"><span id="prev">prev</span></a><a href="" class="next"><span id="next">next</span></a>');
    
  $('.main-slider')
    .cycle({ 
    fx: 'fade',
    delay:  0,
    slideExpr: 'div',
    pager: '#main-slider-nav',
    next: '#next', 
    prev: '#prev'
  });
  
  $('.quote-slider').after('<div class="quote-controls"></div>');
  $('.quote-controls')
    .append('<a href="" class="quote-next"><span id="next">next</span></a>')
    .append('<div id="quote-slider-nav">')
    .append('<a href="" class="quote-prev"><span id="prev">prev</span></a>');

  $('.quote-slider')
    .cycle({ 
    fx: 'fade',
    delay:  0,
    slideExpr: 'div',
    pager: '#quote-slider-nav',
    next: '#next', 
    prev: '#prev'
  });

});