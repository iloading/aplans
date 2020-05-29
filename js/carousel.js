var $item = $('.carousel-item, iframe, .carousel-control-next, .carousel-control-prev');
var $wHeight = $('.alturaIndex').height()/2;
var el = document.getElementById("back");
$item.eq(0).addClass('active');
$item.height($wHeight);
$item.addClass('full-screen');

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});

$(window).on('resize', function (){
  $wHeight = $('.alturaIndex').height()/2;
  $item.height($wHeight);
  $item2.height($wHeight);
});
