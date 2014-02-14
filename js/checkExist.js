$( document ).ready(function(){	// Creat Json object
	var form = {};

	// recover the input value
	$("#pseudo").change(function(){

	form.pseudo = $('#pseudo').val();
	 // alert(form.pseudo);
		$.ajax({
			type: "POST",
			url: "form/validateSignIn.php",
			data: form,
			success: function(data){
				// alert($('#pseudo').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'true')
				{
					$("#ckPseudo").html("This pseudo already exist");
					// alert("This Pseudo already exist");
				}
				else
				{
					$("#ckPseudo").html("This pseudo is avaible");
					// alert("Good");
				}				
			}, 
			dataType: "text"
		});		
	});
	
		$("#mail").change(function(){

	form.mail = $('#mail').val();
	 // alert(form.pseudo);
		$.ajax({
			type: "POST",
			url: "form/validateSignIn.php",
			data: form,
			success: function(data){
				// alert($('#pseudo').val());
				// alert(typeof(data));
				// alert(data);
				if(data == 'true')
				{
					$("#ckMail").html("This mail already exist");
					// alert("This Pseudo already exist");
				}
				else
				{
					$("#ckMail").html("This mail is avaible");
					// alert("Good");
				}				
			}, 
			dataType: "text"
		});		
	});
});