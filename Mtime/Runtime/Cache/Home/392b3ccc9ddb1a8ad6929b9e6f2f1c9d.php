<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>长治影讯 <?php echo ($crow['cinema_name']); ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Home/css/header.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/cinemadetail.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/footer.css">
		<script src="/mtime/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/mtime/Public/Home/js/header.js"></script>
		<script type="text/javascript" src="/mtime/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
		<style>
			
		</style>
		
	<link rel="stylesheet" href="/mtime/Public/Home/css/cinemaindex.css">
	<style>
		.ci_filmbox{
			display:none;
		}
	</style>

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
			
			<div class="cinema">
				<div class="cinema_bg">&nbsp;</div>
				<div class="cinema_box">
					<div class="bg_cinema">
						<div class="cinema_con">
							<div class="cinema_mid clearfix">
								<div class="aside fl">
									<div class="cinemabg">
										<dl class="cinema_info">
											<dt class="cinema_logo">
												<a href="/mtime/index.php/Home/Cinema/cinemamember/cid/<?php echo ($crow['cinema_id']); ?>" title="<?php echo ($crow['cinema_name']); ?>">
													<img src="/mtime/Public/<?php echo ($crow['cinema_logo']); ?>" alt="<?php echo ($crow['cinema_name']); ?>">
												</a>
											</dt>
											<dd class="cinema_tool">
												<ul class="lovetool clearfix">
													<li class="label">
														喜爱度：
													</li>
													<li class="lovepic">
														<div class="per_gradeboxer">
															<?php if(empty($crow['cinema_like'])): ?><div class="per_totalarea"></div>
															<?php else: ?>
																<div class="per_totalarea per_grade">
																	<i>
																		<?php echo ($crow['cinema_like']); ?>
																		<em style="font-size:13px;">%</em>
																	</i>
																</div><?php endif; ?>
														</div>
													</li>
													<li>
														<div class="lovetable">
															<div class="lovetxt">
																<b style="font-size:24px;"><?php echo ($crow['cinema_num']); ?></b>
																个影厅
															</div>
														</div>
													</li>
												</ul>
												<div class="filminfo">
													<p>
														<?php if($crow['cinema_3d'] == 1): ?><i class="ico_c_f02">&nbsp;</i><?php endif; ?>
														<?php if($crow['cinema_vip'] == 1): ?><i class="ico_c_f03">&nbsp;</i><?php endif; ?>
														<?php if($crow['cinema_qlz'] == 1): ?><i class="ico_c_f15">&nbsp;</i><?php endif; ?>													
													</p>
												
													<ul class="clearfix">
														<?php if($crow['cinema_myj'] == 1): ?><li>
																<i class="ico_c_f09">&nbsp;</i>
																免押金
															</li><?php endif; ?>
														<?php if($crow['cinema_qpj'] == 1): ?><li>
																<i class="ico_c_f25" title="影院大堂内时光网取票机">&nbsp;</i>
																取票机
															</li><?php endif; ?>
														<?php if($crow['cinema_stop'] == 1): ?><li>
																<i class="ico_c_f14">&nbsp;</i>
																停车
															</li><?php endif; ?>
														<?php if($crow['cinema_sk'] == 1): ?><li>
																<i class="ico_c_f12">&nbsp;</i>
																刷卡
															</li><?php endif; ?>
														<?php if($crow['cinema_wifi'] == 1): ?><li>
																<i class="ico_c_f13">&nbsp;</i>
																Wifi
															</li><?php endif; ?>				
														<li>
															<i class="ico_c_f26">&nbsp;</i>
															无障碍
														</li>
													</ul>
												</div>
												<div style="clear:both;"></div>
												<ul class="ci_address ci_other clearfix"></ul>										
											</dd>
											
										</dl>
									</div>
									<div class="upcoming">
										<div class="upbg">&nbsp;</div>
										<div class="uptitle">
											<h2>即将上映：</h2>
										</div>
										<?php if(is_array($mrows)): $i = 0; $__LIST__ = $mrows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mrow): $mod = ($i % 2 );++$i;?><div class="upmovie">
											<dl class="uptime">
												<dt><?php echo (date("m",$mrow['movie_start'])); ?>月</dt>
												<dd>
													<?php echo (date("d",$mrow['movie_start'])); ?>
													<i class="ico_c_uptip">&nbsp;</i>
												</dd>
											</dl>
											<ul class="uppic">
												<li class="clearfix">
													<div class="picmid">
														<a href="<?php echo ($mrow['video'][0]['video_address']); ?>">
															<img src="/mtime/Public/<?php echo ($mrow['movie_pic']); ?>" width="75" height="100" title="<?php echo ($mrow['movie_name']); ?> <?php echo ($mrow['movie_ename']); ?>(<?php echo (date('Y',$mrow['movie_start'])); ?>)">
															<i class="ico_c_video" title="<?php echo ($mrow['movie_name']); ?> <?php echo ($mrow['movie_ename']); ?>(<?php echo (date('Y',$mrow['movie_start'])); ?>)">&nbsp;</i>
														</a>
													</div>
													<div class="txtmid">
														<h2>
															<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($mrow['movie_id']); ?>" target="_blank">
																<?php echo ($mrow['movie_name']); ?>
															</a>
														</h2>
														<p>4812人想看</p>
														<p class="dh">
															<?php if(is_array($mrow['type'])): foreach($mrow['type'] as $key=>$mtrow): echo ($mtrow['type_name']); ?>
																<span>、</span><?php endforeach; endif; ?>
														</p>
													</div>
												</li>
											</ul>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>
									</div>
								</div>
								<div class="main fr">
									<div class="ci_title">
										<h2><?php echo ($crow['cinema_name']); ?> </h2>
										<p><?php echo ($crow['cinema_address']); ?></p>
										<p>电话：<?php echo ($crow['cinema_tel']); ?> <span>营业时间：<?php echo ($crow['cinema_time']); ?></span></p>
									</div>
									<div class="ci_menu">
										<ul class="clearfix navlb">
											<li>
												<a href="/mtime/index.php/Home/Cinema/index/cid/<?php echo ($crow['cinema_id']); ?>">
													选座购票
													<i class="ico_c_jiao01">&nbsp;</i>
												</a>
											</li>
											<li>
												<a href="/mtime/index.php/Home/Cinema/cinemaabstract/cid/<?php echo ($crow['cinema_id']); ?>">
													影院介绍
													<i class="ico_c_jiao01">&nbsp;</i>
												</a>
											</li>
											<li>
												<a href="/mtime/index.php/Home/Cinema/cinemamember/cid/<?php echo ($crow['cinema_id']); ?>">
													会员服务
													<i class="ico_c_jiao01">&nbsp;</i>
												</a>
											</li>
											<li>
												<a href="#">
													优惠活动
													<i class="ico_c_jiao01">&nbsp;</i>
												</a>
											</li>
										</ul>
									</div>
									<div id="M14_A_Cinema_Nav">
										<div class="mt15 tr pr20">
											<a href="#">
												<img src="/mtime/Public/Home/images/guanggao.jpg">
											</a>
										</div>
									</div>
									
	<div class="ci_mon" id="showtimeRegion">
		<h2 class="thefilm">
			<?php echo (date("m",$time)); ?>月<?php echo (date("d",$time)); ?>日上映
			<b><?php echo ($cmnum); ?></b>
			部 - 共
			<b><?php echo ($cznum); ?></b>
			场
		</h2>
		<div class="scroll_time">
			<div class="timemid">
				<ul id="valueDateRegion" class="transition6">
					<li class="curr">
						<a href="#" target="_self">
							今天
							<b><?php echo (date("m",$time)); ?>月<?php echo (date("d",$time)); ?>日</b>
							<i class="ico_c_jiao02">&nbsp;</i>
						</a>
					</li>
					<!--<li>
						<a href="#" target="_self">
							明天
							<b>10月9日</b>
							<i class="ico_c_jiao02">&nbsp;</i>
						</a>
					</li>-->
				</ul>
			</div>
		</div>
		<div class="ci_film">
			<?php if(empty($cmrows)): ?><div class="nomovie"></div>
			<?php else: ?>
			
			<div class="scroll_film" id="movieListRegion">
				<div class="filmbox">
					<a href="javascript:;" class="film_prev"></a>
					<a href="javascript:;" class="film_next"></a>
					<div class="frul">
						<ul class="box" style="height:242px">
							<?php if(is_array($cmrows)): $i = 0; $__LIST__ = $cmrows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cmrow): $mod = ($i % 2 );++$i;?><li>
									<a href="javascript:;" title="<?php echo ($cmrow['movie_name']); ?> <?php echo ($cmrow['movie_ename']); ?> <?php echo (date('Y',$cmrow['movie_start'])); ?>">
										<img src="/mtime/Public/<?php echo ($cmrow['movie_pic']); ?>" width="152" height="202">
									</a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="filmboxlist">
			<?php if(is_array($czrows)): $i = 0; $__LIST__ = $czrows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$czrow): $mod = ($i % 2 );++$i;?><div class="ci_filmbox">
					<div class="filmtxt" id="movieDetailRegion">
						<h2>
							<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($czrow['movie_id']); ?>" target="_blank" title="<?php echo ($czrow['movie_name']); echo ($czrow['movie_ename']); ?>">
								<?php echo ($czrow['movie_name']); ?>
							</a>
							<div class="db_point"><?php echo ($czrow['movie_graded']); ?></div>
						</h2>
						<p>
							<span style="width:210px;">
								导演：
								<?php if(is_array($czrow['director'])): $i = 0; $__LIST__ = array_slice($czrow['director'],0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$czrowd): $mod = ($i % 2 );++$i; echo ($czrowd['actor_name']); ?>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
							</span>
							<span>
								主演：
								<?php if(is_array($czrow['actor'])): $i = 0; $__LIST__ = array_slice($czrow['actor'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$czrowa): $mod = ($i % 2 );++$i; echo ($czrowa['actor_name']); ?>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
							</span>
						</p>
						<p>
							<span style="width:210px;">时长：<?php echo ($czrow['movie_time']); ?> min</span>
							<span>
								类型：
								<?php if(is_array($czrow['type'])): $i = 0; $__LIST__ = $czrow['type'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$czrowt): $mod = ($i % 2 );++$i; echo ($czrowt['type_name']); ?>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
							</span>
						</p>
						<a href="<?php echo ($czrow['video']['video_address']); ?>" class="playfilm">预告片</a>
					</div>
					<div id="showtimesRegion">
						<table class="playtime">
							<tbody>
								<?php if(is_array($czrow['cz'])): $i = 0; $__LIST__ = $czrow['cz'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$czrowc): $mod = ($i % 2 );++$i;?><tr class="first">
										<td class="tl">
											<div class="p_r">
												<p class="ci_p_time"><?php echo (date("H:i",$czrowc['cz_start'])); ?></p>
												<p class="end">预计<?php echo (date("H:i",$czrowc['cz_start']+$czrow['movie_time']*60)); ?>散场</p>
											</div>
										</td>
										<td>
											<p>
												<?php switch($czrowc['cz_tx']): case "0": ?>2D<?php break;?>
													<?php case "1": ?>3D<?php break;?>
													<?php case "2": ?>4D<?php break;?>
													<?php case "3": ?>5D<?php break; endswitch;?>
											</p>
											<p><?php echo ($czrowc['cz_language']); ?>版</p>
										</td>
										<td>
											<div>
												<p><?php echo ($czrowc['cz_yt']); ?>号厅</p>
											</div>
										</td>
										<td>
											<p>
												<span>¥</span>
												<?php echo ($czrowc['cz_money']); ?>
											</p>
											<p>参考价</p>
										</td>
										<td class="tr"></td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
						</table>
						<p class="tc px14 c_666 pt25 pb30">[时光网提供的影讯仅供参考，具体情况以影院现场为准！]</p>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div><?php endif; ?>
		</div>
	</div>

								</div>
							</div>
							<?php if($cpicnum == 0): else: ?>
							<div class="cinama_pic">
								<div class="ci_pic_title">
									<h2>
										<b><?php echo ($cpicnum); ?></b>
										张影院图片
									</h2>
								</div>
								<div class="ci_pic_box">
									<a class="ico_c_prev prev" href="javascript:;"></a>
									<div class="ci_srcllpic">
											<ul id="mr_fu">
												<?php if(is_array($cpic)): $i = 0; $__LIST__ = $cpic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pic): $mod = ($i % 2 );++$i;?><li>
														<img src="/mtime/Public/<?php echo ($pic['cinemapic_address']); ?>" />
													</li><?php endforeach; endif; else: echo "" ;endif; ?>
											</ul>
									</div>
									<a class="ico_c_next next" href="javascript:;"></a>
								</div>
							</div><?php endif; ?>
						</div>
					</div>
					
					<a href="http://feature.mtime.com/mobile/" target="_blank">
						<img src="/mtime/Public/Home/images/appdown.jpg" style="margin:0 auto;">
					</a>
					
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
	<script type="text/javascript">
		$(document).ready(function () {
			
			/* 图片滚动效果 */
			$(".ci_pic_box").slide({
				titCell: "",
				mainCell: ".ci_srcllpic ul",
				autoPage: true,
				effect: "left",
				autoPlay: false,
				pnLoop:"false",
				scroll:"2",
				vis: 3
				
			});
		});
		
		$(".dh").each(function(){
			$(this).children("span:last").hide();
		});
	</script>

	<script>
		$(".navlb li").eq(0).addClass("curr");
			
		/* 图片滚动效果 */
		$(".filmbox").slide({
			titCell: "",
			mainCell: ".frul ul",
			autoPage: true,
			effect: "left",
			prevCell:".film_prev",
			nextCell:".film_next",
			autoPlay: false,
			pnLoop:"false",
			scroll:"2",
			vis: 4
			
		});
		
		w = parseInt($(".box").css("width"))+300;
		$(".box").css({"width":w});

		$(".box li:first").addClass("oncurr");
		$(".box li:first").children().children("img").attr({"width":"182","height":"242"});
		
		
		$(".box li").click(function(){
			$(".box li").not($(this)).removeClass("oncurr");
			$(this).addClass("oncurr");
			$(".box li").not($(this)).children().children("img").attr({"width":"152","height":"202"});
			$(this).children().children("img").attr({"width":"182","height":"242"});
			index = $(this).index(".box li");
			$("#filmboxlist").children(".ci_filmbox").hide();
			$("#filmboxlist").children(".ci_filmbox").eq(index).show();
		});
		
		$(".ci_filmbox:first").show();
		
	</script>


</html>