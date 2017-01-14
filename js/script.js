/*!
  jquery for prime
 */
 $(document).ready(function(){
 	$('#ramka1').on('click',function(){
		$('#blackBox').show('slow');
	});
 	$('#blackBox').on('click',function(){
		$('#blackBox').hide('slow');
	});
});