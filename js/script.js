/*!
  jquery for prime
 */
  $(document).ready(function(){
 	// при клике на кота и на левое меню
 	$('#services .item, #left-menu .item').on('click',function(){
 		$(this).addClass('active');
 		var target = $(this).attr('data-target');
 		$('#' + target  +', #background-wrapper' ).fadeIn('slow'); // показываем лайтбокс
	});
  // закрываем лайтбокс при клике на крестик
 	$('.closeBox').on('click',function(){
		$(this).parents('.lightbox').fadeOut();
		$(' #left-menu .item').removeClass('active');
			$(' #background-wrapper' ).fadeOut();
	});
	$('.nextPage').on('click',function(){
		$(this).parents('.pages-wrapper').animate({
			marginLeft: '-600px',
		});
	});
	$('.backPage').on('click',function(){
		$(this).parents('.pages-wrapper').animate({
			marginLeft: '0px',
		});
	});
	$( function() {
    $( "#accordion" ).accordion();
  } );
  $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

});
  $(document).ready(function() { 
      $("a.fancyimage").fancybox(); 
    }); 