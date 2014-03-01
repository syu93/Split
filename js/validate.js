$( document ).ready(function(){
	// check if the form is ready to be submit
	$( "#formSi" ).submit(function( event ) {
		if ( !($('#name2').val())) {
			// $( "#ckname" ).text( "Validated..." ).show();
			event.preventDefault();
		}
		
		if ( !($('#fname2').val())) {
			// $( "#ckname" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
		
		if ( !($('#pseudo2').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
		
		if ( !($('#mail2').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
		
		if ( !($('#password2').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
		
		if ( !($('#country2').val())) {
			// $( "#cksub" ).text( "Validated..." ).show();
			event.preventDefault();	
		}
			
		return;
		
			$( "#cksub2" ).text( "Not valid!" ).show().fadeOut( 1000 );
	event.preventDefault();	
	});
	
	//......................
	
	$( "#formLi" ).submit(function( event ) {
	if ( !($('#mail1').val())) {
			// $( "#ckname" ).text( "Validated..." ).show();
			event.preventDefault();
		}
	if ( !($('#password1').val())) {
			// $( "#ckname" ).text( "Validated..." ).show();
			event.preventDefault();
		}
	
	});	
});