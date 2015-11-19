<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>管理日志 – 电影社区 – Mtime时光网</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Home/css/header.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/longcomment.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/footer.css">
		<script src="/mtime/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/mtime/Public/Home/js/header.js"></script>
		<script src="/mtime/Public/kd/kindeditor-min.js"></script>
		<script src="/mtime/Public/kd/lang/zh_CN.js"></script>
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
								<a href="#" title="Mtime时光网">Mtime时光网</a>
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
			
			<div id="appRegion">
				<div class="my_head">
					<div id="welcomeRegion">
						<h2>
							<a href="#">我的博客</a>
							<span class="px18 bold">
								<b class="hei">.</b>
									管理日志
							</span>
						</h2>
					</div>
				</div>
				<div class="my_out clearfix">
					<div class="my_nav clearfix">
						<ul>
							<li class="on">
								<a href="#" class="a1">
									<span>日志</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="t_blogout clearfix">
						<div class="t_movieout">
							<span class="jtbot">&nbsp;</span>
							<div id="commentObjRegion" class="table">
								<div class="t_r">
									<div class="td">
										<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($mrow['movie_id']); ?>" title="<?php echo ($mrow['movie_name']); ?> <?php echo (date('Y',$mrow['movie_start'])); ?>" target="_blank">
											<img src="/mtime/Public/<?php echo ($mrow['movie_pic']); ?>" width="106px" height="138px" alt="<?php echo ($mrow['movie_name']); ?> <?php echo (date('Y',$mrow['movie_start'])); ?>" class="img_box_fff">
										</a>
									</div>
									<div class="td pl20">
										<div class="clearfix">
											<h3 class="fl px14 mt3">
												<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($mrow['movie_id']); ?>" target="_blank" class="c_000"><?php echo ($mrow['movie_name']); ?></a>
												<span class="normal ml10">(<?php echo (date('Y',$mrow['movie_start'])); ?>)</span>
											</h3>
										</div>
										<div class="mt9">
											导演：
											<?php if(is_array($dnames)): $i = 0; $__LIST__ = $dnames;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dname): $mod = ($i % 2 );++$i;?><a href="#" class="c_000" target="_blank"><?php echo ($dname['actor_name']); ?></a>
												&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
										</div>
										<div class="mt9">
											主演：
											<?php if(is_array($anames)): $i = 0; $__LIST__ = array_slice($anames,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aname): $mod = ($i % 2 );++$i;?><a href="#" class="c_000" target="_blank"><?php echo ($aname['actor_name']); ?></a>
												&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
										</div>
										<div class="clearfix">
											<div class="fl ele_grade_main mt9">
												<span class="fl mll2">
													评分：
													<b class="c_green bold"><?php echo ($pf); ?></b>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix mt25">
							<div class="t_blogleft">
								<form action="/mtime/index.php/Home/Comment/addcomment" method="post" enctype="multipart/form-data">
								<input type="hidden" name="comment_mid" value="<?php echo ($mrow['movie_id']); ?>">
								<input type="hidden" name="comgrade_grade" value="<?php echo ($pf); ?>">
								<input type="hidden" name="comment_type" value="1">
								<!--标题-->
								<p>
									<input type="text" id="titleText" value="<?php echo ($_SESSION['comment_title']); ?>" class="my_ctitle c_a5" name="comment_title" placeholder="请输入标题">
								</p>
								<!--内容-->
								<div class="mt15">
									<div class="editout">
										<textarea name="comment_text" rows="20"><?php echo ($_SESSION['comment_text']); ?></textarea>
									</div>
								</div>
								<!--验证码-->
								<div id="vcodeRegion">
									<p class="mt12">
										<strong>验证码：</strong>
										<input type="text" value="" name="code" id="cod" maxlength="4" onkeyup="this.value = this.value.toUpperCase()" placeholder="点击获取验证码" style="width:110px;" class="t_text">
									</p>
									<p class="mt12 ml40 pl12" id="vcodep" style="display:none;">
										<img src="<?php echo U('Comment/Vcode');?>" id="code" onclick="this.src = '/mtime/index.php/Home/Comment/Vcode/'+Math.random() "  id="vcodeImage"  class="mr6 v_m">
										<a href="javascript:;" id="refreshVcodeButton">刷新</a>
									</p>
								</div>
								<!--操作按钮-->
								<p class="mt12">
									<input type="submit" value="发&nbsp;&nbsp;布" class="btn_fabu">
								</p>
							</div>
							<div class="t_blogright">
								<p class="line_dot mt15 mb15">&nbsp;</p>
								<!--作者-->
								<p>
									作者：
									<input id="postAuthorText" type="text" style="width:185px;" class="t_text" value="<?php echo ($_SESSION['member_nickname']); ?>">
								</p>
								<p class="mt12">
									时间：
									<input id="postTimeText" type="text" style="width:185px;" class="t_text" name="comment_time" value="<?php echo (date('Y-m-d H:i',NOW_TIME)); ?>">
								</p>
								<p class="line_dot mt15 mb15">&nbsp;</p>
								<p class="mt6">
									<input id="allowCommentCheckbox" type="checkbox" value="1" name="comment_pl" checked="checked">
									<label for="allowCommentCheckbox" class="ml6">允许评论</label>
								</p>
								<p class="line_dot mt15 mb15">&nbsp;</p>
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
		$("#cod").focus(function(){
			$("#vcodep").show();
		});
		$("#refreshVcodeButton").click(function(){
			$("#code").attr({"src":"/mtime/index.php/Home/Comment/Vcode/'+Math.random()"});
		});
	
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[name="comment_text"]', {
				resizeType : 0,
				allowImageUpload : true,
				items : [
					'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
					'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
					'insertunorderedlist', '|', 'emoticons', 'image', 'link']
			});
		});
	</script>
</html>