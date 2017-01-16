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
});