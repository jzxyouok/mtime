//首页JS特效

$(function(){
	
	//更多电影
	$("#hotplayMoreLink").toggle(
		function(){
			$("#hotplayMoreDiv").show();
			$(this).children(".xila").css({"background-position":"-267px -272px"});
			$(this).children("i").text("收回");
		},
		function(){
			$("#hotplayMoreDiv").hide();
			$(this).children(".xila").css({"background-position":"-267px -336px"});
			$(this).children("i").text("更多");
		}
	);

	$(".t").each(function(){
		$(this).children("span:last").hide();
	});
	
	$(".s").each(function(){
		$(this).children("span:last").hide();
	});
	
	$("#xz li").click(function(){
		$(this).children("a").addClass("on");
		$("#xz li a").not($(this).children("a")).removeClass("on");
		i = $(this).index("#xz li");
		$("#hotplayContent").children().hide();
		$("#hotplayContent").children().eq(i).show();	
	});
	
	$("#xl").toggle(
		function(){
			$("#xlcd").show();
		},
		function(){
			$("#xlcd").hide();
		}
	);
	/*
	$(".m_movie").click(function(){
		if($(".moviestip").hasClass("s")){
			$(".moviestip").removeClass("s");
			$(".moviestip").hide();
			return false;
		}else{
			$(".moviestip").addClass("s");
			$(".moviestip").show();
			return false;
		}
	});
	
	$(document).click(function(event){
		var x = event.clientX;
		var y = parseInt(event.clientY + $(window).scrollTop());
		
		var divx = parseInt($(".s").offset().left);
		var divy = parseInt($(".s").offset().top);
		
		if(x>divx && x<divx+259 && y>divy && y<divy+400){
			
		}else{
			$(".moviestip").removeClass("s");
			$(".moviestip").hide();
		}	
	});
	*/
	
	//选择电影区域显示隐藏 
	$(document).click(function(event){
		var x = event.clientX;
		var y = parseInt(event.clientY + $(window).scrollTop());
		
		var divx = parseInt($(".moviestip").offset().left);
		var divy = parseInt($(".moviestip").offset().top);
		
		if(x>divx && x<divx+259 && y>divy && y<divy+400){
			
		}else{
			$(".moviestip").hide();
		}
	});
	
	$(".m_movie").click(function(){
		$(".moviestip").toggle();
		return false;
	});
	

	
	$(".textsearch").keyup(function(){
		var val = $(this).val();
		if(!!val){
			$(".sear li").hide();
			$('.sear li a span:contains('+val+')').parent().parent().show();
		}else{
			$(".sear li").show();
		}
	});
	
	
	//选择电影后改变点击区域内容
	$(".tipsearch").click(function(){
		var searchtext = $(this).children("span").text();
		$(".m_movie").children("span").text(searchtext);
	});
	
	
	//选择影院区域显示隐藏 
	$(document).click(function(event){
		var x = event.clientX;
		var y = parseInt(event.clientY + $(window).scrollTop());
		
		var divx = parseInt($(".cinematip").offset().left);
		var divy = parseInt($(".cinematip").offset().top);
		
		if(x>divx && x<divx+259 && y>divy && y<divy+400){
			
		}else{
			$(".cinematip").hide();
		}
	});
	
	$(".m_cinema").click(function(){
		$(".cinematip").toggle();
		return false;
	});
	
	
	$(".cinemasearch").keyup(function(){
		var val = $(this).val();
		if(!!val){
			$(".sear li").hide();
			$('.sear li a span:contains('+val+')').parent().parent().show();
		}else{
			$(".sear li").show();
		}
	});
	
	
	//选择影院后改变点击区域内容
	$(".cinematipsearch").click(function(){
		var searchtext = $(this).children("span").text();
		$(".m_cinema").children("span").text(searchtext);
	});
	
	
	
	//右侧边显示
	$(window).scroll(function(){
		var winscrolltop = $(window).scrollTop();
		if(winscrolltop > 530){
			$("#ticketSearchFixDiv").css({"position":"fixed","top":"0px","width":"100%"});
		}else{
			$("#ticketSearchFixDiv").css({"position":"relative"});
		}
		
		if(winscrolltop > 400){
			$(".mtimebar").show();
		}else{
			$(".mtimebar").hide();
		}
		
		if(winscrolltop < 1){
			i = $(".searchbar").data("idx");
			if(i%2!=0){
				$(".searchbar").click();
			}
		}
	});
	
	//回到顶部
	$(".topbar").click(function(){
		$("html,body").animate({"scrollTop":"0"},500);
	});
	
	//顶部搜索控制
	$(".searchbar").data("idx","0");
	i = 0;
	$(".searchbar").toggle(
		function(){
			$("#searchbar").css({"top":"-115px"});
			$("#searchbar").addClass("scrollarea");
			$("#searchbar").animate({"top":"0"},1000);
			$("body").css({"padding-top":"115px"});
			i = $(this).data("idx");
			i++;
			$(this).data("idx",i);
		},
		function(){
			$("#searchbar").animate({"top":"-160px"},1000,function(){
				$("#searchbar").css({"top":"0"});
				$("#searchbar").removeClass("scrollarea");
				$("body").css({"padding-top":"0px"});
			});
			i = $(this).data("idx");
			i++;
			$(this).data("idx",i);
		}
	);
	

})