$( document ).ready(function(){
	// check if the form is ready to be submit
	$( "#formSi" ).submit(function( event ) {
		if ( !($('#name').val())) {
			// $( "#ckname" ).text( "Validated..." ).show();
			event.preventDefault();
		}
		
		if ( !($('#fname').val())) {
			// $( "#ckname" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
		
		if ( !($('#pseudo').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
		
		if ( !($('#mail').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
		
		if ( !($('#password').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
		
		if ( !($('#country').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
			
		return;
		
			$( "#cksub" ).text( "Not valid!" ).show().fadeOut( 1000 );
	event.preventDefault();
	});
	
	//......................
	
});