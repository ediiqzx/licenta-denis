var $btns = $('.filterbttn').click(function() {
  if (this.id == 'all') {
    $('#produse > div').fadeIn(450);
  } else {
    var $el = $('.' + this.id).fadeIn(450);
    $('#produse > div').not($el).hide();
  }
  $btns.removeClass('selected');
  $(this).addClass('selected');
});

$('.inactive-size').click(function() {
  $(this).addClass('active-size');
  $(this).removeClass('inactive-size');
});

$('.active-size').click(function() {
  $(this).addClass('inactive-size');
  $(this).removeClass('active-size');
});
