<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title><?php echo ($mrow['movie_name']); ?> 影评-Mtime时光网 – Mtime时光网</title>
		<link rel="stylesheet" href="/mtime/Public/Home/css/header.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/moviedetial.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/footer.css">
		<script src="/mtime/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/mtime/Public/Home/js/header.js"></script>
		
	<link rel="stylesheet" href="/mtime/Public/Home/css/moviesortcomment.css">
	<script src="/mtime/Public/Home/js/movieindex.js"></script>

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
			<div id="db_sechead">
				<div class="db_head">
					<div>
						<h1>
							<a href="#"><a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($mrow['movie_id']); ?>"><?php echo ($mrow['movie_name']); ?></a></a>
						</h1>
						<p class="db_year">
							(<?php echo (date("Y",$mrow['movie_start'])); ?>)
						</p>
						<p class="db_enname">
							<a href="#"><a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($mrow['movie_id']); ?>"><?php echo ($mrow['movie_ename']); ?></a></a>
						</p>
					</div>
				</div>
			</div>
			
			
	<div class="db_nav db_secnav">
		<dl id="movieNavigationRegion">
			<dd>
				<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($mrow['movie_id']); ?>">
					影片首页
				</a>
			</dd>
			<dd>
				<a href="/mtime/index.php/Home/Moviedetial/movievideo/id/<?php echo ($mrow['movie_id']); ?>">
					<span><?php echo ($vnum); ?></span>
					 个视频
				</a>
			</dd>
			<dd>
				<a href="/mtime/index.php/Home/Moviedetial/movieposter/id/<?php echo ($mrow['movie_id']); ?>">
					<span><?php echo ($pnum); ?></span>
					张图片
				</a>
			</dd>
			<dd>
				<a href="#">
					<span><?php echo ($anum); ?></span>
					 位演职员
				</a>
			</dd>
			<dd>
				<a href="/mtime/index.php/Home/Moviedetial/movielongcomment/id/<?php echo ($mrow['movie_id']); ?>">
					<span><?php echo ($cnum); ?></span>
					 条影评
				</a>
			</dd>
			<dd>
				<a href="#">
					<span>48</span>
					 条新闻
				</a>
			</dd>
			<dt class="more on" id="detailMenuRegion">
				<a href="javascript:;">
					更多
					<em id="detailMenuRegionLabel">&nbsp;</em>
				</a>
				<dl class="db_nav_sel" id="detailSubMenuRegion">
					<dd>
						<a href="/mtime/index.php/Home/Moviedetial/movieabstract/id/<?php echo ($mrow['movie_id']); ?>">剧情</a>
					</dd>
					<dd>
						<a href="#">角色介绍</a>
					</dd>
					<dd>
						<a href="/mtime/index.php/Home/Moviedetial/moviesecret/id/<?php echo ($mrow['movie_id']); ?>">幕后揭秘</a>
					</dd>
					<dd>
						<a href="#">获奖记录</a>
					</dd>
					<dd>
						<a href="#">更多资料</a>
					</dd>
				</dl>
			</dt>
		</dl>
	</div>

			
	<div class="db_contout">
		<div class="db_cont">
			<div class="details_nav">
				<ul id="detailSubMenuInDetailPagesRegion">
					<li>
						<i>&nbsp;</i>
						<a href="/mtime/index.php/Home/Moviedetial/movielongcomment/id/<?php echo ($mrow['movie_id']); ?>">长影评(<?php echo ($lcnum); ?>)</a>
					</li>
					<li class="on"> 
						<i>&nbsp;</i>
						<a href="/mtime/index.php/Home/Moviedetial/moviesortcomment/id/<?php echo ($mrow['movie_id']); ?>">微评论(<?php echo ($scnum); ?>)</a>
					</li>
				</ul>
				<div class="add_comment">
					<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($mrow['movie_id']); ?>#ratingDownRegion" class="add_l">
						<i></i>
						写影评
					</a>
				</div>
			</div>
			<div class="clearfix pt9">
				<div class="db_selbox fr" style="width:80px">
					<div id="filterContainer" class="db_selinner">
						<i></i>
						<div id="currentBtn" class="db_selon">最新</div>
						<div id="dbseldrop" class="db_seldrop">
							<a href="/mtime/index.php/Home/Moviedetial/moviesortcomment/id/<?php echo ($mrow['movie_id']); ?>">
								<p class="active">
									<em></em>
									最新
								</p>
							</a>
							<a href="javascript:;">
								<p>
									<em></em>
									最热
								</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="db_shortcomment">
				<dl id="tweetRegion">
					<?php if(is_array($comrows)): $i = 0; $__LIST__ = $comrows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comrow): $mod = ($i % 2 );++$i;?><dd>
							<div class="mod_short">
								<h3><?php echo ($comrow['comment_text']); ?></h3>
								<div class="comboxuser">
									<div class="pic_58">
										<a href="#" title="<?php echo ($comrow['mem']['member_nickname']); ?>" target="_blank">
											<img src="/mtime/Public/<?php echo ($comrow['mem']['member_pic']); ?>" width="48" height="48" alt="<?php echo ($comrow['mem']['member_nickname']); ?>">
										</a>
										<p class="px14">
											<a href="#" target="_blank"><?php echo ($comrow['mem']['member_nickname']); ?></a>
										</p>
										<p class="mt6 px12">
											<span>看过 </span>
											<span class="db_point ml6"><?php echo ($comrow['grade']['comgrade_grade']); ?>.0</span>
										</p>
									</div>
									<div class="mt10 pr5">
										<a href="javascript:;"><?php echo (date("Y-n-d",$comrow['comment_time'])); ?></a>
									</div>
								</div>
								<div class="mt18">
									<div class="ele_replay">
										<div class="textarea">
											<textarea placeholder="发表评论" class="tex"></textarea>
											<span style="display:none;" class="commentid"><?php echo ($comrow['comment_id']); ?></span>
										</div>
										<div class="db_comtool tr mt20">
											<a class="com_good" title="赞" href="javascript:;">
												<i title="赞"></i><?php echo ($comrow['comment_zs']); ?>
											</a>
											<a class="com_share" title="转发" href="javascript:;">
												<i title="转发"></i>0
											</a>
											<a class="com_bbs" title="评论" href="javascript:;">
												<i title="评论"></i><?php echo ($comrow['replaynum']); ?>
											</a>
										</div>
										<div class="mt6" style="display:none;" class="tjhf">
											<span class="kztext">
												还可以输入
												<span class="zs">210</span>
												个字
											</span>
											<span class="hf">回复</span>
										</div>
									</div>
								</div>
								<div id="newcomment">
									
								</div>
							</div>
							
						</dd><?php endforeach; endif; else: echo "" ;endif; ?>
				</dl>
			</div>
			<div class="pagenav tc p_r" id="PageNavigator">
				<?php echo ($show); ?>
			</div>
		</div>
	</div>
	<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="tishidl">
			<a id="tiplogin" class="i_pop_close tiplogin" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">请先登录！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 tiplogin">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="texttishi">
			<a id="textnum" class="i_pop_close textnum" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">您输入的字数过长！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 textnum">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="textcom">
			<a  class="i_pop_close textcom" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">评论内容不能为空！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 textcom">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div class="my_layer w295" style="position: fixed; top: 200px; left: 515px; z-index: 111;display:none;" id="plsuccess">
			<a id="successclose" class="i_pop_close successclose" title="关闭" href="javascript:void(0)">&nbsp;</a>
			<div class="inner w295">
				<div class="popmid">
					<div class="tc mt25 mb30 px20 lh15">评论成功！</div>
					<div class="tc pb12 pt15">
						<a href="javascript:;" class="btn_blue mr15 successclose">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div id="overlay" style="opacity: 0.6; zoom: 1; z-index: 110; position: fixed; margin: 0px; padding: 0px; top: 0px; left: 0px; width: 100%; height: 100%; background: rgb(0, 0, 0);display:none;"></div>

			<div style="clear:both;"></div>
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
		$("#detailMenuRegion").hover(
			function(){
				$(".db_nav dt.more em").css({"background-position":"-59px -15px"});
				$("#detailSubMenuRegion").show();
			},
			function(){
				$(".db_nav dt.more em").css({"background-position":"-68px -15px"});
				$("#detailSubMenuRegion").hide();
			}
		);
	</script>
	
	<script>
	$("#filterContainer").hover(
		function(){
			$(this).addClass("open");
			$(this).css({"height":"75px"});
			$("#dbseldrop").css({"height":"50px"});
		},
		function(){
			$(this).removeClass("open");
			$(this).css({"height":"0px"});
			$("#dbseldrop").css({"height":"0px"});
		}
	);
	
	$("#PageNavigator .next").text("下一页");
	$("#PageNavigator .prev").text("上一页");
	
	$(".tex").keyup(function(){
		var len = $(this).val().length;
		if(len>210){
			var l = len-210;
			str = "字数超出"+l+"字";
			$(this).parent().next().next().children(".kztext").text(str).css({"color":"#ca4004"});
		}else{
			var leng = 210-len;
			var s = "还可以输入 "+leng+" 个字";
				$(this).parent().next().next().children(".kztext").text(s).css({"color":"#333"});
		}
	});
	
	$(".hf").click(function(){
		obj = $(this);
		var dl=<?php echo ($_SESSION['member_login']?"1":"0"); ?>;
		var len = $(this).parent().prev().prev().children().eq(0).val().length;
		var cid = $(this).parent().prev().prev().children().eq(1).text();
		
		var textcont = $(this).parent().prev().prev().children().eq(0).val();
		if(dl==1){
			if(len!=0){
				if(len<=210){
					$.ajax({
						'type':'get',
						'url':"/mtime/index.php/Home/Comment/recomment",
						'data':{'recomment_text':textcont,'recomment_cid':cid},
						'async':false,
						'success':function(a){
							
							if(a==1){
								var str = "<div class='pic_32 mt20'><a href='javascript:;'><img width='32' height='32' src='/mtime/Public/<?php echo ($_SESSION['member_pic']); ?>' alt='<?php echo ($_SESSION['member_nickname']); ?>'></a><p class='px14'><a href='javascript:;' target='_blank'><?php echo ($_SESSION['member_nickname']); ?></a><span class='pl25' style='font-size:12px;'>刚刚</span></p><p class='mt5'>"+textcont+"</p></div>";
								
								obj.parent().parent().parent().next().append(str);
						
								obj.parent().prev().prev().children().eq(0).val("");
								$("#plsuccess").show();
								$("#overlay").show();
							}
						}
					});
				}else{
					$("#texttishi").show();
					$("#overlay").show();
				}
			}else{
				$("#textcom").show();
				$("#overlay").show();
			}
			
		}else{
			$("#tishidl").show();
			$("#overlay").show();
		}
	});
	
	$(".tiplogin").click(function(){
		$("#tishidl").hide();
		$("#overlay").hide();
	});

	$(".textcom").click(function(){
		$("#textcom").hide();
		$("#overlay").hide();
	});

	$(".textnum").click(function(){
		$("#texttishi").hide();
		$("#overlay").hide();
	});

	$(".successclose").click(function(){
		$("#plsuccess").hide();
		$("#overlay").hide();
	});

	</script>

</html>