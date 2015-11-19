<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>基本信息 – 基本资料 – 电影社区 – Mtime时光网</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Home/css/header.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/proindex.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/footer.css">
		<script src="/mtime/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/mtime/Public/Home/js/header.js"></script>
		
	<link rel="stylesheet" href="/mtime/Public/Home/css/basic.css">
	<script src="/mtime/Public/Home/js/jquery.calendar.js"></script>
	<script src="/mtime/Public/Home/js/jquery.cxselect.min.js"></script>

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
							<span>基本资料</span>
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
		基本信息
	</li>
	<li>
		<span>&nbsp;</span>
		<a href="/mtime/index.php/Home/Profile/avatar">管理头像</a>
	</li>
	<li>
		<span>&nbsp;</span>
		教育职业
	</li>
	<li>
		<span>&nbsp;</span>
		影迷档案
	</li>
	<li>
		<span>&nbsp;</span>
		个性域名
	</li>

							</ul>
						</div>
						
						
	<div class="t_setright">
		<div>
			<div class="right_info_l1 fl m_data">
				<form id="infoForm" action="/mtime/index.php/Home/Profile/update" method="post">
					<input type="hidden" name="m_id" value="<?php echo ($row['m_id']); ?>">
					<p>
						<span class="title1">登录帐号</span>
						<input type="text" class="w310" value="<?php echo ($row['member_name']); ?>" disabled="disabled" id="txt_email" name="member_name">
					</p>
					<p class="mt20">
						<span class="title1">昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称</span>
						<input type="text" class="w310" value="<?php echo ($row['member_nickname']); ?>" id="txt_nickname" name="member_nickname">
					</p>
					<p class="mt20">
						<span class="title1">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;氏</span>
						<input type="text" class="w60" value="<?php echo ($row['member_xs']); ?>" id="txt_lastname" name="member_xs">
						<span class="ml12 mr6">名字</span>
						<input type="text"  class="w60" value="<?php echo ($row['member_mz']); ?>" id="txt_firstname" name="member_mz">
					</p>
					<p class="mt20">
						<span class="title1">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</span>
						<input type="radio" name="member_sex" id="boy" class="mr3" value="1"  <?php echo ($row['member_sex']==1 ? "checked" : ""); ?> />
						<label for="boy">男</label>
						<input type="radio" name="member_sex" id="girl" class="ml15 mr3" value="0"  <?php echo ($row['member_sex']==0 ? "checked" : ""); ?> />
						<label for="girl">女</label>
					</p>
					<div class="mt20">
						<span class="title1">生&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;日</span>
						<span style="display:inline-block;margin-top:3px;">
							<select id="idYear" name="member_y" data="<?php echo ($row['member_y']); ?>" style="width:54px;margin-right:8px;"></select>年 
							<select id="idMonth" name="member_m" data="<?php echo ($row['member_m']); ?>" style="width:44px;margin-right:8px;"></select>月 
							<select id="idDay" name="member_d" data="<?php echo ($row['member_d']); ?>" style="width:44px;margin-right:8px;"></select>日
						</span>
					</div>
					<div class="mt20" style="height:30px;">
						<span class="title1">居&nbsp;&nbsp;住&nbsp;地</span>
						<span style="display:inline-block;margin-top:3px;">
							<div id="global_location">
								<select class="country" data-first-title="选择国家" data-value="<?php echo ($row['member_country']); ?>" name="member_country"></select>
								<select class="state" data-first-title="选择省" data-value="<?php echo ($row['member_p']); ?>" name="member_p"></select>
								<select class="city" data-first-title="选择城市" data-value="<?php echo ($row['member_city']); ?>" name="member_city"></select>
							</div>
						</span>
						
					</div>
					<div class="mt20" style="position:relative;">
						<span class="title1">个性签名</span>
						<p>
							<textarea id="txt_sign" class="w320 fl" rows="4" style="outline:none;" name="member_qm"><?php echo ($row['member_qm']); ?></textarea>
							<a id="a_help_sign" href="javascript:;" class="tag_icon ml12 hmr9 mt3"></a>
						</p>
						<div class="eject_outer" id="sign" style="position: absolute; top: -55px; left: 310px; z-index: 101;display:none;">
							<div class="eject" style="width:280px;">
								<p class="directiontag"></p>
								<p class="c_666">签名将在你回复群组话题、日志、照片博客时出现。</p>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="mt20" style="position:relative;">
						<span class="title1">个人介绍</span>
						<p>
							<textarea id="txt_intro" class="w320 fl" rows="4" style="outline:none;" name="member_js"><?php echo ($row['member_js']); ?></textarea>
							<a id="a_help_intro" href="javascript:;" class="tag_icon ml12 hmr9 mt3"></a>
						</p>
						<div class="eject_outer" id="intro" style="position: absolute; top: -55px; left: 310px; z-index: 101;display:none;">
							<div class="eject" style="width:280px;">
								<p class="directiontag"></p>
								<p class="c_666">介绍将在你的个人微评页面、个人博客页面出现。</p>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<p class="mt20">
						<input type="submit" class="btn_blue" id="btn_save" value="保 存">
					</p>
				</form>
			</div>
		</div>
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
		$(document).ready(function () {
			var myDate = new Date();
			$("#dateSelector").DateSelector({
					ctlYearId: 'idYear',
					ctlMonthId: 'idMonth',
					ctlDayId: 'idDay',
					defYear: myDate.getFullYear(),
					defMonth: (myDate.getMonth()+1),
					defDay: myDate.getDate(),
					minYear: 1900,
					maxYear: (myDate.getFullYear()+1)
			});
		});
		
		
		$.cxSelect.defaults.url = '/mtime/Public/Home/js/cityData.min.json';
		
		$('#global_location').cxSelect({
			url: '/mtime/Public/Home/js/globalData.min.json',
			selects: ['country', 'state', 'city'],
			nodata: 'none'
		});
		
		$("#a_help_sign").hover(
			function(){
				$("#sign").show();
			},
			function(){
				$("#sign").hide();
			}
		);
		$("#a_help_intro").hover(
			function(){
				$("#intro").show();
			},
			function(){
				$("#intro").hide();
			}
		);
		
		$("#nav").children().eq(0).addClass("on");
		$("#nav").children().children().addClass("a1");
		
		$("#setsider").children().eq(0).addClass("on");
</script>

	
</html>