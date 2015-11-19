<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>长治影讯,长治电影院-在线选座购票-购电影票</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Home/css/indexheader.css">
		<link rel="stylesheet" href="/mtime/Public/Mshop/css/index.css">
		<link rel="stylesheet" href="/mtime/Public/Mshop/css/hdp.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/footer.css">
		<script src="/mtime/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/mtime/Public/Mshop/js/jquery.SuperSlide.2.1.1.js"></script>
		<script src="/mtime/Public/Home/js/header.js"></script>
		<script src="/mtime/Public/Mshop/js/index.js"></script>
		<style>
			
		</style>
	</head>
	<body>
		<div class="container">
			<div style="z-index:120" id="searchbar">
				<div id="topbar">
			<div class="bartop">
				<div class="topmid">
					<div class="search">
						<div class="searchshadow">
							<div class="selectsearch" id="xl">
								<strong>影院</strong>
								<span class="xl"></span>
								<span class="sx">|</span>
							</div>
							<div class="selectshow" id="xlcd">
								<ul>
									<li>全部</li>
									<li>电影</li>
									<li>影人</li>
									<li>影院</li>
									<li>商品</li>
								</ul>
							</div>
							<input type="text" class="text" value="" placeholder="本地影院">
							<input type="button" class="button">
						</div>
					</div>
				</div>
			</div>
				<div class="topline"></div>
				<div class="menubar">
					<div class="menubg">
						<div class="menuid">
							<h1 class="mtimelogo">
								<a href="#" title="Mtime时光网">Mtime时光网</a>
							</h1>

							
							<ul class="navbar">
								<li>
									<a href="#">
										<span class="a">首页</span>
										<span class="b">首页</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="a">新闻</span>
										<span class="b">新闻</span>
									</a>
								</li>
								<li class="curr">
									<a href="#">
										<span class="a">影院</span>
										<span class="b ">影院</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="a">商城</span>
										<span class="b">商城</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="a">社区</span>
										<span class="b">社区</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="a">发现</span>
										<span class="b">发现</span>
									</a>
								</li>
							</ul>
						
						
						
						
						
						
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
											<a href="/mtime/index.php/Mshop/User/do_layout" class="btn_exit">退出</a>
											<a href="/mtime/index.php/Mshop/Profile/basic">修改资料</a>
											<em>|</em>
											<a href="/mtime/index.php/Mshop/Profile/password">密码</a></li>
									</ul>
								<?php else: ?>
									<form action="/mtime/index.php/Mshop/User/do_login" method="post">
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
			</div>
			
			<div class="mtime-box">
				<div class="bd">
					<ul>
						<li style="background:url('/mtime/Public/Mshop/images/1.jpg') center 0;">
							<a href="#" class="arealink"></a>
						</li>
						<li style="background:url('/mtime/Public/Mshop/images/1.jpg') center 0;">
							<a href="#" class="arealink"></a>
						</li>
						<li style="background:url('/mtime/Public/Mshop/images/1.jpg') center 0;">
							<a href="#" class="arealink"></a>
						</li>
					</ul>
				</div>
				<div class="mtime-btn">
					<a class="prev" href="javascript:;"></a>
					<a class="next" href="javascript:;"></a>
					<div class="hd"><ul></ul></div>
				</div>
			</div>
			
			<div class="t_nav2">
				<div class="t_naver clearfix">
					<div class="mulu" id="categoryMenuDiv">
						<i class="line"></i>
						<em></em>
						全部分类
					</div>
					<dl>
						<dd>
							<a href="#"><span>新品登陆</span></a>
							<a href="#"><span>预售</span></a>
							<a href="#"><span>礼品</span></a>
							<a href="#"><span>发烧友</span></a>
							<a href="#"><span>会员俱乐部</span></a>
							<a href="#"><span>门店列表</span></a>
						</dd>
					</dl>
				</div>
				<div id="categoryContentDiv" class="t_navbox" style="display:none;">
					<ul class="clearfix">
						<li>
							<a href="#" target="_blank">
								<span style="background:url(/mtime/Public/Mshop/images/wjmx.jpg) center center;"></span>
								<strong>玩具模型</strong>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<span style="background:url(/mtime/Public/Mshop/images/sjzb.jpg) center center;"></span>
								<strong>数码周边</strong>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<span style="background:url(/mtime/Public/Mshop/images/fsxb.jpg) center center;"></span>
								<strong>服饰箱包</strong>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<span style="background:url(/mtime/Public/Mshop/images/jjsh.jpg) center center;"></span>
								<strong>居家生活</strong>
							</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="content">
				<div class="t_hotlist">
					<dl class="clearfix" style="position:relative;">
						<dt>
							<a href="#" title="" target="_blank">
								<img src="/mtime/Public/Mshop/images/mkb.jpg" alt="">
							</a>
						</dt>
						<dd>
							<a href="#" title="" target="_blank">
								<img src="/mtime/Public/Mshop/images/kd.jpg" alt="">
							</a>
						</dd>
						<dd>
							<a href="#" title="" target="_blank">
								<img src="/mtime/Public/Mshop/images/kd.jpg" alt="">
							</a>
						</dd>
						<dd>
							<a href="#" title="" target="_blank">
								<img src="/mtime/Public/Mshop/images/kd.jpg" alt="">
							</a>
						</dd>
						<dd>
							<a href="#" title="" target="_blank">
								<img src="/mtime/Public/Mshop/images/kd.jpg" alt="">
							</a>
						</dd>
						<dd>
							<a href="#" title="" target="_blank">
								<img src="/mtime/Public/Mshop/images/th.jpg" alt="">
							</a>
						</dd>
					</dl>
				</div>
				<div class="t_actorbox">
					<div class="t_actornav">
						<a class="scrollprev" href="javascript:;"></a>
						<a class="scrollnext" href="javascript:;"></a>
						<ul>
							<li>
								<img style="" alt="" title="" src="/mtime/Public/Mshop/images/2.jpg">
							</li>
							<li>
								<img style="" alt="" title="" src="/mtime/Public/Mshop/images/2.jpg">
							</li>
							<li>
								<img style="" alt="" title="" src="/mtime/Public/Mshop/images/2.jpg">
							</li>
							<li>
								<img style="" alt="" title="" src="/mtime/Public/Mshop/images/2.jpg">
							</li>
							<li>
								<img style="" alt="" title="" src="/mtime/Public/Mshop/images/2.jpg">
							</li>
							<li>
								<img style="" alt="" title="" src="/mtime/Public/Mshop/images/2.jpg">
							</li>
							<li>
								<img style="" alt="" title="" src="/mtime/Public/Mshop/images/2.jpg">
							</li>
						</ul>
					</div>
					<div class="t_actor">
						<ul>
							<li style="z-index: 1;background: url(/mtime/Public/Mshop/images/3.jpg) center;">
								<dl class="clearfix">
									<dd>
										<a href="" alt="" title="" target="_blank" style="display:block;width:400px;height:170px;"></a>
										<a href="" alt="" title="" target="_blank" style="display:block;width:400px;height:170px;"></a>
										<a href="" alt="" title="" target="_blank" style="display:block;width:400px;height:170px;"></a>
									</dd>
									<dt>
										<a href="" alt="" title="" target="_blank" style="display:block;width:200px;height:510px;"></a>
									</dt>
									<dd>
										<a href="" alt="" title="" target="_blank" style="display:block;width:400px;height:170px;"></a>
										<a href="" alt="" title="" target="_blank" style="display:block;width:400px;height:170px;"></a>
										<a href="" alt="" title="" target="_blank" style="display:block;width:400px;height:170px;"></a>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
				
				<div class="t_rcommend">
					<div class="t_commendtext">
						<dl class="clearfix">
							<dd>
								<div style="background:url(/mtime/Public/Mshop/images/4.jpg);height:250px;">
									<h2>头脑特工队情感迷你公仔</h2>
									<p>情绪小人 占领头脑高地 </p>
									<strong>￥<span>29</span></strong>
									<a href="#" title="" target="_blank"></a>
									
								</div>
							</dd>
						</dl>
					</div>
				</div>
				
			</div>
			
		</div>
	</body>
	<script>
		$(".prev,.next").hover(function(){
			$(this).stop(true,false).fadeTo("show",0.9);
		},function(){
			$(this).stop(true,false).fadeTo("show",0.5);
		})
		$(".mtime-box").slide({
			titCell:".hd ul",
			mainCell:".bd ul",
			effect:"fold",
			interTime:4000,
			autoPlay:true,
			autoPage:true, 
			trigger:"click" 
		});
		
		$(".scrollprev,.scrollnext").hover(function(){
			$(this).stop(true,false).fadeTo("show",0.9);
		},function(){
			$(this).stop(true,false).fadeTo("show",0.5);
		})
		$(".t_actorbox").slide({
			titCell:"",
			mainCell:".t_actornav ul",
			autoPage: true,
			effect: "leftLoop",
			autoPlay: false,
			pnLoop:"false",
			delayTime:"500",
			scroll:1,
			vis: 5,
			prevCell:".scrollprev",
			nextCell:".scrollnext"
		});
	</script>
</html>