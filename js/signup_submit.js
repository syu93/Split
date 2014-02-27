$( document ).ready(function(){
	// Creat Json object
	var formP = {};

	// recover the input value of pseudo
	$("#pseudo2").change(function(){
	
	formP.pseudo = $('#pseudo2').val();
	// alert(formP.pseudo);
		$.ajax({
			type: "POST",
			url: "form/validate.php",
			data: formP,
			success: function(data){
				// alert($('#pseudo2').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'truep')
				{					
						$( "#ckpseudo" ).html("Not Avaible");
						$( "#ckpseudo" ).attr( "class", "checkNo" );
						$("#pseudo2").addClass('inputNo');
						// alert("This Pseudo already exist");
					$( "#formSi" ).submit(function( event ) {	
					event.preventDefault();
					});
				}
				else
				{
					if(formP.pseudo != "")
					{
						$( "#ckpseudo" ).html("Avaible");
						$( "#ckpseudo" ).attr( "class", "checkOk" );
						$("#pseudo2").removeClass('inputNo');
						// $( "#submit" ).attr( "type", "submit" );
						// alert("Good");
					}
					else
					{
						$( "#ckpseudo" ).html("");
						$( "#ckpseudo" ).attr( "class", "checkOk" );
						$("#pseudo2").removeClass('inputNo');
					}
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
	$("#mail2").change(function(){

	formM.mail = $('#mail2').val();
	// alert(formM.mail);
		$.ajax({
			type: "POST",
			url: "form/validate.php",
			data: formM,
			success: function(data){
				// alert($('#mail2').val());
				// alert(typeof(data));
				alert(data);
				if(data == 'truem')
				{	
					
						$( "#ckmail2" ).html("Not Avaible");
						$( "#ckmail2" ).attr( "class", "checkNo" );
						$("#mail2").addClass('inputNo');
						// $( "#submit" ).attr( "type", "button" );
						// alert("This Pseudo already exist");
					$( "#formSi" ).submit(function( event ) {	
					event.preventDefault();
					});					
				}
				else
				{
					if(formM.mail != "")
					{
						$( "#ckmail2" ).html("Avaible");
						$( "#ckmail2" ).attr( "class", "checkOk" );
						$("#mail2").removeClass('inputNo');
						// alert("Good");
					}
					else
					{
						$( "#ckmail2" ).html("");
						$( "#ckmail2" ).attr( "class", "checkOk" );
						$("#mail2").removeClass('inputNo');
					}
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
						$( "#ckavt" ).html("Invalid extension");
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

// Change the language

	// Creat Json object
	var formL = {};

	// recover the input value of avatar
	$("#langue").change(function(){
	
	formL.langue = $('#langue').val();
	// alert(formL.langue);
		$.ajax({
			type: "POST",
			url: "form/validateSignUp.php",
			data: formL,
			success: function(data){
				// alert($('#avatar').val());
				// alert(typeof(data));
				// alert(data);
				if(data == "fr")
				{
					location.reload();
				}
				else if(data == "en")
				{

					location.reload();
				}
			
			}, 
			dataType: "text"
		});	
	});

});