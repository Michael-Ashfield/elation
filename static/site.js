jQuery( document ).ready( function( $ ) {

  console.log("jquery running")

  // Prevents scrolling with menu 
  $(function() {
    $('#navbar-close').click(function() {
      $('body').css('overflow-y', 'scroll')
      
    });
    $('#navbar-hamburger').click(function() {
      $('body').css('overflow-y', 'hidden')
    });
  });

});