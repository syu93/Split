$( document ).ready(function(){
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

		if ( !($('#avatar').val())) {
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
		
		if ( !($('#langue').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}		
		return;
		
			$( "#cksub" ).text( "Not valid!" ).show().fadeOut( 1000 );
	event.preventDefault();
	});
});