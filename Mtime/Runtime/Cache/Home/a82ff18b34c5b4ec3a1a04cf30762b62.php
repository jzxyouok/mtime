<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>修改密码 – 电影社区 – Mtime时光网</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Home/css/header.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/proindex.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/footer.css">
		<script src="/mtime/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/mtime/Public/Home/js/header.js"></script>
		
	<link rel="stylesheet" href="/mtime/Public/Home/css/password.css">

	</head>
	<body>
		<div class="container">
			<!--头部-->
			<div id="topbar">
				<div class="topline"></div>
				<div class="menubar">
					<div class="menubg">
						<div class="menuid">
							<h1 class="mtimelogo">
								<a href="/mtime/index.php/Home/Index/index" title="Mtime时光网">Mtime时光网</a>
							</h1>
							<div class="navsearch">
								<div class="menuicon" title="导航" id="dh">
									<div class="menupop navpop" style="display:none;" id="navlist">
										<ul>
											<li>
												<a href="#">
													<span class="ico_n_index"></span>
													首页
												</a>
											</li>
											<li>
												<a href="#">
													<span class="ico_n_news"></span>
													新闻
												</a>
											</li>
											<li>
												<a href="/mtime/index.php/Home/Index/index">
													<span class="ico_n_ticket"></span>
													影院
												</a>
											</li>
											<li>
												<a href="#">
													<span class="ico_n_mall"></span>
													商城
												</a>
											</li>
											<li>
												<a href="#">
													<span class="ico_n_bbs"></span>
													社区
												</a>
											</li>
											<li>
												<a href="#">
													<span class="ico_n_find"></span>
													发现
												</a>
											</li>
										</ul>
									</div>
								</div>
			
								<div class="topsearch">
									<div class="selctsearch">
										<strong>全部</strong>
										<i></i>
										<span>|</span>
									</div>
									<div class="selectshow">
										<ul>
											<li>全部</li>
											<li>电影</li>
											<li>影人</li>
											<li><a href="/mtime/index.php/Home/Index/index">影院</a></li>
											<li>商品</li>
										</ul>
									</div>
									<input type="text" class="text" value="" placeholder="搜索电影、影人、影院、商品">
									<input type="button" class="button">
								</div>
							</div>
							<div class="userbar">
								<div class="gwc">
									<span class="ico_shop"></span>
									<div class="m_shopcart">
										<p class="tips">您的购物车还是空的，赶快选购哦。</p>
									</div>
								</div>
								<div class="loginbox">
									
									<span class="logintxt">
										<?php if($_SESSION['member_login'] == 1): echo ($_SESSION['member_nickname']); ?>
										<?php else: ?>
											请登录<?php endif; ?>
									</span>
									<span class="loginpic">
										<?php if($_SESSION['member_login'] == 1): ?><img src="/mtime/Public/<?php echo ($_SESSION['member_pic']); ?>" width='27' height='27'>										
										<?php else: ?>
											<span class="ico_user"></span><?php endif; ?>
										
									</span>
									
								</div>
								<div class="citybox">
									<span class="currcity">我在：长治</span>
									<span class="ico_city"></span>
								</div>
								
								<div class="loginpop">
								<?php if($_SESSION['member_login'] == 1): ?><div class="my_name">
										<a href="" class="my_pic">
											<img src="/mtime/Public/<?php echo ($_SESSION['member_pic']); ?>" width="96" height="96">
										</a>
										<dl>
											<dt>
												<a href="#"><?php echo ($_SESSION['member_nickname']); ?></a>
											</dt>
											<dd>
												我的经验值:
												<a href="" id="topMenuXpContainer">50</a>
											</dd>
										</dl>
										<div class="my_btns">
											<a class="btn_login" href="#">我的时光</a>
											<a class="btn_login" href="#">会员俱乐部</a>
										</div>
									</div>
									<ul class="loginexit">
										<li>
											订单：
											<a href="#">电影票订单</a>
											<em>|</em>
											<a href="#" class="p_r">
												商品订单
												<i class="i_new"></i>
											</a>
										</li>
										
										<li>我的：
											<a href="#">博客</a>
											<em>|</em>
											<a href="#">群组</a>
											<em>|</em>
											<a href="#">电影</a>
											<em>|</em>
											<a href="#">收藏</a>
										</li>
										
										<li>游戏：
											<a href="#">卡片大富翁</a>
											<em>|</em>
											<a href="#">猜电影</a>
										</li>
										
										<li>
											<a href="/mtime/index.php/Home/User/do_layout" class="btn_exit">退出</a>
											<a href="/mtime/index.php/Home/Profile/basic">修改资料</a>
											<em>|</em>
											<a href="/mtime/index.php/Home/Profile/password">密码</a></li>
									</ul>
								<?php else: ?>
									<form action="/mtime/index.php/Home/User/do_login" method="post">
										<dl class="logintool">
											<dt>为爱电影的人</dt>
											<dd class="userlogin">
												<ul>
													<li>
														<label class="name">用户名：</label>
														<input type="text" value="" placeholder="输入电子邮箱地址" name="email" class="tip">
														<span class="ico_false"></span>
													</li>
													<li>
														<label class="password">输入密码：</label>
														<input type="password" value="" placeholder="输入密码" name="pass" class="tip">
														<span class="ico_false"></span>
													</li>
												</ul>
												<p class="usertip">
													<a href="#" target="_blank" style="float:right;">忘记密码</a>
													<span class="ico_m_check" id="zddl"></span>
													下次自动登录
												</p>
												<div class="btn">
													<input type="submit" value="登录" class="btn_login">
													<input type="button" value="成为会员" class="btn_regist">
												</div>
												<script>
													$(".btn_regist").click(function(){
														window.location.href="<?php echo U('User/register');?>";
													});
												</script>
											</dd>
										</dl>
										<dl class="otherlogin">
											<dt>使用第三方登录</dt>
											<dd style="margin-left:42px;">
												<a href="http://passport.mtime.com/unitelogin/dispatch/weibo/web/" title="新浪" class="o_sina"></a>
												<a href="http://passport.mtime.com/unitelogin/dispatch/qq/web/" title="QQ" class="o_qq"></a>
											</dd>
										</dl>
									</form><?php endif; ?>
								
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--头部 end-->
			
			<div class="my_head">
				<div id="welcomeRegion">
					<h2>
						<a href="#">个人设置</a>
						<span class="px18 bold">
							<b class="hei">.</b>
							<span>安全隐私</span>
						</span>
					</h2>
				</div>
			</div>
		
			<div class="my_out">
				<div class="my_nav">
					<ul id="nav">
						<li>
							<a href="/mtime/index.php/Home/Profile/basic">
								<span>基本资料</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>通知设置</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>绑定手机</span>
							</a>
						</li>
						<li>
							<a href="/mtime/index.php/Home/Profile/security">
								<span>安全隐私</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>勋章</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>标签</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>同步</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span>微评设置</span>
							</a>
						</li>
					</ul>
				</div>
			
				<div class="t_blogout">
					<div class="o_h">
						<div class="t_setleft">
							<ul class="setsider" id="setsider">
								
	<li>
		<span>&nbsp;</span>
		<a href="/mtime/index.php/Home/Profile/security">隐私管理</a>
	</li>
	<li>
		<span>&nbsp;</span>
		修改密码
	</li>
	<li>
		<span>&nbsp;</span>
		黑名单
	</li>

							</ul>
						</div>
						
						
	<div class="t_setright">
	<form action="/mtime/index.php/Home/Profile/updatepass" method="post" id="form1">
		<ul class="t_setphone t_setphone2">
			<li>
				<label>旧密码：</label>
				<div class="tel_r">
					<input type="password" id="txt_oldpwd" class="t_text w200 er" maxlength="20" name="oldname">
					<p style="margin-top:3px;color:red;display:none;"></p>
				</div>
			</li>
			<li>
				<label>新密码：</label>
				<div class="tel_r">
					<input type="password" id="txt_newpwd" class="t_text w200 er" maxlength="20" name="member_pass">
					<p id="newpwdMsg" class="c_666 mt3">6-20位字母与数字、符号的组合</p>
					<p style="margin-top:3px;color:red;display:none;">密码不能为空！</p>
				</div>
			</li>
			<li>
				<label>确认新密码：</label>
				<div class="tel_r">
					<input type="password" id="txt_newpwd2" class="t_text w200 er" maxlength="20" name="renewname">
					<p style="margin-top:3px;color:red;display:none;">两次输入的密码不一致！</p>
				</div>
				
			</li>
			<li>
				<label>&nbsp;</label>
				<div class="tel_r">
					<input type="button" id="btn_save" class="btn_blue" value="保 存">
				</div>
			</li>
		</ul>
	</form>
	</div>

						
						
					</div>
				</div>
			
			
			</div>
				
			<!--尾部-->
			<div id="bottom">
				<div class="footout">
					<span class="topline"></span>
					<div class="footinner">
						<div class="fotlogo">
							<dl>
								<dt>
									<a href="#" title="Mtime时光网">Mtime时光网</a>
								</dt>
								<dd>
									<a href="#">加入我们</a>
									<a href="#" class="ml30">联系我们</a>
								</dd>
								<dd>
									<a href="#">站务论坛</a>
									<a href="#" class="ml30">问题反馈</a>
								</dd>
								<dd>
									<a href="#">社区准则</a>
									<a href="#" class="ml30">网站地图</a>
								</dd>
							<dl>
							<i class="line"></i>
						</div>
						
						<div class="fotmap">
							<dl style="width:42px;">
								<dt>栏目</dt>
								<dd>
									<a href="#">首页</a>
								</dd>
								<dd>
									<a href="#">新闻</a>
								</dd>
								<dd>
									<a href="#">影院</a>
								</dd>
								<dd>
									<a href="#">社区</a>
								</dd>
							</dl>
							<dl style="width:185px;" class="tj">
								<dt>推荐</dt>
								<dd>
									<a href="#">电影热榜</a>
									<a href="#">全球新片</a>
								</dd>
								<dd>
									<a href="#">时光对话</a>
									<a href="#">典藏佳片</a>
								</dd>
								<dd>
									<a href="#">新片预告</a>
									<a href="#">电影节</a>
								</dd>
								<dd>
									<a href="#">时光周刊</a>
									<a href="#">卡片大富翁</a>
								</dd>
							</dl>
							<dl>
								<dt>关注我们</dt>
								<dd>
									<a href="http://weibo.com/movietime?topnav=1&wvr=5&topsug=1" target="_blank" class="sina" title="新浪">新浪</a>
								</dd>
								<dd>
									<a href="javascript:;" target="_blank" class="weixin" title="微信">微信</a>
								</dd>
								<dd>
									<a href="http://www.mtime.com/rss/" target="_blank" class="rss" title="RSS">RSS</a>
								</dd>
							</dl>
						</div>
						
						<div class="fotweek">
							<dl>
								<dt>
									<span class="fr">第156期</span>
									<strong>时光周刊</strong>
								</dt>
								<dd>
									<a href="#" target="_blank" title="时光周刊">
										<img src="/mtime/Public/Home/images/gyzn.jpg" width="170px" alt="时光周刊">
									</a>
								</dd>
								<dd class="input">
									<input type="text" id="iptEMail" value="" placeholder="邮箱地址" class="c_a5">
									<a href="javascript:;" id="btnSubscribe">订阅</a>
								</dd>
							</dl>
						</div>
						
						<div class="fothr">
							<dl>
								<dt>
									<strong>手机购票</strong> 方便 实惠
								</dt>
								<dd>
									<a href="http://feature.mtime.com/mobile/" target="_blank">
										<i></i>
									</a>
								</dd>
								<dd>扫描二维码 下载客户端</dd>
							</dl>
						</div>
					</div>
				</div>
				
				<div class="db_foot">
					<p>
						<span style="margin-right:370px;">
							<span class="mr12">北京动艺时光网络科技有限公司</span>
							Copyright 2006-2015 Mtime.com Inc. All rights reserved.
						</span>
						<br/>
						<a href="http://feature.mtime.com/help/icp.htm" target="_blank" class="mr12 ml12">京ICP证050715号</a>
						<a href="http://feature.mtime.com/help/videolicence.htm" target="_blank" class="mr12">网络视听许可证0108265号</a>
						<a href="http://feature.mtime.com/help/network.htm" target="_blank" class="mr12">网络文化经营许可证</a>
						<a href="http://feature.mtime.com/help/tvlicence.htm" target="_blank" class="mr12">广播电视节目制作经营许可证(京)字第1435号</a>
						<span>京公网安备：110105000744号</span>
					</p>
					<div class="credible">  
						<a href="http://feature.mtime.com/help/credible.htm" target="_blank" title="可信网站" class="credibler"></a>
						<a href="http://feature.mtime.com/help/goodfaith.htm" target="_blank" title="诚信网站" class="goodfaith"></a>
					</div>
				</div>
			</div>
			<!--尾部 end-->
				
		</div>
	
	</body>
	
	<script>
		$("#nav").children().eq(3).addClass("on");
		$("#nav").children().children().addClass("a4");
		
		$("#setsider").children().eq(1).addClass("on");
		
		$("#txt_oldpwd").blur(function(){
			var val = this.value;
			obj = this;
			$.ajax({
				'type':'get',
				'url':'<?php echo U('Profile/findpass');?>',
				'data':{'pass':val},
				'async':false,
				'success':function(d){
					if(d=='0'){
						$(obj).next().html("你输入的原密码不正确！").show();
						$(obj).data({"r":0});
					}else{
						$(obj).next().hide();
						$(obj).data({"r":1});
					}
				}
			});
		});
		
		$("#txt_newpwd").focus(function(){
			$(this).next().hide();
		});
		
		$("#txt_newpwd").blur(function(){
		 	var v = this.value;
		 	if(v==""){
		 		$(this).next().next().show();
		 		$(this).data({"r":0});
		 	}else{
		 		var len= v.length;
		 		if(len<6 || len>20){
		 			$(this).next().next().html("密码必须在6-20位之间！").show();
		 			$(this).data({"r":0});
		 		}else{
		 			$(this).next().next().hide();
		 			$(this).data({"r":1});
		 		}
		 	}
		});

		$("#txt_newpwd2").blur(function(){
			var va1 = $("#txt_newpwd").val();
			var va2 = $(this).val();
			if(va1 == va2){
				$(this).next().hide();
				$(this).data({"r":1});
			}else{
				$(this).next().show();
				$(this).data({"r":0});
			}
		});
		
		$("#btn_save").click(function(){

			$(".er").blur();

			num = 0;

			$(".er").each(function(){
				num+=$(this).data("r");
			});
		
			if(num==3){
				$("#form1").submit();
			}
		});

		
		
	</script>

	
</html>