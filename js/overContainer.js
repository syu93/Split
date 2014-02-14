$( document ).ready(function(){
	 $("#signIn").click(function(){

	  $("#overContainer").removeClass('OCoff');
	  $("#overContainer").addClass('OCon');
	});
	 
	 $("#closeBtn").click(function(){

	  $("#overContainer").removeClass('OCon');
	  $("#overContainer").addClass('OCoff');
	});
});