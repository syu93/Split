$( document ).ready(function(){	// Creat Json object
	var form = {};

	// recover the input value
	$("#pseudo").change(function(){

	form.pseudo = $('#pseudo').val();
	 // alert("ma valeur :"+form.pseudo);
		$.ajax({
			type: "POST",
			url: "index.php",
			data: form,
			success: function(data){
				// alert("ma veleu"+$('#pseudo').val());
				// alert(typeof(data))
				// alert(data)
				if(data == 'true')
				{
					alert("This Pseudo already exist");
				}
				else
				{
					alert("Good");
				}
				
			}, 
			dataType: "text"
		});		
	});
});