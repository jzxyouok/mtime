$(function(){
	
	$("#sj").click(function(){
			$(this).addClass("on");
			$("#yx").removeClass("on");
			$("#sjzc,#sjyz,#mobileRegisterBtn").show();
			$("#yxzc,#yzm,#btn_submit").hide();
		});
		$("#yx").click(function(){
			$(this).addClass("on");
			$("#sj").removeClass("on");
			$("#sjzc,#sjyz,#mobileRegisterBtn").hide();
			$("#yxzc,#yzm,#btn_submit").show();
		});
		$("#reg_policy").toggle(
			function(){
				$(this).removeClass("on");
			},
			function(){
				$(this).addClass("on");
			}
		);
		$("#isAutoSign").toggle(
			function(){
				$(this).addClass("on");
			},
			function(){
				$(this).removeClass("on");
			}
		);
		

		$("#loginEmailText").blur(function(){
			if(this.value == ""){
				$(this).next().show();
				$(this).data({"s":0});
			}else{
				var str = this.value.trim();
				reg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;    
				if(!reg.test(str)){
					$(this).next().text("对不起，你输入的帐号错误").show();
					$(this).data({"s":0});
				}else{
					$(this).next().hide();
					$(this).data({"s":1});
				}
			}
		});

		$("#loginPasswordText").blur(function(){
			if(this.value==""){
				$(this).next().show();
				$(this).data({"s":0});
			}else{
				val = this.value.length;
				if(val<6 || val>20){
					$(this).next().text("密码错误").show();
					$(this).data({"s":0});
				}else{
					$(this).next().hide();
					$(this).data({"s":1});
				}		
			}
		});

		$("#loginButton").click(function(){
			$(".chk").blur();

			tot = 0;

			$(".chk").each(function(){
				tot+=$(this).data("s");
			});
			if(tot==2){
				$("#loginForm").submit();
			}
		});



		$("#reg_email").blur(function(){
			var val = this.value;
			obj = this;
			if(val==""){
				$(this).next().show();
				$(this).data({"r":0});
			}else{
				reg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
				if(!reg.test(val)){
					$(this).next().text("请输入有效的邮箱地址！").show();
					$(this).data({"r":0});
				}else{
					$.ajax({
						'type':'get',
						'url':url,
						'data':{'emailname':val},
						'async':false,
						'success':function(d){
							if(d=='1'){
								$(obj).next().html("对不起，用户已经注册！").show();
								$(obj).data({"r":0});
							}else{
								$(obj).next().hide();
								$(obj).data({"r":1});
							}
						}
					});
					
				}
			}
		});

		$("#reg_mobile").blur(function(){
			var val = this.value;
			obj = this;
			if(val==""){
				$(this).next().show();
				$(this).data({"p":0});
			}else{
				reg=/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
				if(!reg.test(val)){
					$(this).next().text("请输入有效的手机号！").show();
					$(this).data({"p":0});
				}else{
					$.ajax({
						'type':'get',
						'url':url,
						'data':{'emailname':val},
						'async':false,
						'success':function(d){
							if(d=='1'){
								$(obj).next().html("对不起，用户已经注册！").show();
								$(obj).data({"p":0});
							}else{
								$(obj).next().hide();
								$(obj).data({"p":1});
							}
						}
					});
					
				}
			}
		});

		$("#pass").blur(function(){
		 	var v = this.value;
		 	if(v==""){
		 		$(this).next().show();
		 		$(this).data({"r":0});
		 		$(this).data({"p":0});
		 	}else{
		 		var len= v.length;
		 		if(len<6 || len>20){
		 			$(this).next().html("密码必须在6-20位之间！").show();
		 			$(this).data({"r":0});
		 			$(this).data({"p":0});
		 		}else{
		 			$(this).next().hide();
		 			$(this).data({"r":1});
		 			$(this).data({"p":1});
		 		}
		 	}
		});

		$("#repass").blur(function(){
			var va1 = $("#pass").val();
			var va2 = $(this).val();
			if(va1 == va2){
				$(this).next().hide();
				$(this).data({"r":1});
				$(this).data({"p":1});
			}else{
				$(this).next().show();
				$(this).data({"r":0});
				$(this).data({"p":0});
			}
		});

		$("#cod").focus(function(){
			$("#vcode").show();
		});

		$("#cod").blur(function(){
			if(this.value==""){
				$(this).next().show();
				$(this).data({"r":0})
			}else{
				$(this).next().hide();
				$(this).data({"r":1})
			}
		});

		$("#reg_smscode").blur(function(){
			if(this.value==""){
				$(this).next().show();
				$(this).data({"p":0})
			}else{
				$(this).next().hide();
				$(this).data({"p":1})
			}
		});

		$("#btn_submit").click(function(){

			str = $("#reg_policy").hasClass("on");
			
			if(!str){
				$("#back").show();
				$("#fwtk").show();
				return false;
			}

			$(".er").blur();

			num = 0;

			$(".er").each(function(){
				num+=$(this).data("r");
			});
		
			if(num==4){
				$("#register_msg").attr("action",emailaction);
				$("#register_msg").submit();
			}
		});

		$("#mobileRegisterBtn").click(function(){

			str = $("#reg_policy").hasClass("on");
			
			if(!str){
				$("#back").show();
				$("#fwtk").show();
				return false;
			}

			$(".pr").blur();

			num = 0;

			$(".pr").each(function(){
				num+=$(this).data("p");	
			});

		
			if(num==4){
				$("#register_msg").attr("action",phoneaction);
				$("#register_msg").submit();
			}
		});

		$("#close").click(function(){
			$("#back").hide();
			$("#fwtk").hide();
		});

})