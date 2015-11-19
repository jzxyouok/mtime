$(function(){

	 $(".tex").live('focus',function(){
		$(this).addClass("focus");
		$(this).parent().next().next().show();
		$(this).css({"min-height":"70px"});
	  });
	 $(".tex").live('blur',function(){
		 textarea = $(this).val();
		 if(!!textarea){
			 $(this).parent().next().next().show();
		 }else{
			$(this).parent().next().next().hide();
		 }
	
	 });
})