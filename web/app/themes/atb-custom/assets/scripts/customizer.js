(function($) {
  // Site title
  wp.customize('Diana Weymar', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });
})(jQuery);
