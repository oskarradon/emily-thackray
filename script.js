$(function() {
  // $('body').css('background', 'blue');
  if (window.location.pathname === '/') {
    $('nav a').each(function() {
      $(this).removeClass('active');
    })
  }
})
