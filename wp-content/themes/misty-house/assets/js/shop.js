// assets/js/shop.js
jQuery(function($){
  // When any filter button is clicked
  $('.filter-btn').on('click', function(){
    var filter = $(this).data('filter');

    // Toggle active class
    $('.filter-btn').removeClass('active');
    $(this).addClass('active');

    // Show or hide products
    $('.product-card').each(function(){
      var cats = $(this).data('category').split(' ');
      if ( filter === 'all' || cats.indexOf(filter) !== -1 ) {
        $(this).fadeIn(200);
      } else {
        $(this).fadeOut(200);
      }
    });
  });
});
