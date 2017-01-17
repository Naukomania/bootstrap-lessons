/*!
  jquery for prime
 */
 $(document).ready(function(){
 	$('#ramka-1').on('click',function(){
		$('#blackBox').show('slow');
	});
 	$('#closeBox').on('click',function(){
		$('#blackBox').hide('slow');
	});
	$('#nextPage').on('click',function(){
		$(this).hide();
		$('#pages-wrapper').animate({
			marginLeft: '-300px',
		});
	});
});