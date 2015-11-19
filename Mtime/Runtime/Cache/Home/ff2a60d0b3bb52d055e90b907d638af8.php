<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>长治影讯,长治电影院-在线选座购票-购电影票</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Home/css/indexheader.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/index.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/hdp.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/footer.css">
		<link rel="stylesheet" href="/mtime/Public/Home/css/xscroll.css">	
		<script src="/mtime/Public/Home/js/jquery-1.8.3.min.js"></script>
		<script src="/mtime/Public/Home/js/jquery.SuperSlide.2.1.1.js"></script>
		<script src="/mtime/Public/Home/js/header.js"></script>
		<script src="/mtime/Public/Home/js/index.js"></script>
		<style>
			
		</style>
	</head>
	<body>
		<div class="contanier">
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
								<a href="/mtime/index.php/Home/Index/index" title="Mtime时光网">Mtime时光网</a>
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
			</div>
			
			<div class="mtime-box">
				<div class="bd">
					<ul>
						<?php if(is_array($sl)): foreach($sl as $key=>$sld): ?><li style="background: url(/mtime/Public/<?php echo ($sld['slide_bg']); ?>) no-repeat center center">
								<div class="m-width">
								<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($sld['slide_mid']); ?>"><img src="/mtime/Public/<?php echo ($sld['slide_pic']); ?>" title="<?php echo ($sld['slide_name']); ?>"/></a>
								</div>
							</li><?php endforeach; endif; ?>
					</ul>
				</div>
				<div class="mtime-btn">
					<a class="prev" href="javascript:;"></a>
					<a class="next" href="javascript:;"></a>
					<div class="hd"><ul></ul></div>
				</div>
			</div>
			
			<div class="filmcon">
				<div class="isthefilm">
					<div class="onlineticket" id="ticketSearchFixDiv">
						<div class="midbox">
							<div class="cityselect">
								<h2>长治</h2>
								<div id="changecity">
									<a href="javascript:;" class="citylink">切换城市</a>
								</div>
							</div>
							<div class="movieselectbox">
								<div class="moviemid m_movie">
									<span>选电影</span>
									<a href="javascript:;" class="ico_select"></a>
								</div>
								<div class="moviemid m_cinema">
									<span>选影院</span>
									<a href="javascript:;" class="ico_select"></a>
								</div>
								<div class="moviemid notime">
									<span>选时间</span>
									<a href="javascript:;" class="ico_select"></a>
								</div>
								<div class="ticketinfo">
									<a class="ticket">选座购票</a>
								</div>
								<div class="moviestip" style="display:none;">
									<div class="searcher">
										<input type="text" name="search" placeholder="输入影片名称快速定位" class="textsearch">
										<i class="sub"></i>
									</div>
									<ul class="sear">
										<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
												<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($row['movie_id']); ?>" class="tipsearch">
													<?php if(empty($row['movie_graded'])): else: ?>
														<b class="db_point"><?php echo ($row['movie_graded']); ?></b><?php endif; ?>
													<span><?php echo ($row['movie_name']); ?></span>
												</a>
											</li><?php endforeach; endif; else: echo "" ;endif; ?>					
									</ul>
								</div>
								<div class="cinematip" style="display:none;">
									<div class="searcher">
										<input type="text" name="search" placeholder="输入影院名称快速定位" class="cinemasearch">
										<i class="sub"></i>
									</div>
									<ul class="sear">
										<?php if(is_array($crows)): $i = 0; $__LIST__ = $crows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$crow): $mod = ($i % 2 );++$i;?><li>
												<a href="/mtime/index.php/Home/Cinema/index/cid/<?php echo ($crow['cinema_id']); ?>" class="cinematipsearch">
													<span><?php echo ($crow['cinema_name']); ?></span>
												</a>
											</li><?php endforeach; endif; else: echo "" ;endif; ?>					
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<div class="isthebox">
						<div class="tit">
							<h2>
								正在热映
								<span><?php echo ($num); ?></span>
								部
							</h2>
							<div class="filmlink" id="xz">
								<ul>
									<li>
										<a href="javascript:;" class="on">
											全部
										</a>
									</li>
									<span>|</span>
									<li>
										<a href="javascript:;">
											3D
										</a>
									</li>
									<span>|</span>
									<li>
										<a href="javascript:;">
											IMAX
										</a>
									</li>
									<span>|</span>
									<li>
										<a href="javascript:;">
											动作
										</a>
									</li>
									<span>|</span>
									<li>
										<a href="javascript:;">
											喜剧
										</a>
									</li>
									<span>|</span>
									<li>
										<a href="javascript:;">
											动画
										</a>
									</li>
									<span>|</span>
									<li>
										<a href="javascript:;">
											冒险
										</a>
									</li>
								</ul>
							</div>
							<div class="filmsearch">
								<input type="text" id="hotplaySearchText" class="film" placeholder="搜索影片">
								<input type="button" id="hotplaySearchButton" class="but">
							</div>
						</div>
						
						<div style="clear:both"></div>
						<div id="hotplayContent">	
							<div>
								<div style="clear:both"></div>
								<div class="moviebox">
									<div class="firstmovie fl">
										<dl>
											<dt>
												<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($data['movie_id']); ?>" target="_blank" title="<?php echo ($data['movie_name']); ?>">
													<img src="/mtime/Public/<?php echo ($data['movie_pic']); ?>" width="270" height="360" alt="<?php echo ($data['movie_name']); ?>">
												</a>
												<div class="banben">
													<?php if($data['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
													<?php if($data['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
													<?php if($data['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
													<?php if($data['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
												</div>
											</dt>
											<dd style="position: relative;">
												<div class="score">
													<b>总评分</b>
													<p><?php echo ($data['movie_graded']); ?></p>
												</div>
												<h2>
													<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($data['movie_id']); ?>" target="_blank"><?php echo ($data['movie_name']); ?></a>
												</h2>
												<h3 class="t">
													<span><?php echo ($data['movie_time']); ?>分钟 -</span>
													<?php if(is_array($data['type'])): $i = 0; $__LIST__ = array_slice($data['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($d['type_name']); ?></a>
														<span style="padding-right:5px;">/ </span><?php endforeach; endif; else: echo "" ;endif; ?>
												</h3>
												<p class="hotmovie">
													<span class="ico_dot"></span>
													<span><?php echo ($data['movie_resume']); ?></span>
												</p>
												<div class="moviebtn">
													<strong><?php echo ($data['money']); ?></strong>
													<span style="">元起</span>
													<a class="tic" href="#">选座购票</a>
												</div>
											</dd>
										</dl>
									</div>
									
									<div class="othermovie fr">
										<ul>
										<?php if(is_array($rows)): $i = 0; $__LIST__ = array_slice($rows,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li>
												<a class="picbox" href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($row['movie_id']); ?>" target="_blank" alt="<?php echo ($row['movie_name']); ?>">
													<img src="/mtime/Public/<?php echo ($row['movie_pic']); ?>" width="100" height="140">
													<?php if(empty($row['movie_graded'])): ?><span></span>
													<?php else: ?>
														<span class="score"><?php echo ($row['movie_graded']); ?></span><?php endif; ?>	
													<?php if($row['movie_hot'] == 1): ?><span class="icon_hot"></span><?php endif; ?>
													<span class="banben">
														<?php if($row['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
														<?php if($row['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
														<?php if($row['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
														<?php if($row['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
														
													</span>
												</a>
												<dl>
													<dt>
														<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($row['movie_id']); ?>" target="_blank"><?php echo ($row['movie_name']); ?></a>
													</dt>
													<dd class="t">
														<?php if(empty($row['movie_time'])): ?><span></span>
														<?php else: ?>
															<span><?php echo ($row['movie_time']); ?>分钟-</span><?php endif; ?>
														<?php if(is_array($row['type'])): $i = 0; $__LIST__ = array_slice($row['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($r['type_name']); ?></a>
															<span style="padding-right:5px;">/</span><?php endforeach; endif; else: echo "" ;endif; ?>
													</dd>
													<dd>
														<?php if(empty($row['yy'])): ?>0
														<?php else: ?>
														 <?php echo ($row['yy']); endif; ?>
														家影院上映
														<?php if(empty($row['cz'])): ?>0
														<?php else: ?>
														 <?php echo ($row['cz']); endif; ?>
														场
													</dd>
													<dd class="hot">
														<span class="ico_dot"></span>
														<span><?php echo ($row['movie_resume']); ?></span>
													</dd>
													<dd class="btns">
														<a href="#" class="ticket" target="_blank">
															选座购票
														</a>
													</dd>
												</dl>
											</li><?php endforeach; endif; else: echo "" ;endif; ?>
										</ul>
									</div>
								</div>
								<div style="clear:both"></div>
								<div class="moviemore" id="hotplayMoreDiv" style="display:none;">
									<div class="otherfilm">
										<ul>
											<?php if(is_array($rows)): $i = 0; $__LIST__ = array_slice($rows,6,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr): $mod = ($i % 2 );++$i;?><li>
												<a class="picbox" href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($arr['movie_id']); ?>" target="_blank" alt="<?php echo ($arr['movie_name']); ?>">
													<img src="/mtime/Public/<?php echo ($arr['movie_pic']); ?>" width="100" height="140">
													<?php if(empty($arr['movie_graded'])): ?><span></span>
													<?php else: ?>
														<span class="score"><?php echo ($arr['movie_graded']); ?></span><?php endif; ?>	
													<?php if($arr['movie_hot'] == 1): ?><span class="icon_hot"></span><?php endif; ?>
													<span class="banben">
														<?php if($arr['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
														<?php if($arr['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
														<?php if($arr['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
														<?php if($arr['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
														
													</span>
												</a>
												<dl>
													<dt>
														<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($arr['movie_id']); ?>" target="_blank"><?php echo ($arr['movie_name']); ?></a>
													</dt>
													<dd class="t">
														<?php if(empty($arr['movie_time'])): ?><span></span>
														<?php else: ?>
															<span><?php echo ($arr['movie_time']); ?>分钟-</span><?php endif; ?>
														<?php if(is_array($arr['type'])): $i = 0; $__LIST__ = array_slice($arr['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ar): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($ar['type_name']); ?></a>
															<span style="padding-right:5px;">/</span><?php endforeach; endif; else: echo "" ;endif; ?>
													</dd>
													<dd>
														<?php if(empty($arr['yy'])): ?>0
														<?php else: ?>
														 <?php echo ($arr['yy']); endif; ?>
														家影院上映
														<?php if(empty($arr['cz'])): ?>0
														<?php else: ?>
														 <?php echo ($arr['cz']); endif; ?>
														场
													</dd>
													<dd class="hot">
														<span class="ico_dot"></span>
														<span><?php echo ($arr['movie_resume']); ?></span>
													</dd>
													<dd class="btns">
														<a href="#" class="ticket" target="_blank">
															选座购票
														</a>
													</dd>
												</dl>
											</li><?php endforeach; endif; else: echo "" ;endif; ?>
										</ul>
									</div>
								</div>
								<div style="clear:both"></div>
								<div class="i_more">
									<a href="javascript:;" id="hotplayMoreLink">
										<span class="xila"></span>
										<i>更多</i>
									</a>
								</div>
							</div>
							
							<div style="display:none;">
								<div class="moviemore">
									<div class="otherfilm">
										<ul>
											<?php if(is_array($arrd)): foreach($arrd as $key=>$ard): ?><li>
												<a class="picbox" href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($ard['movie_id']); ?>" target="_blank" alt="<?php echo ($ard['movie_name']); ?>">
													<img src="/mtime/Public/<?php echo ($ard['movie_pic']); ?>" width="100" height="140">
													<?php if(empty($ard['movie_graded'])): ?><span></span>
													<?php else: ?>
														<span class="score"><?php echo ($ard['movie_graded']); ?></span><?php endif; ?>	
													<?php if($ard['movie_hot'] == 1): ?><span class="icon_hot"></span><?php endif; ?>
													<span class="banben">
														<?php if($ard['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
														<?php if($ard['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
														<?php if($ard['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
														<?php if($ard['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
														
													</span>
												</a>
												<dl>
													<dt>
														<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($ard['movie_id']); ?>" target="_blank"><?php echo ($ard['movie_name']); ?></a>
													</dt>
													<dd class="t">
														<?php if(empty($ard['movie_time'])): ?><span></span>
														<?php else: ?>
															<span><?php echo ($ard['movie_time']); ?>分钟-</span><?php endif; ?>
														<?php if(is_array($ard['type'])): $i = 0; $__LIST__ = array_slice($ard['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rd): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($rd['type_name']); ?></a>
															<span style="padding-right:5px;">/</span><?php endforeach; endif; else: echo "" ;endif; ?>
													</dd>
													<dd>
														<?php if(empty($ard['yy'])): ?>0
														<?php else: ?>
														 <?php echo ($ard['yy']); endif; ?>
														家影院上映
														<?php if(empty($ard['cz'])): ?>0
														<?php else: ?>
														 <?php echo ($ard['cz']); endif; ?>
														场
													</dd>
													<dd class="hot">
														<span class="ico_dot"></span>
														<span><?php echo ($ard['movie_resume']); ?></span>
													</dd>
													<dd class="btns">
														<a href="#" class="ticket" target="_blank">
															选座购票
														</a>
													</dd>
												</dl>
											</li><?php endforeach; endif; ?>
										</ul>
									</div>
								</div>
							</div>
							
							<div style="display:none;">
								<div class="moviemore">
									<div class="otherfilm">
										<ul>
											<?php if(is_array($arrm)): foreach($arrm as $key=>$arm): ?><li>
												<a class="picbox" href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($arm['movie_id']); ?>" target="_blank" alt="<?php echo ($arm['movie_name']); ?>">
													<img src="/mtime/Public/<?php echo ($arm['movie_pic']); ?>" width="100" height="140">
													<?php if(empty($arm['movie_graded'])): ?><span></span>
													<?php else: ?>
														<span class="score"><?php echo ($arm['movie_graded']); ?></span><?php endif; ?>	
													<?php if($arm['movie_hot'] == 1): ?><span class="icon_hot"></span><?php endif; ?>
													<span class="banben">
														<?php if($arm['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
														<?php if($arm['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
														<?php if($arm['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
														<?php if($arm['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
														
													</span>
												</a>
												<dl>
													<dt>
														<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($arm['movie_id']); ?>" target="_blank"><?php echo ($arm['movie_name']); ?></a>
													</dt>
													<dd class="t">
														<?php if(empty($arm['movie_time'])): ?><span></span>
														<?php else: ?>
															<span><?php echo ($arm['movie_time']); ?>分钟-</span><?php endif; ?>
														<?php if(is_array($arm['type'])): $i = 0; $__LIST__ = array_slice($arm['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rm): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($rm['type_name']); ?></a>
															<span style="padding-right:5px;">/</span><?php endforeach; endif; else: echo "" ;endif; ?>
													</dd>
													<dd>
														<?php if(empty($arm['yy'])): ?>0
														<?php else: ?>
														 <?php echo ($arm['yy']); endif; ?>
														家影院上映
														<?php if(empty($arm['cz'])): ?>0
														<?php else: ?>
														 <?php echo ($arm['cz']); endif; ?>
														场
													</dd>
													<dd class="hot">
														<span class="ico_dot"></span>
														<span><?php echo ($arm['movie_resume']); ?></span>
													</dd>
													<dd class="btns">
														<a href="#" class="ticket" target="_blank">
															选座购票
														</a>
													</dd>
												</dl>
											</li><?php endforeach; endif; ?>
										</ul>
									</div>
								</div>
							</div>
							
							<div style="display:none;">
								<div class="moviemore">
									<div class="otherfilm">
										<ul>
											<?php if(is_array($arrdz)): foreach($arrdz as $key=>$ardz): if(is_array($ardz['film'])): foreach($ardz['film'] as $key=>$adz): ?><li>
													<a class="picbox" href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($adz['movie_id']); ?>" target="_blank" alt="<?php echo ($adz['movie_name']); ?>">
														<img src="/mtime/Public/<?php echo ($adz['movie_pic']); ?>" width="100" height="140">
														<?php if(empty($adz['movie_graded'])): ?><span></span>
														<?php else: ?>
															<span class="score"><?php echo ($adz['movie_graded']); ?></span><?php endif; ?>	
														<?php if($adz['movie_hot'] == 1): ?><span class="icon_hot"></span><?php endif; ?>
														<span class="banben">
															<?php if($adz['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
															<?php if($adz['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
															<?php if($adz['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
															<?php if($adz['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
															
														</span>
													</a>
													<dl>
														<dt>
															<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($adz['movie_id']); ?>" target="_blank"><?php echo ($adz['movie_name']); ?></a>
														</dt>
														<dd class="t">
															<?php if(empty($adz['movie_time'])): ?><span></span>
															<?php else: ?>
																<span><?php echo ($adz['movie_time']); ?>分钟-</span><?php endif; ?>
															<?php if(is_array($adz['type'])): $i = 0; $__LIST__ = array_slice($adz['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rdz): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($rdz['type_name']); ?></a>
																<span style="padding-right:5px;">/</span><?php endforeach; endif; else: echo "" ;endif; ?>
														</dd>
														<dd>
															<?php if(empty($adz['yy'])): ?>0
															<?php else: ?>
															 <?php echo ($adz['yy']); endif; ?>
															家影院上映
															<?php if(empty($adz['cz'])): ?>0
															<?php else: ?>
															 <?php echo ($adz['cz']); endif; ?>
															场
														</dd>
														<dd class="hot">
															<span class="ico_dot"></span>
															<span><?php echo ($adz['movie_resume']); ?></span>
														</dd>
														<dd class="btns">
															<a href="#" class="ticket" target="_blank">
																选座购票
															</a>
														</dd>
													</dl>
												</li><?php endforeach; endif; endforeach; endif; ?>
										</ul>
									</div>
								</div>
							</div>
							
							<div style="display:none;">
								<div class="moviemore">
									<div class="otherfilm">
										<ul>
											<?php if(is_array($arrxj)): foreach($arrxj as $key=>$arxj): if(is_array($arxj['film'])): foreach($arxj['film'] as $key=>$axj): ?><li>
													<a class="picbox" href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($axj['movie_id']); ?>" target="_blank" alt="<?php echo ($axj['movie_name']); ?>">
														<img src="/mtime/Public/<?php echo ($axj['movie_pic']); ?>" width="100" height="140">
														<?php if(empty($axj['movie_graded'])): ?><span></span>
														<?php else: ?>
															<span class="score"><?php echo ($axj['movie_graded']); ?></span><?php endif; ?>	
														<?php if($axj['movie_hot'] == 1): ?><span class="icon_hot"></span><?php endif; ?>
														<span class="banben">
															<?php if($axj['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
															<?php if($axj['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
															<?php if($axj['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
															<?php if($axj['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
															
														</span>
													</a>
													<dl>
														<dt>
															<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($axj['movie_id']); ?>" target="_blank"><?php echo ($axj['movie_name']); ?></a>
														</dt>
														<dd class="t">
															<?php if(empty($axj['movie_time'])): ?><span></span>
															<?php else: ?>
																<span><?php echo ($axj['movie_time']); ?>分钟-</span><?php endif; ?>
															<?php if(is_array($axj['type'])): $i = 0; $__LIST__ = array_slice($axj['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rxj): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($rxj['type_name']); ?></a>
																<span style="padding-right:5px;">/</span><?php endforeach; endif; else: echo "" ;endif; ?>
														</dd>
														<dd>
															<?php if(empty($axj['yy'])): ?>0
															<?php else: ?>
															 <?php echo ($axj['yy']); endif; ?>
															家影院上映
															<?php if(empty($axj['cz'])): ?>0
															<?php else: ?>
															 <?php echo ($axj['cz']); endif; ?>
															场
														</dd>
														<dd class="hot">
															<span class="ico_dot"></span>
															<span><?php echo ($axj['movie_resume']); ?></span>
														</dd>
														<dd class="btns">
															<a href="#" class="ticket" target="_blank">
																选座购票
															</a>
														</dd>
													</dl>
												</li><?php endforeach; endif; endforeach; endif; ?>
										</ul>
									</div>
								</div>
							</div>
							
							<div style="display:none;">
								<div class="moviemore">
									<div class="otherfilm">
										<ul>
											<?php if(is_array($arrdh)): foreach($arrdh as $key=>$ardh): if(is_array($ardh['film'])): foreach($ardh['film'] as $key=>$adh): ?><li>
													<a class="picbox" href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($adh['movie_id']); ?>" target="_blank" alt="<?php echo ($adh['movie_name']); ?>">
														<img src="/mtime/Public/<?php echo ($adh['movie_pic']); ?>" width="100" height="140">
														<?php if(empty($adh['movie_graded'])): ?><span></span>
														<?php else: ?>
															<span class="score"><?php echo ($adh['movie_graded']); ?></span><?php endif; ?>	
														<?php if($adh['movie_hot'] == 1): ?><span class="icon_hot"></span><?php endif; ?>
														<span class="banben">
															<?php if($adh['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
															<?php if($adh['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
															<?php if($adh['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
															<?php if($adh['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
															
														</span>
													</a>
													<dl>
														<dt>
															<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($adh['movie_id']); ?>" target="_blank"><?php echo ($adh['movie_name']); ?></a>
														</dt>
														<dd class="t">
															<?php if(empty($adh['movie_time'])): ?><span></span>
															<?php else: ?>
																<span><?php echo ($adh['movie_time']); ?>分钟-</span><?php endif; ?>
															<?php if(is_array($adh['type'])): $i = 0; $__LIST__ = array_slice($adh['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rdh): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($rdh['type_name']); ?></a>
																<span style="padding-right:5px;">/</span><?php endforeach; endif; else: echo "" ;endif; ?>
														</dd>
														<dd>
															<?php if(empty($adh['yy'])): ?>0
															<?php else: ?>
															 <?php echo ($adh['yy']); endif; ?>
															家影院上映
															<?php if(empty($adh['cz'])): ?>0
															<?php else: ?>
															 <?php echo ($adh['cz']); endif; ?>
															场
														</dd>
														<dd class="hot">
															<span class="ico_dot"></span>
															<span><?php echo ($adh['movie_resume']); ?></span>
														</dd>
														<dd class="btns">
															<a href="#" class="ticket" target="_blank">
																选座购票
															</a>
														</dd>
													</dl>
												</li><?php endforeach; endif; endforeach; endif; ?>
										</ul>
									</div>
								</div>
							</div>
							
							<div style="display:none;">
								<div class="moviemore">
									<div class="otherfilm">
										<ul>
											<?php if(is_array($arrmx)): foreach($arrmx as $key=>$armx): if(is_array($armx['film'])): foreach($armx['film'] as $key=>$amx): ?><li>
													<a class="picbox" href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($amx['movie_id']); ?>" target="_blank" alt="<?php echo ($amx['movie_name']); ?>">
														<img src="/mtime/Public/<?php echo ($amx['movie_pic']); ?>" width="100" height="140">
														<?php if(empty($amx['movie_graded'])): ?><span></span>
														<?php else: ?>
															<span class="score"><?php echo ($amx['movie_graded']); ?></span><?php endif; ?>	
														<?php if($amx['movie_hot'] == 1): ?><span class="icon_hot"></span><?php endif; ?>
														<span class="banben">
															<?php if($amx['movie_3d'] == 1): ?><span class="icon_3d"></span><?php endif; ?>
															<?php if($amx['movie_imax3d'] == 1): ?><span class="icon_3dimax"></span><?php endif; ?>
															<?php if($amx['movie_imax'] == 1): ?><span class="icon_imax"></span><?php endif; ?>
															<?php if($amx['movie_screen'] == 1): ?><span class="icon_dmax"></span><?php endif; ?>
															
														</span>
													</a>
													<dl>
														<dt>
															<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($amx['movie_id']); ?>" target="_blank"><?php echo ($amx['movie_name']); ?></a>
														</dt>
														<dd class="t">
															<?php if(empty($amx['movie_time'])): ?><span></span>
															<?php else: ?>
																<span><?php echo ($amx['movie_time']); ?>分钟-</span><?php endif; ?>
															<?php if(is_array($amx['type'])): $i = 0; $__LIST__ = array_slice($amx['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rmx): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($rmx['type_name']); ?></a>
																<span style="padding-right:5px;">/</span><?php endforeach; endif; else: echo "" ;endif; ?>
														</dd>
														<dd>
															<?php if(empty($amx['yy'])): ?>0
															<?php else: ?>
															 <?php echo ($amx['yy']); endif; ?>
															家影院上映
															<?php if(empty($amx['cz'])): ?>0
															<?php else: ?>
															 <?php echo ($amx['cz']); endif; ?>
															场
														</dd>
														<dd class="hot">
															<span class="ico_dot"></span>
															<span><?php echo ($amx['movie_resume']); ?></span>
														</dd>
														<dd class="btns">
															<a href="#" class="ticket" target="_blank">
																选座购票
															</a>
														</dd>
													</dl>
												</li><?php endforeach; endif; endforeach; endif; ?>
										</ul>
									</div>
								</div>
							</div>
							
						</div>
						<div style="clear:both"></div>
					</div>
				</div>
				
				<div class="upcoming">
					<div class="title">
						<h2>即将上映 －<?php echo (date("m",NOW_TIME)); ?>月<?php echo (date("d",$t)); ?>日~12月31日</h2>
					</div>
					<div class="i_swwantlist">
						<div class="friend">
							<div class="mr_frbox">
								<img class="mr_frBtnL prev" src="/mtime/Public/Home/images/mfrl.gif" />
								<div class="mr_frUl">
									<ul id="mr_fu">
										<?php if(is_array($scrolls)): foreach($scrolls as $key=>$scroll): ?><li>
											<span class="dot">&nbsp;</span>
											<span class="day">
												<strong><?php echo (date("m",$scroll['movie_start'])); ?>月<?php echo (date("d",$scroll['movie_start'])); ?>日</strong>
												<span>即将上映</span>
											</span>
											<div class="i_wantmovie">
												<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($scroll['movie_id']); ?>" class="img" target="_blank">
													<img src="/mtime/Public/<?php echo ($scroll['movie_pic']); ?>" width="100" height="150" alt="<?php echo ($scroll['movie_name']); ?>/<?php echo ($scroll['movie_ename']); ?>(<?php echo (date('Y',$scroll['movie_start'])); ?>)">
												</a>
												<div class="tex">
													<h3>
														<a href="/mtime/index.php/Home/Movie/movieindex/id/<?php echo ($scroll['movie_id']); ?>" target="_blank"><?php echo ($scroll['movie_name']); ?></a>
													</h3>
													<p class="s">
														<span> 1148人想看 - </span>
														<?php if(is_array($scroll['type'])): $i = 0; $__LIST__ = array_slice($scroll['type'],0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$scr): $mod = ($i % 2 );++$i;?><a href="#" target="_blank"><?php echo ($scr['type_name']); ?></a>
															<span>/</span><?php endforeach; endif; else: echo "" ;endif; ?>
													</p>
													<?php if(empty($scroll['dir_name'][0]['actor_name'])): else: ?>
														<p class="i_wbr">
															<b>导演：</b>
															<a href="#" target="_blank"><?php echo ($scroll['dir_name'][0]['actor_name']); ?></a>
														</p><?php endif; ?>
													<p>
														<a href="#" target="_blank">
															<span>预告片</span>
															<span class="icon_ivideo"></span>
														</a>
													</p>
												</div>
											</div>
										</li><?php endforeach; endif; ?>
									</ul>
								</div>
								<img class="mr_frBtnR next" src="/mtime/Public/Home/images/mfrr.gif" />
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="filmticket">
					<div class="title">
						<h2 class="fl">
							<span>长治</span>
							<span class="num"><?php echo ($cnum); ?></span>
							<span>家影院</span>
						</h2>
						<div class="othermenu">
							<ul style="list-style:none;display:block;">
								<li id="areaAndSubwayFilter" class="first">
									<span style="padding-right:20px;">商圈及地铁沿线 </span>
									<span class="ico_f_jiao">&nbsp;</span>
								</li>
								<li id="featureFilter">
									<span class="ico_radio on" v="1"></span>
									<label class="v_m" v="1">购票</label>
									<span class="ico_radio notcheck" v="2"></span>
									<label class="v_m notcheck" v="2">停车场</label>
									<span class="ico_radio" v="3"></span>
									<label class="v_m" v="3">3D</label>
									<span class="ico_radio notcheck" v="4"></span>
									<label class="v_m notcheck" v="4">IMAX</label>
								</li>
							</ul>
							<div class="citysearch">
								<input type="text" class="text" id="inputCinameKeyword" placeholder="搜索影院">
								<input type="button" class="btn" id="buttonCinameKeyword">
							</div>
						</div>
					</div>
					
					<div class="filmticketbox">
						<div class="main fl">
							<div class="movietxt">
								<ul id="cinemaListRegion">
								<?php if(is_array($crows)): $i = 0; $__LIST__ = $crows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$crow): $mod = ($i % 2 );++$i;?><li>
										<a href="/mtime/index.php/Home/Cinema/index/cid/<?php echo ($crow['cinema_id']); ?>" title="<?php echo ($crow['cinema_name']); ?>" class="picbox loadtempimg">
											<img src="/mtime/Public/<?php echo ($crow['cinema_logo']); ?>" width="102" height="63" alt="<?php echo ($crow['cinema_name']); ?>">
										</a>
										<dl class="movieinfobox">
											<dt>
												<a href="/mtime/index.php/Home/Cinema/index/cid/<?php echo ($crow['cinema_id']); ?>" target="_blank" class="htitle"><?php echo ($crow['cinema_name']); ?></a>
											</dt>
											<dd class="infotxt filmicon">
												<p><?php echo ($crow['cinema_address']); ?></p>
												<div class="moretool">
													<?php if($crow['cinema_3d'] == 1): ?><span class="ico_c_f02"></span><?php endif; ?>
													<?php if($crow['cinema_vip'] == 1): ?><span class="ico_c_f03"></span><?php endif; ?>
													<?php if($crow['cinema_qlz'] == 1): ?><span class="ico_c_f15"></span><?php endif; ?>
													<?php if($crow['cinema_myj'] == 1): ?><span class="ico_c_f09"></span>免押金<?php endif; ?>
													<?php if($crow['cinema_stop'] == 1): ?><span class="ico_c_f14"></span>可停车<?php endif; ?>
													<?php if($crow['cinema_qpj'] == 1): ?><span class="ico_c_f25"></span>取票机<?php endif; ?>
													<?php if($crow['cinema_sk'] == 1): ?><span class="ico_c_f12"></span>刷卡<?php endif; ?>
													<?php if($crow['cinema_wifi'] == 1): ?><span class="ico_c_f13"></span>WIFI<?php endif; ?>
												</div>
											</dd>
										</dl>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
									
								</ul>
							</div>
						</div>
						
						<div class="aside fr">
							<a href="#"><img src="/mtime/Public/Home/images/xhrcdb.jpg" target="_blank"></a>
							<a href="#"><img src="/mtime/Public/Home/images/xhrgz.jpg" target="_blank"></a>
						</div>
					</div>
				</div>
				
				<div class="appdown">
					<a href="http://feature.mtime.com/mobile/" target="_blank">
						<img src="/mtime/Public/Home/images/appdown.jpg">
					</a>
				</div>
				
				<div class="filmtip">
					<div class="filmtipbox">
						<ul>
							<li class="first">
								<a href="#" target="_blank">
									<div class="moviecard">
										<div class="cardbg"></div>
										<div class="cardbg1"></div>
										<dl>
											<dt>时光电影卡：</dt>
											<dd>尊享3－6折优惠，支持在线选座</dd>
											<dd>企业个性化定制</dd>
											<dd>商务馈赠，节日送礼，员工福利</dd>
										</dl>
									</div>
								</a>
							</li>
							
							<li>
								<div class="ticketoline">
									<h2>如何在线选座购票：</h2>
									<p></p>
								</div>
							</li>
							
							<li class="last telbox">
								<span class="fr tel">
									<b>客服电话：</b>
									<span>4006-118-118</span>
								</span>
								<b>影院商务合作：</b>
								<a href="#" target="_blank">影院开业</a>
								<span class="mline">|</span>
								<a href="#" target="_blank">影讯合作</a>
								<span class="mline">|</span>
								<a href="#" target="_blank">在线购票</a>
								<span class="mline">|</span>
								<a href="http://theater.mtime.com/report/1/" target="_blank" class="link_green">联系时光网</a>
							</li>
						</ul>
					</div>
				</div>
				
				
			</div>
			<div style="clear:both"></div>
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
			<div class="mtimebar" style="display:none;">
				<div class="searchbar" title="搜索"></div>
				<div class="topbar" title="回到顶部"></div>
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
			delayTime:1500,
			autoPlay:true,
			autoPage:true, 
			trigger:"click" 
		});
		
		$(".mr_frbox").slide({
			titCell: "",
			mainCell: ".mr_frUl ul",
			autoPage: true,
			effect: "left",
			autoPlay: false,
			pnLoop:"false",
			delayTime:"500",
			scroll:2,
			vis: 4
		});
	
	
	
	
	
	
	
	
	</script>
</html>