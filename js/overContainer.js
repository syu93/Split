$( document ).ready(function(){
	$("#signIn").click(function(){

	  $("#overContainer").removeClass('OCoff');
	  $("#overContainer").addClass('OCon');
	});
	 
	$("#closeBtn").click(function(){

	  $("#overContainer").removeClass('OCon');
	  $("#overContainer").addClass('OCoff');
	  $("#formSi")[0].reset();
	});
	
	$(".info").click(function(){
	
	  $("#overContainer2").removeClass('OCoff');
	  $("#overContainer2").addClass('OCon');
	});
	
	$("#gameBack").click(function(){
	  $("#overContainer2").removeClass('OCon');
	  $("#overContainer2").addClass('OCoff');
	});
});