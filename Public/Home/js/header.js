$(function(){
	//头部JS
		$(".selctsearch").toggle(
			function(){
				$(".selectshow").show();
			},
			function(){
				$(".selectshow").hide();
			}
		);
		$("#dh").hover(
			function(){
				$(this).addClass("currmenuicon");	
				$(this).children("#navlist").show();
			},
			function(){
				$(this).removeClass("currmenuicon");	
				$(this).children("#navlist").hide();
			}
		);
		
		
		
		$("#zddl").toggle(
			function(){
				$(this).addClass("ico_m_currcheck");
			},
			function(){
				$(this).removeClass("ico_m_currcheck");
			}
		);
		
		$(".gwc").hover(
			function(){
				$(this).addClass("currshop");
				$(this).children(".m_shopcart").show();
				$(this).children(".ico_shop").css({"background-position":"-363px -175px"});
			},
			function(){
				$(this).removeClass("currshop");
				$(this).children(".m_shopcart").hide();
				$(this).children(".ico_shop").css({"background-position":"-363px -155px"});
			}
		);
		
		/*$(".loginbox").toggle(
			function(){
				$(this).addClass("currlogin");
				$(".logintxt").css({"color":"black"});
				$(this).children(".loginpic").children().addClass("ico_user2");
				$(".loginpop").show();
			},
			function(){
				$(this).removeClass("currlogin");
				$(".logintxt").css({"color":"#fff"});
				$(this).children(".loginpic").children().removeClass("ico_user2");
				$(".loginpop").hide();
			}
		);*/
		
		$(".loginbox").click(function(){
			if($(".loginpop").hasClass("s")){
				$(".loginpop").removeClass("s");
				$(".loginpop").hide();
				$(this).removeClass("currlogin");
				$(".logintxt").css({"color":"#fff"});
				$(this).children(".loginpic").children().removeClass("ico_user2");
				return false;
			}else{
				$(".loginpop").addClass("s");
				$(".loginpop").show();
				$(this).addClass("currlogin");
				$(".logintxt").css({"color":"black"});
				$(this).children(".loginpic").children().addClass("ico_user2");
				return false;
			}
		});
		
		$(document).click(function(event){
			var x = event.clientX;
			var y = parseInt(event.clientY + $(window).scrollTop());
			
			var logx = parseInt($(".loginpop").offset().left);
			var logy = parseInt($(".loginpop").offset().top);
			
			if(x>logx && x<logx+287 && y>logy && y<logy+470){
				
			}else{
				$(".loginpop").removeClass("s");
				$(".loginpop").hide();
				$(".loginbox").removeClass("currlogin");
				$(".logintxt").css({"color":"#fff"});
				$(".loginbox").children(".loginpic").children().removeClass("ico_user2");
			}	
		});
})