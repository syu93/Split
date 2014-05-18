$( document ).ready(function(){
	// Creat Json object
	var formP = {};

	// recover the input value of pseudo
	$("#pseudo2").change(function(){
	
	formP.pseudo = $('#pseudo2').val();
		$.ajax({
			type: "POST",
			url: "http://127.0.0.1/split/form/validateSignUp.php",
			data: formP,
			success: function(data){
				if(data == 'truep')
				{					
						$( "#ckpseudo" ).html("Not Avaible");
						$( "#ckpseudo" ).attr( "class", "checkNo" );
						$("#pseudo2").addClass('inputNo');

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
		$.ajax({
			type: "POST",
			url: "http://127.0.0.1/split/form/validate.php",
			data: formM,
			success: function(data){
				if(data == 'truem')
				{	
					
						$( "#ckmail2" ).html("Not Avaible");
						$( "#ckmail2" ).attr( "class", "checkNo" );
						$("#mail2").addClass('inputNo');

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
		$.ajax({
			type: "POST",
			url: "http://127.0.0.1/split/form/validate.php",
			data: formA,
			success: function(data){
				if(data == 'falsea')
				{					
						$( "#ckavt" ).html("Invalid extension");
						$( "#ckavt" ).attr( "class", "checkNo" );
						$("#avatar").addClass('inputNo');
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
		$.ajax({
			type: "POST",
			url: "http://127.0.0.1/split/form/validateSignUp.php",
			data: formL,
			success: function(data){

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
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/
// Connect

	// Creat Json object
	var formCM = {};
	
	// recover the input value of avatar
	$("#submit1").click(function(event){		
	event.preventDefault();
	
		formCM.mail1 = $('#mail1').val();

		$.ajax({
			type: "POST",
			url: "http://127.0.0.1/split/form/validate.php",
			data: formCM,
			success: function(data){
				if(data == "truem")
				{

						var formCP = {};
						formCP.password1 = $('#password1').val();
						formCP.mail01 = $('#mail1').val();
						$.ajax({
							type: "POST",
							url: "http://127.0.0.1/split/form/validate.php",
							data: formCP,
							success: function(data){
								if(data == "truep")
								{
									$("#formLi").submit();
								}
								else if(data == "falsep")
								{
									$( "#password1" ).val("");
									$( "#cksub1" ).html("Your e-mail address or password is invalid. Please try again.");
									$( "#cksub1" ).attr( "class", "checkNo" );
									$("#mail1").addClass('inputNo');
									$("#password1").addClass('inputNo');
								}
								else
								{

								}
							}, 
							dataType: "text"
						});
				}
				else if(data == "falsem")
				{
					$( "#password1" ).val("");
					$( "#cksub1" ).html("Your e-mail address or password is invalid. Please try again.");
					$( "#cksub1" ).attr( "class", "checkNo" );
					$("#mail1").addClass('inputNo');
					$("#password1").addClass('inputNo');
				}
				else
				{
					// alert("error");
				}
			}, 
			dataType: "text"
		});		
	});
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/
	var i = $( "#nb-game" ).attr("data");
	var nb = parseInt(i); //convert in number
	
	for(i=0;i<=nb; i++)
	{		
		$("#jeux"+i).click(function(){	

			var id = $(this).attr("alt");
			var game = $("#"+id).html();

		
			var id = $(this).attr("alt");
			var game = $("#"+id).html();
			
			var url = $("#plop").val();
			
			/****************************************/
			$("#overContainer2"+id).removeClass('OCoff');
			$("#overContainer2"+id).addClass('OCon');
			/****************************************/

			gameInf = {};	
			gameInf.select = game;
			
			$.ajax({
				type: "POST",
				url: "http://127.0.0.1/split/form/validateSignUp.php",
				data: gameInf,
				success: function(data){
				// $("#video_"+id).attr("src", data);
				$("#overContainer2"+id).removeClass('OCoff');
				$("#overContainer2"+id).addClass('OCon');
				// document.getElementById('video').contentWindow.location.reload();
				
				}, 
				dataType: "text"
			});
			
			/****************************************/
			$(".gameBack").click(function(){
				// $("#video_"+id).attr("src","");
				$("#overContainer2"+id).removeClass('OCon');
				$("#overContainer2"+id).addClass('OCoff');
				// document.getElementById('video').contentWindow.location.reload();
			});	
		});

	}
	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/
// Add to cart
	var i = $( "#nb-game" ).attr("data");
	var nb = parseInt(i); //convert in number
	
	
	for(i=0;i<=nb; i++)
	{		
		$("#cart"+i).click(function(){
		var id = $(this).attr("alt"); // The nb of the element clicked
		
		var game = $("#"+id).html(); // Get the name of the game selected
		var price = $("#p_"+id).html(); // Get the price of the game selected
		addcart = {};		
		
		addcart.cart = game;
		addcart.price = price;		
		
			$.ajax({
				type: "POST",
				url: "http://127.0.0.1/split/form/validateSignUp.php",
				data: addcart,
				success: function(data){
					$("#nb_cart").html(data);
					
						addprice= {};
						addprice.prx_add = price;
						
							$.ajax({
								type: "POST",
								url: "http://127.0.0.1/split/form/validateSignUp.php",
								data: addprice,
								success: function(data){
									// alert("total :"+data);
									$("#total").html(data);
								}, 
								dataType: "text"
							});

					document.getElementById('cart_window').contentWindow.location.reload();
					// document.getElementByName('cart_window').contentWindow.location.reload();
				}, 
				dataType: "text"
			});	
		});

		$("#b_cart"+i).click(function(){
		var id = $(this).attr("alt"); // The nb of the element clicked
		
		var game = $("#"+id).html(); // Get the name of the game selected
		var price = $("#p_"+id).html(); // Get the price of the game selected
		addcart = {};		
		
		addcart.cart = game;
		addcart.price = price;		
		
			$.ajax({
				type: "POST",
				url: "http://127.0.0.1/split/form/validateSignUp.php",
				data: addcart,
				success: function(data){
					$("#nb_cart").html(data);
					
						addprice= {};
						addprice.prx_add = price;
						
							$.ajax({
								type: "POST",
								url: "http://127.0.0.1/split/form/validateSignUp.php",
								data: addprice,
								success: function(data){
									// alert("total :"+data);
									$("#total").html(data);
								}, 
								dataType: "text"
							});

					document.getElementById('cart_window').contentWindow.location.reload();
					// document.getElementByName('cart_window').contentWindow.location.reload();
				}, 
				dataType: "text"
			});	
		});
	}
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/	
/**************************************************************************/
// Rmove from cart
	var n =$("#sum").attr("data");
	var nb = parseInt(n); //convert in number
	
	for(i=0;i<=nb; i++)
	{	
		$("#trash"+i).click(function(event){
		var s = nb-1;
		var arr_idx = $(this).attr("data");
		var rmcart = {};
		rmcart.arr_idx = arr_idx;

			$.ajax({
				type: "POST",
				url: "http://127.0.0.1/split/form/validateSignUp.php",
				data: rmcart,
				success: function(data){
					$('#nb_cart', parent.document).html(data);
					
					var addprice= {};
					addprice.prx_rm = parseInt( $("#total", parent.document).html() );
						$.ajax({
							type: "POST",
							url: "http://127.0.0.1/split/form/validateSignUp.php",	
							data: addprice,
							success: function(data){
								$("#total", parent.document).html(data);
								location.reload();
							}, 
							dataType: "text"
						});
				}, 
				dataType: "text"
			});
		});
	}
});