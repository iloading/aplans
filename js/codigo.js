/*NAV SLIDER*/
$(document).ready(function() {
  var fixHeight = function() {
    $(".navbar-nav").css(
      "max-height",
      document.documentElement.clientHeight - 150
    );
  };

  fixHeight();



  $(window).resize(function() {
    fixHeight();
  });


  $(".navbar .navbar-toggler").on("click", function() {
    fixHeight();
  });

  $(".navbar-toggler, .overlay").on("click", function(){
    $(".mobileMenu, .overlay").toggleClass("open");
  });

  $(".overlay").on("click", function(){
    $("#nav-icon4").toggleClass("open");
  });

});

/*Botão Hambúrger SLIDE*/
$(document).ready(function(){
	$('#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});


/*$(document).ready(function() {
  $("[data-toggle]").click(function() {
    var toggle_el = $(this).data("toggle");
    $(toggle_el).toggleClass("open");
  });

});


$(".swipe-area").swipe({
    swipeStatus:function(event, phase, direction, distance, duration, fingers)
        {
            if (phase=="move" && direction =="right") {
                  $(".mobileMenu, .overlay, #nav-icon4").toggleClass("open");

            }
            if (phase=="move" && direction =="left") {
                  $(".mobileMenu, .overlay, #nav-icon4").toggleClass("open");

            }
        }
});

*/




$('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

  $styledSelect.click(function(e) {
     if($('.select-options').is(':visible')) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));

        $list.hide();
        //console.log($this.val());

     } else {
        e.stopPropagation();
        $('div.select-styled.active').each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
     }//end if
    });

    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });

    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});


var i=0;
	$(document).ready(function(){
     $('#add_more').on('click', function(){

      i++;
      var html ='<div id="append_no_'+i+'" class="animated bounceInLeft">'+
          '<div class="input-group mt-3">'+
		  '<div class="input-group-prepend">'+
		  '</div>'+
		  '<input type="text" placeholder="Phone Number (Optional)"  class="form-control"/>'+
		  '</div>'+
		  '<div class="input-group mt-3">'+
		  '<div class="input-group-prepend">'+
		  '</div>'+
		  '<input type="text" placeholder="Adress (Optional)" class="form-control"/>'+
		  '</div>'+
		  '<div class="input-group mt-3">'+
		  '<div class="input-group-prepend">'+
		  '</div>'+
		  '<input type="text" placeholder="Zip Code (Optional)" class="form-control"/>'+
		  '</div></div>';

	  $('#dynamic_container').append(html);
	  $('#remove_more').fadeIn(function(){
	  	 $(this).show();
	  });
      $('#add_more').fadeIn(function(){
	  	 $(this).hide();
	  });
     });



     $('#remove_more').on('click', function(){

         $('#append_no_'+i).removeClass('bounceInLeft').addClass('bounceOutRight')
            .fadeOut(function(){
            	$(this).remove();
            });
            i--;
            if(i==0){
            	$('#remove_more').fadeOut(function(){
            		$(this).hide()
            	});;
            }
         $('#add_more').fadeIn(function(){
	  	 $(this).show();
	  });
     });
	});

/*MÁQUINA DE ESTADOS*//*Feito pelo professor Hélder Caixinha*/
var estado = 0;

function slt(a) {
  console.log(a);

  var x =  document.getElementById(a).src
  console.log (document.getElementById(a).src);

  var ult6 =  x.substr(x.length - 6);
  console.log(ult6);

  if (ult6 == 'to.png') {
    document.getElementById(a).src='./imagens/preenchido.png'; /*./Imagens/preenchido_preto.png*/ /*NOVAS IMAGENS*/
  } else {
    document.getElementById(a).src='./imagens/aberto.png';  /*./Imagens/aberto_preto.png */ /*NOVAS IMAGENS*/
  }
}
