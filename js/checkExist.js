$( document ).ready(function(){
	// Creat Json object
	var formP = {};

	// recover the input value of pseudo
	$("#pseudo").blur(function(){
	
	formP.pseudo = $('#pseudo').val();
	// alert(formP.pseudo);
		$.ajax({
			type: "POST",
			url: "form/validateSignUp.php",
			data: formP,
			success: function(data){
				// alert($('#pseudo').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'true')
				{					
						$( "#ckpseudo" ).html("This pseudo already exist");
						$( "#ckpseudo" ).attr( "class", "checkNo" );
						$("#pseudo").addClass('inputNo');
						// alert("This Pseudo already exist");
					$( "#formSi" ).submit(function( event ) {	
					event.preventDefault();
					});
				}
				else
				{
					$( "#ckpseudo" ).html("This pseudo is avaible");
					$( "#ckpseudo" ).attr( "class", "checkOk" );
					$("#pseudo").removeClass('inputNo');
					// $( "#submit" ).attr( "type", "submit" );
					// alert("Good");
				}				
			}, 
			dataType: "text"
		});	
	});
	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/

	// Creat Json object
	var formM = {};
	// recover the input value of mail
	$("#mail").blur(function(){

	formM.mail = $('#mail').val();
	// alert(formM.mail);
		$.ajax({
			type: "POST",
			url: "form/validateSignUp.php",
			data: formM,
			success: function(data){
				// alert($('#eamail').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'true')
				{					
						$( "#ckmail" ).html("This mail already exist");
						$( "#ckmail" ).attr( "class", "checkNo" );
						$("#mail").addClass('inputNo');
						// $( "#submit" ).attr( "type", "button" );
						// alert("This Pseudo already exist");
					$( "#formSi" ).submit(function( event ) {	
					event.preventDefault();
					});					
				}
				else
				{
					$( "#ckmail" ).html("This mail is avaible");
					$( "#ckmail" ).attr( "class", "checkOk" );
					$("#mail").removeClass('inputNo');
					// alert("Good");
				}				
			}, 
			dataType: "text"
		});		
	});

/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/
	// Creat Json object
	var formA = {};

	// recover the input value of avatar
	$("#avatar").blur(function(){
	
	formA.avatar = $('#avatar').val();
	// alert(formA.avatar);
		$.ajax({
			type: "POST",
			url: "form/validateSignUp.php",
			data: formA,
			success: function(data){
				// alert($('#avatar').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'false')
				{					
						$( "#ckavt" ).html("Invalid type of extension");
						$( "#ckavt" ).attr( "class", "checkNo" );
						$("#avatar").addClass('inputNo');
						// alert("This Pseudo already exist");
					$( "#formSi" ).submit(function( event ) {	
					event.preventDefault();
					});
				}
				else
				{
					$( "#ckavt" ).html("");
					$( "#ckavt" ).attr( "class", "checkOk" );
					$("#avatar").removeClass('inputNo');
				}				
			}, 
			dataType: "text"
		});	
	});


});