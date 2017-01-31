/*!
  jquery for prime
 */
 $(document).ready(function(){
 	$('#services .item, #left-menu .item').on('click',function(){
 		var target = $(this).attr('data-target');
 		$('#' + target).show();
	});
 	$('.closeBox').on('click',function(){
		$(this).parents('.lightbox').hide();
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
});