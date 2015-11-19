$(function(){

	$("#categoryMenuDiv").hover(
		function(){
			$(this).addClass("on");
			$("#categoryContentDiv").show();
		},
		function(){
			$(this).removeClass("on");
			$("#categoryContentDiv").hide();
		}
	);
	
	$("#categoryContentDiv").hover(
		function(){
			$("#categoryMenuDiv").addClass("on");
			$(this).show();
		},
		function(){
			$("#categoryMenuDiv").removeClass("on");
			$(this).hide();
		}
	);
	
})