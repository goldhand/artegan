jQuery.fn.jHeights = function() {
  var tallest = 0;
  this.children().each(function(){
    if ($(this).outerHeight() > tallest) {
      tallest = $(this).outerHeight(); 
    }
  });
  $(this).children().height(tallest);
};

