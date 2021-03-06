<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>添加分类</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/mtime/Public/Bootstrap/css/bootstrap.min.css">
		<script src="/mtime/Public/Bootstrap/js/jquery-1.11.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/bootstrap.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/holder.min.js"></script>
		<script src="/mtime/Public/Bootstrap/js/application.js"></script>
		
	</head>
	<body>
		
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">
				<p style="font-size:16px;">添加新电影<p>
			</div>
			<div class="panel-body">
				<form action="/mtime/index.php/Admin/Movie/add" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label for="chn" class="col-md-2">电影名称:</label>
						<div class="col-md-4">
							<input type="text" name="movie_name" class="form-control" id="chn" value="" placeholder="请输入电影名称">
						</div>
					</div>
					<div class="form-group">
						<label for="enn" class="col-md-2">英文名称:</label>
						<div class="col-md-4">
							<input type="text" name="movie_ename" class="form-control" id="enn" value="" placeholder="请输入电影英文名称">
						</div>
					</div>
					<div class="form-group">
						<label for="mt" class="col-md-2">电影时长:</label>
						<div class="col-md-4">
							<input type="text" name="movie_time" class="form-control" id="mt" value="" placeholder="请输入电影时长">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影分类:</label>
						<div class="col-md-8">
							<ul style="list-style:none;padding:0px;">
							<?php if(is_array($t)): foreach($t as $key=>$type): ?><li style="display:inline-block;margin-right:20px;" id="">
									<input type="checkbox" name="movie_type[]"  value="<?php echo ($type['type_id']); ?>">
									<span style="padding-left:10px;"><?php echo ($type['type_name']); ?></span>
								</li><?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
					<div class="form-group">
						<label for="mc" class="col-md-2">发行公司:</label>
						<div class="col-md-4">
							<input type="text" name="movie_company" class="form-control" id="mc" value="" placeholder="请输入电影发行公司">
						</div>
					</div>
					<div class="form-group">
						<label for="mcon" class="col-md-2">发行国家:</label>
						<div class="col-md-4">
							<input type="text" name="movie_country" class="form-control" id="mcon" value="" placeholder="请输入电影发行国家">
						</div>
					</div>
					<div class="form-group">
						<label for="mtime" class="col-md-2">上映时间:</label>
						<div class="col-md-4">
							<input type="date" name="movie_start" class="form-control" id="mtime">
						</div>
					</div>
					<div class="form-group">
						<label for="mpic" class="col-md-2">电影封面:</label>
						<div class="col-md-4">
							<input type="file" name="movie_pic" class="form-control" id="mpic">
						</div>
					</div>
					<div class="form-group">
						<label for="mr" class="col-md-2">电影简述:</label>
						<div class="col-md-4">
							<input type="text" name="movie_resume" class="form-control" id="mr" placeholder="请输入电影的简述">
						</div>
					</div>
					<div class="form-group">
						<label for="mg" class="col-md-2">电影评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_graded" class="form-control" id="mg" value="" placeholder="用户对电影的评分">
						</div>
					</div>
					<div class="form-group">
						<label for="mo" class="col-md-2">电影票房:</label>
						<div class="col-md-4">
							<input type="text" name="movie_office" class="form-control" id="mo" value="" placeholder="电影票房">
						</div>
					</div>
					<div class="form-group">
						<label for="mother" class="col-md-2">电影其他片名:</label>
						<div class="col-md-4">
							<input type="text" name="movie_othername" class="form-control" id="mother" value="" placeholder="该电影其他片名">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影票音乐评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_music" class="form-control" value="" placeholder="对该电影的音乐评分（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影片画面评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_hm" class="form-control" value="" placeholder="对该电影的画面评分（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">影片导演评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_dy" class="form-control"  value="" placeholder="对该电影的导演评分（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-md-2">影票故事情节评分:</label>
						<div class="col-md-4">
							<input type="text" name="movie_gsqj" class="form-control"  value="" placeholder="对该电影的故事情节评分（百分制）">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否热映:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_hot" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_hot" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否有IMAX:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_imax" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_imax" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否有3D:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_3d" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_3d" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否有IMAX3D:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_imax3d" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_imax3d" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否巨屏:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_screen" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_screen" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否超前预售:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_presell" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_presell" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2">电影是否主页推荐:</label>
						<div class="col-md-1">
							<input type="radio" name="movie_big" value="1"><span style="padding-left:10px;">是</span>
						</div>
						<div class="col-md-1">
							<input type="radio" name="movie_big" value="0" checked><span style="padding-left:10px;">否</span>
						</div>
					</div>
					
					
					
					<div class="form-group">
						<div class="col-md-1 col-md-offset-2">
							<button type="submit" class="btn btn-info">添加</button>
						</div>
						<div class="col-md-1 col-md-offset-1">
							<button type="button" class="btn btn-danger" id="fh">返回</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

		
	</body>
		
	<script>
		$("#fh").click(function(){
			window.location.href="<?php echo U('movielist');?>";
		});
	</script>

</html>