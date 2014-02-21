$( document ).ready(function(){
	// Creat Json object
	var formP = {};

	// recover the input value of pseudo
	$("#pseudo").change(function(){
	
	formP.pseudo = $('#pseudo').val();
	// alert(formP.pseudo);
		$.ajax({
			type: "POST",
			url: "form/validate.php",
			data: formP,
			success: function(data){
				// alert($('#pseudo').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'truep')
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
	$("#mail").change(function(){

	formM.mail = $('#mail').val();
	// alert(formM.mail);
		$.ajax({
			type: "POST",
			url: "form/validate.php",
			data: formM,
			success: function(data){
				// alert($('#eamail').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'truem')
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
	$("#avatar").change(function(){
	
	formA.avatar = $('#avatar').val();
	// alert(formA.avatar);
		$.ajax({
			type: "POST",
			url: "form/validate.php",
			data: formA,
			success: function(data){
				// alert($('#avatar').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'falsea')
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
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/
	// Creat Json object
	var formL = {};

	// recover the input value of avatar
	$("#langue").change(function(){
	
	formL.langue = $('#langue').val();
	alert(formL.langue);
		$.ajax({
			type: "POST",
			url: "form/validateSignUp.php",
			data: formL,
			success: function(data){
				// alert($('#avatar').val());
				// alert(typeof(data));
				alert(data);
				if(data == 'fr')
				{
						alert("This Pseudo already exist");
				}
				else
				{
					
				}				
			}, 
			dataType: "text"
		});	
	});

});